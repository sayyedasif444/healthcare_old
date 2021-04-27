<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\blog_image;
use App\Models\blog_contact;
use DB;

class blogsController extends Controller
{
    public function index(){
        return view('admin.manage-blogs');
    }
    public function addBlog(Request $request){
        DB::beginTransaction();
        try {
            $evt = new blog;
            $evt->timestamps = false;
            $evt->blog_desc = $request->get('cont');
            $evt->blog_title = strtolower($request->get('title'));
            $evt->blog_img_type = $request->get('imgstat');
            $evt->meta_tag = $request->get('tag');
            $evt->meta_desc = $request->get('mdesc');
            $evt->blog_date = date("Y-m-d H:i:s");
            $slug = str_replace(' ', '-', strtolower($request->get('title')));
            $rows = DB::SELECT(DB::raw('SELECT blog_slug FROM blogs where blog_title = "'. $request->get('title').'"'));
            if(count($rows) != 0){
                $slug = $slug . '-' . sprintf("%02d", (count($rows)+1));
            }
            $evt->blog_slug = $slug;
            if($request->get('imgstat')=='video'){
                $evt->blog_video_link = $request->get('video');
                $evt->save();
                $id = $evt->blog_id;
            }
            else{
                if($evt->save()){
                    $id = $evt->blog_id;
                    if($request->get('imgstat')=='image'){
                        //return($request->file('image'));
                        if($request->file('image') != ''){
                            $file = $request->file('image')->path();
                            $fileext = $request->file('image')->extension();
                            $filetostore = time() + rand(10,100).time().'.'.$fileext;
                            $path = $request->file('image')->move('storage/uploads/', $filetostore);
                            $img = new blog_image;
                            $img->timestamps = false;
                            $img->image_path = $filetostore;
                            $img->blog_id = $id;
                            if($img->save()){
                                DB::commit();
                            }
                        }else{
                            DB::commit();
                        }

                    }else{
                        $inserts = [];
                        for($i=0; $i<$request->get('count'); $i++){
                            if($request->file('file'.$i) != ''){
                                $file = $request->file('file'.$i)->path();
                                $fileext = $request->file('file'.$i)->extension();
                                $filetostore = time() + rand(10,100).time().'.'.$fileext;
                                $path = $request->file('file'.$i)->move('storage/uploads/', $filetostore);
                                $inserts[] = [
                                    'image_path' => $filetostore,
                                    'blog_id' => $id,
                                ];
                            }
                        }
                        if(DB::table('blog_images')->insert($inserts)){
                            DB::commit();
                        }
                    }
                }

            }
            return response()->json([
                'id' => $id,
                'statuscode' => 200,
                'message' => "blog Created Successfully."
            ], 200);
        }catch (\Exception $e) {
            DB::rollback();
            //return $e;
            return response()->json([
                'statuscode' => 500,
                'message' => "Something went wrong."
            ], 200);
        }
    }
    public function blogDetails(){
        $blogs = blog::all();
        return response()->json([
            'data' => $blogs,
            'statuscode' => 200,
            'message' => "success."
        ], 200);
    }
    public function deleteBlog(Request $request){
       // return $request->get('blog_id');
        $evnt = blog::find($request->get('blog_id'));
        if($evnt->delete()){
            return response()->json([
                'data' => $evnt,
                'statuscode' => 200,
                'message' => "blog Deleted Successfully."
            ], 200);
        }else{
            return response()->json([
                'statuscode' => 500,
                'message' => "Something went wrong."
            ], 200);
        }

    }
    public function editBlogData($id){
        $blog = blog::find($id);
        return view('admin.edit-blogs')->with(['blog' => $blog]);
    }
    public function editBlogs(Request $request){
        DB::beginTransaction();
        try {
            $evt = blog::find($request->get('id'));
            $evt->timestamps = false;
            $evt->blog_desc = $request->get('cont');
            $evt->blog_title = strtolower($request->get('title'));
            $evt->meta_tag = $request->get('tag');
            $evt->meta_desc = $request->get('mdesc');

            if($request->get('imgstat')){
                if($request->get('imgstat')=='video'){
                    $evt->blog_video_link = $request->get('video');
                    $evt->save();
                    $id = $request->get('id');
                }
                else{
                    if($evt->save()){
                        $id = $request->get('id');
                        DB::table('blog_images')->where('blog_id', $id)->delete();

                        if($request->get('imgstat')=='image'){
                            //return($request->file('image'));
                            if($request->file('image') != ''){
                                $file = $request->file('image')->path();
                                $fileext = $request->file('image')->extension();
                                $filetostore = time() + rand(10,100).time().'.'.$fileext;
                                $path = $request->file('image')->move('storage/uploads/', $filetostore);
                                $img = new blog_image;
                                $img->timestamps = false;
                                $img->image_path = $filetostore;
                                $img->blog_id = $id;
                                if($img->save()){
                                    DB::commit();
                                }
                            }else{
                                DB::commit();
                            }

                        }else{
                            $inserts = [];
                            for($i=0; $i<$request->get('count'); $i++){
                                if($request->file('file'.$i) != ''){
                                    $file = $request->file('file'.$i)->path();
                                    $fileext = $request->file('file'.$i)->extension();
                                    $filetostore = time() + rand(10,100).time().'.'.$fileext;
                                    $path = $request->file('file'.$i)->move('storage/uploads/', $filetostore);
                                    $inserts[] = [
                                        'image_path' => $filetostore,
                                        'blog_id' => $id,
                                    ];
                                }
                            }
                            if(DB::table('blog_images')->insert($inserts)){
                                DB::commit();
                            }
                        }
                    }
                }
            }else{
                $evt->save();
                DB::commit();
            }

            return response()->json([
                'statuscode' => 200,
                'message' => "blog Created Successfully."
            ], 200);
        }catch (\Exception $e) {
            DB::rollback();
            return $e;
            return response()->json([
                'statuscode' => 500,
                'message' => "Something went wrong."
            ], 200);
        }
    }
    public function blogResponse(Request $request){

        $blogs = blog_contact::where('blog_id', $request->get('id'))->get();
        return response()->json([
            'data' => $blogs,
            'statuscode' => 200,
            'message' => "success."
        ], 200);
    }
    public function deleteBlogcomment(Request $request){
        // return $request->get('blog_id');
         $evnt = blog_contact::find($request->get('blog_id'));
         if($evnt->delete()){
             return response()->json([
                 'data' => $evnt,
                 'statuscode' => 200,
                 'message' => "Blog Comment Deleted Successfully."
             ], 200);
         }else{
             return response()->json([
                 'statuscode' => 500,
                 'message' => "Something went wrong."
             ], 200);
         }

    }
}

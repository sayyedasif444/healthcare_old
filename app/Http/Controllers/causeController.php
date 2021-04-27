<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cause;
use App\Models\cause_image;
use App\Models\cause_contact;
use DB;

class causeController extends Controller
{
    public function index(){
        return view('admin.manage-causes');
    }
    public function addCause(Request $request){
        DB::beginTransaction();
        try {
            $evt = new cause;
            $evt->timestamps = false;
            $evt->cause_desc = $request->get('cont');
            $evt->cause_title = strtolower($request->get('title'));
            $slug = str_replace(' ', '-', strtolower($request->get('title')));
            $rows = DB::SELECT(DB::raw('SELECT cause_slug FROM causes where cause_title = "'. $request->get('title').'"'));
            if(count($rows) != 0){
                $slug = $slug . '-' . sprintf("%02d", (count($rows)+1));
            }
            $evt->cause_slug = $slug;

            if($evt->save()){
                $id = $evt->cause_id;
                if($request->get('imgstat')=='image'){
                    //return($request->file('image'));
                    if($request->file('image') != ''){
                        $file = $request->file('image')->path();
                        $fileext = $request->file('image')->extension();
                        $filetostore = time() + rand(10,100).time().'.'.$fileext;
                        $path = $request->file('image')->move('storage/uploads/', $filetostore);
                        $img = new cause_image;
                        $img->timestamps = false;
                        $img->image_path = $filetostore;
                        $img->cause_id = $id;
                        if($img->save()){
                            DB::commit();
                        }
                    }else{
                        DB::commit();
                    }
                }
            }

            return response()->json([
                'id' => $id,
                'statuscode' => 200,
                'message' => "cause Created Successfully."
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
    public function causeDetails(){
        $causes = cause::all();
        return response()->json([
            'data' => $causes,
            'statuscode' => 200,
            'message' => "success."
        ], 200);
    }
    public function deleteCause(Request $request){
       // return $request->get('cause_id');
        $evnt = cause::find($request->get('cause_id'));
        if($evnt->delete()){
            return response()->json([
                'data' => $evnt,
                'statuscode' => 200,
                'message' => "cause Deleted Successfully."
            ], 200);
        }else{
            return response()->json([
                'statuscode' => 500,
                'message' => "Something went wrong."
            ], 200);
        }

    }
    public function editCauseData($id){
        $cause = cause::find($id);
        return view('admin.edit-causes')->with(['cause' => $cause]);
    }
    public function editCauses(Request $request){
        DB::beginTransaction();
        try {
            $evt = cause::find($request->get('id'));
            $evt->timestamps = false;
            $evt->cause_desc = $request->get('cont');
            $evt->cause_title = strtolower($request->get('title'));

            if($request->get('imgstat')){
                if($evt->save()){
                    $id = $request->get('id');
                    DB::table('cause_images')->where('cause_id', $id)->delete();

                    if($request->get('imgstat')=='image'){
                        //return($request->file('image'));
                        if($request->file('image') != ''){
                            $file = $request->file('image')->path();
                            $fileext = $request->file('image')->extension();
                            $filetostore = time() + rand(10,100).time().'.'.$fileext;
                            $path = $request->file('image')->move('storage/uploads/', $filetostore);
                            $img = new cause_image;
                            $img->timestamps = false;
                            $img->image_path = $filetostore;
                            $img->cause_id = $id;
                            if($img->save()){
                                DB::commit();
                            }
                        }else{
                            DB::commit();
                        }

                    }
                }
            }else{
                $evt->save();
                DB::commit();
            }

            return response()->json([
                'statuscode' => 200,
                'message' => "cause Created Successfully."
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
    public function causeResponse(Request $request){

        $causes = cause_contact::where('cause_id', $request->get('id'))->get();
        return response()->json([
            'data' => $causes,
            'statuscode' => 200,
            'message' => "success."
        ], 200);
    }
    public function deleteCausecomment(Request $request){
        // return $request->get('cause_id');
         $evnt = cause_contact::find($request->get('cause_id'));
         if($evnt->delete()){
             return response()->json([
                 'data' => $evnt,
                 'statuscode' => 200,
                 'message' => "Cause Comment Deleted Successfully."
             ], 200);
         }else{
             return response()->json([
                 'statuscode' => 500,
                 'message' => "Something went wrong."
             ], 200);
         }

    }

}

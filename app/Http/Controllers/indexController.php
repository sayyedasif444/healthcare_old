<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cause;
use App\Models\cause_image;
use App\Models\cause_contact;
use App\Models\event;
use App\Models\event_image;
use App\Models\event_contact;
use App\Models\contact;
use App\Models\subscriber;
use App\Models\blog;
use App\Models\blog_image;
use App\Models\blog_contact;
use DB;

class indexController extends Controller
{
    public function index(){
        $causes = cause::query()->leftjoin('cause_images', 'cause_images.cause_id', '=', 'causes.cause_id')->orderBy('causes.cause_id', 'DESC')->limit(5)->get();
        return view('index')->with(['causes' => $causes]);
    }
    //--------------------cuases------------
    public function causesView($id){
        $causes = cause::query()->leftjoin('cause_images', 'cause_images.cause_id', '=', 'causes.cause_id')->where('causes.cause_slug', '=', $id)->get();
        $comments = cause_contact::where('cause_id', '=', $causes[0]->cause_id)->get();
        $allBlogs = blog::query()->leftjoin('blog_images', 'blog_images.blog_id', '=', 'blogs.blog_id')->orderBy('blogs.blog_id', 'desc')->take(7)->get();
        return view('cause-details')->with(['causes'=>$causes, 'allblogs'=>$allBlogs, 'comments'=>$comments]);
    }
    public function causesData(Request $request){
        $causes = cause::query()->leftjoin('cause_images', 'cause_images.cause_id', '=', 'causes.cause_id')->where('causes.cause_slug', '=', $request->get('id'))->get();
        return $causes;
    }
    public function causesComment(Request $request){
        DB::beginTransaction();
        try {
            $cmt = new cause_contact;
            $cmt->timestamps = false;
            $cmt->cause_date = $request->get('cdate');
            $cmt->name = $request->get('cname');
            $cmt->emailid = $request->get('cemail');
            $cmt->message = $request->get('cmsg');
            $cmt->cause_id = $request->get('cause_id');
            if($cmt->save()){
                DB::commit();
                return response()->json([
                    'statuscode' => 200,
                    'message' => "Comments Added"
                ], 200);

            }

        }catch (\Exception $e) {
            DB::rollback();
            return $e;
            return response()->json([
                'statuscode' => 500,
                'message' => "Something went wrong."
            ], 200);
        }

    }
    public function aboutPage(){
        $causes = cause::query()->leftjoin('cause_images', 'cause_images.cause_id', '=', 'causes.cause_id')->orderBy('causes.cause_id', 'DESC')->limit(5)->get();
        return view('about-us')->with(['causes' => $causes]);

    }
    public function causePageView(){
        $causes = cause::query()->leftjoin('cause_images', 'cause_images.cause_id', '=', 'causes.cause_id')->orderBy('causes.cause_id', 'DESC')->get();
        return view('causes')->with(['causes' => $causes]);

    }

    //-------------events----------------------
    public function eventsView(){
        $events = DB::SELECT(DB::raw('SELECT DISTINCT(events.event_id), events.event_title, events.event_desc, events.event_date, events.event_time, event_images.image_path, events.event_slug FROM event_images, events WHERE events.event_id = event_images.event_id ORDER BY events.event_id DESC LIMIT 3'));
        return $events;
    }
    public function eventPageView(){
        $event = event::query()->leftjoin('event_images', 'event_images.event_id', '=', 'events.event_id')->orderBy('events.event_id', 'DESC')->get();
        return response()->json([
            'statuscode' => 200,
            'data' => $event
        ], 200);

    }


    public function eventsViewId($id){
        $event = event::query()->leftjoin('event_images', 'event_images.event_id', '=', 'events.event_id')->where('events.event_slug', '=', $id)->get();
        $comments = event_contact::where('event_id', '=', $event[0]->event_id)->get();
        $allBlogs = blog::query()->leftjoin('blog_images', 'blog_images.blog_id', '=', 'blogs.blog_id')->orderBy('blogs.blog_id', 'desc')->take(7)->get();
        return view('event-details')->with(['events'=> $event, 'comments' => $comments, 'allblogs'=>$allBlogs]);
    }
    public function eventsData(Request $request){
        $events = event::query()->leftjoin('event_images', 'event_images.event_id', '=', 'events.event_id')->where('events.event_slug', '=', $request->get('id'))->get();
        return $events;
    }
    public function eventsComment(Request $request){
        DB::beginTransaction();
        try {
            $cmt = new event_contact;
            $cmt->timestamps = false;
            $cmt->event_date = $request->get('cdate');
            $cmt->name = $request->get('cname');
            $cmt->emailid = $request->get('cemail');
            $cmt->message = $request->get('cmsg');
            $cmt->event_id = $request->get('event_id');
            if($cmt->save()){
                DB::commit();
                return response()->json([
                    'statuscode' => 200,
                    'message' => "Request Added"
                ], 200);

            }

        }catch (\Exception $e) {
            DB::rollback();
            return $e;
            return response()->json([
                'statuscode' => 500,
                'message' => "Something went wrong."
            ], 200);
        }

    }

    //-------------blogs-----------------
    public function blogsView(){
        $blogs = DB::SELECT(DB::raw('SELECT DISTINCT(blogs.blog_id), blogs.blog_title, blogs.blog_desc, blogs.blog_date, blog_images.image_path, blogs.blog_slug FROM blog_images, blogs WHERE blogs.blog_id = blog_images.blog_id ORDER BY blogs.blog_id DESC LIMIT 3'));
        return $blogs;
    }
    public function blogsViewId($id){
        $blogs = blog::query()->leftjoin('blog_images', 'blog_images.blog_id', '=', 'blogs.blog_id')->where('blogs.blog_slug', '=', $id)->get();
        $comments = blog_contact::where('blog_id', '=', $blogs[0]->blog_id)->get();
        $allBlogs = blog::query()->leftjoin('blog_images', 'blog_images.blog_id', '=', 'blogs.blog_id')->orderBy('blogs.blog_id', 'desc')->take(7)->get();
        return view('blog-details')->with(['blogs'=> $blogs, 'comments' => $comments, 'allblogs'=>$allBlogs]);
    }
    public function blogsData(Request $request){
        $blogs = blog::query()->leftjoin('blog_images', 'blog_images.blog_id', '=', 'blogs.blog_id')->where('blogs.blog_slug', '=', $request->get('id'))->get();
        return $blogs;
    }
    public function blogsComment(Request $request){
        DB::beginTransaction();
        try {
            $cmt = new blog_contact;
            $cmt->timestamps = false;
            $cmt->blog_date = $request->get('cdate');
            $cmt->name = $request->get('cname');
            $cmt->emailid = $request->get('cemail');
            $cmt->message = $request->get('cmsg');
            $cmt->blog_id = $request->get('blog_id');
            if($cmt->save()){
                DB::commit();
                return response()->json([
                    'statuscode' => 200,
                    'message' => "Comments Added"
                ], 200);

            }

        }catch (\Exception $e) {
            DB::rollback();
            return $e;
            return response()->json([
                'statuscode' => 500,
                'message' => "Something went wrong."
            ], 200);
        }

    }
    public function blogLikes(Request $request){
        $blog = blog::find($request->get('id'));
        $blog->timestamps = false;
        $blog->blog_likes = $request->get('val');
        $blog->save();
        return response()->json([
            'statuscode' => 200,
            'message' => "Like Added"
        ], 200);

    }
    public function footerBlog(){
        $allBlogs = blog::query()->leftjoin('blog_images', 'blog_images.blog_id', '=', 'blogs.blog_id')->orderBy('blogs.blog_id', 'desc')->take(2)->get();
        return response()->json([
            'statuscode' => 200,
            'data' => $allBlogs
        ], 200);
    }
    public function blogssideView(){
        $allBlogs = blog::query()->leftjoin('blog_images', 'blog_images.blog_id', '=', 'blogs.blog_id')->orderBy('blogs.blog_id', 'desc')->take(7)->get();
        return view('blog')->with(['allblogs'=>$allBlogs]);
    }
    public function blogsPageView(){
        $blogs = DB::SELECT(DB::raw('SELECT DISTINCT(blogs.blog_id), blogs.blog_title, blogs.blog_desc, blogs.blog_date, blog_images.image_path, blogs.blog_slug FROM blog_images, blogs WHERE blogs.blog_id = blog_images.blog_id ORDER BY blogs.blog_id DESC'));
        return response()->json([
            'statuscode' => 200,
            'data' => $blogs
        ], 200);
    }

    //------------others------------


    public function contactForm(Request $request){
        DB::beginTransaction();
        try {
            $cont = new contact;
            $cont->timestamps = false;
            $cont->fname = $request->get('fname');
            $cont->lname = $request->get('lname');
            $cont->emailid = $request->get('email');
            $cont->subject = $request->get('subject');
            $cont->note = $request->get('note');

            if($cont->save()){
                DB::commit();
            }

            return response()->json([
                'statuscode' => 200,
                'message' => "Thank You! We'll reach you soon."
            ], 200);
        }catch (\Exception $e) {
            DB::rollback();
           // return $e;
            return response()->json([
                'statuscode' => 500,
                'message' => "Something went wrong! Please try again."
            ], 200);
        }
    }

    public function subscriberForm(Request $request){
        DB::beginTransaction();
        try {
            $abc = subscriber::where('EmailID', $request->get('emailid'))->get();
            if(count($abc) > 0){
                return response()->json([
                    'statuscode' => 200,
                    'message' => "You are already a subscriber!"
                ], 200);
            }else{
                $sub = new subscriber;
                $sub->timestamps = false;
                $sub->EmailID = $request->get('emailid');
                if($sub->save()){
                    DB::commit();
                    return response()->json([
                        'statuscode' => 200,
                        'message' => "Great! Welcome to the family"
                    ], 200);
                }
            }


        }catch (\Exception $e) {
            DB::rollback();
            return $e;
            return response()->json([
                'statuscode' => 500,
                'message' => "Something went wrong! Please try again."
            ], 200);
        }
    }
}

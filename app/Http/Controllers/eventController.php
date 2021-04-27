<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;
use App\Models\event_image;
use App\Models\event_contact;
use DB;

class eventController extends Controller
{
    public function index(){
        return view('admin.manage-events');
    }
    public function addEvent(Request $request){
        DB::beginTransaction();
        try {
            $evt = new event;
            $evt->timestamps = false;
            $evt->event_desc = $request->get('cont');
            $evt->event_title = strtolower($request->get('title'));
            $evt->event_img_type = $request->get('imgstat');
            $evt->event_sch = $request->get('sch');
            $evt->event_time = $request->get('etime');
            $evt->event_date = $request->get('edate');
            $slug = str_replace(' ', '-', strtolower($request->get('title')));
            $rows = DB::SELECT(DB::raw('SELECT event_slug FROM events where event_title = "'. $request->get('title').'"'));
            if(count($rows) != 0){
                $slug = $slug . '-' . sprintf("%02d", (count($rows)+1));
            }
            $evt->event_slug = $slug;
            if($request->get('imgstat')=='video'){
                $evt->event_video_link = $request->get('video');
                $evt->save();
                $id = $evt->event_id;
            }
            else{
                if($evt->save()){
                    $id = $evt->event_id;
                    if($request->get('imgstat')=='image'){
                        //return($request->file('image'));
                        if($request->file('image') != ''){
                            $file = $request->file('image')->path();
                            $fileext = $request->file('image')->extension();
                            $filetostore = time() + rand(10,100).time().'.'.$fileext;
                            $path = $request->file('image')->move('storage/uploads/', $filetostore);
                            $img = new event_image;
                            $img->timestamps = false;
                            $img->image_path = $filetostore;
                            $img->event_id = $id;
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
                                    'event_id' => $id,
                                ];
                            }
                        }
                        if(DB::table('event_images')->insert($inserts)){
                            DB::commit();
                        }
                    }
                }

            }
            return response()->json([
                'id' => $id,
                'statuscode' => 200,
                'message' => "Event Created Successfully."
            ], 200);
        }catch (\Exception $e) {
            DB::rollback();
           // return $e;
            return response()->json([
                'statuscode' => 500,
                'message' => "Something went wrong."
            ], 200);
        }
    }
    public function eventDetails(){
        $events = event::all();
        return response()->json([
            'data' => $events,
            'statuscode' => 200,
            'message' => "success."
        ], 200);
    }
    public function deleteEvent(Request $request){
       // return $request->get('event_id');
        $evnt = event::find($request->get('event_id'));
        if($evnt->delete()){
            return response()->json([
                'data' => $evnt,
                'statuscode' => 200,
                'message' => "Event Deleted Successfully."
            ], 200);
        }else{
            return response()->json([
                'statuscode' => 500,
                'message' => "Something went wrong."
            ], 200);
        }

    }
    public function editEventData($id){
        $event = event::find($id);
        return view('admin.edit-events')->with(['event' => $event]);
    }
    public function editEvents(Request $request){
        DB::beginTransaction();
        try {
            $evt = event::find($request->get('id'));
            $evt->timestamps = false;
            $evt->event_desc = $request->get('cont');
            $evt->event_title = strtolower($request->get('title'));
            $evt->event_sch = $request->get('sch');
            $evt->event_time = $request->get('etime');
            $evt->event_date = $request->get('edate');

            if($request->get('imgstat')){
                if($request->get('imgstat')=='video'){
                    $evt->event_video_link = $request->get('video');
                    $evt->save();
                    $id = $request->get('id');
                }
                else{
                    if($evt->save()){
                        $id = $request->get('id');
                        DB::table('event_images')->where('event_id', $id)->delete();

                        if($request->get('imgstat')=='image'){
                            //return($request->file('image'));
                            if($request->file('image') != ''){
                                $file = $request->file('image')->path();
                                $fileext = $request->file('image')->extension();
                                $filetostore = time() + rand(10,100).time().'.'.$fileext;
                                $path = $request->file('image')->move('storage/uploads/', $filetostore);
                                $img = new event_image;
                                $img->timestamps = false;
                                $img->image_path = $filetostore;
                                $img->event_id = $id;
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
                                        'event_id' => $id,
                                    ];
                                }
                            }
                            if(DB::table('event_images')->insert($inserts)){
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
                'message' => "Event Created Successfully."
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
    public function eventResponse(Request $request){

        $events = event_contact::where('event_id', $request->get('id'))->get();
        return response()->json([
            'data' => $events,
            'statuscode' => 200,
            'message' => "success."
        ], 200);
    }
}

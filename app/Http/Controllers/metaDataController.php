<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\page_meta;
use DB;

class metaDataController extends Controller
{
    public function addMetaData(Request $request){
        DB::beginTransaction();
        try {
            $meta = page_meta::find($request->get('id'));
            $meta->timestamps = false;
            $meta->page_meta_tag = $request->get('tag');
            $meta->page_meta_desc = $request->get('desc');
            $meta->save();
            DB::commit();
            return response()->json([
                'statuscode' => 200,
                'message' => "Meta Data Updated Successfully"
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
}

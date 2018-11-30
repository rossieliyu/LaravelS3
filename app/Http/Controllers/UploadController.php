<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class UploadController extends Controller
{
    //
    public function upload(Request $request){
        if($request->hasFile('photo')){
            $s3 = Storage::disk('s3');
            $photo = $request->file('photo');

            if($s3->put('/photo',$photo)){
                return 'success';
            }
            return "S3 faild";
        }
        return "no file";
    }
}

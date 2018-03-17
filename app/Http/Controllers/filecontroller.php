<?php

namespace App\Http\Controllers;

use App\Fileentry;
use Auth;
use App\file;
use App\plagifile;
use DB;
use Input;
use App;
use Session;
use App\Http\Controllers\AdminControllers\AssignExpertController;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Resource;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\SendResponseController;

class filecontroller extends Controller 
{

  public function handleUpload(Request $request) 
  {
    $use = DB::table('assignment_files')->get();
    if ($request['image'] == null) 
    {
      \Session::flash('message', 'Please choose a file first.');
      \Session::flash('alert-class', 'alert-warning');
      return redirect()->back();
    }
    
    $assignment_id = ($request->id);
    $user = new file;
    
    if ($request->hasFile('image')) 
    {
      $file = $request->file("image");
      $request->assignment_id;
      $d = $request->image->getClientMimeType();
      $e = $request->image->getClientOriginalExtension();
      $fi = $request->user()->id;
      $request->image->path();
      $id = $user->assignment_id;
      $fileName =preg_replace("/[^a-zA-Z0-9.]/", "",$file->getClientOriginalName());
      $length       = (strlen($fileName));
      
      if($length>40)
      {
        $fileName     =   substr( $fileName,0,20).".". $e;
      }
      
      $filename = $file->getFilename() . '.' . $e;
      $r =   $fileName;
      Storage::put('/' . $r, file_get_contents($request->file('image')->getRealPath()));
      $user->original_filename =  $file->getClientOriginalName();
      $user->mime = $file->getClientMimeType();
      $user->filename = $r;
      $user->assignment_id = $assignment_id;
    }
    
    $user->save();
    $id = $user->assignment_id;
    return redirect('assignment-details/' . $id)->with('status', 'file uploaded sucessfully');
  }
  
  public function deleteUpload(Request $request) 
  {
    $file_id = ($request->id);
    $image1 = DB::table('assignment_files')->where('id', $file_id)->first();
    $image2 =        ($image1->filename);
    $r =   Storage::delete('/' . $image2);
    $image = DB::table('assignment_files')->where('id', $file_id)->delete();
    Session::flash('flash_message', 'Successfully deleted the File!');
    return redirect('assignment-details/' . $request->assignment_id)->with('status',"file sucessfullly deleted");
  }

  public function handleplagiUpload(Request $request) 
  { 
    $use = DB::table('plagi_files')->get();
    if ($request['image'] == null) 
    {
      \Session::flash('message', 'Please choose a plagi file first.');
      \Session::flash('alert-class', 'alert-warning');
      return redirect()->back();
    }
    
    $assignment_id = ($request->plagi_id);
    $user = new plagifile;
    
    if($request->hasFile('image')) 
    {
      $file = $request->file("image");
      $request->assignment_id;
      $d = $request->image->getClientMimeType();
      $e = $request->image->getClientOriginalExtension();
      $fi = $request->user()->id;
      $request->image->path();
      $id = $user->assignment_id;
      $fileName =preg_replace("/[^a-zA-Z0-9.]/", "",$file->getClientOriginalName());
      $length       = (strlen($fileName));
      
      if($length>40)
      {
        $fileName     =   substr( $fileName,0,20).".". $e;
      }

      $filename = $file->getFilename() . '.' . $e;
      $r =   $fileName;
      Storage::put('/' . $r, file_get_contents($request->file('image')->getRealPath()));
      $user->plagi_original_filename =  $file->getClientOriginalName();
      $user->plagi_mime = $file->getClientMimeType();
      $user->plagi_filename = $r;
      $user->assignment_id = $assignment_id;
    }

    $user->save();
    $id = $user->assignment_id;
    return redirect('assignment-details/' . $id)->with('status', 'plagi file uploaded sucessfully');
  }
  
  public function deleteplagiUpload(Request $request) 
  {
    $file_id = ($request->plagi_id);
    $image1 = DB::table('plagi_files')->where('id', $file_id)->first();
    $image2 =        ($image1->plagi_filename);
    $r =   Storage::delete('/' . $image2);
    $image = DB::table('plagi_files')->where('id', $file_id)->delete();
    Session::flash('flash_message', 'Successfully deleted the plagi File!');
    return redirect('assignment-details/' . $request->assignment_id)->with('plagi_status',"plagi file sucessfullly deleted");
  }

}


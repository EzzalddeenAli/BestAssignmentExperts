<?php namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;
 use App\Fileentry;
use App\SolutionFileentry; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
//use Symfony\Component\HttpFoundation\File\File;
use App\plagifile; //by bharti......

use Illuminate\Http\Response;
 use Input;
 use App\Http\Controllers\AssignmentController;
use  DB;
 
class FileEntryController extends Controller {
 
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $entries = Fileentry::all();
 
    return view('fileentries.index', compact('entries'));
  }
 
  public function add(Request $request) {
  //  dd($request->all());
            $assignmentC=new AssignmentController();
  //dd( $assignmentC);
            $assignment_id=$request->assignment_id;
            dd( $assignment_id);
                    
             $file = \Illuminate\Support\Facades\Request::file('filefield');
             if($file!=null)
               {  
  //  $extension = $file->getClientOriginalExtension();
 //   Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
  //  $entry = new Fileentry();
  //  $entry->mime = $file->getClientMimeType();
  //  $entry->original_filename = $file->getClientOriginalName();
  //  $entry->filename = $file->getFilename().'.'.$extension;
 
 //  $entry->save();
                $assignmentC->putSolutionFileData($assignment_id, $file);
 
    return redirect('http://expert.inasoftsolutions.com/pending-assignment/uploaded');
               }
               else
               {
                   ///Message Upload file failed
                return redirect('http://expert.inasoftsolutions.com/pending-assignment/uploadfail');
               }
    
  }
  public function get($filename){
  //  dd($filename);
    $entry = Fileentry::where('filename', '=', $filename)->first();
     //dd($entry);
            if(count($entry))
            {  
    $file = Storage::disk('local')->get($entry->filename);
 
    return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);
            }
            else
            {
               try
               { 
               $entry = DB::table('assignment_solutions')->where('filename', '=', $filename)->first();
               if($entry)
               {   
    $file = Storage::disk('local')->get($entry->original_filename);
 
    return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);
               }
               }
               catch(\Exception $ex)
               {
                   return redirect('users/dashboard');
               }
            } 
  }

  public function get_plagi($filename)
  {
    $entry = plagifile::where('plagi_original_filename', '=', $filename)->first();

    if(count($entry))
    {  
      $file = Storage::disk('plagi_uploads')->get($entry->plagi_original_filename);
      return (new Response($file, 200))
              ->header('Content-Type', $entry->plagi_mime);
    }
    else
    {
      try
      { 
        $entry = DB::table('plagi_solutions')->where('plagi_original_filename',$filename)->first();
     //  dd( $entry)->first();
        if($entry)
        {   
          $file = Storage::disk('plagi_uploads')->get($entry->plagi_original_filename);
          return (new Response($file, 200))
              ->header('Content-Type', $entry->plagi_mime);
        }
      }
      catch(\Exception $ex)
      {
        return redirect('users/dashboard');
      }
    } 
  }
  
  public function get1($filename){
  // dd($filename);
    $entry = SolutionFileentry::where('filename', '=', $filename)->first();
     //dd($entry);
            if(count($entry))
            {  
    $file = Storage::disk('local')->get($entry->filename);
 
    return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);
            }
            else
            {
               try
               { 
               $entry = DB::table('assignment_solutions')->where('filename', '=', $filename)->first();
               if($entry)
               {   
    $file = Storage::disk('local')->get($entry->original_filename);
 
    return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);
               }
               }
               catch(\Exception $ex)
               {
                   return redirect('users/dashboard');
               }
            } 
  }













}

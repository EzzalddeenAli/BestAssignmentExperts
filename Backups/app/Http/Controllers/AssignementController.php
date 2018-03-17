<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;
use DB;
use Auth;
use \App\Assignment;
use \App\User;
class AssignementController extends Controller
{
 
     public function putAssignmetData(Request $request)
     {  
       $login_user_id = Auth::user()->id;
        $subject      =       $request->subject;
        $due_date     =       $request->due_date;
        $no_of_pages  =       $request->no_of_pages;
        $ref_style    =       $request->ref_style;
        $expert       =       $request->expert;
        $description  =       $request->descreption;
        $uploaded_file=       $request->uploaded_file;
        $total_amount  =    $no_of_pages*10;
        if(!empty($subject&&$due_date&&$no_of_pages&&$ref_style&&$expert&&$uploaded_file))
        {
          
        $last_assignment_id=  DB::table('assignment_details')
         ->insertGetId(['uid' =>$login_user_id , 'order_id' => null,
                  'subject'=>$subject,'due_date'=>$due_date,
                  'no_of_pages'=>$no_of_pages,'reference_style'=>$ref_style,
                  'expert_name'=>$expert,'description'=>$description,
                  'assignment_file'=>$uploaded_file,'solution_available'=>0, 'time'=>time()
                  ]);
         DB::table('user_currency_selection')
         ->insert(['aid' =>$last_assignment_id , 'fixed_currency' => 'INR',
                  'fixed'=>$total_amount,
                  ]);
         $request->session()->flash('status', 'We are having troblue to get your request, Please try again later!');
         return redirect('/add-assignment'); 
        }
        else
        { 
          $request->session()->flash('status', 'We are having troblue to get your request, Please try again later!');
          return redirect('/add-assignment');
        }
          
     }        
     public function showAssignment()
     {
        
       $assignmentData=Assignment::where('uid',Auth::user()->id)->get();
    
       return View('dashboard.show-assignment')->with('assignment_data',$assignmentData);
         
         
         
      
     }
   
     
   public function addAssignment()
   {
   return View('dashboard.add-assignment');  
   }
    
}
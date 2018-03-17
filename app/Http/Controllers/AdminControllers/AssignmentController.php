<?php
namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\SendResponseController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Controller;
use App\Assignment;       
use App\User;
use Session;
use View;
use DB;
use Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\file;
use App\SolutionFileentry;
use App\plagiSolutionFileentry;



  class AssignmentController extends Controller //To show Assignment File , Show it on Click on Assignment Id
  {
  
      public function __construct()
      {
           $this->idForFormation = new SendResponseController();
      }      
      
      public function  partialAssignment(Request $request)
      {
        $assignment_id  =   $request->id;
        DB::table('assignment_details')->where('assignment_id',$assignment_id )->update(['status'=>'partial']);
        return redirect('show-assignment-details/' . $assignment_id);
      }
      
      public function  failedAssignment(Request $request)
      {
        $assignment_id  =   $request->id;
        DB::table('assignment_details')->where('assignment_id',$assignment_id )->update(['status'=>'failed']);
        return redirect('show-assignment-details/' . $assignment_id);
      }
      
      public function  reworkAssignment(Request $request)
      {
        $assignment_id  =   $request->id;
        DB::table('assignment_details')->where('assignment_id',$assignment_id )->update(['status'=>'rework']);
        return redirect('show-assignment-details/' . $assignment_id);
      }
  
      public function  clarificationAssignment(Request $request)
      {
        $assignment_id  =   $request->id;
        DB::table('assignment_details')->where('assignment_id',$assignment_id )->update(['status'=>'clarification']);
        return redirect('show-assignment-details/' . $assignment_id);
      }
  
      public function  fullAssignment(Request $request)
      {
        $assignment_id  =   $request->id;
        $order = DB::table('assignment_details')->where('assignment_id',$assignment_id )->first();
      
        if($order->order_id)
        {
          //dd("order_id exist");
          DB::table('assignment_details')->where('order_id',$order->order_id)
              ->update(['order_id'=> $order->order_id, 'status'=>'full']);
          $orderData = DB::table('order')->where('order_id',$order->order_id)->first();
         
          if($orderData)
          { 
            DB::table('payment_logs')->insert(['order_id'=> $orderData->order_id, 'paid_through'=> 'wallet', 'amount'=> $orderData->payment_paid]);
          }
        }
        else
        {
          $orderInsert = DB::table('order')->insert(['payment_paid'=> $order->total_amount, 'payment_left'=> '0', 'status'=> 'full']);
          
          if($orderInsert)
          {
            //dd("order_id not exist");
            $lastOrder = DB::table('order')->orderBy('order_id', 'DESC')->first();
            $updateAssignmentDetail = DB::table('assignment_details')->where('assignment_id',$assignment_id )
              ->update(['order_id'=> $lastOrder->order_id, 'status'=>'full']);
          
            if($updateAssignmentDetail)
            {              
              DB::table('payment_logs')->insert(['order_id'=> $lastOrder->order_id, 'paid_through'=> 'wallet', 'amount'=> $lastOrder->payment_paid]);
            }
        }
        }
        return redirect('show-assignment-details/' . $assignment_id);
      }

      public function  showPaidAssignment()
      {
    
            $allPriorityAssignment = Assignment::where('due_date','<=',2*86400+time())->where('due_date','>=',time())->get();

            $allPriorityAssignmentCheck=$allPriorityAssignment;

            if(!empty($allPriorityAssignmentCheck->toArray()))
            {
             $sendAllPriorityAssignmentData=$allPriorityAssignment;
            }   
            else
            {
             $sendAllPriorityAssignmentData='';
            }
            return View('admin.dashboard.priority-assignment')->with('priority_assignment_data',$sendAllPriorityAssignmentData);
      }
    
      public function showCompletedAssignment()
      {
           $allCompletedAssignment= DB::table('assignment_details')
                                  ->join('order', 'assignment_details.order_id', '=', 'order.order_id')
                                  ->select('assignment_details.*', 'order.*')->where('order.status','full')
                                  ->get();
                                  
            if(count($allCompletedAssignment))
            {
              $allCompletedAssignmentData=$allCompletedAssignment;  
            }  
            else
            {
                $allCompletedAssignmentData='';
            }
           return View('admin.dashboard.completed-assignment')->with(['completed_assignment_data'=>$allCompletedAssignmentData,'idFormation'=>$this->idForFormation]);
         
      }
     
      public function  showPriorityAssignment()
      {

       
       
          $allPriorityAssignment  = Assignment::where('due_date','<=',2*86400+time())->where('due_date','>=',time())->where('status','pending')->get();

            if(!$allPriorityAssignment->isEmpty())
            {
             $sendAllPriorityAssignmentData=$allPriorityAssignment;
            }   
            else
            {
              $sendAllPriorityAssignmentData='';
            }
            return View('admin.dashboard.priority-assignment')->with(['priority_assignment_data'=>$sendAllPriorityAssignmentData,'idFormation'=>$this->idForFormation]);
      }
    
     public function  showAssignmentRequest()
     {
      
            $allAssignmentRequest = Assignment::where('assigned_to',null)->orderBy('order_id', 'ASC')->get();
            $allAssignmentRequestCheck=$allAssignmentRequest;
            if(!$allAssignmentRequestCheck->isEmpty())
            {
                $sendAllAssignmentRequestData=$allAssignmentRequest;
            }   
            else
            {
                $sendAllAssignmentRequestData='';
            }
            return View('admin.dashboard.assignment-request')->with(['assignment_request_data'=>$sendAllAssignmentRequestData,'available_experts'=>$this->getAvailableExperts(),'idFormation'=>$this->idForFormation]);
     }
     public function  showPendingAssignment()
     {
  
         $allPendingAssignment = Assignment::where('assigned_to','!=',null)->where('status','!=','completed')->get();
     
         //dd($allPendingAssignment);
           if(!$allPendingAssignment->isEmpty())
           {
             foreach($allPendingAssignment as $all_pending)
             {             
                if($all_pending->order_id!='')
                {
                    $orders=DB::table('order')->where('order_id',$all_pending->order_id)->first();
                    $array_pending_assignment['order_id']=$all_pending->order_id;
                    if($orders)
                    {
                    $array_pending_assignment['payment_left']=$orders->payment_left;
                    $array_pending_assignment['payment_paid']=$orders->payment_paid;
                    }
                    else
                    {
                    $array_pending_assignment['payment_left']='';
                    $array_pending_assignment['payment_paid']='';
                    }    
                }
                else
                {
                    $array_pending_assignment['order_id']='';
                    $array_pending_assignment['payment_left']='';
                    $array_pending_assignment['payment_paid']='';

                }
                $array_pending_assignment['assignment_id']      =$all_pending->assignment_id;
                $array_pending_assignment['solution_available'] =$all_pending->solution_available;
                $array_pending_assignment['status'] =$all_pending->status;                
                $array_pending_assignment['total_amount']  =$all_pending->total_amount;
                $array_pending_assignment['subject']       =$all_pending->subject;
                $array_pending_assignment['uid']           =$all_pending->uid;
                $array_pending_assignment['due_date']      =$all_pending->due_date?date('d-m-y',$all_pending->due_date):'';
                $array_pending_assignment['description']   =$all_pending->description;
                $array_pending_assignment['reference_style']   =$all_pending->reference_style;
                if($all_pending->assigned_to!='')
                {
                
                    $array_pending_assignment['assigned_to']  =$all_pending->assigned_to?User::find($all_pending->assigned_to)?User::find($all_pending->assigned_to)->name:"":"";   
                }
                else
                {   
                    $array_pending_assignment['assigned_to']='';    
                }
                $put_in_array[]=$array_pending_assignment;
           }   
         }   
        else
        {
         $put_in_array='';
        }
     
     return View('admin.dashboard.pending-assignment')->with(['pending_assignment_data'=>$put_in_array,'idFormation'=>$this->idForFormation]);
     }
      public function  showExpiredAssignment()
      {
      $allExpiredAssignment=DB::table('assignment_details')->where('status','!=','completed')->where('due_date','<=',time())->get();
      
       if(count($allExpiredAssignment))
       {
         foreach($allExpiredAssignment as $all_expired)
         {
             
             if($all_expired->order_id!='')
             {
                 $orders=DB::table('order')->where('order_id',$all_expired->order_id)->first();
                 $array_expired_assignment['order_id']    = $all_expired->order_id;
                 if($orders)
                 {
                 $array_expired_assignment['payment_left']= $orders->payment_left;
                 $array_expired_assignment['payment_paid']= $orders->payment_paid;
                 }
                 else
                 {
                 $array_expired_assignment['payment_left']='';
                 $array_expired_assignment['payment_paid']='';
                 }    
             }
             else
             {
                 $array_expired_assignment['order_id']     ='';
                 $array_expired_assignment['payment_left'] ='';
                 $array_expired_assignment['payment_paid'] ='';
                 
             }
              $array_expired_assignment['assignment_id']   = $all_expired->assignment_id;
              $array_expired_assignment['total_amount']    = $all_expired->total_amount;
              $array_expired_assignment['subject']         = $all_expired->subject;
              $array_expired_assignment['uid']             = $all_expired->uid;
              $array_expired_assignment['due_date']        = $all_expired->due_date?date('d-m-y',$all_expired->due_date):'';
              $array_expired_assignment['description']     = $all_expired->description;
              $array_expired_assignment['reference_style'] = $all_expired->reference_style;
              if($all_expired->assigned_to!='')
              {
               $array_expired_assignment['assigned_to']  =User::find($all_expired->assigned_to)?User::find($all_expired->assigned_to)->name:'';   
              }
              else
              {   
               $array_expired_assignment['assigned_to']='';    
              }
              $put_in_array[]=$array_expired_assignment;
         }   
     }   
     else
     {
         $put_in_array='';
     }
      return View('admin.dashboard.expired-assignment')->with(['all_expired_assignment'=>$put_in_array,'idFormation'=>$this->idForFormation]);;
    }
      
      // by bharti
      public function  showPlagiAssignment()
      {
        $response = new SendResponseController(); 
        $allPlagiAssignment= DB::table('assignment_details')
                                   ->join('plagi_files', 'assignment_details.assignment_id', '=', 'plagi_files.assignment_id')
                                   ->get();
        return View('admin.dashboard.plagi-assignment')->with(['assignment_data'=>$allPlagiAssignment,'idFormation'=>$this->idForFormation]);
      }
      //................
    
    public function getAvailableExperts()
    {
        $available_experts=DB::table('users')
                         ->join('role_user', 'users.id', '=', 'role_user.user_id')
                         ->join('expert_availability','users.id','=','expert_availability.expert_id')
                         ->where('role_user.role_id',2)
                         ->where('expert_availability.availability',1)    
                         ->get();
        
        return $available_experts;
    }  
    
    public function showAssignmentDetailsOnAdminSide($id)
    {      
      $response=new SendResponseController();
                      
      $assignmentId                = $id;
      $put_soln_file_data          = null;
      $array_assignment_details    = null;
      $put_in_array                = null;  
      $uploaded_file_array         = null;

      //by bharti....
      $put_plagi_soln_file_data    = null;
      $plagi_file_array         = null;
      //.......

      Session::flash('my-assignment','Oops! We got an invalid response for your assignment data.');
     
      if($assignmentId)
      { 
        $country_code =   DB::table('assignment_details')
        ->join('users', 'assignment_details.uid', '=', 'users.id')->where('assignment_details.assignment_id',$assignmentId)->first();
     
        if( $country_code)
        {
          $users_contact_number = $country_code->contact_no;
          $users_country_code   =$country_code->country_code;
        }
        else
        {
          $users_contact_number = "contact information not available";
          $users_country_code   ="";
        }
        
        $details = DB::table('assignment_details')->where('assignment_id',$assignmentId)->first();
        $solution = DB::table('assignment_details')->where('status','completed')->count();
        $due_date=($details->due_date);
        $diff = $due_date-time();
        $leftday = round($diff / 86400);
     
        if(is_null($details))
        {
          return redirect('/users/dashboard');
        }  
                
        if(!empty($details) && $details!='')
        {
          $uploadedFiles=DB::table('assignment_files')->where('assignment_id',$details->assignment_id)->get();  
          
          if($uploadedFiles)
          {
            foreach($uploadedFiles as $file)
            {
              $uploaded_file['filename']=$file->original_filename;
              $uploaded_file['getfile']=$file->filename;
              $uploaded_file_array[]=$uploaded_file;
            }   
          }
          else
          {
            $uploaded_file_array=null;
          } 

          // by bharti.........
          $plagiFiles=DB::table('plagi_files')->where('assignment_id',$details->assignment_id)->get();  

          if($plagiFiles)
          { 
            foreach($plagiFiles as $plagiFile)
            { 
              $plagi_file['plagi_filename']=$plagiFile->plagi_original_filename;
              $plagi_file['plagi_getfile']=$plagiFile->plagi_filename;
              $plagi_file_array[]=$plagi_file;
            }   
          }
          else
          {
            $plagi_file_array=null;
          }  
          //............ 
                          
          if($details->order_id!='')
          {
            $orders=DB::table('order')->where('order_id',$details->order_id)->first();
            $array_assignment_details['order_id']=$response->getOrderId($details->order_id, $details->uid);
           
            if($orders)
            {
              $array_assignment_details['payment_left']=$orders->payment_left;
              $array_assignment_details['payment_paid']=$orders->payment_paid;
            }
            else
            {
              $array_assignment_details['payment_left']=$orders->total_amount;
              $array_assignment_details['payment_paid']=0;
            }    
          }
          else
          {
            $array_assignment_details['order_id']='NaN';
            $array_assignment_details['payment_left']=$details->total_amount;
            $array_assignment_details['payment_paid']=0;
          }
          
          $array_assignment_details['show_assignment_id']      = $response->getAssignmentAsOrderId($details->assignment_id, $details->uid) ;
          $array_assignment_details['assignment_id']      = $details->assignment_id;
          $array_assignment_details['total_amount']       =   $details->total_amount;
          $array_assignment_details['subject']            =   $details->subject;
          $array_assignment_details['due_date']           =   $details->due_date;
          $array_assignment_details['expired_date']       =   $leftday;
          $array_assignment_details['contact_number']     =    $users_contact_number; 
          $array_assignment_details['country_code']       =    $users_country_code ; 
          $array_assignment_details['submitted_date']     =   $details->submitted_date;
          $array_assignment_details['description']        =   $details->description;
          $array_assignment_details['reference_style']    =   $details->reference_style;
          
          // $array_assignment_details['wallet_amount']    =     $walletdetails->wallet_amount;
          $array_assignment_details['status']             =   $details->status;
          //  dd($array_assignment_details['status'] );
          $array_assignment_details['your_chosen_expert'] =   $details->expert_name;
          $array_assignment_details['no_of_pages']        =   $details->no_of_pages;
          $array_assignment_details['no_of_days']         =   $this->returnNoOfDays($details->submitted_date);
          $array_assignment_details['csrf_token']         =   csrf_token();
            
          if($details->solution_available==1)
          {
            $availSolutionFile = DB::table('assignment_solutions')->where('assignment_id',$details->assignment_id)->get();

            if($availSolutionFile)
            {
              foreach($availSolutionFile as $solnFile)
              {
                $solution_files_data['filename']=$solnFile->original_filename;
                $solution_files_data['getfile']=$solnFile->filename;
                $put_soln_file_data[]=$solution_files_data;
              }   
            } 
            else
            {
              $put_soln_file_data=null;
            }

            //by bharti........
            $availPlagiSolutionFile = DB::table('plagi_solutions')->where('assignment_id',$details->assignment_id)->get();

            if($availPlagiSolutionFile)
            { 
              foreach($availPlagiSolutionFile as $plagiSolnFile)
              {
                $plagi_solution_files_data['plagi_filename']=$plagiSolnFile->plagi_original_filename;
                $plagi_solution_files_data['plagi_getfile']=$plagiSolnFile->plagi_filename;
                $put_plagi_soln_file_data[]=$plagi_solution_files_data;
              }   
            }  
            else
            {
              $put_plagi_soln_file_data=null;
            }
          } 
          else
          {
            $put_soln_file_data=null;
            $put_plagi_soln_file_data=null;
          } 
          //............
         
          $array_assignment_details['solution_file']  =  $put_soln_file_data;
          $array_assignment_details['uploaded_file']  =  $uploaded_file_array;

          //by bharti....
          $array_assignment_details['plagi_solution_file']  =  $put_plagi_soln_file_data;
          $array_assignment_details['plagi_file']  =  $plagi_file_array;
          //........
                
                 
            /* if($details->assigned_to!='')
             {
                $array_assignment_details['assigned_to']  =User::find($details->assigned_to)->name;   
             }
             else
             {   
             $array_assignment_details['assigned_to']='';    
             }*/

          $put_in_array[]=$array_assignment_details;
          $data = DB::table('sticky_notes')->get();

          foreach( $data as  $data)
           $discription =   ($data->discription);
            
            //neW aDDED CODE
            $commentData= new CommentController();
            $textMessages = $commentData->retrieveTextMessage($details->assignment_id);
            $transaction_id=DB::table('payment_logs')->where('order_id',$details->order_id)->first();  
            // dd($transaction_id);

            if($transaction_id)
            {
              $user_transection = $transaction_id->transaction_id;
              $pay_through   = $transaction_id->paid_through;
            }
            else
            {
              $user_transection ="not available";
              $pay_through ="not available";
            }

            $walletdetails = DB::table('wallet')->where('uid',$details->uid)->first();

            if($walletdetails)
            {
              $wallet_amount     =    $walletdetails->wallet_amount;
              //     $solution = DB::table('wallet')->where('uid',$details->uid)->first();
            }
            else
            {
              $wallet_amount='0';
            }
              $rework = DB::table('assignment_details')->where('status','rework')->count();

            if($rework)
            {
              $rework_assignment   =  $rework ;
            }    
            else
            {
              $rework_assignment  ='$0';   
            }  
          
        return View('admin.dashboard.admin-assignment-details')
         ->with(['assignment_details'=>$put_in_array,'file_count'=>count($put_soln_file_data), 
          'messageShow'=>$textMessages, 'leftday'=>$leftday,'wallet'=>$wallet_amount, 'rework'=> $rework_assignment, 'discription'=>$discription,'transaction'=> $user_transection,"paythrough"=> $pay_through]);
        }   
        else
        {
          return redirect('/my-assignment');
        }
      } 
     
      return redirect('/my-assignment');     
     
    }
    
     public function completeAssignment()
     {
         
         $assignment_id=Input::get('assignment_id');


         $checkIfSolnAvailability=DB::Table('assignment_details')->where('assignment_id',$assignment_id)->where('solution_available',1)->first();
       
         if($checkIfSolnAvailability)
         {  
            if($assignment_id)
            {   
            DB::table('assignment_details')->where('assignment_id',$assignment_id)->update(['status'=>'completed']);
            Session::flash('click-completed','Thank you, you have marked as completed for the assignment id '.$assignment_id);             
            return redirect('/users/dashboard');    
            }
         Session::flash('click-completed','Oops, Unable to set the assignment status as complete, please try again');  
         return redirect('/users/dashboard');
         }
         Session::flash('click-completed','Oops, Unrecognized assignment to complete,May be solution is not available for this assignment please try again');  
         return redirect('/users/dashboard');
     }   
    public function returnNoOfDays($start_date)
    {
         $diff = time()-$start_date; 
        // dd($diff);
        return round($diff / 86400);
        //dd(   $er);

    }     
    public function sendReworkRequest($id)
    {
        $getData=DB::table('assignment_details')->where('assignment_id',$id)->first();
        
        if($getData)
        {
            
            try
            {
            DB::table('assignment_details')->where('assignment_id',$id)->update(['status'=>'rework']);
            Session::flash('rework_request_sent','Success, Rework requeset is sent to the assosiated expert');
            }
            catch(\Exception $ex)
            {
              Session::flash('rework_request_error','Oops, unable to send the rework request to the expert, try again later');  
              
            }
            
        }  
        else
        {
            Session::flash('rework_request_error','Oops, unable to send the rework request to the expert, try again later');  
            
        }  
        return redirect('users/dashboard');
    }
    
    public function expertReworkRequest()
    {
           $rewokAssignments = $assignmentRequests = DB::table('assignment_details')->where('status','rework')->get();
           return view('admin.dashboard.rework-assignment')->with(['rework_asssignment'=>$rewokAssignments,'idFormation'=>$this->idForFormation]);
            
    }
    
           
public function showOnlyCompletedAssignment()
      {
           $allCompletedAssignment= DB::table('assignment_details')
                                  ->select('assignment_details.*')->where('assignment_details.status','completed')
                                  ->get();
       
            if(count($allCompletedAssignment))
            {
              $allCompletedAssignmentData=$allCompletedAssignment;  
            }  
            else
            {
                $allCompletedAssignmentData='';
            }
           return View('admin.dashboard.completed-only-assignment')->with(['completed_assignment_data'=>$allCompletedAssignmentData,'idFormation'=>$this->idForFormation]);
         
      }

  
    public function handle(Request $request) 
    {
      $complete = "completed";
        
      if ($request['image'] == null) 
      {
        \Session::flash('message', 'Please choose a file first.');
        \Session::flash('alert-class', 'alert-warning');
        return redirect()->back();
      }
      
      $assignment_id = ($request->id);
      $details = DB::table('assignment_details')->where('assignment_id',$assignment_id)->update(['status'=>'completed', 'solution_available'=>'1']);
      $user = new SolutionFileentry;

      if ($request->hasFile('image')) 
      {
        $file = $request->file("image");
        $request->assignment_id;
        $d = $request->image->getClientMimeType();
        $e = $request->image->getClientOriginalExtension();
        $fi = $request->user()->id;
        $request->image->path();
        $id = $user->assignment_id;
        $fileName = $file->getClientOriginalName();
        $filename = $file->getFilename() . "." . $e;
        $r =   $fileName;

        Storage::put('/' . $r, file_get_contents($request->file('image')->getRealPath()));
        $user->original_filename =  $file->getClientOriginalName();
        $user->mime = $file->getClientMimeType();
        $user->filename = $r;
        $user->assignment_id = $assignment_id;
      }

      ($user->save());
      $id = $user->assignment_id;
      return redirect('show-assignment-details/' . $id)->with('status','Solution is sucessfully uploaded');
    }  

    //by bharti....
    public function plagiHandle(Request $request) 
    {
      $complete = "completed";
        
      if ($request['image'] == null) 
      {
        \Session::flash('message', 'Please choose a plagi file first.');
        \Session::flash('alert-class', 'alert-warning');
        return redirect()->back();
      }
      
      $assignment_id = ($request->id);
      $details = DB::table('assignment_details')->where('assignment_id',$assignment_id)->update(['status'=>'completed', 'solution_available'=>'1']);
      $user = new plagiSolutionFileentry;

      if ($request->hasFile('image')) 
      {
        $file = $request->file("image");
        $mime = $request->image->getClientMimeType();
        $fileName = $file->getClientOriginalName();
        $plagiSolutionFilePath = $file->move(public_path() . '/plagi_uploads',  $fileName);
        $profileImgRealPath1 = str_replace('\\', '/', $plagiSolutionFilePath);

        $user->plagi_original_filename =  $file->getClientOriginalName();
        $user->plagi_mime = $file->getClientMimeType();
        $user->plagi_filename = $fileName;
        $user->assignment_id = $assignment_id;
      }

      ($user->save());
      $id = $user->assignment_id;
      return redirect('show-assignment-details/' . $id)->with('status','plagi Solution is sucessfully uploaded');
    } 
    //............... 


 public function DeleteUpload(Request $request) 
 {
    $file_id = ($request->id);
    $image1 = DB::table('assignment_files')->where('id', $file_id)->first();
    $image2 =        ($image1->filename);
    $image3 =  ($image1->original_filename);
    $r =   Storage::delete('/' . $image2);
    $image = DB::table('assignment_files')->where('id', $file_id)->delete();
        
    Session::flash('flash_message', 'Successfully deleted the File!');
    return redirect('show-assignment-details/' . $id)->with('status',"file sucessfully deleted");
  }   
    

/*public function deleteAssignment($id, Request $request)
    {
     //dd($request->get('deleteChkbox'));
      $assignmentData = DB::table('assignment_details')->where('assignment_id', '=', $id)->first();

      try
      {
        $assignmentfile = DB::table('assignment_files')->where('assignment_id', '=', $id)->get();
        DB::table('assignment_details')->where('assignment_id', '=', $id)->delete();
        DB::table('assignment_files')->where('assignment_id', '=', $id)->delete();
        foreach($assignmentfile as $fileForDelete)
        {
          $deleteData =        ($fileForDelete->filename);
          Storage::delete('/' . $deleteData);
        }
      }
      catch ( Illuminate\Database\QueryException $e) 
      {
        var_dump($e->errorInfo);
      }
      
      //return redirect(\Request::url());
      return redirect()->back();

    }*/

public function deleteAssignments(Request $request)
{
     // dd($request->all());

      $id =$request->deleteChkbox;
  foreach($id as $assignmentId)
  {
    $assignmentData = DB::table('assignment_details')->where('assignment_id', '=',$assignmentId)->first();
    
     try
     {
        foreach($id as $assignmentId)
        {
          $assignmentfile = DB::table('assignment_files')->where('assignment_id', '=', $assignmentId)->get();
          DB::table('assignment_details')->where('assignment_id', '=', $assignmentId)->delete();
          DB::table('assignment_files')->where('assignment_id', '=', $assignmentId)->delete();
          foreach($assignmentfile as $fileForDelete)
          {
            $deleteData =        ($fileForDelete->filename);
            Storage::delete('/' . $deleteData);
          }
        }
      }
     catch (Illuminate\Database\QueryException $e) 
     {
       var_dump($e->errorInfo);
     }
    
      //return redirect(\Request::url());
      return redirect()->back();


    }
  }
public function freshassignment()
{
          $response = new SendResponseController(); 
          $time=  time();
          $beginOfDay = strtotime("midnight", $time);
          $endOfDay   = strtotime("tomorrow", $beginOfDay) - 1;
          $Assignment = DB::table('assignment_details')->where('submitted_date','<=', $endOfDay )->where('submitted_date','>=',$beginOfDay)->get();
          /*if($Assignment){
          foreach($Assignment as $data)
          {
          $id=    $data->assignment_id;
          $assingnment_data['assignment_id']=   $data->assignment_id;

          $assingnment_data['show_assignment_id']=$response->getAssignmentAsOrderId($data->assignment_id, $id);
          $assingnment_data['subject']=$data->subject;
          $assingnment_data['due_date']=date('d-m-y',$data->due_date);
          $r =   $assingnment_data['submitted_date']=date('d-m-y',$data->submitted_date);
          $assingnment_data['status']=$data->status;
          $assingnment_data['reference_style']=$data->reference_style;
          $assingnment_data['no_of_pages']=$data->no_of_pages;
          $u =     $assingnment_data['subtotal']=$data->total_amount;
          $put_in_array[]=$assingnment_data;
          }
          }  */
          return View('admin.dashboard.Fresh-Assignment')->with(['assignment_data'=>$Assignment,'idFormation'=>$this->idForFormation]);

}
public function solutionrecived(){
$response = new SendResponseController(); 
$available_solutions= DB::table('assignment_details')->where('status','completed')->get();
//dd($available_solutions);
foreach($available_solutions as $data){
 $id=    $data->assignment_id;
          $assingnment_data['assignment_id']=   $data->assignment_id;

          $assingnment_data['show_assignment_id']=$response->getAssignmentAsOrderId($data->assignment_id, $id);
          $assingnment_data['subject']=$data->subject;
          $assingnment_data['due_date']=date('d-m-y',$data->due_date);
          $r =   $assingnment_data['submitted_date']=date('d-m-y',$data->submitted_date);
          $assingnment_data['status']=$data->status;
          $assingnment_data['reference_style']=$data->reference_style;
          $assingnment_data['no_of_pages']=$data->no_of_pages;
          $u =     $assingnment_data['subtotal']=$data->total_amount;
          $put_in_array[]=$assingnment_data;
          }
          
          return View('admin.dashboard.Solution-Assignment')->with(['assignment_data'=>$available_solutions,'idFormation'=>$this->idForFormation]);
          
}
public function rework(){
$response = new SendResponseController(); 
$rework_assignment= DB::table('assignment_details')->where('status','rework')->get();
foreach($rework_assignment as $data){
          $id=    $data->assignment_id;
          $assingnment_data['assignment_id']=   $data->assignment_id;

          $assingnment_data['show_assignment_id']=$response->getAssignmentAsOrderId($data->assignment_id, $id);
          $assingnment_data['subject']=$data->subject;
          $assingnment_data['due_date']=date('d-m-y',$data->due_date);
          $r =   $assingnment_data['submitted_date']=date('d-m-y',$data->submitted_date);
          $assingnment_data['status']=$data->status;
          $assingnment_data['reference_style']=$data->reference_style;
          $assingnment_data['no_of_pages']=$data->no_of_pages;
          $u =     $assingnment_data['subtotal']=$data->total_amount;
          $put_in_array[]=$assingnment_data;
          }
          
          return View('admin.dashboard.Solution-Assignment')->with(['assignment_data'=>$rework_assignment,'idFormation'=>$this->idForFormation]);
          
}
public function clarification(){
$response = new SendResponseController(); 
$clarification= DB::table('assignment_details')->where('status','clarification')->get();
foreach($clarification as $data){
          $id=    $data->assignment_id;
          $assingnment_data['assignment_id']=   $data->assignment_id;

          $assingnment_data['show_assignment_id']=$response->getAssignmentAsOrderId($data->assignment_id, $id);
          $assingnment_data['subject']=$data->subject;
          $assingnment_data['due_date']=date('d-m-y',$data->due_date);
          $r =   $assingnment_data['submitted_date']=date('d-m-y',$data->submitted_date);
          $assingnment_data['status']=$data->status;
          $assingnment_data['reference_style']=$data->reference_style;
          $assingnment_data['no_of_pages']=$data->no_of_pages;
          $u =     $assingnment_data['subtotal']=$data->total_amount;
          $put_in_array[]=$assingnment_data;
          }
    return View('admin.dashboard.Solution-Assignment')->with(['assignment_data'=>$clarification,'idFormation'=>$this->idForFormation]);

    }
    public function paid()
    {
      $response = new SendResponseController(); 
        $allCompletedAssignment= DB::table('assignment_details')
                                  ->join('order', 'assignment_details.order_id', '=', 'order.order_id')
                                  ->select('assignment_details.*', 'order.*')->where('order.status','full')
                                  ->get();
       foreach($allCompletedAssignment as $data){
          $id=    $data->assignment_id;
          $assingnment_data['assignment_id']=   $data->assignment_id;

          $assingnment_data['show_assignment_id']=$response->getAssignmentAsOrderId($data->assignment_id, $id);
          $assingnment_data['subject']=$data->subject;
          $assingnment_data['due_date']=date('d-m-y',$data->due_date);
          $r =   $assingnment_data['submitted_date']=date('d-m-y',$data->submitted_date);
          $assingnment_data['status']=$data->status;
          $assingnment_data['reference_style']=$data->reference_style;
          $assingnment_data['no_of_pages']=$data->no_of_pages;
          $u =     $assingnment_data['subtotal']=$data->total_amount;
          $put_in_array[]=$assingnment_data;
          }                           
      return View('admin.dashboard.paid-assignment')->with(['assignment_data'=> $allCompletedAssignment,'idFormation'=>$this->idForFormation]);

    }

 public function stickyNote(Request $request)
  {
    //dd( $request->all());
    $discription  =  $request->discription;
    $aid = $request->id;
   
    DB::table('sticky_notes')->insert(['assignment_id'=> $aid, 'discription'=>$discription]);
    $data = DB::table('sticky_notes')->first();
   // dd( $data);
    return redirect('/show-assignment-details/'.$request->id);
  }

  public function description(Request $request)
  {
    DB::table('assignment_details')->where('assignment_id',$request->id)->update([ 'description'=> $request->discrip]);
    return redirect('/show-assignment-details/'.$request->id);
  }
    public function shownewmodel(Request $request){
     // dd($request->all());
  $id      =       $request->id;
  $subject =     $request->subject;
  $reference =    $request->ref_style;
  $no_of_pages =    $request->noofpage;
  $due_date =    strtotime($request->date);
      DB::table('assignment_details')->where('assignment_id',$id)->update(['subject'=>  $subject,'reference_style'=>  $reference,'due_date'=> $due_date,'no_of_pages'=>$no_of_pages]);
        return redirect('show-assignment-details/' .  $id  )->with('status','Solution is sucessfully uploaded');

    } 
    }

    

<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\Request;
use DB;
use Auth;
use Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\SendResponseController;
use App\Http\Controllers\NotificationController;
use Validator;
use File;
use \App\User;
//use Symfony\Component\HttpFoundation\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function myProfile()
    {
     $logged_in_iser=Auth::user()->id;
     $user_data = DB::table('users')->where('id',$logged_in_iser)->first();

     
     if($user_data)
     {
         return view('dashboard.profile-page')->with('results', $user_data);
         
    }  
     else
     {
         return redirect('/my-profile');//with error messge , there is some problem in fettching your data||
     }
     
        
    }   
    
    public function updateProfile(Request $request)
    {
        
        //  $validator = Validator::make($request->all(), [
                
         //             
          //          'name' => 'required',
          //          'email' => 'required',
           ////         'phone_number' => 'required',
           //         'about_me' => 'required',
           //         'address' => 'required',
            //      'new_password'  => 'required',
            //        'qualification' => 'required'
                    //'id' => 'required',
                    
                    
    //  //  ]);
     //   $messages = 'please fill all feilds';
      //  if ($validator->fails()) {
     
     //    return Redirect::to('/my-profile')
      //                          ->withInput()
                 //               ->withErrors($messages);
       //    
       // }
        $profileImgRealPath='';
        $name=Input::get('name');
        $email=Input::get('email');
        $new_password=Input::get('new_password');
        $number = Input::get('phone_number');
        $profile_pic=Input::get('profile_picture');
        $about_me=Input::get('about_me');
        $address= Input::get('address');
        $qualification = Input::get('qualification');
       $defaultImgPath='public/profile_pics/graduate.png';             
       $checkImg=User::find(Auth::user()->id)->profile_image;
             $file = Input::file('profile_picture');
             if($file!=null)
             {
                $newfile = $file->getClientOriginalName();
                $fullpath = $file->move('public/profile_pics', $newfile);
                $profileImgRealPath = str_replace('\\', '/', $fullpath);
             }
            
        
        
        if($new_password!=null&&$new_password!=''&&!empty($new_password))
        {   
        $encryptedPassword=bcrypt($new_password);
		if($profileImgRealPath!=null||!empty($profileImgRealPath))
		{
	
	        DB::table('users')->where('id',Auth::user()->id)->update(['name'=>$name,'contact_no'=>$number,'password'=>$encryptedPassword,
	        'profile_image'=>$profileImgRealPath,'about_me'=>$about_me,'education_qualification'=>$qualification,'address'=>$address]);
	        }
	       else
		{
                
                 if($checkImg!=null)	
	         {
		DB::table('users')->where('id',Auth::user()->id)->update(['name'=>$name,'contact_no'=>$number,'password'=>$encryptedPassword,
               'about_me'=>$about_me,'education_qualification'=>$qualification,'address'=>$address]);
		 }
		else
		{	          
	        DB::table('users')->where('id',Auth::user()->id)->update(['name'=>$name,'contact_no'=>$number,'password'=>$encryptedPassword,
	        'profile_image'=>$defaultImgPath,'about_me'=>$about_me,'education_qualification'=>$qualification,'address'=>$address]);
               }
                }
     } 
        else
        {
		if($profileImgRealPath!=null||!empty($profileImgRealPath))
		{
	        DB::table('users')->where('id',Auth::user()->id)->update(['name'=>$name,'contact_no'=>$number,
               'profile_image'=>$profileImgRealPath,'about_me'=>$about_me,'education_qualification'=>$qualification,'address'=>$address]);    
       	       }
               else
              {

                if($checkImg!=null)	
		{
                 DB::table('users')->where('id',Auth::user()->id)->update(['name'=>$name,'contact_no'=>$number,
                 'about_me'=>$about_me,'education_qualification'=>$qualification,'address'=>$address]);    
		}
                else
	        {
	        DB::table('users')->where('id',Auth::user()->id)->update(['name'=>$name,'contact_no'=>$number,
               'profile_image'=> $defaultImgPath,'about_me'=>$about_me,'education_qualification'=>$qualification,'address'=>$address]);    
                }
             }

        }  
       Session::flash('update_profile','You have successfully updated your profile');
       return redirect('/my-profile')->with('status', 'Profile updated!');
    }     


    public function retrieveForgottenPassword()
    {   
         $response=new SendResponseController();
         $notification= new NotificationController();
         $forgetPassword = @file_get_contents('php://input');
         $forgetPasswordData = json_decode($forgetPassword, true);
       
         if(!isset($forgetPasswordData['email']))
         {
             return $response->responseData('false', 'Unable to get the email id', '');
         }
        

        $userEmail = $forgetPasswordData['email'];
        
        $gotUserEmail=DB::table('users')->where('email',$userEmail)->get();
        if($gotUserEmail)
        {
            $generatePassword = str_random(5);
            $encryptPassword = bcrypt($generatePassword);
            try
            { 
            DB::table('users')->where('email',$userEmail)->update(['password'=>$encryptPassword]);
            //Send Mail Function
                $userObj = DB::table('users')->where('email',$userEmail)->first();
                if($userObj)
                {
                    if($userObj->name!=null)
                    {
                        $name=$userObj->name;
                    }   
                    else
                    {
                        $name = $userEmail.' (Set your name from your dashboard profile page)';
                    }  
                }
                else
                {
                    $name = $userEmail.' (Set your name from your dashboard profile page)';
                } 
                
                $send_mail['send_to']   = $userEmail;
                $send_mail['name']      = $name;
                $send_mail['subject']   = "Your Password is here";
                $send_mail_array[]      = $send_mail;
                
                $variables['welcome_name']  = $name;
                $variables['order_id'] = 'BAE-1-4-005';
                $variables['referral_code']='$referral_code';
                $variables_array[]=$variables;
                $notification->sendMail($send_mail_array, 'emails.forget-password', $variables_array);
                
            
            //End of Send Mail Function
            
            return $response->responseData('true','Thank you for your request to update password, we have sent you a mail along with password','');  
            }
            catch(Exception $ex)
            {
             return $response->responseData('false','Oops! Unable to retrieve password at this time, please try again later','');  
            }

        }
        else
        {
            return $response->responseData('false','Oops! The given email id doesn’t exists in our system, please provide a registered email id or register with a new email id from the registration page','');
        }



    }

        public function getplagi()
        {
            return view('dashboard.plagicheck');
        }

        public function getplagidata(Request $request)
        {
            $response = new SendResponseController();
            $notification= new NotificationController();            

            $plain_password     =str_random(5);
            $enccrypted_password=bcrypt($plain_password);
            $due_date    = strtotime(str_replace('/', '-', $request->plagi_duedate));
            $total_amount = $request->no_of_pages * 5;
            try
            {
                $user_id=DB::table('users')->insertGetId(['name'=>$request->name, 'email'=>$request->email,'password'=>$enccrypted_password,'profile_image'=>'public/profile_pics/graduate.png','contact_no'=>$request->phone]);
                
                if($user_id)
                {   
                    $unique_referral_code = strtoupper(substr('ANY',0,3)).'~'.$user_id.'~'. strtoupper(str_random(5));
                    DB::table('user_referral')->insert(['uid' => $user_id, 'referral_code' => $unique_referral_code,'time'=>time()]);
                    DB::table('role_user')->insert(['role_id'=>3,'user_id'=>$user_id]);
                }
                
                $user_object=User::find($user_id);
                Auth::login($user_object);

                $last_assignment_id  = DB::table('assignment_details')->insertGetId(['uid'=>$user_id ,'subject'=> $request->subject ,'due_date'=> $due_date , 'submitted_date'=>time(), 'no_of_pages'=>$request->no_of_pages,'total_amount'=>$total_amount."USD",'status'=>'processing','solution_available'=> 0, 'time'=>time()]);
                $lastAssignmentDetails = DB::table('assignment_details')->where('uid',$user_id )->first();

                $questionFile = $request->file("question_file");
                $plagiFile= $request->file("plagi_file");

                if($questionFile!=null && $plagiFile!=null)
                {
                    $mime = $request->question_file->getClientMimeType();
                    $extension = $request->question_file->getClientOriginalExtension();
                    $request->question_file->path();
                    $newfile =  $questionFile->getClientOriginalName();
                    $filename = $questionFile->getFilename() . "." . $extension;
                    Storage::put('/' . $newfile, file_get_contents($request->file('question_file')->getRealPath()));

                    $mime1 = $request->plagi_file->getClientMimeType();
                    $newfile1 =  $plagiFile->getClientOriginalName();
                    $plagiFilePath = $plagiFile->move(public_path() . '/plagi_uploads',  $newfile1);
                    $profileImgRealPath1 = str_replace('\\', '/', $plagiFilePath);

                    DB::table('assignment_files')->insertGetId(['filename'=>$newfile ,'mime'=> $mime ,'original_filename'=> $newfile , 'assignment_id'=> $lastAssignmentDetails->assignment_id]);
                    DB::table('plagi_files')->insertGetId(['plagi_filename'=>$newfile1  ,'plagi_mime'=> $mime1 ,'plagi_original_filename'=> $newfile1 , 'assignment_id'=> $lastAssignmentDetails->assignment_id]);
                }

               // Use Mail Function Here
                $send_mail['send_to']   =$request->email;
                $send_mail['name']      =$request->name;
                $send_mail['subject']   ="Your Check Plagi Assignment Registration placed successfully";
                $send_mail_array[]=$send_mail;

                $variables['welcome_name']  = $request->name;
                $variables['order_id']      = $response->getAssignmentAsOrderId($last_assignment_id,$user_id);
                $variables['referral_code'] = $unique_referral_code;
                $variables['password']      = $plain_password;
                $variables_array[]=$variables;

                $notification->sendMail($send_mail_array, 'emails.plagi-order-registration', $variables_array);
                //End of mail Function 

                return redirect('/users/dashboard');
            }
            catch(Exception $ex)
            {
              Session::flash('place_order_exception','Oops we got an error while taking your form data, It seems that you have tried to submit the form multiple times or Please check your email') ; 
              return redirect('/users/dashboard');
            }
        }
           
    
    
}

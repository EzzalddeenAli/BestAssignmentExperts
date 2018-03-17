<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SendResponseController;

use App\Http\Requests;
use Auth;
use DB;
use Session;
use Input;
use App\User;
use  Mail;



class MainSitePageController extends Controller
{

    public  function emailSubscriber()
    {
       $email=Input::get('email');
       $userSubscribers=DB::table('email_subscribers')->where('email_id',$email)->get();
      
       if($userSubscribers)
       {
       Session::flash('site_mail_error','Oops, You have already subscribed for newsletter');    
       return redirect('/');
       }   
       DB::table('email_subscribers')->insert(['email_id'=>$email,'time'=>time()]);
       Session::flash('site_mail_success','Thank You have been successfully subscribed your newsletter');
       return redirect('/'); 
        
    }        
    
   public function queryEmailFromFooterSitePage(Request $request)
   {

      // $userdetails = array();
       $response = new SendResponseController();
       $emailFrom    = 'contact@bestassignmentexperts.com';
       $name         = 'From Contact Us BAE';
       $subject      = ' CONTACT US FORM';
          $userdetails    =   explode("&",$request->values);
            $userdetails[4] =  str_replace("%40","@","$userdetails[4]");
             $userdetails[4] =  str_replace("%23","#","$userdetails[4]");
             $userdetails[3] =  str_replace("%40","@","$userdetails[3]");
             $userdetails[3] =  str_replace("%23","#","$userdetails[3]");
             $userdetails[4] =  str_replace("%24","$","$userdetails[4]");
             $userdetails[4] =  str_replace("%25","%","$userdetails[4]");
             $userdetails[3] =  str_replace("%24","$","$userdetails[3]");
             $userdetails[3] =  str_replace("%25","%","$userdetails[3]");
             $userdetails[4] =  str_replace("%26","&","$userdetails[4]");
             $userdetails[3] =  str_replace("%26","&","$userdetails[3]");
             $userdetails[4] =  str_replace("%5E","^","$userdetails[4]");
             $userdetails[3] =  str_replace("%5E","^","$userdetails[3]");
             $userdetails[3] =  str_replace("%2C",",","$userdetails[3]");
             $userdetails[4] =  str_replace("%2C",",","$userdetails[4]");
             $userdetails[2] =  str_replace("+"," ","$userdetails[2]");
             $userdetails[4] =  str_replace("%2B","+","$userdetails[4]");
             $userdetails[3] =  str_replace("%2B","+","$userdetails[3]");
             $userdetails[3] =  str_replace("%3F"," ","$userdetails[3]");
             $userdetails[4] =  str_replace("%3F"," ","$userdetails[4]");
             $userdetails[3] =  str_replace("%22"," ","$userdetails[3]");
             $userdetails[4] =  str_replace("%22"," ","$userdetails[4]");
           
       $body         = (str_replace("+"," ","$userdetails[0]")) ."\r\n".(str_replace("%40","@","$userdetails[1]"))."\r\n".(str_replace("%2B","+","$userdetails[2]"))."\r\n". (str_replace("+"," ","$userdetails[3]"))."\r\n".(str_replace("+", " ", "$userdetails[4]"));
       $returnValue =  $this->sendMailFromSitePage($name,$emailFrom,$subject,$body);
      
       
       if($returnValue=='success')
       {
           return $response->responseData('success', '', '');
       }  
       else
       {
           return $response->responseData('error', '', '');
       }  
   }     

   public function queryEmailFromRightsidebarSitePage()
   {
       $emailFrom   = 'contact@bestassignmentexperts.com';//Input::get('email');
       $name        = Input::get('name');
       $subject     = Input::get('subject');
       $body        = Input::get('body');
       $this->sendMailFromSitePage($name,$emailFrom,$subject,$body);
       
   }        
   public function sendMailFromSitePage($name,$emailFrom,$subject,$body)
   {
      
      
        $adminUser    =  Db::table('users')
                        ->join('role_user','role_user.user_id','=','users.id')
                        ->where('role_user.role_id','=','1')
                        ->get();
    
      try
      {
            
           $adminEmail='bestassignmentexperts@gmail.com';
           
                Mail::raw($body,  function($message) use($emailFrom,$name,$adminEmail,$subject)
                {
                 $message->to($adminEmail)->subject($subject)->from($emailFrom,$name);
                });
         
        return "success";
        
    
          
      } 
       catch(\Exception $ex)
       {
        
           return redirect('/'); 
        
       }
       
   }   
  public function getemail(Request $request){
            $emailFrom ='contact@bestassignmentexperts.com';
            $subject ="Regarding Callback";
            $email_to ="bestassignmentexperts@gmail.com";
           $email = $request->email;
           $country_code  =  $request->country_code; 
           $phone  =  $request->phone; 
           $date  =  $request->date; 
           $time   = $request->time;
           $body ="A New User coming from call back :". $email . "\r\n" ."country_name:" . $country_code ."\r\n" ."Phone number:"  . $phone."\r\n" ."Date:"  .  $date."\r\n" ."Time:"  .   $time ;
           Mail::raw($body,  function($message) use($emailFrom,$email_to,$subject)
           {
                 $message->to($email_to)->subject($subject)->from($emailFrom);
           });
                      Session::flash('send_mail_callback','Thank you for your request, We shall call you soon!!')  ;

             return redirect("/");       
      }  
     
}


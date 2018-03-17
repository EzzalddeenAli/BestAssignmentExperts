<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Mail;
use DB;
use Auth;
use Symfony\Component\HttpFoundation\Request;
use Session;

class NotificationController extends Controller
{
    
    public function sendSmsViaPlivo()
    {
        
    }
    public function sendMail($mail_data,$template,$variables='')
    {
        

         Mail::send($template, ['key' => $variables], function($message) use($mail_data)
         {
             foreach ($mail_data as  $value) 
             {
             
               $message->to($value['send_to'], $value['name'])->subject($value['subject']);
             }
         });
        
        
    }        
    public function sendMailForFastContact(Request $request)
    {
        $email_to = $request->email;
        $subject  = $request->subject;
        $body    =  $request->message;
        $emailFrom ='contact@bestassignmentexperts.com';
        $name ="BEST ASSIGNMENT EXPERTS";
                
        try
        {
          Session::flash('mail-send','Your mail has been sent')  ;
          Mail::raw($body,  function($message) use($emailFrom,$name,$email_to,$subject)
           {
                 $message->to($email_to)->subject($subject)->from($emailFrom,$name);
           });
         return redirect('/users/dashboard');
        }
        catch(Exception $ex)
        {
          Session::flash('mail-send','unable to send mail');
          return redirect('/users/dashbaord');  
        }
    }

            
    
}

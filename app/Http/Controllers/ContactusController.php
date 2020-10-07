<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Contactus;
class ContactusController extends Controller
{
   public function contact()
   {
    return view('contactus');
   }


   public function contactUSPost(Request $request)
   {
dd($request->all());

  $this->validate($request, [ 'fname' => 'required','lname' => 'required','mobile' => 'required','subject' => 'required', 'email' => 'required|email', 'message' => 'required' ]);

        $data = array(
           'email' => $request->email,
           'lastname' => $request->lname,
           'firstname' => $request->fname,
           'subject' => $request->subject,
           'mobile' => $request->mobile,

           'user_message' => $request->message
       );

// dd($data);

      Contactus::create($request->all());

      Mail::send('email.name', $data, function($message) use ($data){
       $message->to('support@rainbowpresscourier.com');
       $message->subject($data['subject']);
   });
//    Mail::send('email.sender', $data, function($message) use ($data){

//        $message->to($data['email']);
//        $message->subject($data['subject']);


//    });

    // return back()->flash('Message')->success();
    return view('contactsent');
   }
}

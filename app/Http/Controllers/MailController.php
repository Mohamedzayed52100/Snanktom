<?php

namespace App\Http\Controllers;

use App\Jobs\ACtiveUserJobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\notifymail;
use FFI\Exception;
use Illuminate\Support\Facades\DB;

class MailController extends Controller
{
    public function index(){


        $email=DB::table('users')->where('id'  , 1)->get();
        // return dd($email);
        $r='mohamedzayed52100@gmail.com';
        $data =[
            'subject' =>'mohamed zayed' ,
            'body' =>'alaa ibrahim mahfouz' ,

        ];
        try{
            Mail::to($r)->send(new notifymail($data));
            return response()->json(['great check your box']);

        }catch(Exception $e){
            return response()->json([' sorry  not check your box']);

        }

    }
    public function emailSend(){
        $data ="this is data";
        Mail::send('email'  ,compact('data') , function($message){
            $message->from('ttrouth085@gamil.com'  , 'test mail truth');
            $message->to('mohamedzayed52100@gamil.com'  , 'test mail zayed');
            $message->subject('test mail truth');///('mohamedzayed52100@gamil.com'  , 'test mail zayed');
         //   $message->attach(public_path('api1.txt'));///('mohamedzayed52100@gamil.com'  , 'test mail zayed');

        });
        return response()->json(['satus' => 'good send']);

        /*
         function ($message) {
            $message->from('john@johndoe.com', 'John Doe');
            $message->sender('john@johndoe.com', 'John Doe');
            $message->to('john@johndoe.com', 'John Doe');
            $message->cc('john@johndoe.com', 'John Doe');
            $message->bcc('john@johndoe.com', 'John Doe');
            $message->replyTo('john@johndoe.com', 'John Doe');
            $message->subject('Subject');
            $message->priority(3);
            $message->attach('pathToFile');
        }); */

    }

}

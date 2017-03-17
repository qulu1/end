<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Message;
use Mail;


class MessageController extends Controller
{
    // public function __construct(){

    //     return $this->middleware('auth');

    // }
    public function mail(Request $request){
        $data = ['email' => $request->email, 'subject' => $request->subject, 'bodymessage' => $request->message];

        Mail::send('emails.email', $data, function($message) use($data)
        {
            $message->to('info@endorphin.az')
            ->subject('Subject is : ' . $data['subject']);
        });
        return redirect('/');
    }
            
    public function index(){

    	$message = Message::all();
    	return view('admin.message',compact('message'));

    }

    public function store(Request $request){

		$message = new Message;
		$message->email = $request->email;
		$message->subject = $request->subject;
		$message->message = $request->message;
		$message->save();
		return back();
    }
    public function destroy($id){

    	$message = Message::find($id);
    	$message->delete();
    	return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class MessageController extends Controller
{
    //submit form
    public function submit(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required',
    		'email' => 'required'
    		]);
    	

    	$message = new Message;
    	$message->name = $request->input('name');
    	$message->email = $request->input('email');
    	$message->message = $request->input('message');
    	$message->save();

    	return redirect('/contact')->with('success','Message has been sent.');
	}

	public function getMessages()
	{
		$message = Message::all();

		return view('layouts.message')->with('messages',$message);
	}
}

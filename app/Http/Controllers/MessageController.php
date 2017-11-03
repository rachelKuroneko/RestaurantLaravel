<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Reservation;

class MessageController extends Controller
{

    public function index(){
        $messages = Message::get();
        return view('messages.index', compact('messages'));
        // view('welcome', compact('name', 'date'));
    }


    public function show($messageId){
        $message = Message::find($messageId);
        return view('messages.show', compact('message'));    
    }

    public function update(Request $request, $messageId){
        $input = $request->all();
        $message = Message::find($messageId);
        $message->fill($input)->save();
        return json_encode($message);
    }

    public function store(Request $request){
    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required',
    		'subject' => 'required'
    		]);

        $input = $request->all();
        $message = Message::create($input);
        return json_encode($message);

    	// return redirect('/')->with('success', 'Message Sent');
    }


}




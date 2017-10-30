<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Reservation;

class messagesController extends Controller
{
    public function submit(Request $request){
    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required',
    		'subject' => 'required'
    		]);

    	//return 'SUCCESS';

    	//Create new Message (model name)
    	//Create new message variable 

    	$message = new Message;
    	$message->name = $request->input('name');
    	$message->email = $request->input('email');
    	$message->subject = $request->input('subject');
    	$message->message = $request->input('message');

    	// Save the message
    	$message->save();

    	// Redirect
    	return redirect('/')->with('success', 'Message Sent');
    }

    public function submit_reserve(Request $request){
    	$this->validate($request, [
    		'first_name' => 'required',
    		'last_name' => 'required',
    		'state' => 'required',
    		'datepicker' => 'required',
    		'phone' => 'required',
    		'guest' => 'required',
    		'email' => 'required',
    		'subject' => 'required'
    		]);

    	//return 'SUCCESS';

    	//Create new Reservation (model name)
    	//Create new Reservation variable 

    	$reservation = new Reservation;
    	$reservation->first_name = $request->input('first_name');
    	$reservation->last_name = $request->input('last_name');
    	$reservation->state = $request->input('state');
    	$reservation->datepicker = $request->input('datepicker');
    	$reservation->phone = $request->input('phone');
    	$reservation->guest = $request->input('guest');
    	$reservation->email = $request->input('email');
    	$reservation->subject = $request->input('subject');

    	// Save the message
    	$reservation->save();

    	// Redirect
    	return redirect('/')->with('success', 'Message Sent');
    }

    // Get messages from contact
    public function getMessages()
    {
        // getting all the message from "Message" database
        $messages = Message::all();

        // then pass the messages to view from the actual data from the $message variable
        return view('displayMessages')->with('messages', $messages);
       
    }

    // Get messages from reservation
    public function getMessages_reserve()
    {
	    $reservations = Reservation::all();
	    
	    return view('reservationMessages')->with('reservations', $reservations);
	}
}




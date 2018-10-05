<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\register;  //model name

class registerController extends Controller
{
    public function submit(Request $request){
    	$this->validate($request,[
    		'username'=>'required',
    		'password'=>'required',
    		'email'=>'required'
    	]);

    	//create a new register
    	$message = new register;
    	$message->username = $request->input('username');
    	$message->password = $request->input('password');
    	$message->email = $request->input('email');
    	$message->hobbies = $request->input('hobbies');
    	//Save message
    	$message->save();
    	//redirect

    	return redirect('/')->with('success','Message Sent'); 
    	// $request->input('username');
    }
}

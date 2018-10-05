<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\task;  //model name

class createController extends Controller
{
    public function submit(Request $request){
    	$this->validate($request,[
    		'date'=>'required',
    		'fixture_datefrom'=>'required',
    		'fixture_dateto'=>'required',
    		'task'=>'required'
    	]);

    	//create a new Task
    	$post = new task;
    	$post->date = $request->input('date');
    	$post->from = $request->input('fixture_datefrom');
    	$post->to = $request->input('fixture_dateto');
    	$post->task = $request->input('task');
    	$post->person = $request->input('person');
        $post->status = $request->input('status');
    	$post->user_id = auth()->user()->id;
    	//Save message
    	$post->save();
    	//redirect

    	return redirect('/')->with('success','Task Created'); 
    	// $request->input('username');
    }

    public function edit(Request $request){
        // $this->validate($request,[
        //     'date'=>'required',
        //     'fixture_datefrom'=>'required',
        //     'fixture_dateto'=>'required',
        //     'task'=>'required'
        // ]);

        //create a new Task
        $user = DB::table('tasks')->where('user_id', '1')->first();
        
        $id = $request->route('taskid');
        $post = task::find($id);
        return view::make('task.update')->with('task',$tasks);
         // return View::make('user.createOrUpdate')->with('user', $user);
        // $post->date = $request->input('date');
        // $post->from = $request->input('fixture_datefrom');
        // $post->to = $request->input('fixture_dateto');
        // $post->task = $request->input('task');
        // $post->person = $request->input('person');
        // $post->user_id = auth()->user()->id;
        // //Save message
        // $post->save();
        // //redirect

        // return redirect('/')->with('success','Task Created'); 
        // $request->input('username');
    }

    public function getTask(){
        $id = auth()->user()->id;
        $tasks = DB::table('tasks')->where('user_id', $id)->get();
        // $tasks = task::all();
        return view('task')->with('task',$tasks);
    }

    public function update(Request $request, $taskid)
    {
        $this->validate($request,[
            'date'=>'required',
            'fixture_datefrom'=>'required',
            'fixture_dateto'=>'required',
            'task'=>'required'
        ]);

        //Create a task
        $post = task::find($taskid);
        $post->date = $request->input('date');
        $post->from = $request->input('fixture_datefrom');
        $post->to = $request->input('fixture_dateto');
        $post->task = $request->input('task');
        $post->person = $request->input('person');
        $post->status = $request->input('status');
        // $post->user_id = auth()->user()->id;
        //Save message
        $post->save();

    }

    
}

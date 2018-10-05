<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use App\task;
use DB;


class chartController extends Controller
{
    public function index(){

    	$users = task::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))

    				->get();

        $chart = Charts::database($users, 'bar', 'highcharts')

			      ->title("Monthly new Task Registered")

			      ->elementLabel("Total Tasks")

			      ->dimensions(1000, 500)

			      ->responsive(false)

			      ->groupByMonth(date('Y'), true);

        return view('chart',compact('chart'));
       
    }

    public function read(){
    	 $post= Post::find(1);
    	 echo $post->id;

    }
}

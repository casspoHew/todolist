@extends('layouts.app')

@section('content')
<div class="container">
<h2 algin="center">Yours To do List </h2>
<span><a href="dashboard">Dashboard</a></span>
@if(count($task)>0)
  <table class="table table-hover">
  <thead>
  	<tr>
  <th scope="col">Date</th>
  <th scope="col">Time(From)</th>
  <th scope="col">Time(To)</th>
  <th scope="col">Task</th>
  <th scope="col">Person</th>
  <th scope="col">Status</th>
  <th colspan='2' align="center">Action</th>
  </tr>
</thead>
<tbody>
  @foreach($task as $tasks)
  <tr class="table-primary">
   	<td class="table-primary">{{$tasks->date}}</td>
  	<td class="table-primary">{{$tasks->from}}</td>
  	<td class="table-primary">{{$tasks->to}}</td>
  	<td class="table-primary">{{$tasks->task}}</td>
  	<td class="table-primary">{{$tasks->person}}</td>
  	<td class="table-primary">{{$tasks->status}}</td>
  	<!-- <td><a href="{{ url('update/' . $tasks->id . '/edit') }}">Update</a> -->
  	<td class="table-primary"><a href="update?taskid={{$tasks->id}}">Update</td>
  	<td class="table-primary"><a href="delete?taskid={{$tasks->id}}">Delete</td>
  </tr> 
   @endforeach
</tbody>
</table>
 @endif  
</div>
@endsection

<!-- <ul class="list-group">
   	<li class="list-group-item">Date:{{$tasks->date}}</li>
   	<li class="list-group-item">From:{{$tasks->from}}</li>
   	<li class="list-group-item">To:{{$tasks->to}}</li>
   	<li class="list-group-item">Task:{{$tasks->task}}</li>
   	<li class="list-group-item">Person:{{$tasks->person}}</li>   	
   </ul> -->
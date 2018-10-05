@extends('layouts.app')

@section('content')
<div class="col-sm=6">
  <h1>Create ToDo List</h1>
  <div class="well">
  {!! Form::open(['url' => 'create/submit']) !!}
    <div class="form-group">
    	{{Form::label('Date', 'Date')}}
    	{{Form::date('date', \Carbon\Carbon::now())}}
    </div>
    <div class="form-group">
    	{{ Form::label('fixture_date', 'From(Time):') }}
        {{ Form::time('fixture_datefrom', \Carbon\Carbon::now()) }}   
        {{ Form::label('fixture_date', 'To:') }}
        {{ Form::time('fixture_dateto', \Carbon\Carbon::now()) }}          
    </div>
    <div class="form-group">
    	{{Form::label('task', 'To Do Task')}}
    	{{Form::text('task', '',['class' => 'form-control', 'placeholder'=> 'Write your todo task'])}}
    </div>
    <div class="form-group">
    	{{Form::label('person', 'With Who')}}
    	{{Form::text('person', '',['class' => 'form-control', 'placeholder'=> 'Person name'])}}
    </div>
 
     <div class="form-group">
    	{{Form::label('status', 'Completion Status')}}
    	{{Form::select('status', array('have yet to complete' => 'have yet to complete', 'completed' => 'completed', 'in progress' => 'in progress'))}}
    	<!-- {{Form::text('status', '',['class' => 'form-control', 'placeholder'=> 'Status'])}} -->
    </div>
  
  
  <div>
    	{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
  </div>


 {!! Form::close() !!}
 </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="col-sm=6">
  <h1>Edit ToDo List</h1>
  <div class="well">
  
  {{Form::model(task, ['method'=>PUT,
     'route'=>['createController.update', $task->id]])}}

    <div class="form-group">
    	{{Form::label('Date', 'Date')}}
    	{{Form::date('date',old('date'), \Carbon\Carbon::now())}}
    </div>
    <div class="form-group">
    	{{ Form::label('fixture_date', 'From(Time):') }}
        {{ Form::time('fixture_datefrom',old('fixture_datefrom'), \Carbon\Carbon::now()) }}   
        {{ Form::label('fixture_date', 'To:') }}
        {{ Form::time('fixture_dateto', old('fixture_dateto'), \Carbon\Carbon::now()) }}          
    </div>
    <div class="form-group">
    	{{Form::label('task', 'To Do Task')}}
    	{{Form::text('task', '',old('task'),['class' => 'form-control', 'placeholder'=> 'Write your todo task'])}}
    </div>
    <div class="form-group">
    	{{Form::label('person', 'With Who')}}
    	{{Form::text('person', old('person'),['class' => 'form-control', 'placeholder'=> 'Person name'])}}
    </div>
 
     <div class="form-group">
    	{{Form::label('status', 'Completion Status')}}
    	{{Form::text('status',old('status'),['class' => 'form-control', 'placeholder'=> 'Status'])}}
    </div>
  
  
  <div>
    	{{Form::submit('Update', ['class'=>'btn btn-primary'])}}
  </div>


 {!! Form::close() !!}
 </div>
</div>
@endsection



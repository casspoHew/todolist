@extends('layouts.app')

@section('content')
  <h1>Create ToDo List</h1>
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
    <div>
    	{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    </div>

  {!! Form::close() !!}
@endsection
@extends('layouts.app')

@section('çontent')
  <h1>Registration</h1>
  {!! Form::open(['url' => 'register/submit']) !!}
    <div class="form-group">
    	{{Form::label('username', 'User Name')}}
    	{{Form::text('username', '',['class' => 'form-control', 'placeholder'=> 'Enter name'])}}
    </div>
    <div class="form-group">
        {{Form::label('password', 'Password')}}
    	{{Form::text('password', '',['class' => 'form-control', 'placeholder'=> 'Enter password'])}}
    
    </div>
    <div class="form-group">
    	{{Form::label('email', 'Email')}}
    	{{Form::text('email', '',['class' => 'form-control', 'placeholder'=> 'example@abc.com'])}}
    </div>
    <div class="form-group">
    	{{Form::label('hobbies', 'Hobbies')}}
    	{{Form::text('hobbies', '',['class' => 'form-control', 'placeholder'=> 'Your hobbies'])}}
    </div>
    <div>
    	{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    </div>


  {!! Form::close() !!}
@endsection




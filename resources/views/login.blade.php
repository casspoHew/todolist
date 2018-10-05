@extends('layouts.app')


@section('content')
<h1>Login</h1>

  {!! Form::open(['url' => 'register/submit']) !!}
    <div class="form-group">
    	{{Form::label('username', 'User Name')}}
    	{{Form::text('username', '',['class' => 'form-control', 'placeholder'=> 'Enter name'])}}
    </div>
    <div class="form-group">
        {{Form::label('password', 'Password')}}
    	{{Form::text('password', '',['class' => 'form-control', 'placeholder'=> 'Enter password'])}}
    
    </div>  
    <div>
    	{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    </div>


  {!! Form::close() !!}
@endsection

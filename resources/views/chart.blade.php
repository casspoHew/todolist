@extends('layouts.app')

@section('content')
<div class="app">
	<div class="container">

		<h1>No of To Do Tasks Posted</h1>

		{!! $chart->render() !!}

	</div>
@endsection

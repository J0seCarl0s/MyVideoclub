@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-sm-4">
			<img src="{{$film['poster']}}" style="">
		</div>

		<div class="col-sm-8">
			<h1>{{ $film['title'] }}</h1>
			<h3>Year: {{ $film['year'] }}</h3>
			<h3>Director: {{ $film['director'] }}</h3>
			<p><b>Synopsis: </b>{{ $film['synopsis'] }}</p>
			<p><b>State: </b>
				@if($film['rented'])
					This film is currently rented
				@else
					This film is available
				@endif
			</p>
			<div class="row">
				<div class="col-sm-12">
				@if($film['rented'])
					<a class="btn btn-danger">Take back film</a>
				@else
					<a class="btn btn-primary">Rent film</a>
				@endif
				<a class="btn btn-warning" href="{{ url('/catalog/edit/1') }}"><span class="glyphicon glyphicon-pencil"></span> Edit film</a>
				<a class="btn btn-default" href="{{url('/catalog')}}">Return to the list</a>
				</div>
			</div>
		</div>
	</div>
@stop
@extends('layouts.master')

@section('content')
	<div class="row" style="margin-top:40px">
	   <div class="offset-md-3 col-md-6">
	      <div class="card">
	         <div class="card-header text-center">
	            <b>Edit film</b>
	         </div>
	         <div class="card-body" style="padding:30px">
				<form method="POST">
		            {{ csrf_field() }}

		            <div class="form-group">
		               <label for="title">Título</label>
		               <input type="text" name="title" id="title" class="form-control" value="{{ $film['title'] }}">
		            </div>

		            <div class="form-group">
		            	<label for="year">Year</label>
		               	<input type="text" name="year" id="year" class="form-control" value="{{ $film['year'] }}">
		            </div>

		            <div class="form-group">
		               	<label for="year">Director</label>
		               	<input type="text" name="director" id="director" class="form-control" value="{{ $film['director'] }}">
		            </div>

		            <div class="form-group">
			            <label for="year">Upload a poster</label>
		               	<input class="year-only" type="file" name="poster" id="poster" >
		            </div>

		            <div class="form-group">
		               <label for="synopsis">Resumen</label>
		               <textarea name="synopsis" id="synopsis" class="form-control" rows="3" >{{ $film['synopsis'] }}</textarea>
		            </div>

		            <div class="form-group text-center">
		               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
		                   Añadir película
		               </button>
		            </div>

		        </form>
	         </div>
	      </div>
	   </div>
	</div>
@stop
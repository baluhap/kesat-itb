@extends('layouts.layout')

@section('title')
	Report Page
@endsection

@section('content')

	<form class="form-horizontal" method="POST" action="/report" enctype="multipart/form-data" id="form_report">
		{{csrf_field()}}
		<div class="form-group">
    		<label for="name">Nama:</label>
    		<input type="text" class="form-control" id="name">
  		</div>
		<div class="form-group">
		   	<label for="picture">File:</label>
			<input type="file" class="form-control" name="picture">
		</div>
		<div class="form-group">
			<label for="name">Deskripsi:</label>
			<textarea name="description" form="form_report" class="form-control" rows="5">Tulis keluhan anda disini</textarea>
		</div>
		<button type="submit">Test</button>
	</form>
@endsection

@extends('layouts.layout')

@section('title')
	Report Page
@endsection

@section('content')

	<form class="form-horizontal" method="POST" action="/report" enctype="multipart/form-data" id="form_report">
		{{csrf_field()}}
		<div class="form-group">
    		<label for="id_reporter">ID Reporter:</label>
    		<input type="text" class="form-control" name="id_reporter">
  		</div>
		<div class="form-group">
		   	<label for="picture">File:</label>
			<input type="file" class="form-control" name="picture">
		</div>
		<div class="form-group">
			<label for="detail">Deskripsi:</label>
			<textarea name="detail" form="form_report" class="form-control" rows="5" placeholder="Tuliskan Keluhan Anda Di Sini"></textarea>
		</div>
		<div class="form-group">
			<label for="category">Kategori:</label>
		    <input type="radio" id="category1" name="category" value="1">
		    <label for="category1">Sarana</label>

		    <input type="radio" id="category2" name="category" value="2">
		    <label for="category2">Prasarana</label>

		    <input type="radio" id="category3" name="category" value="3">
		    <label for="category3">Lain-Lain</label>
		</div>
		<button type="submit">Test</button>
	</form>
@endsection

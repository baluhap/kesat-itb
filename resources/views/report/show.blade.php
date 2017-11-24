@extends('layouts.layout')

@section('title')
	Detail Laporan
@endsection

@section('content')
		Oleh:
		<br> 
		{{$report->id}}
		Tanggal Submit Laporan:
		{{$report->created_at}}
		Laporan:
		<br>
		<img src="{{ URL::to('/') }}/{{$report->link_photo}}" />
		<br>
		Detail Laporan:
		<br>
		{{$report->detail}}
		Status:
		@if ($report->handle_report=== 0 )
			Belum Ditangani
		@else
			Sudah Ditangani
		@endif
@endsection

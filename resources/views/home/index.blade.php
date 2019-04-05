@extends('layouts.master')
@section('title','Hello')

@section('sidebar')
	@parent
	{{count($students)}}	
	<H1>Hello from chld 1</H1>
	<h1>Student Name:{{$students[0]->name}}</h1>
	<h1>Student id:{{$students[0]->id}}</h1>
@endsection
@section('content')
	<p>Copyright</p>
	
@endsection

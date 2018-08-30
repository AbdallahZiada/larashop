@extends('layouts.master')

@section('title','bodo market')

@section('sidebar')
@parent
	<p>sidebar is here</p>
@endsection

@section('content')
	<h2> hello {{$name}}</h2>
	@if($day == "Friday")
		<p>it's Friday</p>
	@else
		<p>it's not the Friday</p>
	@endif

	<p>today your meal is : 
	@foreach($foods as $food)
		<span>({{$food}})</span>
	@endforeach
	</p>

	<p>And Today's Date is {{date(' D M, Y')}}
@endsection

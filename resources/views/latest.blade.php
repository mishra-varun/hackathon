@extends('layouts.app')

@section('content')
@if($latest===0)
	<div class="alert alert-danger">
		There are no new notices
	</div>
@else
	<div class="well">Latest notices</div>
	<ul class="list-group">
		@foreach($latest as $l)
			<li class="list-group-item list-group-item-success">
			<a href="{{ $l->id }}"><b>{{ $l->title }}</b>
			</a></li>
		@endforeach
	</ul>
@endif
@endsection
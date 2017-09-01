@extends('layouts.app')

@section('content')
@if($latest===0)
	<div class="alert alert-danger">
		There are no new Reports
	</div>
@else
	<div class="well">Latest Reports</div>
	<ul class="list-group">
		@foreach($latest as $l)
			<li class="list-group-item list-group-item-warning">
			<a href="{{ $l->id }}"><b>{{ $l->title }}</b>
			</a></li>
		@endforeach
	</ul>
@endif
@endsection
@extends('layouts.app')

@section('content')

	<div class="alert alert-success">
		&nbsp;You can create your forms here &nbsp;
	<a href="/feedback/create">Create</a>
	</div>

	<div class="alert alert-info">
		Latest forms
	</div>
	@foreach($fm as $f)
		@if($max!=1)
			@if($f->id!=1)
			&nbsp; <a href="/feedback/{{ $f->id }}">{{ $f->form_name }}</a><hr/>
			@endif
		@else
			Oops. Looks like there are no forms here
		@endif
	@endforeach

@endsection
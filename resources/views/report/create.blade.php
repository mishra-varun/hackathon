@extends('layouts.app')

@section('content')

<div class="container">
	<div class="jumbotron">
		<h2>Create your reports here</h2>
	</div>
</div>
@php
$action="/report/".$path;
@endphp
<div class="container">
  <form action="{{ $action }}" method="post">
  {{ csrf_field() }}
	<div class="row">
		<div class="col-sm-5">
			Title<input type="text" name="title">
		</div>
		<div class="col-sm-4">
			Subtitle<input type="text" name="subtitle">
		</div>
	</div><hr/>
	<div class="row">
		<div class="col-sm-5">
			Date<input type="date" name="date">
		</div>
		<div class="col-sm-4">
			&nbsp;
		</div>
	</div><hr/>Introduction
	<div class="row">
		<div class="col-sm-4">
			<textarea name="intro">
			</textarea>
		</div>
	</div><hr/>Body
	<div class="row">
		<div class="col-sm-4">
			<textarea cols="25" rows="5" name="body">
			</textarea>
		</div>
	</div><hr/>Conclusion
	<div class="row">
		<div class="col-sm-4">
			<textarea name="conc">
			</textarea>
		</div>
	</div>
	<hr/>
	<input type="submit" class="btn btn-primary btn-lg" value="Generate"><hr/>
  </form>
</div>

@endsection
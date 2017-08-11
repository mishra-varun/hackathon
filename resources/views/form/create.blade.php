@extends('layouts.app')

@section('content')

<div class="alert">
	This is where you create new feedback forms
</div>
<form id="form" method="post" action="{{ url('/feedback/store') }}">
	{{ csrf_field() }}
		<div class="button-group">
			Add new field
		<input type="button" value="Create" name="cr" class="btn btn-primary" onclick="create()">
		<hr/>Save
		<input type="button" value="Save" name="sv" class="btn btn-primary" onclick="save()">
	</div>
</form>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
	function create() {
		//$("$form").append
	}
</script>
@endsection
@extends('layouts.app')

@section('content')

@if(Auth::check())
<div class="jumbotron">
	<div class="col-sm-1"> </div><h3> Results</h3>
</div>
<div class="container">
<?php
$count=0;
?>

<table class="table table-bordered">
	<tr class="success">
		@foreach($data as $d)
		@php
		$count++;
		@endphp
		<td>{{ $cols[$count-1] }}</td>
		@endforeach
	</tr>
</table>

<div class="alert alert-info">
	Total number of responses : {{ $count }}
</div>
</div>

@else
<div class="well well-lg">
	You must login to create forms
</div>
@endif

@endsection
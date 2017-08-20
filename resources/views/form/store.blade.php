@extends('layouts.app')

@section('content')

<?php
$url="/feedback/".$num;
?>
@if($num>=0)
<div class="alert alert-success">
	Your feedback form was successfully created
</div>
<div class="alert alert-primary">
	Created by user <b>{{ $name }}</b> on <b>{{ $date }} (GMT)</b>
</div>
<div class="alert alert-primary">
	You can access your form <a href="{{ $url }}">here</a>
</div>

@else
<div class="alert alert-danger">
	This form was not created because you did not enter any fields!
</div>
@endif
@endsection
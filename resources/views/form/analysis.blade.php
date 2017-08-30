@extends('layouts.app')

@section('content')

@if(Auth::check())
<div class="well well-sm">
	<div class="col-sm-1">&nbsp;</div><h4>Results</h4>
</div>
<div class="container">

<div class="alert alert-info">
	Total number of responses : {{ $depth }}
</div>
<ul class="list-group">
	@for($d=0;$d<$depth;$d++)
	<div class="alert alert-success">Response {{ ($d+1) }}</div>
	@for($w=0;$w<$width;$w++)
		<li class="list-group-item">
		<b>{{ strrev(substr(strrev($cols[$w]),1)) }}</b>
		- {{ $data[$w][$d] }}</li>
	@endfor
	@endfor
</ul>

</div>
@else
<div class="well well-lg">
	You must login to create forms
</div>
@endif

@endsection
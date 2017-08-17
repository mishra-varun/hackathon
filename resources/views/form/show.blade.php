@extends('layouts.app')

@section('content')

<div class="alert alert-info">
		&nbsp;This form was created by user
		"{{ $f->created_by }}" on {{ $f->created_at }}
</div>
<div class="row">
	<div class="col-sm-8">
		<form>
			{{ csrf_field() }}
			@foreach($col as $c)
			<?php $sc=strrev(substr(strrev($c), 1));
			?>
			&nbsp;&nbsp;&nbsp;&nbsp;
			{{ $sc }}: <input type="text" name="{{ $c }}"><hr/>
			@endforeach
			<hr/>&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" class="btn btn-primary" name="sbm" value="Save">
		</form>
	</div>
</div>

@endsection
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
  @if($errors->any())
  	<div class="alert alert-danger">
  		All fields are required
  	</div>
  @endif
	<div class="row">
		<div class="col-sm-5">
			Title<input type="text" name="title">
		</div>
	</div><hr/>
	<div class="row">
		<div class="col-sm-5">
			Date<input type="date" name="date">
		</div>
		<div class="col-sm-4">
			&nbsp;
		</div>
	</div><hr/>Event Details
	<div class="row">
		<div class="col-sm-4">
			<textarea name="event_details">
			</textarea>
		</div>
	</div><hr/>Objectives (Separate using Semicolons)
	<div class="row">
		<div class="col-sm-4">
			<textarea cols="25" rows="5" name="objectives">
			</textarea>
		</div>
	</div><hr/>Staff members inolved (Separate using Semicolons)
	<div class="row">
		<div class="col-sm-4">
			<textarea name="staff_involved">
			</textarea>
		</div>
	</div><hr/>
	<div class="row">Participant details (Separate using Semicolons)
		<div class="col-sm-4">
			<textarea name="participants">
			</textarea>
		</div>
	</div><hr/>
	<div class="row">
		<div class="col-sm-4">External Resource people
			<textarea name="external_resource_person">
			</textarea>
		</div>
	</div><hr/>
	<div class="row">
		<div class="col-sm-4">Details of External resource people
			<textarea name="description">
			</textarea>
		</div>
	</div><hr/>
	<div class="row">
		<div class="col-sm-4">Outcomes of the event (Separate using Semicolons)
			<textarea name="outcomes">
			</textarea>
		</div>
	</div><hr/>
	<div class="row">
		<div class="col-sm-4">Learning (Separate using Semicolons)
			<textarea name="learning">
			</textarea>
		</div>
	</div><hr/>
	<div class="row">
		<div class="col-sm-4">Scope for improvment
			<textarea name="scope_for_improvement">
			</textarea>
		</div>
	</div><hr/>
	<div class="row">
		<div class="col-sm-4">Conclusion
			<textarea name="conclusion">
			</textarea>
		</div>
	</div><hr/>
	<div class="row">
		<div class="col-sm-4">Prepared by
			<textarea name="prepared_by">
			</textarea>
		</div>
	</div>
	<hr/>
	<div class="row">
		<div class="col-sm-4">Designation
			<textarea name="designation">
			</textarea>
		</div>
	</div>
	<hr/>
	<input type="submit" class="btn btn-primary btn-lg" value="Generate"><hr/>
  </form>
</div>

@endsection
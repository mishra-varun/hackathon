@extends('layouts.create-lay')

@section('content')
<!--Add if condition here for users not logged in-->

<div class="alert alert-info">
	&nbsp;Create your forms here
</div>
<div class="alert alert-warning">
	&nbsp;Avoid using keywords like varchar, int, Save, create, insert, delete etc.
</div>

<div class="form" id="create-btn">
	<div class="row">
		<form>
			{{ csrf_field() }}
			&nbsp;<div class="col-sm-8">
			<input type="button" value="Add new field" class="btn btn-primary" onclick="addText()" name="text-btn">
			</div>

			<div class="col-sm-2">
			<input type="button" value="Reset" onclick="rst()" class="btn btn-primary" name="reset-btn">
			</div>

		</form>
	</div>
</div>

<form method="post" action="{{ url('/feedback/store') }}">
	{{ csrf_field() }}
	<hr/><hr/>
	<div class="content" align="center" id="main-form-holder">
		<div id="main-form">
			<!--This contains all the real form data(dynamically appended)-->
		</div>
	</div>
	<div class="button-group">
		<hr/>&nbsp;Save and Submit
		<input type="submit" value="Save" name="sv" class="btn btn-primary" onclick="save()">
	</div>
</form>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
//Everything will be done with id's appended
	function addText() {
		var txt=prompt("Add a name for the Text field");
		if (txt.length>0)
		{
			$("#main-form").append("<div class=\"well well-sm\"> "+txt+": &nbsp; <input type=\"hidden\" name=\""+txt+"\" value=\""+txt+"_\">"+"</div>");
		}
		else
		{
			alert("The name cannot be empty");
		}
		//TODO => proper js for appending
	}
	
	function rst() {
		$("#main-form").empty();
	}
</script>


<div class="jumbotron">
	You must login to create forms
</div>


@endsection

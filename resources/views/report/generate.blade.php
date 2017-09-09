<!DOCTYPE html>
<html>
<head>
	<title>Report</title>
	<style type="text/css">
	body
	{
		font-size: 18px;
	}
		#title
		{
			font-weight: bold;
			text-align: center;
			margin: auto;
			width: 50%;
			text-decoration: underline;
		}
		#body{
			text-align: center;
		}
		b{
			font-weight: bold;
			text-decoration: underline;
		}
		#rt
		{
			text-align: right;
		}
	</style>
</head>
<body onload="window.print()">
		<img src="/img/logo.jpg"><br/>
		<p style="text-align: right;">{{ $view->date }}</p>
		<div id="title"><br/>
			{{ $view->title }}
		<br/>
		</div>
		<br/><br/>
		<p>Event details:{{ $view->event_details }}</p>
		<?php
		$obj=explode(";",($view->objectives));
		?><br/>
		<ul>
		@foreach($obj as $o)
		<li>{{ $o }}</li>
		@endforeach
		</ul>
		 <p style="text-decoration: underline;"><b>Staff involved</b></p>
		<?php
		$stf=explode(";", ($view->staff_involved));
		?><br/>
		<ul>
		@foreach($stf as $s)
		<li>{{ $s }}</li>
		@endforeach
		</ul>
		<?php
		$prt=explode(";", ($view->participants));
		?><br/>
		<ul>
		@foreach($prt as $p)
		<li>{{ $p }}</li>
		@endforeach
		</ul>
		<p style="text-decoration: underline;"><b>External Resource people</b>: {{ $view->external_resource_person }}</p>
		<p><b>Description</b>: {{ $view->description }}</p>

		<?php
		$out=explode(";", ($view->outcomes));
		?><br/>
		<ul>
		@foreach($out as $ot)
		<li>{{ $ot }}</li>
		@endforeach
		</ul>

		<?php
		$lrn=explode(";", ($view->learning));
		?><br/>
		<ul>
		@foreach($lrn as $l)
		<li>{{ $l }}</li>
		@endforeach
		</ul>
		<p><b>Scope for improvment</b></p>
		<p>{{ $view->scope_for_improvement }}</p>
		<p><b>Conclusion</b></p>
		<p>{{ $view->conclusion }}</p>
		<br/>
		<div>
			<b>Prepared by</b>
			<span style="text-align: right;"><b>Approved By</b></span>
		</div>
		<div>
			<b>{{ $view->prepared_by }}</b>
			  <span style="text-align: right;"><b>Dr. B.K. Mishra</b></span>
		</div>
		<div>
			<b>{{ $view->designation }}</b>
			<span style="text-align: right;">Principal</span>
		</div>
</body>
</html>
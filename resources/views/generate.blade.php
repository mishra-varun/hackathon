<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	body
	{
		font-size: 18px;
	}
		#title
		{
			font-weight: bold;
			text-align: center;
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
	<title>Generate a report</title>
</head>
<body onload="window.print()">
<img src="{{ asset('images/logo.jpg') }}">
<br/><br/>
<span id="title">
	{{ $view->title }}<br/>
	{{ $view->subtitle }}
</span><br/>
Ref no: {{ $view->ref_num }} <p id="rt">Date: {{ $view->date }}</p>
<p>
	<b> To: {{ $view->to }}</b><br/>
	<b> Sub: {{ $view->subject }}</b>
</p>
<br/><br/>
<p id="body">{{ $view->body }}</p>
<p style="text-align: right">
	<br/><span style="text-decoration: bold">{{ $view->creator_name }}</span><br/>
	{{ $view->designation }}
</p>
<p>Copy to:<br/>
<?php
$arr=explode(',', $view->copy_to);
?>
@foreach($arr as $ar)
	{{ $ar }}<br/>
@endforeach
</p>
</body>
</html>
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
		<img src="/images/logo.jpg"><br/>
		<div id="title"><br/>
			{{ $view->title }}
		<br/>
			{{ $view->subtitle }}
		</div>
		<br/><div id="rt">{{ $view->date }}</div>
		<div style="text-indent: 15px;">
			<p>{{ $view->intro }}</p>
			<p>{{ $view->body }}</p>
			<p>{{ $view->conc }}</p>
		</div>
		<div id="rt">
			Created by <b>{{ $name }}</b>
		</div>
</body>
</html>
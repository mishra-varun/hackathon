@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
     <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Dashboard</div>

            <div class="panel-body">
              Welcome {{ Auth::user()->name }}<hr/>
              <ul style="border-style: solid;border-radius: 6px" class="list-group">
					      <li style="border-bottom: 3px;" class="list-group-item">
					       <a href="/feedback">
					       	Latest Forms
					       </a></li>
					       <li class="list-group-item">
					        <a href="/feedback/create">
					       	Create a Form
					       </a></li>
							<li class="list-group-item">
					       <a href="/notice">
					       	Create a notice
					       </a></li>
					       <li class="list-group-item">
					       <a href="/report">
					       	Create a report
					       </a></li>
			</ul>
           </div>
        </div>
    </div>
  </div>
</div>
@endsection

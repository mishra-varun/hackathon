@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
     <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Dashboard</div>

            <div class="panel-body">
              Welcome {{ Auth::user() }}<hr/>
              <ul class="list-group">
					      <li class="list-group-item">
					       Latest Forms </li>
					       <li style="color: white;background-color: black" class="list-group-item">
					       Create a Form </li>
								 <li class="list-group-item">
					       Latest notices</li>
					       <li style="color: white;background-color: black" class="list-group-item">
					       Create a notice</li>
					       <li class="list-group-item">
					       Latest reports</li>
					       <li style="color: white;background-color: black" class="list-group-item">
					       Create a report</li>
					       </ul>
           </div>
        </div>
    </div>
  </div>
</div>
@endsection

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Activity Hub</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>
    <style>
     body {
      font-family: 'Actor';font-size: 16px;
      }
    </style>
</head>
<body>
  <div id="app">
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/') }}">
            Home
          </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <ul class="nav navbar-nav">
            &nbsp;
          </ul>

          <ul class="nav navbar-nav navbar-right">
            @if (Auth::guest())
              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Register</a></li>
            @else
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                      Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                  </li>
                </ul>
              </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
    <!--
    The layouts/app copy pasted upto here
    -->
    <?php
    $action="/notice/".$path;
    ?>
    <div class="row" style="text-align: center;">
      <form method="POST" action="{{ $action }}">
        {{ csrf_field() }}
        <div class="col sm-6">
            Title: <input type="text" name="title"><hr/>
        </div>
        <div class="col sm-6">
            Subtitle: <input type="text" name="subtitle"><hr/>
        </div>
        <div class="col sm-6">
          Reference Number:<input type="text" name="ref_num"><hr/>
        </div>
        <div class="col sm-6">
            Date: <input type="text" name="date"><hr/>
        </div>
        <div class="col sm-6">
            Addressed To: <input type="text" name="to"><hr/>
        </div>
        <div class="col sm-6">
            Subject: <input type="text" name="subject"><hr/>
        </div>
        <div class="col sm-6">
           <div class="container"><div class="jumbotron">Body of report</div></div>
           <textarea cols="35" rows="10" name="body"></textarea><hr/>
        </div>
        <div class="col sm-6">
          Created by: <input type="text" name="creator_name"><hr/>
        </div>
        <div class="col sm-6">
          Designation: <input type="text" name="designation"><hr/>
        </div>
        <div class="col sm-6"><div class="alert alert-warning">
            	Enter the name of all the intended receivers (such as HOD's, staff members and CR's) in a comma serperated manner
            </div>
            Copy to<hr/><textarea name="copy_to"></textarea>
            
        </div>
        <div class="col sm-6">
            <input type="submit" value="Generate" class="btn btn-success btn-lg"><hr/>
        </div>
      </form>
    </div>
    
     
     	

</body>
</html>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function error()
    {
    	return view('error');
    }
    public function index()
    {
    	return view('index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function error()
    {
    	return view('error');
    }
    public function pdf()
    {
    	return view('pdf');
    }
    public function index()
    {
    	return view('index');
    }
}

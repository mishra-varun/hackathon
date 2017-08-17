<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class ResultController extends Controller
{
    public function show($id)
    {
    	$mx=Form::max('id');
    	if(($id!=1)&&($id<=$mx))
    	{
    		return view('form.result',[
    	    			'id'=>$id
    	    		]);
    	}
    	else
    	{
    		return view('error');
    	}
    }
}

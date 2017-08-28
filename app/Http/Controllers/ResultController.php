<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
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
  public function fill(Request $request)
  {
    $fid=$request->input('fid');
    $tok=$request->input('_token');
    $total="insert into db".$fid." values(";
    $req=$request->all();
    foreach ($req as $key)
    {
	    if (($key!=$tok)&&($key!=$fid)&&($key!="Save"))
	    {
	    	$key=stripslashes($key);
	    	$key=htmlspecialchars($key);
	    	$key=trim($key);
	      $total=$total."'".$key."',";
	    }
    }
    $total=$total.$fid.")";
    DB::insert($total);
    return view('form.fill');
  }
  public function analysis($id)
  {
    $cols=DB::table('db'.$id.'st')->pluck('colname');
    $data= array();
    foreach ($cols as $key) {
      $data[]=DB::table('db'.$id)->pluck($key);
    }
    return view('form.analysis', [
        'cols'=>$cols,
        'data'=>$data
      ]);
  }
}
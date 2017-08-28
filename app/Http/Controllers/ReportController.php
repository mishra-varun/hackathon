<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Report;
use App\User;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function create()
	{
		//$path=Report::max('id');
		$path=1;
		$path++;
		return view('report.create',compact('path'));
	}
	public function generate(Request $request)
	{
		//$notice=new Report;
		$name=Auth::user();
		if (strlen($name)<1) {
			$name="Guest";
		}/*
		$notice=Notice::create([
				'created_by'=>$name,
				'title'=>request('title'),
				'sub_title'=>request('subtitle'),
				'subject'=>request('subject'),
				'ref_num'=>request('ref_num'),
				'date'=>request('date'),
				'to'=>request('to'),
				'body'=>request('body'),
				'creator_name'=>request('creator_name'),
				'designation'=>request('designation'),
				'copy_to'=>request('copy_to')
			]);
		$notice->save();
		$id=Notice::max('id');
		$view=Notice::find($id);*/
		return view('report.generate', ['view'=>2]);
	}
	public function show($id)
	{
		$max=Report::max('id');
		if ($id<=$max) {
			$view=Notice::find($id);
			return view('report.generate', ['view'=>$view]);
		}
		else
			return view('error');
	}
}

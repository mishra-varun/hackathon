<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\User;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
    public function create()
	{
		$path=Report::max('id');
		$path++;
		return view('report.create',compact('path'));
	}
	public function generate(Request $request)
	{
		$this->validate($request,[
				'title'=>'required|bail',
				'date'=>'required|bail',
				'subtitle'=>'required|bail',
				'intro'=>'required|bail',
				'body'=>'required|bail',
				'conc'=>'required'
			]);
		$report=new Report;
		$name=Auth::user();
		if (strlen($name)<1) {
			$name="Guest";
		}
		$report=Report::create([
				'title'=>request('title'),
				'subtitle'=>request('subtitle'),
				'date'=>request('date'),
				'intro'=>request('intro'),
				'body'=>request('body'),
				'conc'=>request('conc')
			]);
		$report->save();
		$id=Report::max('id');
		$view=Report::find($id);
		$name=Auth::user();
			if (strlen($name)<2) {
				$name="Guest";
			}
		return view('report.generate', [
			'view'=>$view,
			'name'=>$name
			]);
	}
	public function show($id)
	{
		$max=Report::max('id');
		if ($id<=$max) {
			$view=Report::find($id);
			$name=Auth::user();
			if (strlen($name)<2) {
				$name="Guest";
			}
			return view('report.generate', [
				'view'=>$view,
				'name'=>$name
				]);
		}
		else
			return view('error');
	}
}

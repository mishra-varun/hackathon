<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\User;
use App\Rep;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function latest()
	{
		$latest=Rep::all();
		if (count($latest)==0) {
			$latest=0;
		}
		return view('report.latest', compact('latest'));
	}
    public function create()
	{
		$path=Rep::max('id');
		$path++;
		return view('report.create',compact('path'));
	}
	public function generate(Request $request)
	{
		$this->validate($request,[
				'title'=>'required|bail',
				'event_details'=>'required|bail',
				'date'=>'required|bail',
			    'objectives'=>'required|bail',
			    'participants'=>'required|bail',
			    'external_resource_person'=>'required|bail',
			    'description'=>'required|bail',
			    'outcomes'=>'required|bail',
			    'learning'=>'required|bail',
			    'scope_for_improvement'=>'required|bail',
			    'conclusion'=>'required|bail',
			    'prepared_by'=>'required|bail',
			    'designation'=>'required'
			]);
		$report=new Rep;
		/*$name=Auth::user();
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
		$report->save();*/
		$report->fill([
				'date'=>request('date'),
			    'title'=>request('title'),
			    'event_details'=>request('event_details'),
			    'objectives'=>request('objectives'),
			    'participants'=>request('participants'),
			    'external_resource_person'=>request('external_resource_person'),
			    'description'=>request('description'),
			    'outcomes'=>request('outcomes'),
			    'learning'=>request('learning'),
			    'staff_involved'=>request('staff_involved'),
			    'scope_for_improvement'=>request('scope_for_improvement'),
			    'conclusion'=>request('conclusion'),
			    'prepared_by'=>request('prepared_by'),
			    'designation'=>request('designation')
			]);
		$report->save();
		$id=Rep::max('id');
		$view=Rep::find($id);
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
		$max=Rep::max('id');
		if ($id<=$max) {
			$view=Rep::find($id);
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

<?php

namespace App\Http\Controllers;
use App\Notice;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function ln()
	{
		$latest=Notice::all();
		if (count($latest)==0) {
			$latest=0;
		}
		return view('latest', compact('latest'));
	}
	public function pdf()
	{
		$path=Notice::max('id');
		$path++;
		return view('notice',compact('path'));
	}
	public function generate(Request $request)
	{
		$this->validate($request,[
				'title'=>'required|bail',
				'subtitle'=>'required',
				'subject'=>'required',
				'ref_num'=>'required',
				'date'=>'required',
				'to'=>'required',
				'body'=>'required',
				'creator_name'=>'required',
				'designation'=>'required',
				'copy_to'=>'required'
			]);
		$notice=new Notice;
		$name=Auth::user();
		if (strlen($name)<1) {
			$name="Guest";
		}
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
		$view=Notice::find($id);
		return view('generate', ['view'=>$view]);
	}
	public function show($id)
	{
		$max=Notice::max('id');
		if ($id<=$max) {
			$view=Notice::find($id);
			return view('generate', ['view'=>$view]);
		}
		else
			return view('error');
	}
	public function index()
	{
		return view('index');
	}
}

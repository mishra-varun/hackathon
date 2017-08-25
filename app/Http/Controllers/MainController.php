<?php

namespace App\Http\Controllers;
use App\Notice;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
	public function error()
	{
		return view('error');
	}
	public function pdf()
	{
		return view('report');
	}
	public function generate(Request $request)
	{
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

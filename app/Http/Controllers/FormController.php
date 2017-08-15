<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $num=Form::max('id');
        $num++;
        $total="";
        $total="create table db".$num."(";
        $new="";
        $name=Auth::user();
        if (strlen($name)<1) {
            $name="guest";
        }
        $date=date('y-m-d');
        //
        $req=$request->all();
        foreach ($req as $re)
        {
            $re=stripslashes($re);
            $re=htmlspecialchars($re);
            $re=trim($re);
            if ($re!="Save")
            {
                //
                if(strpos($re, '_')===(strlen($re)-1))
                {
                    $new=$re." varchar(255),";
                    $total=$total.$new;
                }
                else
                {
                    //$new=$re." varchar(50) ";
                    $total=$total."";
                }
            }
        }
        if (strlen($total)<31) {
        		$num=-3;
            return view('form.store',
                ['name'=>$name,'date'=>$date,'num'=>$num]);
        }
        else
        {
	        $total=$total." tbid int DEFAULT ".$num.")";
	        DB::insert('insert into forms values('.$num.', \'db'.$num.'\', \''.$name.'\', \''.$date.'\', \''.$date.'\')');
	        DB::statement($total);
	        return view('form.store', [
	                'name'=>$name,
	                'date'=>$date,
	                'num'=>$num
	            ]);
     		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $p=new Form;
        $f=$p->find($id);
        try
        {
            $dbname="db".$id;
            //
            return view('form.show', [
                    'f'=>$f
                ]);
        }
        catch(Exception $e)
        {
            return view('error');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
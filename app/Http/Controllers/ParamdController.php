<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParamdController extends Controller
{
    public function index($id)
    {
        $data_paramd = \App\paramd::find($id);
    	//$data_paramd = \App\paramd::all();

    	return view('paramd.index',['data_paramd' => $data_paramd]);
    	//return view('user.index');
    }

     public function create(Request $request)
    {
    	//return view('user.index');
    	\App\paramd::create($request->all());
    	//return $request -> all();
    	return redirect('/paramd')->with('success','Parameter created successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParamhController extends Controller
{
    public function index()
    {
    	$data_paramh = \App\paramh::all();

    	return view('paramh.index',['data_paramh' => $data_paramh]);
    	//return view('user.index');
    }

     public function create(Request $request)
    {
    	//return view('user.index');
    	\App\paramh::create($request->all());
    	//return $request -> all();
    	return redirect('/paramh')->with('success','Parameter created successfully.');
    }
}

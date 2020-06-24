<?php

namespace App\Http\Controllers;
  
use App\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
    	$data_users = \App\user::all();

    	return view('user.index',['data_users' => $data_users]);
    	//return view('user.index');
    }

    public function create(Request $request)
    {
    	//return view('user.index');
    	\App\user::create($request->all());
    	//return $request -> all();
    	return redirect('/user')->with('success','User created successfully.');
    }

    /*public function edit($id)
    {
    	//return view('user.index');
    	$users = \App\user::find($id);
    	//dd($user);
    	return view('user.index',['users' => $users]);
    	//return redirect('/user')->with('success','User created successfully.');
    }
	*/
    public function edit($id)
    {
        $user = user::find($id);
        return response()->json($user);
    }

}

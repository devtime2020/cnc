<?php

namespace App\Http\Controllers;
  
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
    	$cari = $request->cari;
        //dd($request)->all();
    	if($request->has('cari'))
    	{
    	//	dd($request)->all();
    		$data_users = User::where('userusdsc','like',"%".$cari."%")->get();

    	}else
    	{
    		$data_users = \App\User::all();
    	}  	
    	//dd($data_users)->all();
    	return view('user.index',['data_users' => $data_users]);
    	//return view('user.index');
    }

    public function create(Request $request)
    {
    	
    	$user = new \App\User;
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	//$user->password = bcrypt($request->password);
    	$user->remember_token = str::random(60);
        $user->userstat = $request->userstat;
        $user->usersdat = $request->usersdat;
        $user->useredat = $request->useredat;
        $user->userprof = $request->userprof;
        $user->userdesc = $request->userdesc;
    	$user->save();

    	return redirect('/user')->with('success','User created successfully.');
    }

    public function edit($id)
    {
        $user = User::find($id);
        //dd($user);
        return view('/user/edit',['user' => $user]);  
    }

    public function update(Request $request,$id)
    {
        $user = User::find($id);
        //dd($user);
        //return view('/user/edit',['user' => $user]);  
        $user->update($request->all());
        return redirect('/user')->with('success','User update successfully.');
    }

    public function delete($id)
    {
        $user = User::find($id);
        //dd($user);
        $user->delete();
        return redirect('/user')->with('success','User deleted successfully.');
    }

}

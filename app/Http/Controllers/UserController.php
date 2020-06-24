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
    	//insert ke table kds_cnc_user
    	/*$user = new \App\user;
    	$user->userusid = $request->userusid;
    	$user->password = bcrypt($request->password);
    	$user->userusnm = $request->userusnm;
    	$user->userusdsc = $request->userusdsc;
    	$user->usersdat = $request->usersdat;
    	$user->useredat = $request->useredat;
    	$user->userstat = $request->userstat;
    	$user->useracprof = $request->useracprof;
    	$user->token = str::random(60);
    	$user->save();
    	*/

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

    	//\App\user::create($request->all());
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

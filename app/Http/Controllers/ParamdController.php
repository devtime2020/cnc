<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParamdController extends Controller
{
    public function index(Request $request,$parhtbid)
    {
        //dd($id);
        $param_h = \App\paramh::find($parhtbid);
        $data_paramd = DB::table('kds_cnc_paramd')->where('pardtbid', '=', $parhtbid)->get();
        //$data_paramd = \App\paramd->where('parhtbid','=',$parhtbid)->get();
        //$data_paramd = \App\paramd::all();
        //dd($data_paramd);

        return view("paramd.index")->with("data_paramd", $data_paramd)->with("param_h",$param_h);
        //return view("paramd.index",['user' => $user]);  
    }

    public function create(Request $request,$parhtbid)
    {
    	//return view('user.index');

        //dd($request);
        
    	//\App\paramd::create($request->all());

        $paramd = new \App\paramd;
        $paramd->pardtbid = $parhtbid;
        $paramd->pardtabent = $request->pardtabent;
        $paramd->pardsdesc = $request->pardsdesc;
        //$user->password = bcrypt($request->password);
        $paramd->pardldesc = $request->pardldesc;
        $paramd->pardvan1 = $request->pardvan1;
        $paramd->pardvan2 = $request->pardvan2;
        $paramd->pardvan3 = $request->pardvan3;
        $paramd->pardvan4 = $request->pardvan4;
        $paramd->pardvac1 = $request->pardvac1;
        $paramd->pardvac2 = $request->pardvac2;
        $paramd->pardvac3 = $request->pardvac3;
        $paramd->parddate1 = $request->parddate1;
        $paramd->parddate2 = $request->parddate2;
        $paramd->parddate3 = $request->parddate3;
        $paramd->pardcomm = $request->pardcomm;
        $paramd->save();

    	//return $request -> all();
    	return redirect('/paramd/'.$parhtbid.'')->with('success','Parameter Detail created successfully.');

    }

    
}

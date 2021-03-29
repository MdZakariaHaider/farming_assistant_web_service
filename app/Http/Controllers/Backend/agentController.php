<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\agent;

class agentController extends Controller
{
    public function agent(){
        $agents=agent::all();
        $title='agent';
        return view('backend.content.agent',compact('agents','title'));
    }
    public function create(Request $request){


        agent::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'mobileNo'=>$request->mobileNo
        ]);
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\agent;

class agentController extends Controller
{
    public function agent(){
        $agents=agent::paginate(5);
        $title='Agents';
        return view('backend.content.agent',compact('agents','title'));
    }
    public function create(Request $request){


        agent::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'mobileNo'=>$request->mobileNo,
            'email'=>$request->email,
        ]);
        return redirect()->back()->with('success','Agent Created Successfully.');
    }
    //delete method
    public function delete($id){
        $agent=Agent::find($id);
        $agent->delete();
        return redirect()->back()->with('success','Agent Deleted Successfully.');
    }
    public function editAgent($id)
{
   //get all data of for this id
    $agent=agent::find($id);
    // dd($agent);

    //pass data to a view
    return view('backend.edit.agent',compact('agent'));
}

public function updateAgent(Request $request,$id)
{
    agent::find($id)->update([
       'name'=>$request->name,
       'address'=>$request->address,
       'mobileNo'=>$request->mobileNo,
       'email'=>$request->email,


    ]);
    return redirect()->route('agent')->with('success','Updated Successfully.');
}

}

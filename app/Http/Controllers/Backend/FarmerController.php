<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\farmer;
use App\Models\agent;

class FarmerController extends Controller
{
   public function farmer(){
       $agent=agent::all();
       $farmer=farmer::paginate(5);
       $title='Farmers';
       return view('backend.content.farmer',compact('farmer','agent','title'));
   }
   public function create(Request $request){
    farmer::create([
        'name'=>$request->name,
        'address'=>$request->address,
        'contacts'=>$request->contacts,
        'landArea'=>$request->landArea,
        'nid'=>$request->nid,
        'crop'=>$request->crop,
        'agent_id'=>$request->agent_id,
    ]);
    return redirect()->back()->with('success','Farmer Created Successfully.');
}
//delete method
public function delete($id){
    $farmer=farmer::find($id);
    $farmer->delete();
    return redirect()->back()->with('success','Farmer Deleted Successfully.');
}
public function editFarmer($id)
{
   //get all data of for this id
    $farmer=farmer::find($id);
    $agent=agent::all();
    //pass data to a view
    return view('backend.edit.farmer',compact('agent','farmer'));
}

public function updateFarmer(Request $request,$id)
{
    farmer::find($id)->update([
       'name'=>$request->name,
       'address'=>$request->address,
       'contacts'=>$request->contacts,
       'landArea'=>$request->landArea,
       'nid'=>$request->nid,
       'crop'=>$request->crop,
       'nid'=>$request->nid,
       'agent_id'=>$request->agent_id,

    ]);
    return redirect()->route('farmer')->with('success','Updated Successfully.');
}
}

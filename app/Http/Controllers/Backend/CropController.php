<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Crop;

class CropController extends Controller
{
    public function Crop(){
        $crops=Crop::paginate(5);
        $title='Crops';
        return view('backend.content.crop',compact('crops','title'));
}

public function create(Request $request){
    Crop::create([
        'name'=>$request->name,
        'description'=>$request->description,
        'quantity'=>$request->quantity,
        'availability'=>$request->availability
    ]);
    return redirect()->back()->with('success','Crop Created Successfully.');
}
//delete method
public function delete($id){
    $crop=crop::find($id);
    $crop->delete();
    return redirect()->back()->with('success','Crop Deleted Successfully.');
}
public function editCrop($id)
{
   //get all data of for this id
    $crop=crop::find($id);
    // dd($agent);

    //pass data to a view
    return view('backend.edit.crop',compact('crop'));
}

public function updateCrop(Request $request,$id)
{
    crop::find($id)->update([
       'name'=>$request->name,
       'description'=>$request->description,
       'quantity'=>$request->quantity,
       'availability'=>$request->availability,


    ]);
    return redirect()->route('crop')->with('success','Updated Successfully.');
}
}

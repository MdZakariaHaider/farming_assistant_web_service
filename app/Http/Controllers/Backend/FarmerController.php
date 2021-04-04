<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\farmer;

class FarmerController extends Controller
{
   public function farmer(){
       $farmer=farmer::all();
       $title='Farmers';
       return view('backend.content.farmer',compact('farmer','title'));
   }
   public function create(Request $request){
    farmer::create([
        'name'=>$request->name,
        'address'=>$request->address,
        'contacts'=>$request->contacts,
        'landArea'=>$request->landArea,
        'nid'=>$request->nid,
        'crop'=>$request->crop,
    ]);
    return redirect()->back();
}
//delete method
public function delete($id){
    $farmer=farmer::find($id);
    $farmer->delete();
    return redirect()->route('farmer');
}

}

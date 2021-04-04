<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Retailer;

class retailerController extends Controller
{
    public function retailer(){
        $categories=Retailer::all();
        $title='Retailers';
        return view('backend.content.retailers',compact('categories','title'));
    }
    public function create(Request $request){
        Retailer::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'contacts'=>$request->contacts,
        ]);
        return redirect()->back();
    }
    //delete method
public function delete($id){
    $retailer=retailer::find($id);
    $retailer->delete();
    return redirect()->route('retailer');
}
}

<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Crop;

class CropController extends Controller
{
    public function Crop(){
        $crops=Crop::all();
        $title='crop';
        return view('backend.content.crop',compact('crops','title'));
}

public function create(Request $request){
    Crop::create([
        'name'=>$request->name,
        'description'=>$request->description,
        'quantity'=>$request->quantity,
        'availability'=>$request->availability
    ]);
    return redirect()->back();
}


}

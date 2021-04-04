<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\investment;
use Illuminate\Http\Request;
use App\Models\farmer;

class InvestmentController extends Controller
{
    public function investment(){
        $investment=investment::all();
        $farmers=farmer::all();
        $title='Investment';
        return view('backend.content.investment',compact('investment','title','farmers'));
    }
    public function create(Request $request){
        investment::create([
            'farmer_id'=>$request->farmer_id,
            'land'=>$request->land,
            'product'=>$request->product,
            'investment'=>$request->investment,
        ]);
        return redirect()->back();
}
//delete method
public function delete($id){
    $farmer=investment::find($id);
    $farmer->delete();
    return redirect()->route('investment');
}
}

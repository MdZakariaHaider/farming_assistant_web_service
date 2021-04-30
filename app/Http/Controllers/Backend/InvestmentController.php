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
            'c_quantity'=>$request->investment/$request->c_rate,
            'c_rate'=>$request->c_rate,
            'd_date'=>$request->d_date,
        ]);
        return redirect()->back();
}
//delete method
public function delete($id){
    $farmer=investment::find($id);
    $farmer->delete();
    return redirect()->route('investment');
}
public function editInvestment($id)
{
   //get all data of for this id
    $investment=investment::find($id);
    $farmer=farmer::all();
    //pass data to a view
    return view('backend.edit.investment',compact('investment','farmer'));
}

public function updateInvestment(Request $request,$id)
{




    investment::find($id)->update([
       'farmer_id'=>$request->farmer_id,
       'land'=>$request->land,
       'product'=>$request->product,
       'investment'=>$request->investment,
       'c_rate'=>$request->c_rate,
       'r_crop'=>$request->r_crop,
       'd_date'=>$request->d_date,




    ]);
    return redirect()->route('investment')->with('success','Updated Successfully.');
}
}

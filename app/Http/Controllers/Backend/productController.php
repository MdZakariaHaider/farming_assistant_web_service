<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class productController extends Controller
{
    public function product(){
        $Product = product::all();
        $title='Products';
        return view('backend.content.productlist', compact('Product','title'));


    }
    public function create(Request $request){
        $file_name='';


        //step:1 check req has file


        if($request->hasfile('image'))
        {


            //file is valid?


            $file=$request->file('image');
            if($file->isvalid());
            {
                //genarate unique file name


                $file_name=date('Ymdhms').'.'.$file->getClientOriginalExtension();


                //store image local directory

                $file->storeAs('photo',$file_name);
            }
        }
        product::create([
            'name'=>$request->name,
            'availableStock'=>$request->availableStock,
            'price'=>$request->price,

            'description'=>$request->description,
            'image'=>$file_name,
        ]);
        return redirect()->back();
    }
    //delete method
public function delete($id){
    $product=product::find($id);
    $product->delete();
    return redirect()->route('product');
}
}

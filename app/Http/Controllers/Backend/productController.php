<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class productController extends Controller
{
    public function product(){
        $Product = product::all();
        $title='product';
        return view('backend.content.productlist', compact('Product','title'));


    }
    public function create(Request $request){
        product::create([
            'name'=>$request->name,
            'availableStock'=>$request->availableStock,
            'price'=>$request->price,

            'description'=>$request->description,
            'image'=>$request->image,
        ]);
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
class productController extends Controller
{
    public function product(){
        $category=Category::all();
        $Product = product::paginate(5);
        $title='Products';
        return view('backend.content.productlist', compact('Product','category','title'));


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
            'category_id'=>$request->category_id,
            'image'=>$file_name,
        ]);
        return redirect()->back()->with('success','Product Created Successfully.');
    }
    //delete method
public function delete($id){
    $product=product::find($id);
    $product->delete();
    return redirect()->back()->with('success','Product Deleted Successfully.');
}
public function editProduct($id)
{
   //get all data of for this id
    $product=Product::find($id);
    $category=Category::all();
    //pass data to a view
    return view('backend.edit.product',compact('product','category'));
}

public function updateProduct(Request $request,$id)
{
    Product::find($id)->update([
       'name'=>$request->name,
       'availableStock'=>$request->availableStock,
       'price'=>$request->price,
       'description'=>$request->description,
       'category_id'=>$request->category_id,

    ]);
    return redirect()->route('product')->with('success','Updated Successfully.');
}
}

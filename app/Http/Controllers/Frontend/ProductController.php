<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

        public function showProduct($id)
        {
         $product=Product::find($id);

         return view('frontend.partials.single-product');

        }
        public function productsUnderCategory($cid)
        {
           if($cid=='all')
           {
               $products=Product::all();
           }else
           {
               $products=Product::where('category_id',$cid)->get();
           }
           //get all products from product table where category id =$cid

            return view('frontend.partials.product-under-category',compact('products'));
        }

}

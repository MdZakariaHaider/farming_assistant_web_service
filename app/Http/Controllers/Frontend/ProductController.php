<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Booking;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

        public function showProduct($id)
        {
         $product=Product::find($id);
         $check=Booking::where('product_id',$id)->first();

         return view('frontend.partials.single-product',compact('product','check'));

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

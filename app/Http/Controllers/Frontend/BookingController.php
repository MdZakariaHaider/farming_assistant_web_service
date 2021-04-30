<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
class BookingController extends Controller
{
    public function showProduct($id)
    {

        $product=Product::find($id);
        $P_price=$product->price * $product->availableStock;


        return view('frontend.partials.ShowProduct',compact('product','P_price'));
    }
    public function Booking(Request $request)
    {
        // dd($request->all());
        $product=Product::find($request->product_id);
        // $daysCalculate=strtotime($request->to_date)-strtotime($request->from_date);
        // $daysCalculate=round($daysCalculate / (60 * 60 * 24));

            Booking::create([
               'product_id'=>$request->product_id,
                'user_id'=>auth()->user()->id,
                'product_name'=>$product->name,
                'product_price'=>$request->price,
                'availableStock'=>$request->a_stock,
            ]);

            return redirect()->back()->with('message','Order created Successfully');
    }
}

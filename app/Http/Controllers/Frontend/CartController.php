<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class CartController extends Controller
{
    public function cart(){
        $carts = Cart::paginate(3);
        if($carts ->count() != 0){
        foreach($carts as $cart)
        $sub_total=0;
        {
            $total = $cart->product->price * $cart->product->availableStock;
            $sub_total+=  $total;
        }

        return view('frontend.partials.cart',compact('carts','sub_total'));
    }else{
        $cart = [];
        $sub_total = 0;
        return view('frontend.partials.cart',compact('carts','sub_total'));
    }

    }

    public function addToCart($id){

        $product = Product::find($id);

        $user_id = auth()->user()->id;



        $checkAlreadyExistItem = Cart::where('product_id',$id)->where('user_id',$user_id)->first();




        if(!$checkAlreadyExistItem){
            $cartData = [
                'product_id' =>$product->id,
                'quantity' =>1,
                'user_id'=>$user_id,
            ];
            Cart::create($cartData);
        }else{

                $oldQuantity = $checkAlreadyExistItem->quantity;

                $checkAlreadyExistItem->update([
                    'quantity' =>$oldQuantity + 1
                ]);

        }

        return redirect()->back()->with('success','Add To cart Successful');
    }

    public function productRemove($id)
    {
    //   dd($id);
        //first get the product
        $productRemove = Cart::find($id);


        //then delete it
        $productRemove->delete();

        return redirect()->back();
    }


    public function orderConfirm(Request $request)
    {
        // dd($request->product_id);
        // $product = Product::where('user_id',auth()->user()->id)->first();
        $carts = Cart::where('user_id',auth()->user()->id)->get();
        DB::beginTransaction();
        try{
        foreach($carts as $cart)
        {
            $add=Booking::create([
                'cart_id'=>$cart->id,
                'product_id'=>$cart->product->id,
                'user_id'=>auth()->user()->id,
                'product_name'=>$cart->product->name,
                'product_price'=>$cart->product->price * $cart->product->availableStock,
                'quantity'=>$cart->product->availableStock,
                'total'=> $cart->product->price * $cart->product->availableStock,


        ]);


        }
        $carts->each(function($item) {
                            $item->delete();
                        });
                        DB::commit();

                    }catch(Throwable $e){
                        DB::rollback();
                        return redirect()->back()->with('message','Fill up all information');
                    }

    //     $cartQuantity = $carts->sum('quantity');
    //     $sub_total = 0;

    //     foreach ($carts as $cart){
    //         $sub_total += $cart->product->price * $cart->quantity;
    //     }

    //     $tax = $sub_total*(5/100);
    //     $grandtotal = $sub_total+$tax;

        return redirect()->route('homepage');
    // }

}
}


//    dd($orderData);


        // $carts = Cart::where('user_id',auth()->user()->id)->get();

        // DB::beginTransaction();
        // try{

        //  $order = Order::create($orderData);


        //     foreach($carts as $cart){

        //         OrderDetail::create([
        //             'order_id'=>$order->id,
        //             'food_item_id'=>$cart->food_items_id,
        //             'quantity'=>$cart->quantity,
        //             'sub_total'=>$cart->foodItem->price * $cart->quantity,


                //   't_id'=>$order->id,
                //   't_phone'=>$order->phone,
                //   'payment_method'=>$order->payment_method,
                // ]);

            // }

//             $carts->each(function($item) {
//                 $item->delete();
//             });
//             DB::commit();

//         }catch(Throwable $e){
//             DB::rollback();
//             return redirect()->back()->with('message','Fill up all information');

// }
    // }
// }
// }

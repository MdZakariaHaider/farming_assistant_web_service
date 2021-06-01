<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   public function loginForm()
   {
       return view('backend.content.login');
   }
   public function doLogin(Request $request)
   {
       //        dd($request->all());
//validate input
       $request->validate([
           'email'=>'required|email',
           'password'=>'required|min:6'
       ]);

       //authenticate
       $credentials = $request->only('email', 'password');
//        dd($credentials);
       if (Auth::attempt($credentials)) {
           $request->session()->regenerate();
           return redirect()->route('dashboard');
       }
       return back()->withErrors([
           'email' => 'Invalid Credentials.',
       ]);
   }
   public function logout()
   {

       $item_cart = Cart::where('user_id', auth()->user()->id)->get();
    //    dd($item_cart);
        foreach ($item_cart as $data) {
            $data->delete();
        }

        Auth::logout();

       return redirect()->route('admin.login')->with('success','Logout Successful.');

   }
}

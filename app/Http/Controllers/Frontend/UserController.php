<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\confirmationmail;
use App\Mail\confirmationmail2;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller

{
    public function showLoginRegistration()
    {
        return view('frontend.partials.login-registration');
    }
    public function registration(request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'email|required|unique:users',
            'address'=>'required',
            'contact'=>'required',
            'password'=>'required|min:6'

        ]);



       $add= User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'contact'=>$request->contact,
            'password'=>bcrypt($request->password),

        ]);
        Mail::to($add->email)->send(new confirmationmail2($add));
        return redirect()->back()->with('success','User Registration Successful');

    }

    public function login(Request $request)
    {

        // validate input

        $request->validate([
            'email'=>'email|required',
            'password'=>'required|min:6'

        ]);

        // Authenticate
        $credentials = $request->only('email', 'password');
        //        dd($credentials);
                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
                    return redirect()->route('homepage');
                }
                return back()->withErrors([
                    'email' => 'Invalid Credentials.',
                ]);

    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login.registration.form')->with('success','Logout Successful.');

    }
}



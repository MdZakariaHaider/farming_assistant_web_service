<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order (){
        $title='order';
        return view('backend.content.order',compact('title'));
    }
}

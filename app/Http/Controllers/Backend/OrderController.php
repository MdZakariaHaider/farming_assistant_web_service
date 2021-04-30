<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order (){
        $title='order';
        $booking=Booking::all();
        return view('backend.content.order',compact('title','booking'));
    }
}

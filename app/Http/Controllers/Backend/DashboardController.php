<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\farmer;
use App\Models\agent;
use App\Models\retailer;
use App\Models\product;
use App\Models\user;


class DashboardController extends Controller
{
   public function dashboard(){
       $title='Dashboard';
       $farmer=farmer::all()->count();
       $agent= agent::all()->count();
       $retailer= user::where('role','user')->count();
       $product= product::all()->count();
       
       return view('backend.content.dashboard',compact('title','farmer','agent','retailer','product'));
   }

}

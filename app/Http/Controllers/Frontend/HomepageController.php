<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
  public function homepage(){
      $products=Product::all();
      $title='homepage';
      return view('frontend.partials.layout',compact('title','products'));

  }
}

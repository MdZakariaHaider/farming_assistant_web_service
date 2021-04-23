<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        $title ='Home';
        $categories= Category::all();
        return view('backend.master', compact('title','categories'));
    }
}

<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        $title = 'Home';
        return view('backend.master', compact('title'));
    }
}

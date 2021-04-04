<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function admin (){
        $title='Admin';
        return view('backend.content.admin',compact('title'));
    }
}

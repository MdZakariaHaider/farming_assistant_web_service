<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
public function Category (){
    $category=Category::paginate(5);
    $title='category';
    return view('backend.content.categories',compact('category','title'));
}
public function create(Request $request){


    Category::create([
        'category'=>$request->category,
        'description'=>$request->description,

    ]);
    return redirect()->back()->with('success','category Created Successfully.');
}
//delete method
public function delete($id){
    $category=Category::find($id);
    $category->delete();
    return redirect()->back()->with('success','category Deleted Successfully.');
}
}

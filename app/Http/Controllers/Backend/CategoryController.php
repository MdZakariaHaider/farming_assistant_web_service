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
public function editCategory($id)
{
   //get all data of for this id
    $category=Category::find($id);
    // dd($agent);

    //pass data to a view
    return view('backend.edit.category',compact('category'));
}

public function updateCategory(Request $request,$id)
{
    Category::find($id)->update([
       'category'=>$request->category,
       'description'=>$request->description,



    ]);
    return redirect()->route('category')->with('success','Updated Successfully.');
}
}

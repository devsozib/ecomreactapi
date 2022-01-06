<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     function index(){
          return view('admin.categories.index');
     }

     function addCategorires(){
          return view('admin.categories.addCategories');
     }

     function insetCategorires(Request $request){
        $category = new Category();
        if($request->hasFile('image')){
             $file = $request->file('image');
             $extension = $file->getClientOriginalExtension();
             $fileName = time().'.'.$extension;
             $file->move();
        }
     } 
}

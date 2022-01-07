<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     function index(){
          $categories = Category::all();
          return view('admin.categories.index',compact('categories'));
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
             $file->move('assets/uploads/category/',$fileName);
             $category->image = $fileName;
        }

        $category->name = $request->input('name');
        $category->slug= $request->input('slug');
        $category->description= $request->input('description');
        $category->status= $request->input('status')==TRUE?'1':'0';
        $category->popular= $request->input('popular')==TRUE?'1':'0';
        $category->meta_title= $request->input('meta_title');
        $category->meta_keywords= $request->input('meta_keyword');
        $category->meta_description= $request->input('meta_description');

        $category->save();

        return redirect('/categories')->with('status',"Category added success");
    
     } 


     function editCategory($id){
           $categories = Category::find($id);

           return view('admin.categories.editCategory',compact('categories'));
     }

     function updateCategory(Request $request,$id){
          $category = Category::find($id);
          if($request->hasFile('image')){
               $path = 'assets/uploads/category/'.$category->image;

               if(File::exists($path)){
                    File::delete($path);
               }
               $file = $request->file('image');
             $extension = $file->getClientOriginalExtension();
             $fileName = time().'.'.$extension;
             $file->move('assets/uploads/category/',$fileName);
             $category->image = $fileName;
          }
          $category->name = $request->input('name');
          $category->slug= $request->input('slug');
          $category->description= $request->input('description');
          $category->status= $request->input('status')==TRUE?'1':'0';
          $category->popular= $request->input('popular')==TRUE?'1':'0';
          $category->meta_title= $request->input('meta_title');
          $category->meta_keywords= $request->input('meta_keyword');
          $category->meta_description= $request->input('meta_description');

          $category->update();

          return redirect('/categories')->with('status','Categories Updated Successfull');
     }

     function destroyCategory($id){
              $category  =Category::find($id);

              if($category->image)
              {
                   $path = 'assets/uploads/category/'.$category->image;

                   File::delete($path);
                   
              }
              $category->delete();

              return redirect('/categories')->with('status','Category deleted successfull');
     } 
}

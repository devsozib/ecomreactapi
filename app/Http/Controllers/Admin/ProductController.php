<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
Use App\Models\Product;

class ProductController extends Controller
{
    function index(){
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    
    }

    function addProducts(){
        $categories = Category::all();

        return view('admin.products.addProduct',compact('categories'));
        

    }
    function inserProduct(Request $request){
        $products = new Product();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $file->move('assets/uploads/product/',$fileName);
            $products->image = $fileName;
       }

       $products->category_id = $request->input('category_id');
       $products->name = $request->input('name');
       $products->slug= $request->input('slug');
       $products->small_description= $request->input('small_description');
       $products->description= $request->input('description');
       $products->regular_price= $request->input('regular_price');
       $products->sale_price= $request->input('sale_price');
       $products->qty= $request->input('qty');
       $products->tax= $request->input('tax');
       $products->status= $request->input('status')==TRUE?'1':'0';
       $products->trending= $request->input('trending')==TRUE?'1':'0';
       $products->meta_title= $request->input('meta_title');
       $products->meta_keywords= $request->input('meta_keywords');
       $products->meta_description= $request->input('meta_description');
       $products->save();

       return redirect('products')->with('status','Product Added Success');
    }


    function editProduct($id){
        $products = Product::find($id);
        return view('admin.products.editProduct',compact('products'));
    }

    function updateProduct(Request $request, $id){

        $products = Product::find($id);
        if($request->hasFile('image')){
            $path = 'assets/uploads/product/'.$products->image;

            if(File::exists($path)){
                 File::delete($path);
            }
            $file = $request->file('image');
          $extension = $file->getClientOriginalExtension();
          $fileName = time().'.'.$extension;
          $file->move('assets/uploads/product/',$fileName);
          $products->image = $fileName;
       }

    
       $products->name = $request->input('name');
       $products->slug= $request->input('slug');
       $products->small_description= $request->input('small_description');
       $products->description= $request->input('description');
       $products->regular_price= $request->input('regular_price');
       $products->sale_price= $request->input('sale_price');
       $products->qty= $request->input('qty');
       $products->tax= $request->input('tax');
       $products->status= $request->input('status')==TRUE?'1':'0';
       $products->trending= $request->input('trending')==TRUE?'1':'0';
       $products->meta_title= $request->input('meta_title');
       $products->meta_keywords= $request->input('meta_keywords');
       $products->meta_description= $request->input('meta_description');

       $products->update();

          return redirect('/products')->with('status','Products Updated Successfull');
    }

    function destroy($id){
        $products  =Product::find($id);

              if($products->image)
              {
                   $path = 'assets/uploads/product/'.$products->image;

                   File::delete($path);
                   
              }
              $products->delete();

              return redirect('/products')->with('status','Product deleted successfull');
     
    }
    }


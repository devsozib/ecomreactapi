<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ForFrontendController extends Controller
{
    function index(){
        $products = Product::all();
        $categories = Category::all();
        return view('layouts.front',compact('products','categories'));
    }
}

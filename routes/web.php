<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Frontend\ForFrontendController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[ForFrontendController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth','isAdmin']], function () {

    Route::get('/dashboard',[FrontendController::class, 'index'] );
    //Routes for category
    Route::get('/categories',[CategoryController::class,'index']);
    Route::get('/add-categories',[CategoryController::class,'addCategorires']);
    Route::post('/insert-categories',[CategoryController::class,'insetCategorires']);
    Route::get('edit-category/{id}',[CategoryController::class,'editCategory']);
    Route::put('update-categories/{id}',[CategoryController::class,'updateCategory']);
    Route::get('delete-category/{id}',[CategoryController::class,'destroyCategory']);


    //Routes of Products
    Route::get('products',[ProductController::class,'index']);
    Route::get('add-products',[ProductController::class,'addProducts']);
    Route::post('insert-products',[ProductController::class,'inserProduct']);
    Route::get('edit-product/{id}',[ProductController::class,'editProduct']);
    Route::put('update-products/{id}',[ProductController::class,'updateProduct']);
    Route::get('delete-product/{id}',[ProductController::class,'destroy']);
    



    });
 

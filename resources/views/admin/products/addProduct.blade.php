@extends('layouts.admin');

@section('main_content')

   <div class="card">
        <div class="card-header">
             <h5>Add Products</h5>
        </div>
        <div class="card-body">
              <form action="{{ url('insert-products') }}" class="form-group" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                      <div class="col-md-12 mb-3">
                          <label for="name">Select Category</label>
                          <div class="form-floating box">
                            <select class="form-select" name="category_id" id="floatingSelect" >
                              <option selected>Select Category</option>
                               @foreach ($categories as $item)
                               <option value="{{ $item->id }}">{{ $item->name }}</option>      
                               @endforeach
                      
                            </select>
                           
                          </div>
                          
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="name">Product Name</label>
                        <input type="text" name="name" id="name"  class="form-control">
                    </div>
                      <div class="col-md-6 mb-3">
                        <label for="slug">Product Slug</label>
                        <input type="text" name="slug" id="slug"  class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="small_description">Short Description</label>
                        <textarea name="small_description" id="small_description"  rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="long_description">Long Description</label>
                        <textarea name="description" id="long_description"  rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="regular_price">Regular Price</label>
                        <input type="number" class="form-control" name="regular_price" id="regular_price">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="sale_price">Sale Price</label>
                        <input type="number" class="form-control" name="sale_price" id="popular" >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="tax">Tax</label>
                        <input type="number" class="form-control" name="tax" id="tax" >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="qty">Quantity</label>
                        <input type="number" class="form-control" name="qty" id="qty" >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="status">Status</label>
                        <input type="checkbox" name="status" id="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="trending">Trending</label>
                        <input type="checkbox" name="trending" id="trending" >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="meta_title">Meta Title</label>
                        <textarea name="meta_title" id="meta_title" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="meta_keyword">Meta Keyword</label>
                        <textarea name="meta_keywords" id="meta_keyword" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="meta_description">Meta Description</label>
                        <textarea name="meta_description" id="meta_description" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="col-md-12">

                        <input type="file" name="image" id="image">
                    </div>
                    <div class="col-md-12">
                       
                       <input type="submit" class="form-control btn btn-primary" value="Add Product">
                    </div>
                  
                  </div>
              </form>
        </div>
   </div>
@endsection
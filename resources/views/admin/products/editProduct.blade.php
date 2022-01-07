@extends('layouts.admin');

@section('main_content')
   <div class="card">
        <div class="card-header">
             <h5>Edit/Update Product</h5>
        </div>
        <div class="card-body">
              <form action="{{ url('update-products/'.$products->id) }}" class="form-group" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="name">Select Category</label>
                        <div class="form-floating box">
                          <select class="form-select" name="category_id" id="floatingSelect" >
                            <option selected>{{ $products->category->name }}</option>
                           
                          </select>
                         
                        </div>
                        
                    </div>
                      <div class="col-md-6 mb-3">
                          <label for="name">Product Name</label>
                          <input type="text" name="name" id="name" value="{{ $products->name }}" class="form-control">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="slug">Products Slug</label>
                        <input type="text" name="slug" id="slug" value="{{ $products->slug }}"  class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="slug">Regular Price</label>
                        <input type="number" name="regular_price" id="slug" value="{{ $products->regular_price }}"  class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="slug">Saling Price</label>
                        <input type="number" name="sale_price" id="slug" value="{{ $products->sale_price }}"  class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="slug">Quantity</label>
                        <input type="number" name="qty" id="slug" value="{{ $products->qty }}"  class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="slug">Tax</label>
                        <input type="number" name="tax" id="slug" value="{{ $products->tax }}"  class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" id="description"  rows="3" class="form-control">{{ $products->description }} </textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="description">Description</label>
                        <textarea name="small_description" id="description"  rows="3" class="form-control">{{ $products->small_description }} </textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="status">Status</label>
                        <input type="checkbox" name="status" {{ $products->status=='1'?'checked':'' }} id="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="trending">Trending</label>
                        <input type="checkbox" {{ $products->trending=='1'?'checked':'' }} name="trending" id="trending" >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="meta_title">Meta title</label>
                        <textarea name="meta_title" id="meta_title" class="form-control" rows="3">
                            {{ $products->meta_title }} 
                        </textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="meta_keyword">Meta Keyword</label>
                        <textarea name="meta_keywords" id="meta_keyword" class="form-control" rows="3">
                            {{ $products->meta_keywords }} 
                        </textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="meta_description">Meta Description</label>
                        <textarea name="meta_description" id="meta_description" class="form-control" rows="3">
                            {{ $products->meta_description }} 
                        </textarea>
                    </div>
                    @if ($products->image)
                         <img style="width: 70px; margin-left:20px" src="{{ asset('assets/uploads/product/'.$products->image) }}"/>
                    @endif
                    <div class="col-md-12">
                        <input type="file" name="image" id="image">
                    </div>
                    <div class="col-md-12">
                       <input type="submit" class="form-control btn btn-primary" value="Update Prooduct">
                    </div>
                  
                  </div>
              </form>
        </div>
   </div>
@endsection
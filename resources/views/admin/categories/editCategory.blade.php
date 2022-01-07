@extends('layouts.admin');

@section('main_content')
   <div class="card">
        <div class="card-header">
             <h5>Edit/Update Category</h5>
        </div>
        <div class="card-body">
              <form action="{{ url('update-categories/'.$categories->id) }}" class="form-group" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                      <div class="col-md-6 mb-3">
                          <label for="name">Category Name</label>
                          <input type="text" name="name" id="name" value="{{ $categories->name }}" class="form-control">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="slug">Category Slug</label>
                        <input type="text" name="slug" id="slug" value="{{ $categories->slug }}"  class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" id="description"  rows="3" class="form-control">{{ $categories->description }} </textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="status">Status</label>
                        <input type="checkbox" name="status" {{ $categories->status=='1'?'checked':'' }} id="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="popular">Popular</label>
                        <input type="checkbox" {{ $categories->popular=='1'?'checked':'' }} name="popular" id="popular" >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="meta_title">Meta title</label>
                        <textarea name="meta_title" id="meta_title" class="form-control" rows="3">
                            {{ $categories->meta_title }} 
                        </textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="meta_keyword">Meta Keyword</label>
                        <textarea name="meta_keyword" id="meta_keyword" class="form-control" rows="3">
                            {{ $categories->meta_keywords }} 
                        </textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="meta_description">Meta Description</label>
                        <textarea name="meta_description" id="meta_description" class="form-control" rows="3">
                            {{ $categories->description }} 
                        </textarea>
                    </div>
                    @if ($categories->image)
                         <img style="width: 70px; margin-left:20px" src="{{ asset('assets/uploads/category/'.$categories->image) }}"/>
                    @endif
                    <div class="col-md-12">
                        <input type="file" name="image" id="image">
                    </div>
                    <div class="col-md-12">
                       <input type="submit" class="form-control btn btn-primary" value="Add Category">
                    </div>
                  
                  </div>
              </form>
        </div>
   </div>
@endsection
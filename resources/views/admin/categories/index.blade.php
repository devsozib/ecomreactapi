@extends('layouts.admin');

@section('main_content')
<div class="content">
     <div class="container-fluid">
       <div class="row">
       
         <div class="col-md-12">
           <div class="card card-plain">
             <div class="card-header card-header-primary">
               <h4 class="card-title mt-0">All Categories is here</h4>
               <p class="card-category">Categories</p>
             </div>
             <div class="card-body">
               <div class="table-responsive">
                 <table class="table table-hover">
                   <thead class="">
                     <th>
                       ID
                     </th>
                     <th>
                       Name
                     </th>
                     <th>
                       Image
                     </th>
                     <th>
                      Description
                     </th>
                     <th>
                      Action
                     </th>
                   </thead>
                   <tbody>
                        @foreach ($categories as $item )
                             
                        
                     <tr>
                       <td>
                        {{ $item->id }}
                       </td>
                       <td>
                        {{ $item->name }}
                       </td>
                       <td>
                        <img style="width: 50px;" src="{{ asset('assets/uploads/category/'.$item->image) }}" alt="Image here">
                       </td>
                       <td>
                         {{ $item->description }}
                        </td>
                       <td>
                        <a href="{{ url('edit-category/'.$item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{ url('delete-category/'.$item->id) }}" class="btn btn-sm btn-danger">Delete</a>
                       </td>
                      
                     </tr>
                     @endforeach
                   </tbody>
                 </table>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
@endsection
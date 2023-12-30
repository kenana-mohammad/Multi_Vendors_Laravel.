@extends('Backend.layouts.master')
@section('content')
<div class="panel-body px-5">

<div class="row">
                                <div class="col-9 py-3">
                               
                           <h2 class="m-0 font-weight-bold text-primary">Add</h2>
                                 </div>
                                <div class=" py-3 col-2">
            <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
                                </div>
                                     </div> 


  
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" >
                                        @csrf
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control"  placeholder="Name" name="name" value="{{old('name')}}">
                                        </div>

                                        
                                        <div class="form-group">
                                            <label>Product Category</label>
                                            <select class="form-control" name="ProductCategoryId">
                                              @foreach($productcat as $productcats)
                                                <option value="{{$productcats->id}}" >{{$productcats->name}}</option>
                                             
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Photo</label>
                                            <input type="file" class="form-control"  name="photo">
                                        </div>
                                     
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="number" class="form-control"  placeholder="price" name="price" value="{{old('price')}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                       <textarea name="description" id="" cols="30" rows="10"></textarea>
                                        </div>
                                      
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                              
                                                <option value="available" selected >available</option>
                                                <option value="unavailable" >unavailable</option>
                                            
                                            </select>
                                        </div>

                               
                                  
                                      
                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit </button>
                                      
                                    </form>
                                </div>
                            </div>
@endsection

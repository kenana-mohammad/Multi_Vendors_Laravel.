@extends('Backend.layouts.master')
@section('content')
<div class="panel-body px-5">
<h4 class="m-0 font-weight-bold text-primary">Edit  </h4>

  
                        
                               
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                    <form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data" >
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control"  placeholder="Name" name="name" value="{{$product->name}}">
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
                                            <input type="file" class="form-control"  name="photo" value="{{$product->photo}}">
                                        </div>
                                     
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="number" class="form-control"  placeholder="price" name="price" value="{{$product->price}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                       <textarea name="description" id="" cols="30" rows="10" value="{{$product->description}}"></textarea>
                                        </div>
                                      
                                       
                                        <div class="form-group">
                                            <label>Select</label>
                                            <select class="form-control" name="status"  value="{{$product->status}}">
                                            <option  selected > {{$product->status}}</option>
                                                <option value="available" >available</option>
                                                <option value="unavailable" >unavailable</option>
                                            
                                            </select>
                                        </div>

                               
                                  
                                      
                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit </button>
                                        <button type="submit" class="btn btn-secondary">Cancle</button>
                                      
                                    </form>
                                </div>
                            </div>
                                  
                                      
                                      
                                      
                                     
                                    
@endsection

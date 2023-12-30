@extends('Backend.layouts.master')
@section('content')
<div class="panel-body px-5">
<h4 class="m-0 font-weight-bold text-primary">Edit  </h4>

  
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                    <form action="{{route('category.update',$category->id)}}" method="POST"  enctype="multipart/form-data" >
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control"  placeholder="Name" name="name" value="{{$category->name}}">
                                        </div>

                                        <div class="form-group">
                                            <label>Photo</label>
                                            <div class="input-group">
                                                            <input class="form-control" type="file" name="photo" value="{{$category->photo}}">
                                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Select</label>
                                            <select class="form-control" name="status"  value="{{$category->status}}">
                                            <option  selected > {{$category->status}}</option>
                                                <option value="available" >available</option>
                                                <option value="unavailable" >unavailable</option>
                                            
                                            </select>
                                        </div>
                               
                                  
                                      
                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit </button>
                                        <button type="submit" class="btn btn-secondary">Cancle</button>
                                    </form>
                                </div>
@endsection

@extends('Backend.layouts.master')
@section('content')
<div class="panel-body px-5">
<h4 class="m-0 font-weight-bold text-primary">Add Category </h4>

  
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                    <form action="{{route('category.store')}}" method="POST"  enctype="multipart/form-data" >
                                        @csrf
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control"  placeholder="Name" name="name" value="{{old('name')}}">
                                        </div>

                                        
                                      
                                        <div class="form-group">
                                            <label>Photo</label>
                                            <div class="input-group">
                                                            <input class="form-control" type="file" name="photo" >
                                                            </div>
                        
                                        </div>
                                      
                                        <div class="form-group">
                                            <label>Select</label>
                                            <select class="form-control" name="status">
                                              
                                                <option value="available" selected >available</option>
                                                <option value="unavailable" >unavailable</option>
                                            
                                            </select>
                                        </div>
                               
                                  
                                      
                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit </button>
                                        <button type="submit" class="btn btn-secondary">Cancle</button>
                                    </form>
                                </div>
@endsection

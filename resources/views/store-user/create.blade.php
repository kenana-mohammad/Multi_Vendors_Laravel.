@extends('Backend.layouts.master')
@section('content')
<div class="panel-body px-5">
<h4 class="m-0 font-weight-bold text-primary">Add Mystore </h4>

@if(Session::has('add'))
                            <div class="alert alert-success" role="alert">
  تم الاضافة بنجاح
</div>@endif
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                    <form action="{{route('stores.store')}}" method="POST"  enctype="multipart/form-data" >
                                        @csrf
                                        <div class="form-group">
                                            <label>Name STORE</label>
                                            <input type="text" class="form-control"  placeholder="Name" name="title" >
                                           
                                        </div>

                                        <div class="form-group">
                                          <input type="hidden" class="form-control"  placeholder="user" name="user" value="{{Auth::user()->id}}" >
                                         
                                                </div>

                                        <div class="form-group">
                                            <label>image</label>
                                            <div class="input-group">
                                          <input class="form-control" type="file" name="image">
                                         

                                                        </div>
                                                        <div class="form-group">
                                            <label>category</label>
                                            <select name="category_id" class="form-control">
                                                <option selected >please choose category</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>category</label>
                                            <select name="subcategory_id" class="form-control">
                                                <option selected >please choose subcategory</option>
                                                @foreach($subcategories as $subcategory)
                                                <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                                        <div class="form-group">
                                        <label>status</label>
                                            <select class="form-control" name="status" >
                                            <option value="pending"  >pending</option>
                                              
                                            
                                            </select>
                                        </div>
                                       
                                        
                                            
                                            <div class="form-group">
                                            <label>rating</label>
                                            <select class="form-control" name="rating">
                                              
                                                <option value="1" selected >1</option>
                                                <option value="2" >2</option>
                                                <option value="3" >3</option>
                                                <option value="4" >4</option>
                                                <option value="5" >5</option>
                                            
                                            </select></div>

                                            <div class="form-group">
                                            <label>adderss</label>
                                            <input type="text" class="form-control"  placeholder="Name" name="address" >
                                           
                                        </div>
                                       <div class="form-group">
                                       <textarea cols="8" rows="8" class="form-control  mt-5 " placeholder="message" name="desc"></textarea>
</div>
                                  
                                      
                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit </button>
                                        <button type="submit" class="btn btn-secondary">Cancle</button>
                                    </form>
                                </div>
@endsection

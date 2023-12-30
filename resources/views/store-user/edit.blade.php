@extends('Backend.layouts.master')
@section('content')
<div class="panel-body px-5">
<h4 class="m-0 font-weight-bold text-primary">edit store </h4>

  
@if(Session::has('edit'))
                            <div class="alert alert-success" role="alert">
  تم التعديل بنجاح
</div>@endif
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                    <form action="/updatestoreuser/{{$stores->id}}" method="POST"  enctype="multipart/form-data" >
                                    @method('POST')
                                    @csrf
                                        <div class="form-group">
                                            <label>Name STORE</label>
                                            <input type="text" class="form-control"  placeholder="Name" name="title" value="{{$stores->name}}" >
                                        </div>

                                        <div class="form-group">
                                         
                                            <input type="hidden" class="form-control"  placeholder="user" name="user_id" value="{{$stores->user_id}}" >
                                        </div>

                                        <div class="form-group">
                                            <label>image</label>
                                            <div class="input-group">
                                                            <input class="form-control" type="file" name="image" value="{{$stores->image}}">
                                                            </div></div>
                                                            <div class="form-group">
                                            <label>category</label>
                                            <select name="category_id" class="form-control">
                                               
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                            <div class="form-group">
                                            <label>subcategory</label>
                                            <select name="subcategory_id" class="form-control">
                                               
                                                @foreach($subcategories as $subcategory)
                                                <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                                @endforeach
                                            </select>
                                                            <div class="form-group">
                                            
                                            <div class="form-group">
                                            <label>rating</label>
                                            <select class="form-control" name="rating" value="{{$stores->rating}}">
                                              
                                            <option  selected > {{$stores->rating}}</option>
                                                <option value="1" >1</option>
                                                <option value="2" >2</option>
                                                <option value="3" >3</option>
                                                <option value="4" >4</option>
                                                <option value="5" >5</option>
                                            </select></div>

                                            <div class="form-group">
                                            <label>adderss</label>
                                            <input type="text" class="form-control"  placeholder="Name" name="address"value="{{$stores->address}}" >
                                           
                                        </div>
                                       <div class="form-group">
                                       <label>desc</label>
                                       <textarea cols="8" rows="8" class="form-control  mt-5 " placeholder="message" name="desc" value="{{$stores->description}}">{{$stores->description}}</textarea>
</div>
                                      
                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Submit </button>
                                        <button type="submit" class="btn btn-secondary">Cancle</button>
                                    </form>
                                </div>
@endsection
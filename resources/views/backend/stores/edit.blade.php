@extends('Backend.layouts.master')
@section('content')
<div class="panel-body px-5">
<h4 class="m-0 font-weight-bold text-primary">edit store </h4>

  
                            <div class="row">
                                <div class="col-lg-12 py-3">

                                    <form action="{{route('store.update',$st->id)}}" method="POST"  enctype="multipart/form-data" >
                                    @method('PUT')
                                    @csrf
                                        <div class="form-group">
                                            <label>Name STORE</label>
                                            <input type="text" class="form-control"  placeholder="Name" name="title" value="{{$st->name}}" >
                                        </div>

                                        <div class="form-group">
                                          
                                            <input type="hidden" class="form-control"  placeholder="user" name="user_id" value="{{$st->user_id}}" >

                                        </div>

                                        <div class="form-group">
                                            <label>image</label>
                                            <div class="input-group">

                                                            <input class="form-control" type="file" name="image" value="{{$st->image}}">
                                                            </div></div>
                                                            <div class="form-group">
                                            <label>category</label>
                                            <select name="category_id" class="form-control">
                                            <option selected value="{{$st ->category->id}}" >{{$st ->category->name}}</option>

                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                            <div class="form-group">
                                            <label>subcategory</label>
                                            <select name="subcategory_id" class="form-control">
                                            <option selected value="{{$st ->subcategory->id}}" >{{$st ->subcategory->name}}</option>

                                                @foreach($subcategories as $subcategory)
                                                <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                                @endforeach
                                            </select>
                                                            <div class="input-group">   
                                                            <select class="form-control" name="status" >
                                                            <option   > {{$st->status}}</option>
                                            <option value="pending"  >pending</option>
                                                <option value="active"  >active</option>
                                                <option value="inactive" >inactive</option>
                                            
                                            </select></div> 
                                            
                                            <div class="form-group">
                                            <label>rating</label>
                                            <select class="form-control" name="rating" >
                                              
                                            <option  selected > {{$st->rating}}</option>
                                                <option value="1" >1</option>
                                                <option value="2" >2</option>
                                                <option value="3" >3</option>
                                                <option value="4" >4</option>
                                                <option value="5" >5</option>
                                            </select></div>

                                  
                                            <div class="form-group">
                                            <label>adderss</label>
                                            <input type="text" class="form-control"  placeholder="Name" name="address"value="{{$st->address}}" >
                                           
                                        </div>
                                       <div class="form-group">
                                       <label>desc</label>
                                       <textarea cols="8" rows="8" class="form-control  mt-5 " placeholder="message" name="desc" value="{{$st->description}}">{{$st->description}}</textarea>
</div>
<div class="form-group">
                                            <label>thems</label>
                                            <select class="form-control" name="thems" >
                                              
                                            <option  selected > {{$st->thems}}</option>
                                                <option value="them1" >them1</option>
                                                <option value="them2" >them2</option>
                                                <option value="them3" >them3</option>
                                         
                                            </select></div>                  
                                      
                                            <div class="form-group">
                                            <label>tenant</label>
                                            <select name="tenant_id" class="form-control">
                                                <option selected >{{$st->tenant_id}}</option>
                                                @foreach($tenant as $tenant)
                                                <option value="{{$tenant->id}}">{{$tenant->id}}</option>
                                                @endforeach
                                            </select>
                                        </div>
<button type="submit" class="btn btn-primary">Submit </button>
                                        <button type="submit" class="btn btn-secondary">Cancle</button>
                                    </form>
                                </div>
@endsection




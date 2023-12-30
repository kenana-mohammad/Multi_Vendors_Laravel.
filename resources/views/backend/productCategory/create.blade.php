@extends('Backend.layouts.master')
@section('content')
<div class="panel-body px-5">

<div class="row">
                                <div class="col-9 py-3">
                               
                           <h2 class="m-0 font-weight-bold text-primary">Add</h2>
                                 </div>
                                <div class=" py-3 col-2">
            <a class="btn btn-primary" href="{{ route('ProductCat.index') }}"> Back</a>
                                </div>
                                     </div> 


  
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                    <form action="{{route('ProductCat.store')}}" method="POST" >
                                        @csrf
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control"  placeholder="Name" name="name" value="{{old('name')}}">
                                        </div>

                                        
                                        <div class="form-group">
                                            <label>Store</label>
                                            <select class="form-control" name="storeId">
                                              @foreach($store as $stores)
                                                <option value="{{$stores->id}}" >{{$stores->name}}</option>
                                             
                                            @endforeach
                                            </select>
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
@endsection

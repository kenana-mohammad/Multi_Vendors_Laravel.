@extends('Backend.layouts.master')
@section('content')
<div class="panel-body px-5">
<div class="row">
                                <div class="col-9 py-3">
                               
                           <h2 class="m-0 font-weight-bold text-primary">Edit</h2>
                                 </div>
                                <div class=" py-3 col-2">
            <a class="btn btn-primary" href="{{ route('ProductCat.index') }}"> Back</a>
                                </div>
                                     </div> 
                               
                      

        {!! Form::model($productCategory, ['method' => 'PATCH','route' => ['ProductCat.update', $productCategory->id]]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>StoreId:</strong>
            <select class="form-control" name="storeId">
           
                @foreach($store as $stores) 
         <option value="{{$stores->id}}" >{{$stores->name}}</option>
                                             
               @endforeach
                                    
                                    </select>
      
    </div>
        </div>
  
 
  
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Status:</strong>
            <select class="form-control" name="status">
            <option selected  >{{$productCategory->status}}</option>
                                        <option  value="available" >available</option>
                                        <option value="unavailable">unavailable</option>
                                    
                                    </select>
      
    </div>
        </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}
                                </div>
@endsection


@extends('Backend.layouts.master')
@section('content')
<div class="panel-body px-5">


  
                            <div class="row">
                                <div class="col-9 py-3">
                               
                           <h2 class="m-0 font-weight-bold text-primary">Create New User</h2>
                                 </div>
                                <div class=" py-3 col-2">
            <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
                                </div>
                                     </div> 
                                   

       {!! Form::open(array('route' => 'user.store','method'=>'POST','enctype'=>'multipart/form-data')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            @error('name')
            <div class="alert alert-danger" >
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            @error('email')
            <div class="alert alert-danger" >
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Password:</strong>
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
            @error('password')
            <div class="alert alert-danger" >
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
 
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Phone:</strong>
            {!! Form::text('phone', null, array('placeholder' => 'Phone','class' => 'form-control')) !!}
            
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Photo:</strong>
            {!! Form::file('photo', null) !!} 
            @error('photo')
            <div class="alert alert-danger" >
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Address:</strong>
            {!! Form::text('address', null, array('placeholder' => 'Address','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Role:</strong>
            {!! Form::select('role[]', $roles,[], array('class' => 'form-control','multiple')) !!}
        </div>
    </div>
  
    <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                        
                                                <option selected value="active" >active</option>
                                                <option value="inactive">inactive</option>
                                            
                                            </select>
                                        </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    
    </div>
</div>
{!! Form::close() !!}


                                </div>
@endsection
@section('script')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script> 
<script> $('#lfm').filemanager('image');</script>
@endsection
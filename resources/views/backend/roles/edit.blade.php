@extends('Backend.layouts.master')
@section('content')
<div class="panel-body px-5">
<div class="row">
                                <div class="col-9 py-3">
                               
                           <h2>Edit Role</h2>
                                 </div>
                                <div class=" py-3 col-2">
                                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                                </div>
                                     </div> 


  
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                 
{!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permission:</strong>
            <br/>
            @foreach($permission as $value)
                <strong>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                {{ $value->name }}</strong>
            <br/>
            @endforeach
        </div>
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
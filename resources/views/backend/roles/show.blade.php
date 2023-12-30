@extends('Backend.layouts.master')
@section('content')  
<div class="row">
    <div class="col-lg-10">

            <h2> Show Role</h2>
        </div>
<div class="col-lg-2">
<a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
       
    </div>
</div>

<div class="card mb-3 m-5" style="max-width: 540px;">
  <div class="row g-0">
   
    <div class="col-md-12">
      <div class="card-body">
        <h5 class="card-title">   {{ $role->name }}</h5>
        
            <div> <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Permissions:</strong>
        <ul>
        @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
        <li>
        {{ $v->name }}</li>
        @endforeach
            @endif
            </ul>
            <div>
          
        </div>
        </div>
    </div>
</div>
      </div>
    </div>
  </div>
</div>


@endsection
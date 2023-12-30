@extends('Backend.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-10">

            <h2> Show User</h2>
        </div>
<div class="col-lg-2">
            <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
       
    </div>
</div>


<div class="card mb-3 m-5" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4"> 
       
    <img src="{{asset('storage/'.$user->photo)}}" width="150px">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">  {{ $user->name }}</h5>
        <p class="card-text"> <strong>Email:</strong>
            {{ $user->email }}</p>
            <p class="card-text"> <strong>Phone:</strong>
            {{ $user->phone }}</p>
            <p class="card-text"> <strong>Address:</strong>
            {{ $user->address }}</p>
            <p class="card-text"> <strong>Status:</strong>
            @if( $user->status =='available')  
           <label class="badge badge-success"> {{ $user->status }}</label>
                  @else
                      <label class="badge badge-danger">{{ $user->status  }}</label>
                    @endif
           
            </p>
            <div> <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Roles:</strong>
            <div>
            @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <label class="badge badge-success">{{ $v }}</label>
                @endforeach
            @endif
        </div>
        </div>
    </div>
</div>
      </div>
    </div>
  </div>
</div>

@endsection
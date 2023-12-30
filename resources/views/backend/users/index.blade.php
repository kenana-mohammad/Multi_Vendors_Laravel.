@extends('Backend.layouts.master')
@section('content')
<div class="card shadow mb-4">  
    
<div class="row">

    <div class="card-header py-3 col-lg-10">
        <h4 class="m-0 font-weight-bold text-primary">All Users </h4>
    </div>
    @can('creat User')
<div class="card-header py-3 col-lg-2">
    <a href="{{route('user.create')}}" class="btn btn-success  "> Add User </a></div>
    <div class="card-header py-3 col-lg-2">
    <a href="{{route('onesignal')}}" class="btn btn-white  "> <i class='fas fa-bell' style='font-size:48px;color:red'></i>
 </a> 

    </div>
    
</div>
@endcan
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
    <div class="card-body">
        <div class="table-responsive ">
            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>

                        <th>Photo</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    

                    </tr>
                </thead>

                <tbody>
                    @foreach($user as $users)
                    <tr>
                        <td>{{$users->id}}</td>
                        <td>{{$users->name}}</td>
                        <td>{{$users->email}}</td>

                        


                        <td><img src="{{asset('storage/'.$users->photo)}}" width="50px">

                        </td>
                        <td>{{$users->phone}}</td>
                        <td>{{$users->address}}</td>
                        <td>
      @if(!empty($users->getRoleNames()))
        @foreach($users->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
                        <td> 
                     @if($users->status =='active')  
           <label class="badge badge-success">{{ $users->status }}</label>
                  @else
                      <label class="badge badge-danger">{{ $users->status }}</label>
                    @endif
                       </td>
                   
                        <td>    @can('show User')
                             <a href="{{route('user.show',$users->id)}}" class="btn btn-info"> Show </a>
                        @endcan
                        @can('edit User')
                     <a href="{{route('user.edit',$users->id)}}" class="btn btn-primary"> Edit </a>
                       
                     @endcan
                        @can('delete User')
                     {!! Form::open(['method' => 'DELETE','route' => ['user.destroy', $users->id],'style'=>'display:inline']) !!}
                       {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                         {!! Form::close() !!}
                         @endcan
                         @can('create store')
                         <a href="{{route('addstore',$users->id)}}" class="btn btn-success">add store </a>
                        @endcan

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$user->onEachSide(1)->links()}}
        </div>
    </div>
</div>
@endsection
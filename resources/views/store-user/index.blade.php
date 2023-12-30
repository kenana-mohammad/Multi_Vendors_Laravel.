@extends('Backend.layouts.master')
@section('content')
<div class="card shadow mb-4">
<div class="row">

<div class="card-header py-3 col-lg-10">
    <h4 class="m-0 font-weight-bold text-primary">All Stores </h4>
</div>

                        @can('create store')
<div class="card-header py-3 col-lg-2">
</div>
@endcan
                     
                       
                        <div class="card-body">
                            <div class="table-responsive " >
                            @if(Session::has('add'))
                            <div class="alert alert-success" role="alert">
  تم الاضافة بنجاح
</div>@endif
@if(Session::has('edit'))
                            <div class="alert alert-success" role="alert">
  تم التعديل بنجاح
</div>@endif
@if(Session::has('delete'))
                            <div class="alert alert-success" role="alert">
  تم الحذف بنجاح
</div>@endif
                                <table class="table table-bordered data-table" id="dataTable" >
                                    <thead>
                                        <tr> 
                                        <th>ID</th>
                                            <th>Name</th>
                                            <th>user_name</th>
                                         
                                            <th>image</th>
                                            <th>status</th>
                                            <th>rating</th>
                                            <th>edite</th>
                                            <th>delete</th>
                                    
                                        </tr>
                                    </thead>
                               
                                    <tbody>
                                        @foreach($store as $stores)
                                        
                                        <tr>
                                            <td>{{$stores->id}}</td>
                                            <td>{{$stores->name}}</td>
                                            <td>{{$stores->User->name}}</td>
                                            
                                              
                                            <td>
                                                <img src="{{asset('storage/'.$stores->image)}}" width="70px" height="70px" alt="">
                                            </td>
                                            
                                            <td>{{$stores->status}}</td>
                                            <td>{{$stores->rating}}</td>
                                         
                                            <td>   
                        
                        @can('edit Mystore')
                     <a href="{{route('stores.edit',$stores->id)}}" class="btn btn-primary"> Edit </a>
                       
                     @endcan
</td>
<td> 
@can('delete Mystore')                            
<form action="{{route('stores.destroy',$stores->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                             <button type="Delete" value="delete" class="btn btn-danger" >Delete </button>
                                        </form>@endcan
                                        </td>
                                        <td>
                                            @can('select thems')
                                  <a  href="{{route('selectthem',$stores->id)}}" class="btn btn-warning ">select thems</a>
@endcan
</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            
                     
                            </div>
                        </div>
                    </div>
@endsection
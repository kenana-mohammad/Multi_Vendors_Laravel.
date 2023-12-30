@extends('Backend.layouts.master')
@section('content')
<div class="card shadow mb-4">
<div class="row">

<div class="card-header py-3 col-lg-10">
    <h4 class="m-0 font-weight-bold text-primary">All Categories </h4>
</div>

@can('create Category')
<div class="card-header py-3 col-lg-2">
<a href="{{route('category.create')}}" class="btn btn-success  "> Add Category </a></div>
</div>
@endcan
                     
                       
                        <div class="card-body">
                            <div class="table-responsive ">
                                
                                <table class="table table-bordered data-table" id="dataTable" >
                                    <thead>
                                        <tr> 
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Photo</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                    
                                        </tr>
                                    </thead>
                               
                                    <tbody>
                                        @foreach($category as $cat)
                                        <tr>
                                            <td>{{$cat->id}}</td>
                                            <td>{{$cat->name}}</td>
                           
                                           
                                            <td>
                                                <img src="{{asset('storage/'.$cat->photo)}}" width="70px" height="70px" alt="">
                                            </td>

                                            <td> 
                     @if($cat->status =='available')  
           <label class="badge badge-success">{{ $cat->status }}</label>
                  @else
                      <label class="badge badge-danger">{{ $cat->status }}</label>
                    @endif
                       </td>>
                                         
                                            <td>   
                        
                        @can('edit Category')
                     <a href="{{route('category.edit',$cat->id)}}" class="btn btn-primary"> Edit </a>
                       
                     @endcan
                        @can('delete Categories')
                     {!! Form::open(['method' => 'DELETE','route' => ['category.destroy', $cat->id],'style'=>'display:inline']) !!}
                       {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                         {!! Form::close() !!}
                         @endcan
                        
                        </td>
                                  
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{$category->onEachSide(1)->links()}}
                     
                            </div>
                        </div>
                    </div>
@endsection
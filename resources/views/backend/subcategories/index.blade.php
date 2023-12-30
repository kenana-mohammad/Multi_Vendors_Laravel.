@extends('Backend.layouts.master')
@section('content')
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary">All Subcategories </h4>
                        </div>
                        @can('create Subcategories')
                        <div class="card-header py-3 col-lg-2">
<a href="{{route('subcategory.create')}}" class="btn btn-primary  "> Add SubCategory </a>
</div>
@endcan
                        <div class="card-body">
                            <div class="table-responsive " >
                                <table class="table table-bordered data-table" id="dataTable" >
                                    <thead>
                                        <tr> 
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>category_id</th>
                                            <th>image</th>
                                            <th>Action</th>
                                            <th>Action</th>
                                    
                                        </tr>
                                    </thead>
                               
                                    <tbody>
                                        @foreach($subcategory as $x)
                                        <tr>
                                            <td>{{$x->id}}</td>
                                            <td>{{$x->name}}</td>
                           
                                            <td>{{$x->category->name}}</td>
                                            <td>
                                                <img src="{{asset('storage/'.$x->image)}}" width="70px" height="70px" alt="">
                                            </td>

                                           
                                            
                                            <td> 
                                            @can('Edit Subcategories')
                                                <a href="{{route('subcategory.edit',$x->id)}}"> <button type="submit" class="btn btn-success">Edit </button></a>
                                                @endcan
                                            </td>
                                           <td>
                                           @can('delete Subcategory')
                                           <form action="{{route('subcategory.destroy',$x->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                             <button type="Delete" value="delete" class="btn btn-danger" >Delete </button>
                                        </form>
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
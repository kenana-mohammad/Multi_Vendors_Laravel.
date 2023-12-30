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

                                            <th>category</th>
                                            <th>subcategory</th>
                                            <th>desciption</th>
                                            <th>address</th>
                                            <th>thems</th>
                                            <th>domin</th>
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
                                            <td>
                                          
         <form method="post" action="{{route('active',$stores->id)}}">
         @csrf
                                                @method('post')
                                               
<input type="hidden" value="active" name="action">
<input type="hidden"  name="ids">
<button type="submit" value="deactivelete" class="btn btn-success btn-sm" >active </button>

</form>


<form method="post" action="{{route('active',$stores->id)}}">
         @csrf
                                                @method('post')
<input type="hidden" value="inactive" name="action">
<input type="hidden"  name="ids">
<button type="submit" value="inactive" class="btn btn-warning btn-sm" >inactive </button>
</form>
      
        </td> 
                                            <td>{{$stores->rating}}</td>
                                            <td>{{$stores->category->name}}</td>
                                            <td>{{$stores->subcategory->name}}</td>
                                            <td>{{$stores->description}}</td>
                                            <td>{{$stores->address}}</td>
                                            <td>{{$stores->thems}}</td>
                                            <td>{{$stores->tenant_id}}</td>

                                            <td>   
                        
                        @can('edit store')
                     <a href="{{route('store.edit',$stores->id)}}" class="btn btn-primary"> Edit </a>
                       
                     @endcan
</td>
<td> 
@can('delete store')
                                           <form action="{{route('store.destroy',$stores->id)}}" method="POST">
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
                                {{$store->onEachSide(1)->links()}}
                     


                            </div>
                        </div>
                    </div>
@endsection
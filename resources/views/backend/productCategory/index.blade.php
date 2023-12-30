@extends('Backend.layouts.master')
@section('content')
<div class="card shadow mb-4"> 
    
<div class="row">

    <div class="card-header py-3 col-lg-10">
        <h4 class="m-0 font-weight-bold text-primary">Product-Category </h4>
    </div>

<div class="card-header py-3 col-lg-2">
@can('create ProductCategory')
    <a href="{{route('ProductCat.create')}}" class="btn btn-success  "> Add  </a>
    @endcan
</div>

</div>

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
                        <th>StoreId</th>
                        <th>Status</th>
                        <th>Photo</th>
                        <th>Action</th>
                    

                    </tr>
                </thead>

                <tbody>
                    @foreach($productCategory as $productCat)
                    <tr>
                        <td>{{$productCat->id}}</td>
                        <td>{{$productCat->name}}</td>
                        <td>{{$productCat->storeId}}</td>
       
                        <td> 
                     @if($productCat->status =='available')  
           <label class="badge badge-success">{{ $productCat->status }}</label>
                  @else
                      <label class="badge badge-danger">{{ $productCat->status }}</label>
                    @endif
                       </td>
                       <td><img src="{{asset('storage/'.$productCat->photo)}}" width="50px">
</td>
        
                        <td>  
                            @can('show ProductCategory')
                             <a href="{{route('ProductCat.show',$productCat->id)}}" class="btn btn-info"> Show </a>
                       @endcan
                       @can('Edit ProductCategory')
                     <a href="{{route('ProductCat.edit',$productCat->id)}}" class="btn btn-primary"> Edit </a>
                     @endcan

                       @can('delete ProductCategory')
                   
                     {!! Form::open(['method' => 'DELETE','route' => ['ProductCat.destroy', $productCat->id],'style'=>'display:inline']) !!}
                       {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                         {!! Form::close() !!}
                         @endcan
                      
                         <a href="{{route('slider',$productCat->id)}}" class="btn btn-primary"> addslider </a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$productCategory->onEachSide(1)->links()}}
        </div>
    </div>
</div>
@endsection
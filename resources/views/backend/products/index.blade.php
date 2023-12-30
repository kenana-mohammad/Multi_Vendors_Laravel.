@extends('Backend.layouts.master')
@section('content')
<div class="card shadow mb-4"> 
    
<div class="row">

    <div class="card-header py-3 col-lg-10">
        <h4 class="m-0 font-weight-bold text-primary">All Products </h4>
    </div>
    @can('create Product')
<div class="card-header py-3 col-lg-2">
    <a href="{{route('product.create')}}" class="btn btn-success  "> Add product </a></div>
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
                        <th>ProductCategoryId</th>

                        <th>Photo</th>
                        <th>PhotoSlider</th>
                        <th>description</th>
                        <th>Price</th>
                        
                        <th>Status</th>
                        <th>Offer</th>
                        <th>discount</th>
                        <th>Expdate</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach($product as $products)
                    <tr>
                        <td>{{$products->id}}</td>
                        <td>{{$products->name}}</td>
                        <td>{{$products->ProductCategoryId}}</td>

                        
                        <td><img src="{{asset('storage/'.$products->photo)}}" width="50px">
                        </td>
                        <td><img src="{{asset('storage/'.$products->photoslider)}}" width="50px">
                        </td>
                     

                        <td>{{$products->description}}</td>
                        <td>{{$products->price}}</td>
                        <td> 
                     @if($products->status =='available')  
           <label class="badge badge-success">{{ $products->status }}</label>
                  @else
                      <label class="badge badge-danger">{{ $products->status }}</label>
                    @endif
                       </td>
                        <td>
                            @if($products->hasoffer!=0)
                            <label class="badge badge-success">has offer</label>
                            @else
                      <label class="badge badge-danger">no offer</label>
                    @endif
                     </td>
                     <td>
                        {{$products->discount}}
                     </td>
                     <td>
                        {{$products->Expdate}}
                     </td>
          
                   
                        <td> 
                   
                        <a href="{{route('Offer',$products->id)}}" class="btn btn-primary"> Add Offer </a>
                      
         
                               @can('show Product')
                             <a href="{{route('product.show',$products->id)}}" class="btn btn-info"> Show </a>
                        @endcan
                        @can('Edit Product')
                     <a href="{{route('product.edit',$products->id)}}" class="btn btn-primary"> Edit </a>
                       
                     @endcan
                        @can('delete Product')
                     {!! Form::open(['method' => 'DELETE','route' => ['product.destroy', $products->id],'style'=>'display:inline']) !!}
                       {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                         {!! Form::close() !!}
                         @endcan
                       
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$product->onEachSide(1)->links()}}
        </div>
    </div>
</div>
@endsection
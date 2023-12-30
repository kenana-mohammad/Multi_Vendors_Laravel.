@extends('Backend.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-10">

    <h2 class="m-0 font-weight-bold text-primary">Show</h2>
        </div>
<div class="col-lg-2">
            <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
       
    </div>
</div>


<div class="card mb-3 m-5" style="max-width: 540px;">
  <div class="row g-0">
  <div class="col-md-4"> 
       
       <img src="{{asset('storage/'.$product->photo)}}" width="150px">
       </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">  {{ $product->name }}</h5>
        <p class="card-text"> <strong>ProductCategory:</strong>
            {{ $product->ProductCategoryId }}</p>
            <p class="card-text"> <strong>Price:</strong>
            {{ $product->price }}</p>
            <p class="card-text"> <strong>Description:</strong>
            {{ $product->description }}</p>
            
            <p class="card-text"> <strong>Status:</strong>
            @if($product->status =='available')  
           <label class="badge badge-success">{{ $product->status }}</label>
                  @else
                      <label class="badge badge-danger">{{ $product->status }}</label>
                    @endif
           
            <div> <div class="col-xs-12 col-sm-12 col-md-12">
     
    </div>
</div>
      </div>
    </div>
  </div>
</div>

@endsection
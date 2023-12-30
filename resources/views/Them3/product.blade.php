@extends('Them3.navbar')
@section('content')
          <!-- header -->
          <div id="carouselExampleFade" class="carousel slide carousel-fade ">
            

            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              @foreach($Products as $Products)
              <div class="carousel-item active" data-bs-interval="10000">
              <img src="{{asset('storage/'.$Products->photoslider)}}" class="w-100 d-block" height="600px" >       
                <div class="carousel-caption d-none d-md-block">
                  <h2 class="text-uppercase mb-3">  GET START YOUR FAVRIOT SHOPING</h2>
                  <p class="text-white">Etiam vitae augue odio. Ut laoreet ipsum vel ultrices viverra. Donec nisl dolor, mollis vel libero id, 
                    tempor cursus lectus. Vestibulum eu ligula et pharetra efficitur. Maecenas eleifend</p>
                    <a class="btn btn-light"> more</a>
                </div>
              </div>@endforeach
           
           
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
<div class="bg-light">
      <div class="container mt-5">
        <h2 class="title">Product</h2>
        <div class="row mt-5 mb-5 pb-5">
@foreach($product as $product)
          <div class="col-md-4 padding-bottom">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <div class="card h-100 card-img">
              <img src="{{asset('storage/'.$product->photo)}}" class="img-fluid rounded-start h-100 " alt="..."></div>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>@endforeach
    
     
    </div>
      </div></div>

@endsection
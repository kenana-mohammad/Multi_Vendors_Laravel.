@extends('Them1.navbar')
@section('content')


<div id="carouselExampleFade" class="carousel slide carousel-fade ">
      

        
      <div class="carousel-inner">
        @foreach($products as $products)
        <div class="carousel-item  overlay active" data-bs-interval="10000">
        <img src="{{asset('storage/'.$products->photoslider)}}" class="d-block w-100" height="600px">       
             <div class="carousel-caption d-none d-md-block">
            <h2 class="text-uppercase ">  50% OFF
              FIRST ORDER</h2>
         
              <a class="btn btn-light mb-5  btn-car caption"> shop now</a>
          </div>
        </div>
       @endforeach
        
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div></div>

      <div class="container">
        <h1 class="text-center margin-top">Product Selling</h1>
        <div class="row padding-top padding-bottom">
        @foreach($product as $product)
  
      <div class="col-md-4">
                    
                    <div class="card">
                    <img src="{{asset('storage/'.$product->photo)}}" class="card-img-top  " alt="Owl Image">
                        <div class="card__overlay">
                          <div class="overlay__text">
                          <h5 class="card-title text-center">{{$product->name}}</h5>
              <span class="card-title text-center ">{{$product->price}}</span><br>
         
                            <a href="#" class="button btn-card">Shop Now</a>
                          </div>
                        </div>
                      </div>
                    </div>@endforeach
                    </div>
                </div> </div></div>            


@endsection
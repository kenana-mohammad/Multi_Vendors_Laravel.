@extends('Them2.navbar')
@section('content')

<div id="carouselExampleCaptions" class="carousel slide ">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
@foreach($Products as $Products)
          <div class="carousel-item  overlay active">
          <img src="{{asset('storage/'.$Products->photoslider)}}" class="d-block w-100" height="600px" >       
            <div class="carousel-caption d-none d-md-block mb-4 text-white">
                <span>All New Phones </span>
                <h1>up to 25% Flat Sale</h1>
                <p>It is a long established fact that a reader will be distracted by the readable content
                    <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                <a class="btn btn-danger" href="#">Buy Now</a>  </div>
          </div>
          
@endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

        
    <div class="container wrapper">
    <h1 class="text-center text-danger padding-top">Products</h1>
<div class="row padding-top">
@foreach($product as $product)
    <div class="col-md-4 mt-5">
        <div class="item">
            <div class="card" style="width: 18rem;">
                <img  src="{{asset('storage/'.$product->photo)}}" class="card-img-top"  height="350px" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$product->name}}</h5>
                  
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-danger">--order Now--</a>    
                  <span class="ms-3">  {{$product->price}}$ </span>         </div>
              </div>
        </div>
    </div>@endforeach
    
    

</div>
<div id="pagination" ></div>
</div>

<script>
// paganition
    $(".wrapper .item").slice(3).hide();
		$('#pagination').pagination({

			// Total number of items present
			// in wrapper class
			items: 9,

			// Items allowed on a single page
			itemsOnPage: 3,
			onPageClick: function (noofele) {
				$(".wrapper .item").hide()
					.slice(3*(noofele-1),
					3+ 3* (noofele - 1)).show();
			}
		});
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
@endsection
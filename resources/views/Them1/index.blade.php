@extends('Them1.navbar')
@section('content')
<div id="carouselExampleFade" class="carousel slide carousel-fade ">
      

        
      <div class="carousel-inner">
        @foreach($productCat as $productCat)
        <div class="carousel-item  overlay active" data-bs-interval="10000">
        <img src="{{asset('storage/'.$productCat->photo)}}" class="d-block w-100" height="600px">       
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

    <!-- Menu -->
    <div class="container margin-top">
      <diiv class=" ">
          <h1 class="text-center mb-5 padding-top">Menu</h1>
          <div class="accordion " id="accordionExample">
@foreach($productcat as $productcat)
              <div class="accordion-item">
                <h2 class="accordion-header ">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    roge-section
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show bg" data-bs-parent="#accordionExample">
                  <div class="accordion-body ">
                      <div class="row">
                          <div class="col col-8 col-sm-8">
                          <img src="{{asset('storage/'.$productcat->photo)}}" class="" height="200px" width="200px">       
<div class="col-6 col-sm-4">
  <a class="title mt-5 text-decoration-none ms-5 text-center text-white fs-4" href="/productThem1/{{$productcat->id}}">{{$productcat->name}}</a>
</div>
</div>                    </div>
                </div>
              </div>
                            </div>@endforeach
                </div>
              </div>
</div>

    <!-- product sellling -->


    <div class="container">
      <h1 class="text-center margin-top">Product Selling</h1>
      <div class="row padding-top padding-bottom">
                 
          <div class="col-md-4">
              <div class="card">
                  <img src="assets/nails/images/photo-1522335789203-aabd1fc54bc9.avif" class="card__image" height="300px">
                  <div class="card__overlay">
                    <div class="overlay__text">
                      <h3>items</h3>
                      <p>3000$ <del>5000$</del></p>
                      <a href="#" class="button btn-card">Shop Now</a>
                    </div>
                  </div>
                </div>
          </div>
       
              <div class="col-md-4">
                   <div class="card">
                      <img src="assets/nails/images/img-7.png" class="card__image" height="300px">
                      <div class="card__overlay">
                        <div class="overlay__text">
                          <h3>items</h3>
                          <p>3000$ <del>5000$</del></p>
                          <a href="#" class="button btn-card">Shop Now</a>
                        </div>
                      </div>
                    </div>
              </div>
              
                       
              <div class="col-md-4">
                  
                  <div class="card">
                      <img src="assets/nails/images/about-img.png" class="card__image" height="300px">
                      <div class="card__overlay">
                        <div class="overlay__text">
                          <h3>items</h3>
                          <p>3000$ <del>5000$</del></p>
                          <a href="#" class="button btn-card">Shop Now</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
              </div> </div></div>

              <!-- offers -->
              <div class="container-fluid offer pt-5 padding-bottom ">
                <h1 class="text-center">offers</h1>
                <div class="row px-xl-5 padding-top">
                    <div class="col-md-6 pb-4">
                        <div class="position-relative section text-center text-md-right text-white mb-2 py-5 px-5">
                            <div class="position-relative" style="z-index: 2;">
                                <h5 class="text-uppercase  mb-3">20% off the all order</h5>
                                <h1 class="mb-4 font-weight-semi-bold ms-2 title-section">Trending</h1>
                                <a href="" class="btn btn-card-b py-md-2 px-md-3 btn-category">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pb-4 ">
                      <div class="position-relative section text-center text-md-right text-white mb-2 py-5 px-5">
                          <div class="position-relative" style="z-index: 2;">
                              <h5 class="text-uppercase  mb-3">60% off the all order</h5>
                              <h1 class="mb-4 font-weight-semi-bold ms-2 title-section">Summer collection</h1>
                              <a href="" class="btn btn-card-b py-md-2 px-md-3 btn-category">Shop Now</a>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
            <div class="padding-top container padding-bottom ">
            <h1 class="text-center">--about--</h1>
    <div class="row margin-top">
        <div class="col-6">
          <h3 class="title-a">  Why Choose Us?</h3>
            
          <p>  Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, <br>there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <a href="" class="btn btn-card text-white">Shop Now</a>
        </div>
        <div class="col-6 mb-5 ps-2 pt-3  ">
            <img src="../assets/them1/images/a.png" width="200px" class="about" >
        </div>
       
    </div>
   
</div>
<div class="container padding-top padding-bottom">
    <h1 class="text-center">--contact--</h1>
    <div class="row margin-top">
        <div class="col-6">
            <div class="row">
                <div class="col-6">
                    <input type="text" placeholder="Name" class="form-control main">
                </div>
                <div class="col-6">
                    <input type="email" placeholder="email" class="form-control main">

                </div>
              
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="text" placeholder="Subject" class="form-control main mt-3">

                </div>
            </div>
            <div class="row">
                <div class="col-12">
<textarea cols="30" rows="7" placeholder="Message" class="form-control main mt-3"></textarea>
                </div>
                <div class="row">
                    <div class="col-6">
<button class="btn-card mt-5 btn-contact text-white" >Send Message</button>                   </div>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="row">
            <div class="col-4 ps-5">
                <span class="icons ms-5"><i class="fa fa-envelope"></i></span><br>
                <span class="icons ms-5 mt-3"><i class="fa fa-map-marker"></i></span><br>
                <span class="icons ms-5 mt-3"><i class="fa fa-phone	"></i></span><br>
                <span class="icons ms-5 mt-3"><i class="fa fa-instagram"></i></span>

            </div>
<div class="col-8 mt-3">
    <h4 class="text-secandary">Email:</h4>
    <p>nails@12.com</p>
    <h4 class="text-secandary">location:</h4>
    <p>tartus-syria</p>
    <h4 class="text-secandary">phone:</h4>
    <p>+963025548</p>
    <h4 class="text-secandary">instagram:</h4>
    <p>nailsArt</p>
</div>
        </div>
    </div>
</div>
</div>
            @endsection
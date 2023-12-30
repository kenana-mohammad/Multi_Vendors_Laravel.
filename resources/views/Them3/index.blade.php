@extends('Them3.navbar')
@section('content')
<div id="carouselExampleFade" class="carousel slide carousel-fade ">
            

            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              @foreach($ProductCat as $ProductCat)
              <div class="carousel-item active" data-bs-interval="10000">
              <img src="{{asset('storage/'.$ProductCat->photo)}}" class="w-100 d-block" height="500px" >       
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

          <div class="container">
<h2 class= "tittle-w3l text-center padding-top">About Us</h2>
    <div class="row mb-5">
        <div class="col col-6">
<div class="about">
<h2 class="mt-5  w-50 text-secadary title-about "> WELCOME ABOUT OUR SPRYSTORE</h2>
<p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<a href="" class="text-decoration-none btn-group btn-c text-dark">Read more!! </a>

</div>


        </div>
        <div class="col-6 mt-5 ">

            <img src="assets/them1/images/woo.jpg" width="500px">
        </div>


    </div>
</div>

          <div class="container">
          <h1 class="title">Products</h1>
          <p class="lead text-center">_________</p>
      </div>
      <div class="myTabs section">
          <div class="tabsTitle">
              <a class="tabButton text-center">Best Selling products</a>
              <a class="tabButton text-center">New collection</a>
          </div>
          <div class="tabsContent">
              <div class="tabContent mt-5">
                <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col col-md-4">
    <div class="card h-100 ">
     
      <div class="img-item">
        
      <div class="type-lb">
        <p class="sale">Sale</p>
    </div>
    
      <img src="images/instagram-01.jpg" class="card-img-top" alt="...">
      <div class="overlay">
    </div></div>
      <div class="card-body bg-light">
        <h5 class="card-title text-center">jacket</h5>
        
        <p class="card-text price d-flex">200$</p> <span><del>400$</del></span> 
        <i class="fa fa-star-o" style="font-size:24px"></i>
        <i class="fa fa-star-o" style="font-size:24px"></i>
        <i class="fa fa-star-o" style="font-size:24px"></i>
        <i class="fa fa-star-o" style="font-size:24px"></i>

      </div>
    </div>
  </div>
  <div class="col col-md-4">
    <div class="card h-100 ">
     
      <div class="img-item">
        
      <div class="type-lb">
        <p class="sale">Sale</p>
    </div>
    
      <img src="images/women-03.jpg" class="card-img-top" alt="...">
      <div class="overlay">
    </div></div>
      <div class="card-body bg-light">
        <h5 class="card-title text-center">T-shirt</h5>
        
        <p class="card-text price d-flex">100$</p> <span><del>200$</del></span> 
        <i class="fa fa-star-o" style="font-size:24px"></i>
        <i class="fa fa-star-o" style="font-size:24px"></i>
        <i class="fa fa-star-o" style="font-size:24px"></i>
        <i class="fa fa-star-o" style="font-size:24px"></i>

      </div>
    </div>
  </div>
  <div class="col col-md-4">
    <div class="card h-100 ">
     
      <div class="img-item">
        
      <div class="type-lb">
        <p class="sale">Sale</p>
    </div>
    
      <img src="images/women-02.jpg" class="card-img-top" alt="...">
      <div class="overlay">
    </div></div>
      <div class="card-body bg-light">
        <h5 class="card-title text-center">dress</h5>
        
        <p class="card-text price d-flex">250$</p> <span><del>300$</del></span> 
        <i class="fa fa-star-o" style="font-size:24px"></i>
        <i class="fa fa-star-o" style="font-size:24px"></i>
        <i class="fa fa-star-o" style="font-size:24px"></i>
        <i class="fa fa-star-o" style="font-size:24px"></i>

      </div>
    </div>
  </div>
  
</div>
                  </div>
              <div class="tabContent">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                  <div class="col col-md-4">
                    <div class="card h-100 ">
                     
                      <div class="img-item">
                        
                      <div class="type-lb">
                        <p class="sale">Sale</p>
                    </div>
                    
                      <img src="images/women-01.jpg" class="card-img-top" alt="...">
                      <div class="overlay">
                    </div></div>
                      <div class="card-body bg-light">
                        <h5 class="card-title text-center">jacket</h5>
                        
                        <p class="card-text price d-flex">200$</p> <span><del>400$</del></span> 
                        <i class="fa fa-star-o" style="font-size:24px"></i>
                        <i class="fa fa-star-o" style="font-size:24px"></i>
                        <i class="fa fa-star-o" style="font-size:24px"></i>
                        <i class="fa fa-star-o" style="font-size:24px"></i>
                
                      </div>
                    </div>
                  </div>
                  <div class="col col-md-4">
                    <div class="card h-100 ">
                     
                      <div class="img-item">
                        
                      <div class="type-lb">
                        <p class="sale">Sale</p>
                    </div>
                    
                      <img src="images/instagram-img-07.jpg" class="card-img-top" alt="...">
                      <div class="overlay">
                    </div></div>
                      <div class="card-body bg-light">
                        <h5 class="card-title text-center">T-shirt</h5>
                        
                        <p class="card-text price d-flex">100$</p> <span><del>200$</del></span> 
                        <i class="fa fa-star-o" style="font-size:24px"></i>
                        <i class="fa fa-star-o" style="font-size:24px"></i>
                        <i class="fa fa-star-o" style="font-size:24px"></i>
                        <i class="fa fa-star-o" style="font-size:24px"></i>
                
                      </div>
                    </div>
                  </div>  </div></div>
              
          </div>
      </div>

      <!-- end producr selling -->
      <!-- menu start -->
      <div class="bg-light">
      <div class="container mt-5">
        <h2 class="title">Menu</h2>
        <div class="row mt-5 mb-5 pb-5">
          
@foreach($l as $l)
<div class="col-md-4">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <div class="card h-100 card-img">
              <img src="{{asset('storage/'.$l->photo)}}" class="img-fluid rounded-start h-100" alt="..."></div>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="/productThem3/{{$l->id}}" class="card-title fs-3">{{$l->name}}</a>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
@endforeach
    
     
    </div>
      </div></div>
      <div class="container mt-top ccr">
            <h1 class="text-center text-secandary"> contact us</h1>
            <div class="row mt-5">
              <div class="col col-md-6 col-sm-12">
                <form action="" method="">
                  <div class="row">
                  <div class="col-6">
                    <label class="form-label">name</label>
                    <input class="form-control contact" placeholder="name" type="text">
                  </div>
                  <div class="col-6">
                    <label class="form-label ">email</label>
                    <input class="form-control contact" placeholder="Email" type="email">
                  </div></div>
                  <div class="row">
                    <div class="col col-12">
                      <textarea rows="10" cols="10" class="form-control contact"placeholder="message"></textarea>
                      <button class="btn btn-c rounded mt-4 "> send</button>
                    </div> 
                
                   </div>
                </form>
              </div>
              <div class="col-md-5 col-sm-12  loc">
          <div class="col-lg-12 wow fadeInDown" data-wow-duration="0.9s" data-wow-delay="0.30s ">
      
            
      
               
                  <div class="row ">
                    <div class="col-2">
                  <i class="	fa fa-map-marker text-center text-secandary  fs-4 pt-2"></i></div>
                  <div class="col-8">
                  
                    <h4 class="text-secandary">Location:</h4>
                    <p>A108 Adam Street, New York, NY 535022</p>
                  </div>
                </div><!-- End Info Item -->
      
                <div class="row " >
                  <div class="col-2">
                <i class="		fa fa-envelope text-center text-secandary  fs-4 pt-2"></i></div>
                <div class="col-8">
                
                  <h4 class="text-secandary">Email:</h4>
                  <p>Relax@1999.gmail</p>
                </div>
              </div><!-- End Info Item -->
      
              <div class="row ">
                <div class="col-2">
              <i class="		fa fa-phone	text-secandary  fs-4 pt-2"></i></div>
              <div class="col-8">
              
                <h4 class="text-secandary">phone:</h4>
                <p>+963 226799776</p>
              </div>
            </div><!-- End Info Item -->  
      
              </div>
            </div>
          </div>
         </div>

@endsection
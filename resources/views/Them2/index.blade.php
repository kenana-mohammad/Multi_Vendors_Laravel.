@extends('Them2.navbar')
@section('content')
<div id="carouselExampleCaptions" class="carousel slide ">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
@foreach($ProductCat as $ProductCat)
          <div class="carousel-item  overlay active">
          <img src="{{asset('storage/'.$ProductCat->photo)}}" class="d-block w-100" height="400px" >       
            <div class="carousel-caption d-none d-md-block mb-4">
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

<!-- ABout us -->

    <div class="container">
        <h1 class="padding-top text-danger text-center">About us</h1>
       <div class="row ">
          <div class="col-md-6">
            
            <img src="../assets/them1/images/about-us.png" alt="#" width="300px" class="mt-5">
            
          </div>
          <div class="col-md-6">
             <div class="titlepage">
                <h2>About Our Shop</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
             </div>
             <a class="read_more bg-danger text-white" href="#">Read More</a>
          </div>
       </div>
   
 </div>
 <!-- product selling -->
<div class="container-fluid Products">
    <h1 class="text-danger text-center">Best Selling products</h1>
 <div class="swiper sample-slider padding-top ">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="assets/images/Apple-iPhone-11-PNG-File.png" >
        <h3 class="text-center">Apple</h3>
        </div>
        <div class="swiper-slide"><img src="assets/images/Apple-iPhone-11-Background-PNG.png">
            <h3 class="text-center">Iphone</h3>
        </div>
        <div class="swiper-slide"><img src="assets/images/Apple-iPhone-12-Transparent-Images-PNG.png">
            <h3 class="text-center">Apple</h3>
        </div>
        <div class="swiper-slide"><img src="assets/images/Apple-iPhone-12-Transparent-PNG.png">
            <h3 class="text-center">smart</h3>
        </div>
    </div>
</div></div>

<div class="container">
  <h1 class="text-center text-danger padding-top">Menue Products</h1>
<div id="owl-demo">
  @foreach($productcat as $productcat)
  <div class="item">
    <div class="card" style="width: 18rem;">
    <img src="{{asset('storage/'.$productcat->photo)}}" class="" height="200px" width="200px">       
      <div class="card-body">
      <a class="card-title text-decoration-none text-center text-cat" href="/productThem2/{{$productcat->id}}">{{$productcat->name}} </a>
        
      </div>
    </div>  </div>
@endforeach
  
 
</div>

</div>
<div class="contact bg-danger padding-top">
  <div class="container">
     <div class="row">
        <div class="col-md-12">
           <div class="titlepagee">
              <h2 class="text-center">Contact Now</h2>
           </div>
        </div>
     </div>
     <div class="row">
        <div class="col-md-10 offset-md-1">
           <form id="request" class="main_form">
              <div class="row">
                 <div class="col-md-12 ">
                    <input class="contactus" placeholder="Name" type="type" name="Name"> 
                 </div>
                 <div class="col-md-12">
                    <input class="contactus" placeholder="Email" type="type" name="Email"> 
                 </div>
                 <div class="col-md-12">
                    <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">                          
                 </div>
                 <div class="col-md-12">
                    <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message </textarea>
                 </div>
                 <div class="col-md-12">
                    <button class="send_btn">Send</button>
                 </div>
              </div>
           </form>
        </div>
     </div>
  </div>
</div>
<script>
$(document).ready(function() {

    $("#owl-demo").owlCarousel({
  
      autoPlay: 3000, //Set AutoPlay to 3 seconds
  
      items: 3,
      itemsDesktop: [1199, 3],
      itemsDesktopSmall: [979, 3]
  
    });
  
  });</script>

<script>
    // swiper
    const swiper = new Swiper('.sample-slider', {
        loop: true,
        speed: 2000,
        slidesPerView: 3,      
        autoplay: {
            delay: 0,
        },
    })

// carousel

</script>
  <script src="https://unpkg.com/swiper@6.4.8/swiper-bundle.min.js"></script>
  
  <!-- Initialize Swiper -->
  <script>
    //initialize swiper when document ready
    
  </script>
<!-- end-team -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
@endsection
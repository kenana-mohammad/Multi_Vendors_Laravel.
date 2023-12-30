<html>
    <head>
    
 <link href="{{asset('../css/style.css')}}" rel="stylesheet" />
 <link rel="stylesheet" href="../fonts/icomoon/style.css">
	<link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

  
    <!-- Responsive CSS -->
    
   


    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <div class=" mb-4  ">
    <ul class="navbar-nav me-auto my-2 pt-3 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            
           

             
              <li class="nav-item ">
                <a href="{{route('cart.index')}}" class="nav-link">
                     <i class="fa fa-shopping-cart fs-3 " aria-hidden="true"></i>
                     <span class="padding_10 mb-2">Cart({{session()->has('cart')?session()->get('cart')->totalQty : '0'}})</span></a>
               </li>
               <li class="nav-item ">
                <a href="{{route('order.index')}}" class="nav-link">
                     <i class="fa fa-tasks fs-3 pt-2" aria-hidden="true"></i>
                     <span class="padding_10">orders</span></a>
               </li>
            </ul>
    </div>
<div class="row">
                   @foreach($product as $products)        
                           <div class="col col-md-8 col-sm-12 ">
                             <div class="box">
                               <div class="card product-item border-0 mb-4  ">
                                         
                                   <div class="card-header product-img position-relative overflow-hidden border   p-0">
                               <div class="slide-img"><img src="{{asset('storage/'.$products->photo)}}" alt="1">
                            
                               </div></div>
                               <div class="card-body border-left border-right text-center p-0 pb-3 ">
                               <div class="detail-box">
                                 <div class="type  ">
                                
                                   <span class="text-center ">{{$products->name}}</span>
                                   <p class=" text-center text-secandary ">{{$products->description}}</p>
                                   <span class="text-center text-secandary bg-light text-success">{{$products->price}}</span>
                                 </div></div></div>
                                 @if($products->hasOffer==1)
                                   <span class="text-center text-secandary text-success">{{$products->discount}}</span>
                                 
                                 @else
                                   <span class="text-center text-secandary text-primary ">It has no discount</span>
                                 
                                 @endif
                                 <div class="card-footer d-flex justify-content-center  border bg-footer">
                                 <a href="{{route('cart.store',$products->id)}}" class="buy-btn bg-light text-success text-center text-decoration-none">Buy</a>
                               </div>
                              
                           
                           </div></div>
                             
                             </div>
                     @endforeach
                           </div>
                      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>



</body>
</html><html>
    <head>
    <link href="css/responsive.css" rel="stylesheet" />
 <link rel="stylesheet" href="../fonts/icomoon/style.css">
	<link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
  <link href="../css/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/animated.css">
    <!-- Responsive CSS -->
    <link href="{{asset('../css/style.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="../css/owl.css">

    
    <title>details-stores</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>
<body>
@extends('front-end.navbar')
@section('content')

<div class="single-product">
    <div class="container">
    <div class="row px-xl-5">
        <div class="col-md-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">

            <h1 class="text-store">Product details</h1></div>
          </div>
        </div>
       
        <div class="col-lg-6 pb-4">
          <div class="stores-image">
           
         
          <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="{{asset('storage/'.$product->photo)}}" alt="">
                   
                </div>
              
            </div></div>
            <div class="col-lg-6 h-auto mb-30 box-store">
                <div class=" bg-light p-30 m-4 body-store">
                    <div class="n">
                    <h3 class="store-title"> welcome to our store </h3>
                    <div class="row ">
                       
                    </div>
                        <!-- <small class="pt-1">rating</small> -->
                    
             
                    
                   
                    
                    <div class="row">
                        <div class="col col-4">
                        <h5 class= "title-content"> details:</h5>
                        </div>
                        <div class="col col-8">
                    <p class="font-weight-semi-bold mb-4 text-dark title-desc">{{$product->description}}</p></div></div>
                    <div class="row">
                        <div class="col col-4">  
                                                 <h4 class="title-content">status:</h4></div>
                                                <div class="col col-8">
                       @if($product->status =='avilable')  
           <label class="btn btn-success">{{ $product->status }}</label>@endif
                    @if($product->status =='unavailable')  
                      <label class="btn btn-danger">{{ $product->status }}</label>
                    @endif
                 
                    </div></div>
                   
                    <div class="d-flex justfy-content-center mb-4 pt-2">
                   
                        <a  href="{{route('cart.store',$product->id)}}"  class="btn  wishlist px-3"><i class="fa fa-shopping-cart fs-3 mr-1" ></i> 
                            </a>
                    </div>
                    <div class="d-flex pt-2 share">
                        <strong class="text-dark  share-on pb-1">Share on:</strong>
                        <div class="d-inline-flex  justfy-content-center">
                            <a class=" px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div></div></div></div></div>

</body>
@endsection
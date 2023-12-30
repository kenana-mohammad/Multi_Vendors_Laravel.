<html>
    <head>
    <link href="css/responsive.css" rel="stylesheet" />
 <link rel="stylesheet" href="../fonts/icomoon/style.css">
	<link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
  <link href="../css/aos.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{asset('../css/style.css')}}" rel="stylesheet" />


    
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
                    <h3 class="store-title">{{$product->name}} </h3>
                
                        <!-- <small class="pt-1">rating</small> -->
                    
   
                    

                    <div class="row">
                        <div class="col col-4">
                        <h5 class= "title-content"> Description:</h5>
                        </div>
                        <div class="col col-8">
                    <p class="font-weight-semi-bold mb-4 text-dark title-desc">{{$product->description}}</p></div></div>
                    <div class="row">
                        <div class="col col-4">  
                                                 <h4 class="title-content">status:</h4></div>
                                                <div class="col col-8">
                       @if($product->status ='avilable')  
           <label class="btn btn-success">{{ $product->status }}</label>
    
         
                                 @else
                      <label class="btn btn-danger">{{ $product->status }}</label>
                    @endif
                 
                    </div></div>
                   
           <div class="row  ">
                        <div class="col col-4">
                        <h5 class= "title-content" > Price:</h5>
                        </div>
                        <div class="col col-8">
                    <p class="font-weight-semi-bold mb-4  title-details"> 
                    @if( $product->hasOffer=1)   
                             <del>${{ $product->price }}</del> <span>${{  $product->price-($product->discount*$product->price/100)}}</span></p>        
                        </p>
                 </div></div>
            @else 
                                 <label class="btn btn-secondary">It has no discount</label>
                                 
                                   <div class="row ">
                        <div class="col col-4">
                        <h5 class= "title-content"> Price:</h5>
                        </div>
                        <div class="col col-8">
                    <p class="font-weight-semi-bold mb-4  title-details">{{$product->price}}</p></div></div> @endif
                           
                    <div class="d-flex justfy-content-center mb-4 pt-2">
                   
                        <a href="{{route('cart.store',$product->id)}}" class="btn  wishlist px-3"><i class="fa fa-shopping-cart fs-3 mr-1"></i> Buy
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
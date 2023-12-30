<html>
    <head>
    <link href="css/responsive.css" rel="stylesheet" />
 <link rel="stylesheet" href="{{asset('assets/fonts/icomoon/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/fonts/flaticon/font/flaticon.css')}}">
  <link href="../css/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/animated.css">
    <!-- Responsive CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />


    
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

            <h1 class="text-store">store details</h1></div>
          </div>
        </div>
       
        <div class="col-lg-6 pb-4">
          <div class="stores-image">
           
         
          <div class="product-offer mb-30" style="height: 300px;">
                    <img class="img-fluid" src="{{asset('storage/'.$stores->image)}}" alt="">
                   
                </div>
              
            </div></div>
            <div class="col-lg-6 h-auto mb-30 box-store">
                <div class=" bg-light p-30 m-4 body-store">
                    <div class="n">
                    <h3 class="store-title"> welcome to our store </h3>
                    <div class="row ">
                        <div class="col col-4 ">
                        <h5 class= "title-content">Rating</h5></div>
                        <div class="col col-8">
                        <div class=" text-Warning mr-2  ">
                        @for($i = 0 ;$i< $stores -> rating;$i++)
                        <i class="far fa-star text-primary  icon "></i>                          
                          @endfor
                        </div></div></div>
                        <!-- <small class="pt-1">rating</small> -->
                    
                    <div class="row">
                        <div class="col col-4">
                        <h5 class= "title-content"> name-store</h5>
                        </div>
                        <div class="col col-8">
                    <p class="font-weight-semi-bold mb-4  title-details">{{$stores->name}}</p></div></div>
                    
                    <div class="row">
                        <div class="col col-4">
                        <h5 class= "title-content"> category:</h5>
                        </div>
                        <div class="col col-8">
                    <p class="font-weight-semi-bold mb-4 text-dark title-details">{{$stores->category->name}}</p></div></div>
                    
                    <div class="row">
                        <div class="col col-4">
                        <h5 class= "title-content"> details:</h5>
                        </div>
                        <div class="col col-8">
                    <p class="font-weight-semi-bold mb-4 text-dark title-desc">{{$stores->description}}</p></div></div>
                    <div class="row">
                        <div class="col col-4">  
                                                 <h4 class="title-content">status:</h4></div>
                                                <div class="col col-8">
                       @if($stores->status =='active')  
           <label class="btn btn-success">{{ $stores->status }}</label>@endif
           @if($stores->status =='inactive')  
                      <label class="btn btn-danger">{{ $stores->status }}</label>
                    @endif
                    @if($stores->status =='pending')  
                      <label class="btn btn-danger">{{ $stores->status }}</label>
                    @endif
                    </div></div>
                    <div class="row">
                        <div class="col col-4">
                        <h5 class= "title-content"> address:</h5>
                        </div>
                        <div class="col col-8">
                    <p class="font-weight-semi-bold mb-4 text-dark title-details">{{$stores->address}}</p></div></div>
                    <div class="d-flex justfy-content-center mb-4 pt-2">
                   
                        <button class="btn  wishlist px-3"><i class="fa fa-heart mr-1"></i> whishlist
                            </button>
                    </div>
                    <div class="row">
                        <div class="col col-4">  
                                                 <h4 class="title-content">tamplate:</h4></div>
                                                <div class="col col-8">
                       @if($stores->thems =='them1')  
           <form action="{{route('viewthem',$stores->id)}}" method="POST">
                                                @csrf
                                                @method('POST')
                                                <input type="hidden" name="thems"value='them1' >

                                               
                                                        
                                         
                                             <button name="thems" value="them1" class="btn btn-danger" >{{$stores->thems}} </button>
                                        </form>
         @endif
           @if($stores->thems =='them2')  
           <form action="{{route('viewthem',$stores->id)}}" method="POST">
                                                @csrf
                                                @method('POST')
                                                <input type="hidden" name="thems"value='them2' >

                                               
                                                        
                                         
                                             <button name="thems" value="them2" class="btn btn-danger" >{{$stores->thems}} </button>
                                        </form>
                    @endif
                    @if($stores->thems =='them3')  
                    <form action="{{route('viewthem',$stores->id)}}" method="POST">
                                                @csrf
                                                @method('POST')
                                                <input type="hidden" name="thems"value='them3' >

                                               
                                                        
                                         
                                             <button name="thems" value="them3" class="btn btn-danger" >{{$stores->thems}} </button>
                                        </form>
                    @endif                    
                    </div></div>
       
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
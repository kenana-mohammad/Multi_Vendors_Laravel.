<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>them2</title>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="{{asset('assets/css/style1.css')}}">
   <link rel="stylesheet" href="https://unpkg.com/swiper@6.4.8/swiper-bundle.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
   <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/simplePagination.min.css">
    <!-- carousel cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    
    <nav class="navbar navbar-dark navbar-expand-lg  bg-danger sticky-top ">
        <div class="container container-sm">
          <a class=" navbar-brand" href="#" > Tele</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-5  ">
              <li class="nav-item">
                <a class="nav-link active fs-5" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5" href="#about">About</a>
              </li>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5" href="#services">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fs-5" href="call us.html">call us</a>
              </li>
               </ul>
            <div class="d-flex" > <a class="nav-link"> <img src="../assets/them1/images/logo.png"></a>
              
          </div>
        </div>
      </nav>
      @yield('content')
@include('Them2.footer')
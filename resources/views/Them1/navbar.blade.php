<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('assets/css/style2.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <title>them1</title>
   </head>
   <body>
    <nav class="navbar navbar-dark navbar-expand-lg   sticky-top ">
        <div class="container container-sm">
          <a class=" navbar-brand" href="#" ><h3 class="bb">Beauty </h3></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-5  ">
              <li class="nav-item">
                <a class="nav-link active fs-5" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fs-5" href="">About</a>
              </li>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5" href="">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fs-5" href="">call us</a>
              </li>
              
<div class="position-relative py-2 px-4 text-bg-light border border-light rounded-pill ms-3">
    Marker <svg width="1em" height="1em" viewBox="0 0 16 16" class="position-absolute top-100 start-50 translate-middle mt-1" fill="var(--bs-white)" xmlns="http://www.w3.org/2000/svg"><path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/></svg>
  </div>
               </ul>
            <div class="d-flex" > <a class="nav-link"> <img src="../assets/Them1/images/logo1.png"></a>
              
          </div>
        </div>
      </nav>
      @yield('content')
      @include('Them1.footer')
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   
   <link rel="stylesheet" href="{{asset('assets/css/style3.css')}}">

    <title>them3</title>
</head>
<body>
  <div class="header">
        <div class="container-fluid">
        
       
                                      
      
            <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
              <a class="navbar-brand text-secandary mb-2 ms-5" href="#">style</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="About us.html">Aboute us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">contact</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link "  tabindex="-1" aria-disabled="true" href=""> product</a>
                  </li>
                  <form class="d-flex serach" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn bg-light me-4 btn-serach btn-nav" type="submit">Search</button>
                  </form>
                  
                </ul>
             
                  <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center nav-items">
                  
                 
                  <a class="nav-link pe-4 " href=""> Login </a>
               
               
                  <a class="nav-link" href="">Register</a>
               
              </div>
                </div>
              </div>
            </div>
          </nav></div></div>
@yield('content')
@include('Them3.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script>
;</script>
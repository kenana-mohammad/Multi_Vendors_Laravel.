<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MultiShop - Online Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   
    <!-- Libraries Stylesheet -->

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
</head>

<body>
    <!-- Topbar Start -->
    
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary bg-primary">
        <div class="container">
          <a class="navbar-brand " href="#">
            <img src="img/vendor-3.jpg" alt="" /><span class="text-white fs-5 title">
             Multivendor
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse  ms-5" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 pt-3 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">abouts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">contact-us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  category
                </a>
                <ul class="dropdown-menu">
                  @foreach($cate as $category)
                  <li><a class="dropdown-item drop bg-light" href="{{route('frontshowstore',$category->id)}}">{{$category->name}}</a></li>
                 @endforeach
                </ul>
              </li>

              <form class="d-flex s-cart" role="search ">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary btn-nav bg-light " type="submit">Search</button>
              </form>
              <li class="nav-item ">
              <a href="{{route('cart.index')}}" class="nav-link">
                     <i class="fa fa-shopping-cart fs-3 " aria-hidden="true"></i>
                     <span class="padding_10 mb-2">Cart({{session()->has('cart')?session()->get('cart')->totalQty : '0'}})</span></a>
               </li>
            </ul>
              
              <div class="   ml-0 ml-lg-4 d-flex justify-content-center ">
                  
              <ul class="navbar-nav ms-auto mt-2">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item ">
                                    <a class="nav-link  " href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle  " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item  text-secandary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
             
            </div>
            </div>
            
            </div>
            
            
         
      </nav>
     
     @yield('content')
    @include('front-end.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

   
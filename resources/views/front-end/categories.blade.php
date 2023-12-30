<html>
    <head>
    
 <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
 <link rel="stylesheet" href="../fonts/icomoon/style.css">
	<link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
<title>category</title>
  
    <!-- Responsive CSS -->
    
   


    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
@extends('front-end.navbar')
@section('content')
<div class="shop-box-inner">
          <div class="container">
              <div class="row">
                  <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left mt-5 ">
                      <div class="product-category ">
                          <div class="search-product">
                              <form action="#">
                                  <input class="form-control" placeholder="Search here..." type="text">
                                  <button type="submit"> <i class="fa fa-search"></i> </button>
                              </form>
                          </div>
                          <div class="filter-sidebar-left ">
                              <div class="title-left">
                                  <h3>Categories</h3>
                              </div>
                              <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                  <div class="list-group-collapse sub-men">
                                      <a class="list-group-item list-group-item-action text-primary-store" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">stores <small class="text-muted"></small>
                  </a>
                                      <div class="collapse show" id="sub-men1" data-parent="#list-group-men">
                                          <div class="list-group">
                                          @foreach($cat as $cat)
                                              <a href="{{route('frontshowstore',$cat->id)}}" class="list-group-item list-group-item-action active text-primary-cat">{{$cat->name}}</a>
                                              @endforeach
                                            </div>
                                      </div>
                                  </div>
                                  <div class="list-group-collapse sub-men">
                                      <a class="list-group-item list-group-item-action" href="#sub-men2" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men2"> 
                  <small class="text-muted"></small>
                  </a>
                                      <div class="collapse" id="sub-men2" data-parent="#list-group-men">
                                          <div class="list-group">
                                              <a href="#" class="list-group-item list-group-item-action">Sports Shoes <small class="text-muted"></small></a>
                                              <a href="#" class="list-group-item list-group-item-action">Sneakers <small class="text-muted"></small></a>
                                              <a href="#" class="list-group-item list-group-item-action">Formal Shoes <small class="text-muted"></small></a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                  <div class="list-group-collapse sub-men">
                                      <a class="list-group-item list-group-item-action text-primary-store" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">sort by <small class="text-muted"></small>
                  </a>
                                      <div class="collapse show" id="sub-men1" data-parent="#list-group-men">
                                          <div class="list-group">
                                      
                                              <a href="" class="list-group-item list-group-item-action active text-primary-cat">subcategory</a>
                                              
                                            </div>
                                      </div>
                                  </div></div>
                                  
                                  <a href="#" class="list-group-item list-group-item-action">--------</a>
                              </div>
                          </div>
                          <div class="filter-price-left mt-5">
                              <div class="title-left">
                                  <h3></h3>
                              </div>
                              <div class="price-box-slider">
                                  <div id="slider-range"></div>
                                  <p>
                                      <input type="text" id="amount" readonly style="border:0; color:#c7a34f; font-weight:bold;">
                                      <button class="btn hvr-hover" type="submit"></button>
                                  </p>
                                  <div class="well well-lg offer-box offer-colors">


<span class="fa fa-star-empty  text-center me-3 d-flex content-center  off">25 % off  , GRAB IT                 
</span>
<br />
<br />
<div class="progress progress-striped ms-2 me-2 li-prog">
    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
        style="width: 70%">
        <span class="sr-only text-center">70% Complete (success)</span>
        2hr 35 mins left
    </div>
</div>
<h3 class="info">
<a href="#" class="text-center  ">click here to know more </a></h3>
</div>
                              </div>
                          </div>
                          <div class="filter-brand-left">
                              
                          </div>
  
                      </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                      <div class="right-product-box">
                          <div class="product-item-filter row">
                              <div class="col-12 col-sm-8 text-center text-sm-left">
                                  <div class="toolbar-sorter-right mt-2">
                                      <span class="stores-by">Stores by </span>
                                      <h4 class="mt-2">category</h4>
                                  </div>
                                  <p class="mt-3">Showing all  results</p>
                              </div>
                              <div class="col-12 col-sm-4 text-center text-sm-right mt-2">
                                  <ul class="nav nav-tabs ml-auto">
                                      <li>
                                          <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                      </li>
                                      <li>
                                          <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                      </li>
                                  </ul>
                              </div></div></div>


<div class="row category bg-light">
    @foreach($categorys as $category)
            <div class="col col-lg-4 col-md-4 col-sm-12 pb-1">
                
            
            <div class="card border-0 mb-4 box-card">
            
            <div class=" product-img position-relative box-hover overflow-hidden bg-transparent  p-0">
                 <a href="{{route('showsubcategory',$category->id)}}" class="h-100" > <img class="img-fluid w-100" src="{{asset('storage/'.$category->photo)}}"   height="100px" alt=""></a>

            <div class="card-body  text-center overlay p-0 pt-4 pb-3">
          
            <a href="{{route('showsubcategory',$category->id)}}" class="btn btn-sm  buy  text-category ">{{$category->name}}</a>
         

            </div>
            
        </div>
    </div></div>
            @endforeach
            <div class="pagination ">
            {{$categorys->links('front-end.paginate')}}</div>
</div> 
</div> 
</div></div></div></div></div>
<div class="container-fluid offer pt-5 ">
                                <div class="row px-xl-5">
                                    <div class="col-md-6 pb-4">
                                        <div class="position-relative  bg-light text-center text-md-right text-white mb-2 py-5 px-5">
                                            <img src="img/fashen/offer-1.png" alt="" width="300px">
                                            <div class="position-relative" style="z-index: 2;">
                                                <h5 class="text-uppercase text-light  mb-3">20% off the all order</h5>
                                                <h1 class="mb-4 font-weight-semi-bold ms-2 title-category">Spring Collection</h1>
                                                <a href="" class="btn btn-outline-primary py-md-2 px-md-3 btn-category">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pb-4">
                                        <div class="position-relative  bg-light text-center text-md-left text-white mb-2 py-5 px-5">
                                            <img src="img/fashen/offer-2.png" alt="">
                                            <div class="position-relative" style="z-index: 2;">
                                                <h5 class="text-uppercase text-light mb-3">20% off the all order</h5>
                                                <h1 class="mb-4 font-weight-semi-bold title-category">Winter Collection</h1>
                                                <a href="" class="btn btn-outline-primary py-md-2 px-md-3 btn-category">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endsection
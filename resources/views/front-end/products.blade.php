<html>
    <head>
    
 <link href="{{asset('../css/style.css')}}" rel="stylesheet" />
 <link rel="stylesheet" href="../fonts/icomoon/style.css">
	<link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

  
    <!-- Responsive CSS -->
    
   
<title> stores</title>

    
    
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
                                  <h3>{{$store->name}}</h3>
                              </div>
                              <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                  <div class="list-group-collapse sub-men">
                                      <a class="list-group-item list-group-item-action text-primary-store" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">Menu <small class="text-muted"></small>
                  </a>
                                      <div class="collapse show" id="sub-men1" data-parent="#list-group-men">
                                          <div class="list-group">
                                         @foreach($menu as $menus)
                                              <a href="" class="list-group-item list-group-item-action active text-primary-cat">{{$menus->name}}</a>
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
                                      <h4 class="mt-2">{{$store->name}}</h4>
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

                              <div class="row store-view">
                                @foreach($products as $product)
                                <div class="col col-lg-4 col-md-4 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <a href="{{route('details-product',$product->id)}}" >    <img class="img-fluid w-100" src="{{asset('storage/'.$product->photo)}}"   height="100px" alt=""></a>
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <!-- route-product -->
                    <a href="{{route('details-product',$product->id)}}" class="btn btn-sm  text-category ">{{$product->name}}</a>
                 
                        
                    </div>
                    
                </div>
            </div>
                              @endforeach
                              <div class="pagination ">
    
                                </div>
</div></div></div></div></div>

<div class="container-fluid offer pt-5 ">
                                <div class="row px-xl-5">
                                    <div class="col-md-6 pb-4">
                                        <div class="position-relative bg-light text-center text-md-right text-white mb-2 py-5 px-5">
                                            <div class="position-relative" style="z-index: 2;">
                                                <h5 class="text-uppercase text-dark mb-3">20% off the all order</h5>
                                                <h1 class="mb-4 font-weight-semi-bold ms-2 title-category">Spring Collection</h1>
                                                <a href="" class="btn btn-outline-primary py-md-2 px-md-3 btn-category">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pb-4">
                                        <div class="position-relative bg-light text-center text-md-left text-white mb-2 py-5 px-5">
                                            <img src="img/fashen/offer-2.png" alt="">
                                            <div class="position-relative" style="z-index: 2;">
                                                <h5 class="text-uppercase text-dark  mb-3">20% off the all order</h5>
                                                <h1 class="mb-4 font-weight-semi-bold title-category">Winter Collection</h1>
                                                <a href="" class="btn btn-outline-primary py-md-2 px-md-3 btn-category">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>            
                                <!-- end find section -->
                          
                           



	<div class="untree_co-section bg-light">
		<div class="container">
			<div class="row align-items-stretch">
				<div class="col-12 col-sm-6 col-md-4 mb-3 mb-md-0">
					<div class="feature h-100">
						<div class="icon mb-4">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-truck" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5v7h-1v-7a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5v1A1.5 1.5 0 0 1 0 10.5v-7zM4.5 11h6v1h-6v-1z"/>
								<path fill-rule="evenodd" d="M11 5h2.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5h-1v-1h1a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4.5h-1V5zm-8 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
								<path fill-rule="evenodd" d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
							</svg>
						</div>
						<h3 class="feture-title">Worldwide Delivery</h3>
						<p>Far far away, behind the word mountains, far from the countries.</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 mb-3 mb-md-0">
					<div class="feature h-100">
						<div class="icon mb-4">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shield-lock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"/>
								<path d="M9.5 6.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
								<path d="M7.411 8.034a.5.5 0 0 1 .493-.417h.156a.5.5 0 0 1 .492.414l.347 2a.5.5 0 0 1-.493.585h-.835a.5.5 0 0 1-.493-.582l.333-2z"/>
							</svg>
						</div>
						<h3>Secure Payments</h3>
						<p>Far far away, behind the word mountains, far from the countries.</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 mb-3 mb-md-0">
					<div class="feature h-100">
						<div class="icon mb-4">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-counterclockwise" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M12.83 6.706a5 5 0 0 0-7.103-3.16.5.5 0 1 1-.454-.892A6 6 0 1 1 2.545 5.5a.5.5 0 1 1 .91.417 5 5 0 1 0 9.375.789z"/>
								<path fill-rule="evenodd" d="M7.854.146a.5.5 0 0 0-.708 0l-2.5 2.5a.5.5 0 0 0 0 .708l2.5 2.5a.5.5 0 1 0 .708-.708L5.707 3 7.854.854a.5.5 0 0 0 0-.708z"/>
							</svg>
						</div>
						<h3>Simple Returns</h3>
						<p>Far far away, behind the word mountains, far from the countries.</p>
					</div>
				</div>
			</div>
		</div>
	</div>  



</body>

@endsection
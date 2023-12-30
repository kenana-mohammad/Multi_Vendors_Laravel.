<div class="shop-box-inner">
          <div class="container">
              <div class="row">
                  <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                      <div class="product-categori">
                          <div class="search-product">
                              <form action="#">
                                  <input class="form-control" placeholder="Search here..." type="text">
                                  <button type="submit"> <i class="fa fa-search"></i> </button>
                              </form>
                          </div>
                          <div class="filter-sidebar-left">
                              <div class="title-left">
                                  <h3>Categories</h3>
                              </div>
                              <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                  <div class="list-group-collapse sub-men">
                                      <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">Clothing <small class="text-muted">(100)</small>
                  </a>
                                      <div class="collapse show" id="sub-men1" data-parent="#list-group-men">
                                          <div class="list-group">
                                            @foreach($cat as $cat)
                                              <a href="#" class="list-group-item list-group-item-action active">{{$cat->name}}</a>
                                              @endforeach
                                            </div>
                                      </div>
                                  </div>
                                  <div class="list-group-collapse sub-men">
                                      <a class="list-group-item list-group-item-action" href="#sub-men2" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men2">Footwear 
                  <small class="text-muted">(50)</small>
                  </a>
                                      <div class="collapse" id="sub-men2" data-parent="#list-group-men">
                                          <div class="list-group">
                                              <a href="#" class="list-group-item list-group-item-action">Sports Shoes <small class="text-muted">(10)</small></a>
                                              <a href="#" class="list-group-item list-group-item-action">Sneakers <small class="text-muted">(20)</small></a>
                                              <a href="#" class="list-group-item list-group-item-action">Formal Shoes <small class="text-muted">(20)</small></a>
                                          </div>
                                      </div>
                                  </div>
                                  <a href="#" class="list-group-item list-group-item-action"> contact us </a>
                                  <a href="#" class="list-group-item list-group-item-action">more information </a>
                                  <a href="#" class="list-group-item list-group-item-action">--------</a>
                              </div>
                          </div>
                          <div class="filter-price-left">
                              <div class="title-left">
                                  <h3></h3>
                              </div>
                              <div class="price-box-slider">
                                  <div id="slider-range"></div>
                                  <p>
                                      <input type="text" id="amount" readonly style="border:0; color:#c7a34f; font-weight:bold;">
                                      <button class="btn hvr-hover" type="submit">Filter</button>
                                  </p>
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
                                  <div class="toolbar-sorter-right">
                                      <span>Stores by </span>
                                      <h3>category</h3>
                                  </div>
                                  <p>Showing all  results</p>
                              </div>
                              <div class="col-12 col-sm-4 text-center text-sm-right">
                                  <ul class="nav nav-tabs ml-auto">
                                      <li>
                                          <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                      </li>
                                      <li>
                                          <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                      </li>
                                  </ul>
                              </div></div>
                            
                              </div> </div></div></div>


@extends('layouts.master')
@section('page-title')
Menu
@endsection
@section('mainContent')
<!-- Main Content Start Here -->
    <div class="menu">
      <!-- START Hero banner Section -->
      <section class="hero-bg">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="menu-h1">Our Menu</h1>
            </div>
          </div>
        </div>
      </section>
      <!-- END Hero banner Section -->
      <section class="main-sec">
        <div class="container">
          <div class="mb-5 row">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-6">
              <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Our Menu</li>
                </ol>
              </nav>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-6">
              <div class="custom-select" style="width:200px;">
                <select>
                  <option value="0">Sort By Latest</option>
                  <option value="1">Select</option>
                  <option value="2">Select</option>
                  <option value="3">Select</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
              <!-- SEARCH FORM -->
              <form>
                <div class="search-input">
                  <label>Search</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type here...">
                    <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-search"></i></span>
                  </div>
                </div>
              </form>
              <!-- SEARCH FORM -->
            </div>
            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-6">
              <div class="calender-btn">
                <a href="#"><button class="btn btn-light">RESERVATION <i class="fas fa-calendar-day"></i></button></a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">
              <div class="category-info">
                <h3>Categories</h3>
                <ul>
                  <li><a href="#">Cocktail</a></li>
                  <li><a href="#">Desserts</a></li>
                  <li><a href="#">Food</a></li>
                  <li><a href="#">Recipes</a></li>
                  <li><a href="#">Uncategories</a></li>
                  <li><a href="#">Cocktail</a></li>
                  <li><a href="#">Desserts</a></li>
                  <li><a href="#">Food</a></li>
                  <li><a href="#">Recipes</a></li>
                  <li><a href="#">Uncategories</a></li>
                  <li><a href="#">Cocktail</a></li>
                  <li><a href="#">Desserts</a></li>
                  <li><a href="#">Food</a></li>
                  <li><a href="#">Recipes</a></li>
                  <li><a href="#">Uncategories</a></li>
                  <li><a href="#">Cocktail</a></li>
                  <li><a href="#">Desserts</a></li>
                  <li><a href="#">Food</a></li>
                  <li><a href="#">Recipes</a></li>
                  <li><a href="#">Uncategories</a></li>
                </ul>
              </div>
              <div class="product-info">
                <h2>Products</h2>
                <div class="info-item">
                  <div class="row">
                    <div class="col-4">
                      <div class="product-img">
                        <img src="/frontend/assets/img/menu/menu-1.png" alt="Product IMAGE">
                      </div>
                    </div>
                    <div class="col-8">
                      <div class="product-item">
                        <p>Random Product 1</p>
                        <a href="#">Uncategories</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="info-item">
                  <div class="row">
                    <div class="col-4">
                      <div class="product-img">
                        <img src="/frontend/assets/img/menu/menu-2.png" alt="Product IMAGE">
                      </div>
                    </div>
                    <div class="col-8">
                      <div class="product-item">
                        <p>Random Product 1</p>
                        <a href="#">Uncategories</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="info-item">
                  <div class="row">
                    <div class="col-4">
                      <div class="product-img">
                        <img src="/frontend/assets/img/menu/menu-3.png" alt="Product IMAGE">
                      </div>
                    </div>
                    <div class="col-8">
                      <div class="product-item">
                        <p>Random Product 1</p>
                        <a href="#">Uncategories</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-12">
              <div class="product-inner">
                <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-card">
                      <div class="product-img img-hover-zoom img-hover-zoom--brightnes">
                        <img src="/frontend/assets/img/menu/menu-1.png">
                      </div>
                      <div class="product-bottom">
                        <h4>Boiled Crayfish</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <hr class="dash-hr">
                        <div class="price-bottom">
                          <div class="row">
                            <div class="col-6">
                              <span>$46</span>
                            </div>
                            <div class="col-6">
                              <a href="/menu-detail"><button class="btn btn-light more-btn">View</button></a>
                              <!-- <a href="#"><button class="btn btn-light"><img src="/frontend/assets/img/menu/Vector.png"></button></a> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-card">
                      <div class="product-img img-hover-zoom img-hover-zoom--brightnes">
                        <img src="/frontend/assets/img/menu/menu-2.png">
                      </div>
                      <div class="product-bottom">
                        <h4>Boiled Crayfish</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <hr class="dash-hr">
                        <div class="price-bottom">
                          <div class="row">
                            <div class="col-6">
                              <span>$46</span>
                            </div>
                            <div class="col-6">
                              <a href="/menu-detail"><button class="btn btn-light more-btn">View</button></a>
                              <!-- <a href="#"><button class="btn btn-light"><img src="/frontend/assets/img/menu/Vector.png"></button></a> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-card">
                      <div class="product-img img-hover-zoom img-hover-zoom--brightnes">
                        <img src="/frontend/assets/img/menu/menu-3.png">
                      </div>
                      <div class="product-bottom">
                        <h4>Boiled Crayfish</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <hr class="dash-hr">
                        <div class="price-bottom">
                          <div class="row">
                            <div class="col-6">
                              <span>$46</span>
                            </div>
                            <div class="col-6">
                              <a href="/menu-detail"><button class="btn btn-light more-btn">View</button></a>
                              <!-- <a href="#"><button class="btn btn-light"><img src="/frontend/assets/img/menu/Vector.png"></button></a> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-card">
                      <div class="product-img img-hover-zoom img-hover-zoom--brightnes">
                        <img src="/frontend/assets/img/menu/menu-4.png">
                      </div>
                      <div class="product-bottom">
                        <h4>Boiled Crayfish</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <hr class="dash-hr">
                        <div class="price-bottom">
                          <div class="row">
                            <div class="col-6">
                              <span>$46</span>
                            </div>
                            <div class="col-6">
                              <a href="/menu-detail"><button class="btn btn-light more-btn">View</button></a>
                              <!-- <a href="#"><button class="btn btn-light"><img src="/frontend/assets/img/menu/Vector.png"></button></a> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-card">
                      <div class="product-img img-hover-zoom img-hover-zoom--brightnes">
                        <img src="/frontend/assets/img/menu/menu-5.png">
                      </div>
                      <div class="product-bottom">
                        <h4>Boiled Crayfish</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <hr class="dash-hr">
                        <div class="price-bottom">
                          <div class="row">
                            <div class="col-6">
                              <span>$46</span>
                            </div>
                            <div class="col-6">
                              <a href="/menu-detail"><button class="btn btn-light more-btn">View</button></a>
                              <!-- <a href="#"><button class="btn btn-light"><img src="/frontend/assets/img/menu/Vector.png"></button></a> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-card">
                      <div class="product-img img-hover-zoom img-hover-zoom--brightnes">
                        <img src="/frontend/assets/img/menu/menu-6.png">
                      </div>
                      <div class="product-bottom">
                        <h4>Boiled Crayfish</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <hr class="dash-hr">
                        <div class="price-bottom">
                          <div class="row">
                            <div class="col-6">
                              <span>$46</span>
                            </div>
                            <div class="col-6">
                              <a href="/menu-detail"><button class="btn btn-light more-btn">View</button></a>
                              <!-- <a href="#"><button class="btn btn-light"><img src="/frontend/assets/img/menu/Vector.png"></button></a> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-card">
                      <div class="product-img img-hover-zoom img-hover-zoom--brightnes">
                        <img src="/frontend/assets/img/menu/menu-1.png">
                      </div>
                      <div class="product-bottom">
                        <h4>Boiled Crayfish</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <hr class="dash-hr">
                        <div class="price-bottom">
                          <div class="row">
                            <div class="col-6">
                              <span>$46</span>
                            </div>
                            <div class="col-6">
                              <a href="/menu-detail"><button class="btn btn-light more-btn">View</button></a>
                              <!-- <a href="#"><button class="btn btn-light"><img src="/frontend/assets/img/menu/Vector.png"></button></a> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-card">
                      <div class="product-img img-hover-zoom img-hover-zoom--brightnes">
                        <img src="/frontend/assets/img/menu/menu-2.png">
                      </div>
                      <div class="product-bottom">
                        <h4>Boiled Crayfish</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <hr class="dash-hr">
                        <div class="price-bottom">
                          <div class="row">
                            <div class="col-6">
                              <span>$46</span>
                            </div>
                            <div class="col-6">
                              <a href="/menu-detail"><button class="btn btn-light more-btn">View</button></a>
                              <!-- <a href="#"><button class="btn btn-light"><img src="/frontend/assets/img/menu/Vector.png"></button></a> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-card">
                      <div class="product-img img-hover-zoom img-hover-zoom--brightnes">
                        <img src="/frontend/assets/img/menu/menu-3.png">
                      </div>
                      <div class="product-bottom">
                        <h4>Boiled Crayfish</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <hr class="dash-hr">
                        <div class="price-bottom">
                          <div class="row">
                            <div class="col-6">
                              <span>$46</span>
                            </div>
                            <div class="col-6">
                              <a href="/menu-detail"><button class="btn btn-light more-btn">View</button></a>
                              <!-- <a href="#"><button class="btn btn-light"><img src="/frontend/assets/img/menu/Vector.png"></button></a> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                <div class="c-pagination">
                  <nav aria-label="...">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Back</a></li>
                      <li class="page-item"><a class="page-link active" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Main Content End Here -->
@endsection
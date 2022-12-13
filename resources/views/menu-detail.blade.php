@extends('layouts.master')
@section('page-title')
Menu
@endsection
@section('mainContent')
<!-- Main Content Start Here -->
    <div class="detail-menu">
      <section class="main-sec">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item"><a href="/menu">Our Menu</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Product Name</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <div class="product-inner">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
              <!-- Swiper -->
              <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="/frontend/assets/img/menu-detail/menu-1.png" />
                </div>
                <div class="swiper-slide">
                  <img src="/frontend/assets/img/menu-detail/menu-2.png" />
                </div>
                <div class="swiper-slide">
                  <img src="/frontend/assets/img/menu-detail/menu-3.png" />
                </div>
                <div class="swiper-slide">
                  <img src="/frontend/assets/img/menu-detail/menu-4.png" />
                </div>
                <div class="swiper-slide">
                  <img src="/frontend/assets/img/menu-detail/menu-5.png" />
                </div>
                <div class="swiper-slide">
                  <img src="/frontend/assets/img/menu-detail/menu-6.png" />
                </div>
              </div>
            </div>
            <div thumbsSlider="" class="swiper mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="/frontend/assets/img/menu-detail/menu-1.png" />
                </div>
                <div class="swiper-slide">
                  <img src="/frontend/assets/img/menu-detail/menu-2.png" />
                </div>
                <div class="swiper-slide">
                  <img src="/frontend/assets/img/menu-detail/menu-3.png" />
                </div>
                <div class="swiper-slide">
                  <img src="/frontend/assets/img/menu-detail/menu-4.png" />
                </div>
                <div class="swiper-slide">
                  <img src="/frontend/assets/img/menu-detail/menu-5.png" />
                </div>
                <div class="swiper-slide">
                  <img src="/frontend/assets/img/menu-detail/menu-6.png" />
                </div>
              </div>
            </div>
            <!-- Swiper JS -->
            </div>
            <div class="col-xl-8 col-lg-8 col-md-6 col-sm-6">
              <div class="left-right">
                <h2>Product Heading</h2>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed 
                  diam nonumy eirmod tempor invidunt ut labore. Lorem ipsum dolor sit amet, consetetur</p>
                  <!-- <a href="#"><button class="btn btn-light">Order Now <img src="/frontend/assets/img/menu-detail/basket.png"></button></a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="information">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2>Additional Information</h2>
            </div>
          </div>
          <div class="card-info">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-ms-6">
                <p class="text">Crust</p>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-ms-6">
                <p class="text-p">Lorem ipsum</p>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-ms-6">
                <p class="text">Size</p>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-ms-6">
                <p class="text-p">25cm, 30cm, 35cm</p>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-ms-6">
                <p class="text">Product Icons</p>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-ms-6">
                <p class="text-p">Vegetarian</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
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
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
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
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
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
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
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
        </div>
      </div>
      </section>
    </div>
    <!-- Main Content End Here -->
@endsection
    
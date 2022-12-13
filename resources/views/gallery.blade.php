@extends('layouts.master')
@section('page-title')
Gallery
@endsection
@section('mainContent')

<div class="portfolio">
      <section class="main-sec">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="top-head">
                <h1>Gallery</h1>
                <img src="/frontend/assets/img/underline.png">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="text-center">
                <ul class="mb-0 col container-filter portfolioFilte list-unstyled" id="filter">
                  <li><a class="categories active" data-filter="*">All</a></li>
                  <li><a class="categories" data-filter=".branding">Events</a></li>
                  <li><a class="categories" data-filter=".design">Dine In</a></li>
                  <li><a class="categories" data-filter=".photo">Food</a></li>
                  <li><a class="categories" data-filter=".coffee">Celebrities</a></li>
                </ul>
              </div>
            </div>
          </div>
          <h2 class="events-h2">Events</h2>
          <img class="new-underline" src="/frontend/assets/img/underline.png">
          <div class="mt-4 port portfolio-masonry">
            <div class="portfolioContainer row photo">
              <div class="py-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 ">
                <div class="item-box">
                  <a class="mfp-image" href="/frontend/assets/img/gallery/gallery-1.png" title="Project Name">
                  <img class="item-container img-fluid" src="/frontend/assets/img/gallery/gallery-1.png" alt="work-img">
                  </a>
                </div>
              </div>
              <div class="py-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 branding coffee">
                <div class="item-box">
                  <a class="mfp-image" href="/frontend/assets/img/gallery/gallery-2.png" title="Project Name">
                  <img class="item-container img-fluid" src="/frontend/assets/img/gallery/gallery-2.png" alt="work-img">
                  </a>
                </div>
              </div>
              <div class="py-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 branding photo">
                <div class="item-box">
                  <a class="mfp-image" href="/frontend/assets/img/gallery/gallery-3.png" title="Project Name">
                  <img class="item-container img-fluid" src="/frontend/assets/img/gallery/gallery-3.png" alt="work-img">
                  </a>
                </div>
              </div>
              <div class="py-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 branding design photo">
                <div class="item-box">
                  <a class="mfp-image" href="/frontend/assets/img/gallery/gallery-1.png" title="Project Name">
                  <img class="item-container img-fluid" src="/frontend/assets/img/gallery/gallery-3.png" alt="work-img">
                  </a>
                </div>
              </div>
              <div class="py-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 design photo">
                <div class="item-box">
                  <a class="mfp-image" href="/frontend/assets/img/gallery/gallery-2.png" title="Project Name">
                  <img class="item-container img-fluid" src="/frontend/assets/img/gallery/gallery-2.png" alt="work-img">
                  </a>
                </div>
              </div>
              <div class="py-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 branding design coffee">
                <div class="item-box">
                  <a class="mfp-image" href="/frontend/assets/img/gallery/gallery-3.png" title="Project Name">
                  <img class="item-container img-fluid" src="/frontend/assets/img/gallery/gallery-1.png" alt="work-img">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="more-btn">
            <a href="#"><button class="btn btn-light">View More</button></a>
          </div>
        </div>
      </section>
    </div>
@endsection
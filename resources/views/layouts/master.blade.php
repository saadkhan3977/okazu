<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here"/>
    <link rel="stylesheet" href="/frontend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/assets/css/style.css">
    <link rel="stylesheet" href="/frontend/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/frontend/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="/frontend/assets/css/lightbox.min.css">
    {{-- Menu-detail --}}
    <link rel="stylesheet" href="/frontend/assets/css/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">



    {{-- Sweet Alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
    $webstyle = new App\Models\GeneralSettingWebStyle;
    $generalsetting = $webstyle::first();

    $logos = new App\Models\GeneralSettingLogo;
    $logo = $logos::first();

    $loaders = new App\Models\GeneralSettingPreloader;
    $loader = $loaders::first();
?>
    <title>{{($generalsetting) ? $generalsetting->title : null}} | @yield('page-title')</title>
  </head>
  <body>
    <!-- PRELOADER -->
    <div id="preloadcontainer">
      <div id="preload-content"> 
        <img src="/uploads/preloader/{{ ($loader) ? $loader->website_loader : null}}" >
      </div>
    </div>
    <!-- PRELOADER -->
    <!-- Header Start Here -->
    <header>
      <nav class="navbar navbar-expand-md navbar-light c-navbar fixed-top">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="m-logo">
          <a href="/"><img src="/frontend/assets/img/logo.png" alt="Okazu Logo"></a>
        </div>
        <div class="container max-container">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="ml-auto navbar-nav">
            <?php 
              $menu1 = Menu::getByName('Menu-1'); 
              $menu2 = Menu::getByName('Menu-2'); 
            ?>
            @if($menu1)
              @foreach($menu1 as $menu)
              <li class="nav-item ">
                <a class="nav-link" href="{{$menu['link']}}">{{ $menu['label'] }}</a>
              </li>
              @endforeach
            @endif
            </ul>
            <div class="m-auto c-logo d-block">
              <a href="/"><img src="/uploads/logo/{{ ($logo) ? $logo->file : null}}" alt="{{($generalsetting) ? $generalsetting->title : null}}"></a>
            </div>
            <ul class="mr-auto navbar-nav">
              @if($menu2)
              @foreach($menu2 as $menu)
              <li class="nav-item ">
                <a class="nav-link" href="{{$menu['link']}}">{{ $menu['label'] }}</a>
              </li>
              @endforeach
            @endif
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Header End Here -->
    <!-- Main Content Start Here -->
    @yield('mainContent')
    <!-- Main Content End Here -->
    <!-- Footer Section Start -->
    <footer class="footer-main">
      <div class="container max-container">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <div class="footer-logo">
              <img src="/frontend/assets/img/footer-logo.png">
            </div>
            <h2 class="contact-h">Contact Us</h2>
            <p class="email-p"><span class="email-span">Email:</span> info@o-kazu.com</p>
            <p class="phone-p"><span class="phone-span">Phone:</span> +966112064422, 0556868969</p>
            <p class="phone-p"><span class="phone-span">Address:</span> Prince Turki Ibn Abdulaziz Al Awwal Rd, Exit 2, Hittin, Riyadh, SaudiArabia</p>
            <ul class="social-footer">
              <li><a target="_blank" href="https://www.facebook.com/Okazu.sa/"><i class="fab fa-facebook"></i></a></li>
              <li><a target="_blank" href="https://instagram.com/okazu_sa?utm_medium=copy_link"><i class="fab fa-instagram"></i></a></li>
              <li><a target="_blank" href="https://twitter.com/Okazu_sa"><i class="fab fa-twitter"></i></a></li>
              <li><a target="_blank" href="https://www.linkedin.com/company/okazusa"><i class="fab fa-linkedin"></i></a></li>
              <li><a target="_blank" href="https://www.tripadvisor.com/Profile/Okazu_sa"><i class="fab fa-tripadvisor"></i></a></li>
              <li><a target="_blank" href="https://vm.tiktok.com/ZSJnDRS98/"><i class="fab fa-tiktok"></i></a></li>
            </ul>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <div class="footer-right">
              <h2>we are coming for you</h2>
              <form>
                <div class="form-group">
                  <label>Subscribe our Newsletter</label>
                  <input class="form-control" type="text" placeholder="Email">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="copyright-text">
            <p>Copyright &copy; 2021 O-kazu (Pvt. ltd)</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->
    <!-- Back To Top -->
    <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>
    <!-- Back To Top -->
    <script src="/frontend/assets/js/jquery.min.js"></script>
    <script src="/frontend/assets/js/popper.min.js"></script>
    <script src="/frontend/assets/js/bootstrap.min.js"></script>
    <script src="/frontend/assets/js/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="/frontend/assets/js/script.js"></script>
    <script src="/frontend/assets/js/lightbox-plus-jquery.min.js"></script>
    {{-- Gallery --}}
    <script src="/frontend/assets/js/isotope.pkgd.min.js"></script>
    {{-- Menu-Detail --}}
    <script src="/frontend/assets/js/script.js"></script>
    <script src="/frontend/assets/js/swiper-bundle.min.js"></script>

  </body>
</html>
<script>
  AOS.init();
</script>

<script>
  var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 3,
        freeMode: true,
        watchSlidesProgress: true,
      });
      var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
      });
</script>
<footer >
      <div class="footer-main">
        <div class="container max-con">
          <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6">
              <div class="digi-section">
                <div class="digi-logo">
                  <a href="/"><img src="/frontend/assets/img/footer.png" alt="Logo"></a>
                </div>
                <div class="footer-content">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      <div class="custom-digi">
                        <h4>{{ ($footer) ? $footer->title : null}}</h4>
                        <p><span>{{ ($footer) ? $footer->email_label : null}} : </span>{{ ($footer) ? $footer->email : null}}</p>
                        <p><span>{{ ($footer) ? $footer->phone_label : null}} : </span>{{ ($footer) ? $footer->phone : null}}</p>
                      </div>
                      <div class="follow-section">
                    <div class="social-icons mt-3">
                      <ul>
                        
                        @if($link) @if($link->facebook_status !='')
                        <li><a href="{{$link->facebook}}"><i class="fab fa-facebook-f facebook-2"></i></a></li>
                        @endif @endif
                        
                        @if($link) @if($link->twitter_status !='')
                        <li><a href="{{$link->twitter}}"><i class="fab fa-twitter twitter"></i></a></li>
                        @endif @endif
                        
                        @if($link) @if($link->instagram_status !='')
                        <li><a href="{{$link->instagram}}"><i class="fab fa-instagram instagram"></i></a></li>
                        @endif @endif
                        
                        @if($link) @if($link->linkedin_status !='')
                        <li><a href="{{$link->linkedin}}"><i class="fab fa-linkedin linkedin"></i></a></li>
                        @endif @endif
                        
                        @if($link) @if($link->whatsapp_status !='')
                        <li><a href="{{$link->whatsapp}}"><i class="fab fa-youtube youtube"></i></a></li>
                        @endif @endif
                      </ul>
                    </div>
                  </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                      <div class="site-main">
                        <h5>Site Map</h5>
                        <ul>
                          <li><a href="index.html">Home</a></li>
                          <li><a href="aboutus.html">About Us</a></li>
                          <li><a href="career.html">Careers</a></li>
                          <li><a href="contact.html">Contact</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                      <div class="site-main">
                        <h5>Our Projects</h5>
                        <ul>
                          <li><a href="projectinside.html">0-Kazu</a></li>
                          <li><a href="coming.html">Dekan Chapati</a></li>
                          <li><a href="coming.html">Amaly</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
              @if (\Session::has('success'))
                <div class="alert alert-success">
                  <p>{{ \Session::get('success') }}</p>
                </div><br />
               @endif
               @if (\Session::has('failure'))
                <div class="alert alert-danger">
                  <p>{{ \Session::get('failure') }}</p>
                </div><br />
               @endif
              <div class="subscribe-scetion">
                <form method="post" action="{{route('subscribers.store')}}">
                  @csrf
                  <label>{{ ($footer) ? $footer->subscribe : null}}</label>
                  <div class="input-group input-main">
                    <input type="email" required="" class="form-control border-right-0" name="email" placeholder="{{ ($footer) ? $footer->email_label : null}}">
                    <span class="input-group-append custom-input">
                    <a href="#"><button type="submit" class="btn border-left-0" ><i class="fas fa-arrow-right"></i></button></a>
                    </span>
                  </div>
                </form>
                @if (session('subscribed'))
                    <div class="alert alert-success">
                        {{ session('subscribed') }}
                    </div>
                @endif
                <div class="site-map">
                  <div class="row">
                    <div class="col-12">
                      <div class="site-main">
                        <h5>Help</h5>
                        <ul>
                          <li>Faq's</li>
                          <li>Terms and condition</li>
                          <li>Privacy Policy</li>
                          <li>Blog</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="footer-hr">
      <div class="container">
        <div class="copyrights">
          <div class="row">
            <div class="col-12">
              <div class="term-text">
                <p>{{ ($footer) ? $footer->copyright : null}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="/frontend/assets/js/jquery.min.js"></script>
    <script src="/frontend/assets/js/popper.min.js"></script>
    <script src="/frontend/assets/js/script.js"></script>
    <script src="/frontend/assets/js/bootstrap.min.js"></script>
    <script src="/frontend/assets/js/lity.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <script type="text/javascript">
    $( document ).ready(function() {
    // console.log( "ready!" );
      setTimeout(function() {
        // alert('s');
        $('#successMessage').fadeOut('fast');
    }, 3000); // <-- time in milliseconds
});
    </script>
    <script src="/frontend/assets/js/index.js"></script>
    {{-- Career --}}
    <script src="/frontend/assets/js/career.js"></script>
    <script src="/frontend/assets/js/slick.min.js"></script>
    <script src="/frontend/assets/js/gsap.min.js"></script>

    {{-- About US --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="/frontend/assets/js/about.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script>
    <script src="https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js"></script>
    <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
    <script src="/frontend/assets/js/lg-rotate.js"></script>
    <script>
      lightGallery(document.getElementById('lightgallery'));
    </script>

    
{{-- Edge --}}
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js"></script>

<script>
 // ------------- VARIABLES ------------- //
var ticking = false;
var isFirefox = /Firefox/i.test(navigator.userAgent);
var isIe =
  /MSIE/i.test(navigator.userAgent) ||
  /Trident.*rv\:11\./i.test(navigator.userAgent);
var scrollSensitivitySetting = 60; //Increase/decrease this number to change sensitivity to trackpad gestures (up = less sensitive; down = more sensitive)
var slideDurationSetting = 600; //Amount of time for which slide is "locked"
var currentSlideNumber = 0;
var totalSlideNumber = $(".background").length;

// ------------- DETERMINE DELTA/SCROLL DIRECTION ------------- //
function parallaxScroll(evt) {
  // alert('evt');

  if (isFirefox) {
    //Set delta for Firefox
    delta = evt.detail * -120;
  } else if (isIe) {
    //Set delta for IE
    delta = -evt.deltaY;
  } else {
    //Set delta for all other browsers
    delta = evt.wheelDelta;
  }
    // alert(evt.wheelDelta);
    // alert(delta);

  if (ticking != true) {
    if (delta <= -scrollSensitivitySetting) {
      //Down scroll
      ticking = true;
      if (currentSlideNumber !== totalSlideNumber - 1) {
        currentSlideNumber++;
    // alert(currentSlideNumber)
        nextItem();
      }
      slideDurationTimeout(slideDurationSetting);
    }
    if (delta >= scrollSensitivitySetting) {
      //Up scroll
      ticking = true;
      if (currentSlideNumber !== 0) {
        currentSlideNumber--;
      }
      previousItem();
      slideDurationTimeout(slideDurationSetting);
    }
  }
}

function parallaxScrolll(evt) {

  // alert(isFirefox);
  delta = '-120';

  if (ticking != true) {
    if (delta <= -scrollSensitivitySetting) {
      //Down scroll
      ticking = true;
      if (currentSlideNumber !== totalSlideNumber - 1) {
        currentSlideNumber++;
        nextItem();
      }
      slideDurationTimeout(slideDurationSetting);
    }
    if (delta >= scrollSensitivitySetting) {
      //Up scroll
      ticking = true;
      if (currentSlideNumber !== 0) {
        currentSlideNumber--;
      }
      previousItem();
      slideDurationTimeout(slideDurationSetting);
    }
  }
}

function parallaxScrollll(evt) {

  // alert(isFirefox);
  delta = '120';

  if (ticking != true) {
    if (delta <= -scrollSensitivitySetting) {
      //Down scroll
      ticking = true;
      if (currentSlideNumber !== totalSlideNumber - 1) {
        currentSlideNumber++;
        nextItem();
      }
      slideDurationTimeout(slideDurationSetting);
    }
    if (delta >= scrollSensitivitySetting) {
      //Up scroll
      ticking = true;
      if (currentSlideNumber !== 0) {
        currentSlideNumber--;
      }
      previousItem();
      slideDurationTimeout(slideDurationSetting);
    }
  }
}

// ------------- SET TIMEOUT TO TEMPORARILY "LOCK" SLIDES ------------- //
function slideDurationTimeout(slideDuration) {
  setTimeout(function() {
    ticking = false;
  }, slideDuration);
}

// ------------- ADD EVENT LISTENER ------------- //
// alert(isFirefox)
var mousewheelEvent = isFirefox ? "DOMMouseScroll" : "wheel";
window.addEventListener(mousewheelEvent, _.throttle(parallaxScroll, 60), false);

// ------------- SLIDE MOTION ------------- //
function nextItem() {
  // alert(currentSlideNumber);
  var $previousSlide = $(".background").eq(currentSlideNumber - 1);
  $previousSlide.removeClass("up-scroll").addClass("down-scroll");
}

function previousItem() {
  // alert('as');
  var $currentSlide = $(".background").eq(currentSlideNumber);
  $currentSlide.removeClass("down-scroll").addClass("up-scroll");
}

function btnnextItem() {
var mousewheelEvent = isFirefox ? "DOMMouseScroll" : "wheel";
parallaxScrolll('60');
// window.addEventListener(mousewheelEvent, _.throttle(parallaxScrolll, 60), false);
}

function btnpreviousItem() {
var mousewheelEvent = isFirefox ? "DOMMouseScroll" : "wheel";
parallaxScrollll('60');
// window.addEventListener(mousewheelEvent, _.throttle(parallaxScrolll, 60), false);
}


</script>
{{-- Consultancy --}}
<script>
  $('.hideservice').hide();
  function show_services(argument) {
    if($('.hideservice').hide())
    {
      $('.show-service-'+argument).show();
    }
    else
    {
      $('.hideservice').hide();
    }
  }
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
@if(empty($_GET['page']))
<script type="text/javascript" src="/frontend/redirect-ajax.js"></script>
@endif
    </body>
</html>
@extends('layouts.master')
@section('page-title')
  Home
@endsection
@section('mainContent')
<div class="home">
      <!-- Slider Start Here -->
      <div id="carouselExampleDark" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner c-inner">
          <div class="carousel-item item-1 active">
            <div class="item-info">
              <h2 class="fade-in-bottom">AN EXPERIENCE THAT NEVER FADES AWAY</h2>
              <p class="fade-bottom">Luxurious contemporary Japanese cuisine
              </p>
            </div>
          </div>
          <div class="carousel-item item-2">
            <div class="item-info">
              <h2 class="fade-in-bottom">AN EXPERIENCE THAT NEVER FADES AWAY</h2>
              <p class="fade-bottom">Luxurious contemporary Japanese cuisine
              </p>
            </div>
          </div>
          <div class="carousel-item item-3">
            <div class="item-info">
              <h2 class="fade-in-bottom">AN EXPERIENCE THAT NEVER FADES AWAY</h2>
              <p class="fade-bottom">Luxurious contemporary Japanese cuisine 
              </p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev prev-i" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next next-i" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
        <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- MODEL FORM START -->
      <div class="slider-model">
        <div class="reserve-btn">
          <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Reserve Now
          </button>
        </div>
        <!-- Modal -->
        <div class="modal fade slide-custom" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="title-h5" id="exampleModalLabel">Reservation Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body modal-info">
                <form method="post" id="reservation-form">
                    @csrf
                  <div class="form-group">
                    <label for="Name" class="form-label">Enter Name*</label>
                    <input type="text" id="reservation-name" name="name" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="Phone" class="form-label">Enter Phone*</label>
                    <input type="number" id="reservation-phone" name="phone" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="Email" class="form-label">Enter Email*</label>
                    <input type="email" name="email" id="reservation-email" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="Email" class="form-label">Enter Date*</label>
                    <input type="date" id="reservation-date" name="date" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="Email" class="form-label">Enter Time*</label>
                    <input type="time" id="reservation-time" name="time" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="Email" class="form-label">Enter Message:</label>
                    <textarea id="message" name="message" id="reservation-message" class="form-control"></textarea>
                  </div>
                  <span  onclick="reservationsubmit()" id="reservation-submit" class="btn btn-light model-submit">Submit</button>
                </span>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- MODEL FORM END -->
      <!-- Slider End Here -->
      <!-- About Section Start -->
      <div style="margin-top: -20px;" id="about">&nbsp;</div>
      <section class="about-main" data-aos="fade-up" data-aos-once="true" data-aos-mirror="true" data-aos-duration="2000" data-aos-easing="ease-out">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="mb-0">What we represent</h2>
              <img style="margin-top: -15px;" class="about-underline" src="/frontend/assets/img/home/underline.png">
              <p class="m-auto d-block about-p">O-Kazu is a premium dine-in restaurant based in the most popular neighborhood adjacent to the Financial District. We consider our restaurant as an experience, and we intend to make it an unforgettable one.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
              <div class="about-left">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="inner-about"  data-aos="fade-up" data-aos-once="true" data-aos-mirror="true" data-aos-duration="1200" data-aos-easing="ease-out">
                      <div class="about-circle"><img src="/frontend/assets/img/home/Hospitality.png"></div>
                      <p>Hospitality</p>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="inner-about"  data-aos="fade-up" data-aos-once="true" data-aos-mirror="true" data-aos-duration="1500" data-aos-easing="ease-out">
                      <div class="about-circle"><img src="/frontend/assets/img/home/Japanese-food-culture.png"></div>
                      <p>Diversity</p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="inner-about"  data-aos="fade-up" data-aos-once="true" data-aos-mirror="true" data-aos-duration="1800" data-aos-easing="ease-out">
                      <div class="about-circle"><img src="/frontend/assets/img/home/Customer-experience.png"></div>
                      <p>Experience</p>
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="inner-about" data-aos="fade-up" data-aos-once="true" data-aos-mirror="true" data-aos-duration="2000">
                      <div class="about-circle"><img src="/frontend/assets/img/home/Ambiance.png"></div>
                      <p>Ambiance</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
              <div class="about-right" data-aos="fade-down" data-aos-once="true" data-aos-mirror="true" data-aos-duration="2000">
                <img src="/frontend/assets/img/home/men-about.png">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- About Section End -->
      <!-- Gallery Section Start -->
      <div style="margin-top: -20px;" id="gallery">&nbsp;</div>
      <section class="gallery" data-aos="fade-up" data-aos-once="true" data-aos-mirror="true" data-aos-duration="3000" data-aos-easing="ease-out">
        <div class="container max-container">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
              <div class="gallery-left">
                <h2 data-aos="fade-down" data-aos-once="true" data-aos-mirror="true" data-aos-duration="1200">Our Gallery</h2>
                <p data-aos="fade-down" data-aos-once="true" data-aos-mirror="true" data-aos-duration="1500">Mastering the Japanese essence, O-Kazu is not just about the mouthfeel. O-Kazu ambiance is a blend of Japanese and Saudi culture. 
                </p>
                <div class="controls-gallery">
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <img src="/frontend/assets/img/home/arrow-left.png">
                  <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <img src="/frontend/assets/img/home/arrow-right.png">
                  <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
              <div id="carouselExampleFade" class="carousel slide carousel-slide" data-bs-ride="carousel">
                <div class="carousel-inner custom-item">
                  <div class="carousel-item active">
                    <img src="/frontend/assets/img/home/slider1.jpg" class="d-block w-100 fade-in-right" alt="...">
                    <!-- <div class="row">
                      <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
                      </div>
                      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                        <div class="info-slide fade-in-bottom">
                          <h2>Lorem ipsum</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium deleniti reiciendis eveniet voluptates nihil, nam sequi fuga, ex molestiae et accusantium excepturi quod necessitatibus commodi! Ut exercitationem velit expedita minima?</p>
                          <ul>
                            <li>
                              <div class="row">
                                <div class="col-1">
                                  <div class="square-i">&nbsp;</div>
                                </div>
                                <div class="col-10">
                                  <span>Lorem ipsum</span>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="row">
                                <div class="col-1">
                                  <div class="square-i">&nbsp;</div>
                                </div>
                                <div class="col-10">
                                  <span>Lorem ipsum</span>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="row">
                                <div class="col-1">
                                  <div class="square-i">&nbsp;</div>
                                </div>
                                <div class="col-10">
                                  <span>Lorem ipsum</span>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      </div> -->
                  </div>
                  <div class="carousel-item">
                    <img src="/frontend/assets/img/home/slider2.jpg" class="d-block w-100 fade-in-right" alt="...">
                    <!-- <div class="row">
                      <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
                      </div>
                      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                        <div class="info-slide fade-in-bottom">
                          <h2>Lorem ipsum</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium deleniti reiciendis eveniet voluptates nihil, nam sequi fuga, ex molestiae et accusantium excepturi quod necessitatibus commodi! Ut exercitationem velit expedita minima?</p>
                          <ul>
                            <li>
                              <div class="row">
                                <div class="col-1">
                                  <div class="square-i">&nbsp;</div>
                                </div>
                                <div class="col-10">
                                  <span>Lorem ipsum</span>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="row">
                                <div class="col-1">
                                  <div class="square-i">&nbsp;</div>
                                </div>
                                <div class="col-10">
                                  <span>Lorem ipsum</span>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="row">
                                <div class="col-1">
                                  <div class="square-i">&nbsp;</div>
                                </div>
                                <div class="col-10">
                                  <span>Lorem ipsum</span>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      </div> -->
                  </div>
                  <div class="carousel-item">
                    <img src="/frontend/assets/img/home/slider3.jpg" class="d-block w-100 fade-in-right" alt="...">
                    <!-- <div class="row">
                      <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
                      </div>
                      <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                        <div class="info-slide fade-in-bottom">
                          <h2>Lorem ipsum</h2>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium deleniti reiciendis eveniet voluptates nihil, nam sequi fuga, ex molestiae et accusantium excepturi quod necessitatibus commodi! Ut exercitationem velit expedita minima?</p>
                          <ul>
                            <li>
                              <div class="row">
                                <div class="col-1">
                                  <div class="square-i">&nbsp;</div>
                                </div>
                                <div class="col-10">
                                  <span>Lorem ipsum</span>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="row">
                                <div class="col-1">
                                  <div class="square-i">&nbsp;</div>
                                </div>
                                <div class="col-10">
                                  <span>Lorem ipsum</span>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="row">
                                <div class="col-1">
                                  <div class="square-i">&nbsp;</div>
                                </div>
                                <div class="col-10">
                                  <span>Lorem ipsum</span>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Gallery Section End -->
      <!-- Our Menu Section Start -->
      <div style="margin-top: -20px;" id="menu">&nbsp;</div>
      <section id="menu" class="our-menu" data-aos="fade-up" data-aos-once="true" data-aos-mirror="true" data-aos-duration="3000" data-aos-easing="ease-out">
        <div class="container">
          <div class="row">
            <div class="text-center col-12">
              <h2 class="mb-0 our-menu-h">Menu</h2>
              <img style="margin-top: -15px;" class="menu-underline" src="/frontend/assets/img/home/underline.png">
              <p class="m-auto d-block our-menu-p" style="width: 35%;">O-Kazu is a Luxurious Japanese  restaurant. We consider it an experience, and we intend to make it an unforgettable one.</p>
            </div>
          </div>
        </div>
        <div class="container ">
          <div class="row">
            <div class="col-12">
              <div class="special-info">
                <h3>Our Special Items</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="custom-carousel">
                <div class="owl-carousel">
                  <div class="item-card">
                    <div class="item-img">
                      <img src="/frontend/assets/img/home/_DSC9484.jpg">
                    </div>
                    <div class="item-card-info">
                      <h4>crispy kani salad </h4>
                      <p>crispy crab with Japanese Mizuna, sweet and spicy dressing.</p>
                    </div>
                    <div class="item-btn">
                      <a href="menu.html"><button class="btn btn-dark"> View More</button></a>
                    </div>
                  </div>
                  <div class="item-card">
                    <div class="item-img">
                      <img src="/frontend/assets/img/home/_DSC9390.jpg">
                    </div>
                    <div class="item-card-info">
                      <h4>Akami sashimi</h4>
                      <p>delicately cut stripes (03 Pcs)</p>
                    </div>
                    <div class="item-btn">
                      <a href="menu.html"><button class="btn btn-dark"> View More</button></a>
                    </div>
                  </div>
                  <div class="item-card">
                    <div class="item-img">
                      <img src="/frontend/assets/img/home/_DSC9440.jpg">
                    </div>
                    <div class="item-card-info">
                      <h4>California maki</h4>
                      <p>snow crab mix, cucumber, avocado, sesame seed, white truffle oil</p>
                    </div>
                    <div class="item-btn">
                      <a href="menu.html"><button class="btn btn-dark"> View More</button></a>
                    </div>
                  </div>
                  <div class="item-card">
                    <div class="item-img">
                      <img src="/frontend/assets/img/home/_DSC9504.jpg">
                    </div>
                    <div class="item-card-info">
                      <h4>Aburi gold maki</h4>
                      <p>salmon, gold leaf, avocado, spicy miso and sweet gochujang sauce</p>
                    </div>
                    <div class="item-btn">
                      <a href="menu.html"><button class="btn btn-dark"> View More</button></a>
                    </div>
                  </div>
                  <div class="item-card">
                    <div class="item-img">
                      <img src="/frontend/assets/img/home/_DSC9518.jpg">
                    </div>
                    <div class="item-card-info">
                      <h4>Akami  Nigri</h4>
                      <p>Comming Soon </p>
                    </div>
                    <div class="item-btn">
                      <a href="menu.html"><button class="btn btn-dark"> View More</button></a>
                    </div>
                  </div>
                  <div class="item-card">
                    <div class="item-img">
                      <img src="/frontend/assets/img/home/_DSC9510.jpg">
                    </div>
                    <div class="item-card-info">
                      <h4>salmon nigiri</h4>
                      <p> Comming Soon </p>
                    </div>
                    <div class="item-btn">
                      <a href="menu.html"><button class="btn btn-dark"> View More</button></a>
                    </div>
                  </div>
                  <div class="item-card">
                    <div class="item-img">
                      <img src="/frontend/assets/img/home/_DSC9611.jpg">
                    </div>
                    <div class="item-card-info">
                      <h4>Ebi tempura</h4>
                      <p>deep fried shrimp tempura with tentsuyu sauce</p>
                    </div>
                    <div class="item-btn">
                      <a href="menu.html"><button class="btn btn-dark"> View More</button></a>
                    </div>
                  </div>
                  <div class="item-card">
                    <div class="item-img">
                      <img src="/frontend/assets/img/home/_DSC9452.jpg">
                    </div>
                    <div class="item-card-info">
                      <h4>okazu shrimp blast</h4>
                      <p>deep fried rock shrimp tempura with sweet and spicy mayo</p>
                    </div>
                    <div class="item-btn">
                      <a href="menu.html"><button class="btn btn-dark"> View More</button></a>
                    </div>
                  </div>
                  <div class="item-card">
                    <div class="item-img">
                      <img src="/frontend/assets/img/home/_DSC9593.jpg">
                    </div>
                    <div class="item-card-info">
                      <h4>salmon teriyaki</h4>
                      <p>grilled Scottish salmon fillet, grilled assorted vegetables with teriyaki sauce</p>
                    </div>
                    <div class="item-btn">
                      <a href="menu.html"><button class="btn btn-dark"> View More</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="pdf-download">
          <a href="/frontend/assets/img/O-Kazu-Menu 18.08.21.pdf" download>
          <button class="btn btn-light" type="button">Download Menu</button>
          </a>
        </div>
      </section>
      <!-- Our Menu Section End -->
      <!-- Catering Section Start -->
      <div style="margin-top: -20px;" id="catering">&nbsp;</div>
      <section  class="caterng-main" data-aos="fade-up" data-aos-once="true" data-aos-mirror="true" data-aos-duration="1500" data-aos-easing="ease-out">
        <div class="container max-container">
          <div class="row">
            <div class="col-12 info-catering">
              <h5>TASTY AND CRUNCHY</h5>
              <h2>Catering</h2>
            </div>
          </div>
          <div id="carouselExampleIndicators" class="carousel slide catering-carousel" data-bs-ride="carousel">
            <div class="carousel-indicators catering-indicator">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 fade-in-right">
                    <div class="catering-left">
                      <img src="/frontend/assets/img/home/catering-left.png">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 fade-in-left">
                    <div class="catering-right">
                      <h2>WEDDING</h2>
                      <!-- <p>O-Kazu is providing its catering services for weddings. To give the customers the best food and services for making your wedding memorable, filled with memories and love. </p> -->
                      <a href="#contact"><button class="btn btn-light">Get in touch</button></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 fade-in-right">
                    <div class="catering-left">
                      <img src="/frontend/assets/img/home/catering-left.png">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 fade-in-left">
                    <div class="catering-right">
                      <h2>PRIVATE EVENTS </h2>
                      <!-- <p>Catering services for feasts or parties is being provided by O-Kazu. The focus is on bringing the luxury experience for you and your guests. </p> -->
                      <a href="#contact"><button class="btn btn-light">Get in touch</button></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 fade-in-right">
                    <div class="catering-left">
                      <img src="/frontend/assets/img/home/catering-left.png">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 fade-in-left">
                    <div class="catering-right">
                      <h2>CORPORATE EVENTS</h2>
                      <!-- <p>Catering for professional events is available at O-Kazu. Exemplary services for events that are based on bringing organizations together.</p> -->
                      <a href="#contact"><button class="btn btn-light">Get in touch</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev prev-cate" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <img src="/frontend/assets/img/home/arr-left.png">
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next next-cate" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <img src="/frontend/assets/img/home/arr-right.png">
            <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </section>
      <!-- Catering Section End -->
      <!-- Contact Us Section Start -->
      <div style="margin-top: -20px;" id="contact">&nbsp;</div>
      <section class="contact-main">
        <div class="container max-container">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
              <h2 class="cont-h">Contact Us</h2>
              <img class="line-contact" src="/frontend/assets/img/home/contact-line.png">
              <p class="contact-p">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
                eirmod  tempor invidunt ut labore et dolore magna
                aliquyam erat, sed diam voluptua. 
              </p>
              @if (\Session::has('success_contact'))
                  <div class="alert alert-success">
                    <p>{{ \Session::get('success_contact') }}</p>
                  </div><br />
                @endif
              <form method="post" action="{{route('contact.store')}}" >
                @csrf
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                      <label>Full Name*</label>
                      <input type="text" required="" class="form-control" name="name" id="contact-name" placeholder="Your Full Name">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                      <label>Your Email*</label>
                      <input type="email" required="" id="contact-email" name="email" class="form-control" placeholder="Your Email Address">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                      <label>Full Phone*</label>
                      <input type="number" required="" class="form-control" name="phone" id="contact-phone" placeholder="Your Phone Number">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                      <label>Your Subject*</label>
                      <select name="subject" required="" id="contact-subject">
                        <option value="">::select subject::</option>
                        <option value="Become a Partner">Become a Partner</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label>Your Message*</label>
                    <textarea class="form-control" name="description" placeholder="Write Your message here"></textarea>
                  </div>
                </div>
                <button type="subject" id="contact-submit" class="btn btn-light">Submit</button>
              </form>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
              <div class="contact-iframe">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462562.8478790069!2d54.94756108816986!3d25.075707325365165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2s!4v1620031562576!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact Us Section End -->
    </div>
    @endsection
<script type="text/javascript">
    function reservationsubmit() {
    var name = $('#reservation-name').val();
    var phone = $('#reservation-phone').val();
    var email = $('#reservation-email').val();
    var date = $('#reservation-date').val();
    var time = $('#reservation-time').val();
    var message = $('#reservation-message').val();
    if(name == ''){
      swal("Failed", "Please Fill Name", "error");
      return false;
    }
    if(phone == ''){
      swal("Failed", "Please Fill Phone", "error");
      return false;
    }
    if(email == ''){
      swal("Failed", "Please Fill email", "error");
      return false;
    }
    if(date == ''){
      swal("Failed", "Please Select Date", "error");
      return false;
    }
    if(time == ''){
      swal("Failed", "Please Select Time", "error");
      return false;
    }
    else{
    var form_data = new FormData(document.getElementById("reservation-form"));
      event.preventDefault();
      $('#reservation-submit').html('Please Wait...');
      $("#reservation-submit").attr("disabled", true);
      $.ajax({
       url:"{{route('reservation.store')}}",
       method:"POST",
       data: form_data,
       contentType: false,
       cache: false,
       processData: false,
       success:function(response)
       {
        $("#reservation-submit"). attr("disabled", false);
        $('#reservation-submit').html('submit');
          document.getElementById('reservation-form').reset(); 
          swal("Sucess", "Thank You", "success");
       }
      });
      }
  }





  // function contactsubmit() {
  //   var name = $('#contact-name').val();
  //   var phone = $('#contact-phone').val();
  //   var email = $('#contact-email').val();
  //   var subject = $('#contact-subject').val();
  //   if(name == ''){
  //     swal("Failed", "Please Fill Name", "error");
  //     return false;
  //   }
  //   if(phone == ''){
  //     swal("Failed", "Please Fill Phone", "error");
  //     return false;
  //   }
  //   if(email == ''){
  //     swal("Failed", "Please Fill email", "error");
  //     return false;
  //   }
  //   if(subject == ''){
  //     swal("Failed", "Please Select subject", "error");
  //     return false;
  //   }
  //   else{
  //   // var formdata = new FormData(document.getElementById("contact-form"));
  //   let myForm = document.getElementById('contact-form');
  //   let formdata = new FormData(myForm);
  //     event.preventDefault();
  //     $('#contact-submit').html('Please Wait...');
  //     $("#contact-submit").attr("disabled", true);
  //     $.ajax({
  {{-- //      url:"{{route('contact.store')}}", --}}
  //      method:"POST",
  //      data: formdata,
  //      contentType: false,
  //      cache: false,
  //      processData: false,
  //      success:function(response)
  //      {
  //       $("#contact-submit"). attr("disabled", false);
  //       $('#contact-submit').html('submit');
  //         document.getElementById('contact-form').reset(); 
  //         swal("Sucess", "Thank You", "success");
  //      }
  //     });
  //     }
  // }
</script>

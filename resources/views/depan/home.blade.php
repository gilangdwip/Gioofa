
@extends('depan.master')

@section('content')

    <!-- ======= Carousel ======= -->
    {{-- <section class="section pt-0">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial">
                  <img src="assets/img/banner_img_01.jpg" alt="Image" class="img-fluid">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut officiis
                      explicabo inventore.</p>
                  </blockquote>
                  <p>&mdash; Jean Hicks</p>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial">
                  <img src="assets/img/banner_img_02.jpg" alt="Image" class="img-fluid">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut officiis
                      explicabo inventore.</p>
                  </blockquote>
                  <p>&mdash; Chris Stanworth</p>
                </div>
              </div>
            </div><!-- End caraousel item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial">
                  <img src="assets/img/banner_img_03.jpg" alt="Image" class="img-fluid">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut officiis
                      explicabo inventore.</p>
                  </blockquote>
                  <p>&mdash; Chris Stanworth</p>
                </div>
              </div>
            </div><!-- End caraousel item -->
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial">
                  <img src="assets/img/banner_img_04.jpg" alt="Image" class="img-fluid">
                  <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut officiis
                      explicabo inventore.</p>
                  </blockquote>
                  <p>&mdash; Chris Stanworth</p>
                </div>
              </div>
            </div><!-- End caraousel item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> --}}
    
    <section class="section">
      <div id="carouselExampleDark" class="carousel carousel-dark slide " data-aos="fade-up" data-aos-delay="100" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="asset/img/banner_img_01.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="asset/img/banner_img_02.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="asset/img/banner_img_03.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- ======= Works Section ======= -->
    <section class="section site-portfolio">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-12 col-lg-9 text-center text-lg-end" data-aos="fade-up" data-aos-delay="100">
            <div id="filters" class="filters">
                <a href="#" data-filter="*" class="active">All</a>
                @foreach ($categories as $categories )
                <a href="#" data-filter="{{$categories -> category}}">{{$categories -> category}}</a>
                @endforeach
            </div>
          </div>
        </div>
        
        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
          @foreach ($template as $template )
          <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="/preview/template/{{$template->id}}" class="item-wrap fancybox">
              <div class="work-info">
                <h3>{{$template->nama}}</h3>
                <span>Company Profile</span>
              </div>
              <img class="img-fluid" src="{{'storage/' . $template->image}}">
            </a>
          </div>

          @endforeach
        
        </div>


        <p class="text-center" data-aos="fade-up" data-aos-delay="100"><a href="/all-product" class="readmore" >View All</a></p>
      </div>

    </section><!-- End  Works Section -->

    <!-- =======Call Actions ======= -->
    <section class="call-to-action text-black text-center p-5" id="signup" data-aos="fade-up" data-aos-delay="200">
      <div class="container position-relative">
          <div class="row justify-content-center">
              <div class="col-xl-6">
                  <h2 class="">GET UPDATE!</h2>
                  <p class="">Join us to get updates on Sales, Free stuff, and more!</p>
                  <form class="form-subscribe" id="contactFormFooter" data-sb-form-api-token="API_TOKEN">
                      <!-- Email address input-->
                      <div class="row">
                          <div class="col">
                              <input class="form-control form-control-lg" id="emailAddressBelow" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                              <div class="invalid-feedback text-black" data-sb-feedback="emailAddressBelow:required">Email Address is required.</div>
                              <div class="invalid-feedback text-black" data-sb-feedback="emailAddressBelow:email">Email Address Email is not valid.</div>
                          </div>
                          <div class="col-auto mb-4"><button class="btn btn-lg" id="submitButton" type="submit">SUBSCRIBE</button></div>
                      </div>
                      <!-- Submit success message-->
                      <!---->
                      <!-- This is what your users will see when the form-->
                      <!-- has successfully submitted-->
                      <div class="d-none" id="submitSuccessMessage">
                          <div class="text-center mb-3">
                              <div class="fw-bolder">Form submission successful!</div>
                              <p>To activate this form, sign up at</p>
                              <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                          </div>
                      </div>
                      <!-- Submit error message-->
                      <!---->
                      <!-- This is what your users will see when there is-->
                      <!-- an error submitting the form-->
                      <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                  </form>
              </div>
          </div>
      </div>
    </section><!-- End Clients Section -->

  </main><!-- End #main -->

@endsection


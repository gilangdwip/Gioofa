@extends('depan.master')

@section('content')

  <main id="main">

    <!-- ======= Works Section ======= -->
    <section class="section site-portfolio">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-12 col-lg-9 text-center text-lg-end" data-aos="fade-up" data-aos-delay="100">
            <div id="filters" class="filters">
              <a href="#" data-filter="*" class="active">All</a>
              <a href="#" data-filter=".web">Company Profofile</a>
              <a href="#" data-filter=".design">Portofolio</a>
              <a href="#" data-filter=".branding">Curriculum Vitae</a>
              <a href="#" data-filter=".photography">Blog</a>
            </div>
          </div>
        </div>

        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
          <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="/preview" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Boxed Water</h3>
                <span>Company Profile</span>
              </div>
              <img class="img-fluid" src="assets/img/img1.jpg">
            </a>
          </div>

          <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="/preview" class="item-wrap fancybox">
              <div class="work-info">
                <h3>Build Indoo</h3>
                <span>Portofolio</span>
              </div>
              <img class="img-fluid" src="assets/img/img2.jpg">
            </a>
          </div>

          <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
            <a href="/preview" class="item-wrap fan cybox">
              <div class="work-info">
                <h3>Cocooil</h3>
                <span>Curriculum Vitae</span>
              </div>
              <img class="img-fluid" src="assets/img/img3.jpg">
            </a>
          </div>

        </div>
      </div>

    </section><!-- End  Works Section -->

  </main><!-- End #main -->

@endsection

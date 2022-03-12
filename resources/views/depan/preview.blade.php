@extends('depan.master')

@section('content')


  <main id="main">

    <section class="section">

      <div class="site-section pb-0">
        <div class="container">
          <div class="row align-items-stretch">

            <div class="col-md-8" data-aos="fade-up">
              <img src="{{asset ('storage/' . $template->image)}}" alt="" class="img-fluid">
            </div>


            <div class="col-md-3 ml-auto" data-aos="fade-up" data-aos-delay="100">
              <div class="sticky-content">
                <h3 class="h3">{{$template->nama}}</h3>
                <p class="mb-4"><span class="text-muted">Rp {{$template->harga}}</span></p>

                <div class="mb-5">
                  <p>{{$template->deskripsi}}</p>

                </div>

                <h4 class="h4 mb-3">Some of the key features include:</h4>
                <ul class="list-unstyled list-line mb-5">
                  <li>Clean code and easy to customize</li>
                  <li>Latest Bootstrap version</li>
                  <li>Slick modern design</li>
                  <li>Animation on scroll</li>
                  <li>Google fonts</li>
                  <li>Responsive Layout</li>
                  <li>Off-canvas mobile menu</li>
                  <li>SEO optimized</li>
                  <li>Optimized for performance</li>
                  <li>Latest Bootstrap version</li>
                  <li>Fully responsive</li>
                  <li>Cross Browser compatible</li>
                </ul>

                <p><a href="#" class="readmore" data-bs-toggle="modal" data-bs-target="#exampleModal">Check Out</a></p>
              </div>
            </div>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choose Payment Methods</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    
                    <div class="sticky-content">
                <h3 class="h3">{{$template->nama}}</h3>
                <p class="mb-4"><span class="text-muted">Rp {{$template->harga}}</span></p>

                <div class="mb-5">
                  <p>{{$template->deskripsi}}</p>

                </div>

                    <div class="d-grid gap-2" role="group" aria-label="Basic radio toggle button group">
                      <input type="radio" class="btn-check " name="btnradio" id="btnradio1" autocomplete="off" checked>
                      <label class="btn btn-outline text-start" for="btnradio1">BCA <span class="bca"><img src="../../asset/img/bca.png" alt=""></span></label>
                    
                      <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                      <label class="btn btn-outline text-start" for="btnradio2">GoPay <span class="gopay"><img src="../../asset/img/gopay1.png" alt=""></span></label>
                    
                      <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                      <label class="btn btn-outline text-start" for="btnradio3">Dana <span class="dana"><img src="../../asset/img/dana.png" alt=""></span></label>
                    </div>
                  </div>

                  <div class="modal-footer d-md-flex justify-content-md-end">
                    <a href="/library" class="readmore">Check Out</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
    </section>

  </main><!-- End #main -->

  


  

 @endsection

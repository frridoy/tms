@extends('frontend.master')
@section('content')

<section class="py-0">
    <div class="bg-holder d-none d-md-block" style="background-image:url('');background-position:center;"></div>
    <!--/.bg-holder-->
    <div class="container position-relative">
      <div class="row align-items-center min-vh-75 my-lg-8">
        <div class="col-md-7 col-lg-6 text-center text-md-start py-8">
          <h1 class="mb-4 display-1 lh-sm ">Travel around <br class="d-block d-lg-none d-xl-block" />the world</h1>
          <p class="mt-4 mb-5 fs-1 lh-base">Plan and book your perfect trip with expert advice, <br class="d-none d-lg-block" />travel tips, destination information and <br class="d-none d-lg-block" />inspiration from us.</p><a class="btn btn-lg btn-primary hover-top" href="#" role="button">Sign Up Now</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============================================-->
  <!-- <section> begin ============================-->
  <section id="places">
    <div class="container">
      <div class="row flex-md-center">
        <div class="col-md-11 col-lg-4 py-md-3 px-4 px-md-3 px-lg-0 px-xl-2 order-lg-1">
          <h1 class="fw-bold fs-md-3 fs-xl-5">Amazing places to enjoy your travel</h1>
          <hr class="text-primary my-4 my-lg-3 my-xl-4" style="height:3px; width:70px;" />
          <p class="lh-lg">Etiam facilisis, sapien quis porta dignissim, orci nisi pharetra dui, varius vehicula ligula nulla sit amet lorem. Aenean in vestibulum quam. Cras commodo varius neque, non gravida diam ultrices nec. Cras nulla mauris, fermentum nec libero in.</p><a class="btn btn-lg btn-primary hover-top" href="#" role="button">Explore</a>
        </div>
        <div class="col-lg-8 order-lg-0 order-1 px-4 px-md-3 py-8 py-md-3">
          <div class="carousel slide" id="carouselExampleControlsNoTouching" data-bs-touch="false" data-bs-interval="false">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row h-100">
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 text-white hover-top"><img class="img-fluid h-100" src="assets/img/gallery/maldives.png" alt="" />
                      <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-dark-gradient">
                        <div class="pt-3"><span class="badge bg-primary">$860</span></div>
                        <div class="ps-3 d-flex justify-content-between align-items-center">
                          <h5 class="text-white">Maldives</h5>
                          <h6 class="text-600">3 days</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 text-white hover-top"><img class="img-fluid h-100" src="assets/img/gallery/indonesia.png" alt="" />
                      <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-dark-gradient">
                        <div class="pt-3"><span class="badge bg-primary">$860</span></div>
                        <div class="ps-3 d-flex justify-content-between align-items-center">
                          <h5 class="text-white">Indonesia</h5>
                          <h6 class="text-600">7 days</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 text-white hover-top"><img class="img-fluid h-100" src="assets/img/gallery/kathmandu.png" alt="" />
                      <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-dark-gradient">
                        <div class="pt-3"><span class="badge bg-primary">$340</span></div>
                        <div class="ps-3 d-flex justify-content-between align-items-center">
                          <h5 class="text-white">Kathmandu</h5>
                          <h6 class="text-600">5 days</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row h-100">
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 text-white hover-top"><img class="img-fluid h-100" src="assets/img/gallery/maldives.png" alt="" />
                      <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-dark-gradient">
                        <div class="pt-3"><span class="badge bg-primary">$340</span></div>
                        <div class="ps-3 d-flex justify-content-between align-items-center">
                          <h5 class="text-white">Maldives</h5>
                          <h6 class="text-600">5 days</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 text-white hover-top"><img class="img-fluid h-100" src="assets/img/gallery/indonesia.png" alt="" />
                      <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-dark-gradient">
                        <div class="pt-3"><span class="badge bg-primary">$540</span></div>
                        <div class="ps-3 d-flex justify-content-between align-items-center">
                          <h5 class="text-white">Indonesia</h5>
                          <h6 class="text-600">5 days</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 text-white hover-top"><img class="img-fluid h-100" src="assets/img/gallery/kathmandu.png" alt="" />
                      <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-dark-gradient">
                        <div class="pt-3"><span class="badge bg-primary">$640</span></div>
                        <div class="ps-3 d-flex justify-content-between align-items-center">
                          <h5 class="text-white">Kathmandu</h5>
                          <h6 class="text-600">6 days</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row h-100">
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 text-white hover-top"><img class="img-fluid h-100" src="assets/img/gallery/kathmandu.png" alt="" />
                      <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-dark-gradient">
                        <div class="pt-3"><span class="badge bg-primary">$540</span></div>
                        <div class="ps-3 d-flex justify-content-between align-items-center">
                          <h5 class="text-white">Kathmandu</h5>
                          <h6 class="text-600">5 days</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 text-white hover-top"><img class="img-fluid h-100" src="assets/img/gallery/maldives.png" alt="" />
                      <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-dark-gradient">
                        <div class="pt-3"><span class="badge bg-primary">$860</span></div>
                        <div class="ps-3 d-flex justify-content-between align-items-center">
                          <h5 class="text-white">Maldives</h5>
                          <h6 class="text-600">3 days</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 text-white hover-top"><img class="img-fluid h-100" src="assets/img/gallery/indonesia.png" alt="" />
                      <div class="card-img-overlay ps-0 d-flex flex-column justify-content-between bg-dark-gradient">
                        <div class="pt-3"><span class="badge bg-primary">$860</span></div>
                        <div class="ps-3 d-flex justify-content-between align-items-center">
                          <h5 class="text-white">Indonesia</h5>
                          <h6 class="text-600">7 days</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="position-relative mt-5"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleControlsNoTouching" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleControlsNoTouching" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
          </div>
        </div>
      </div>
    </div><!-- end of .container-->
  </section><!-- <section> close ============================-->
  <!-- ============================================-->



  <!-- ============================================-->
  <!-- <section> begin ============================-->
  <section class="pt-5" id="featuresVideos">
    <div class="container">
      <div class="row flex-center mb-5">
        <div class="col-lg-8 text-center">
          <h1 class="fw-bold fs-md-3 fs-lg-4 fs-xl-5">Featured videos</h1>
          <hr class="mx-auto text-primary my-4" style="height:3px; width:70px;" />
          <p class="mx-auto">Aliquam sodales vitae ex tincidunt consectetur. Etiam eleifend malesuada magna, at imperdiet justo euismod eu. Aliquam vel imperdet mi, et convallis eros. Duis fermentum fringilla nisl at vulputate. Nunc nec lorem faucibus, molestie nisi id, elementum sem. Sed vulputate tempor augue a efficitur urna, ultrices eu. Duis vel turpis et arcu.</p>
        </div>
      </div>
      <div class="row flex-center">
        <div class="col-12">
          <div class="carousel slide" id="carouselExampleIndicators" data-bs-touch="false" data-bs-interval="false">
            <div class="row align-items-center">
              <div class="col-12 col-xxl-7 px-2">
                <div class="carousel-inner">
                  <div class="carousel-item active h-100">
                    <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY"><iframe src="https://www.youtube.com/embed/zLeLttVbFs8" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div>
                  </div>
                  <div class="carousel-item">
                    <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY"><iframe src="https://www.youtube.com/embed/nUI8f_hvKZw" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div>
                  </div>
                  <div class="carousel-item">
                    <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY"><iframe src="https://www.youtube.com/embed/xf86EzuLXu0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div>
                  </div>
                  <div class="carousel-item">
                    <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="bTqVqk7FSmY"><iframe src="https://www.youtube.com/embed/YkEd_aorIiI" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-3 col-xxl-2 pt-3 pt-md-0">
                <div class="carousel-indicators">
                  <div class="row h-100 w-100">
                    <div class="col-12 px-1"><button class="active" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"><img class="d-block" src="assets/img/gallery/maldives-v.png" alt="..." /></button></div>
                    <div class="col-12 px-1"><button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"><img class="d-block" src="assets/img/gallery/tanzania.png" alt="..." /></button></div>
                    <div class="col-12 px-1"> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"><img class="d-block" src="assets/img/gallery/kathmandu-v.png" alt="..." /></button></div>
                    <div class="col-12 px-1"> <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"><img class="d-block" src="assets/img/gallery/chaina.png" alt="..." /></button></div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3 px-xxl-0">
                <div class="row">
                  <div class="col-12 col-md-11 col-lg-12 col-xl-10 col-xxl-7 px-xxl-0 ps-lg-0 ps-md-4">
                    <div class="card h-100 py-md-2 active" style="min-height:113px">
                      <div class="card-body d-flex flex-column justify-content-center">
                        <p class="mb-0 fw-semi-bold text-dark"> When go to maldives</p>
                        <p class="card-text"><small class="text-800">0.20</small></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-11 col-lg-12 col-xl-10 col-xxl-7 px-xxl-0 ps-lg-0 ps-md-4">
                    <div class="card h-100 py-md-2" style="min-height:113px">
                      <div class="card-body d-flex flex-column justify-content-center">
                        <p class="mb-0 fw-semi-bold text-500">Tanzania’s deadly pink lake</p>
                        <p class="card-text"><small class="text-800">05.24</small></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-11 col-lg-12 col-xl-10 col-xxl-7 px-xxl-0 ps-lg-0 ps-md-4">
                    <div class="card h-100 py-md-2" style="min-height:113px">
                      <div class="card-body d-flex flex-column justify-content-center">
                        <p class="mb-0 fw-semi-bold text-500"> Top things to do in Kathmandu</p>
                        <p class="card-text"><small class="text-800">06.12</small></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-11 col-lg-12 col-xl-10 col-xxl-7 px-xxl-0 ps-lg-0 ps-md-4">
                    <div class="card h-100 py-md-3" style="min-height:113px">
                      <div class="card-body d-flex flex-column justify-content-center">
                        <p class="mb-0 fw-semi-bold text-500"> Exploring China’s creative capital</p>
                        <p class="card-text"><small class="text-800">0.20 </small></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- end of .container-->
  </section><!-- <section> close ============================-->
  <!-- ============================================-->



  <!-- ============================================-->
  <!-- <section> begin ============================-->
  <section class="pt-5">
    <div class="container">
      <div class="row flex-center mb-5">
        <div class="col-lg-8 text-center">
          <h1 class="fw-bold fs-md-3 fs-lg-4 fs-xl-5">Travel categories</h1>
          <hr class="mx-auto text-primary my-4" style="height:3px; width:70px;" />
          <p class="mx-auto">Maecenas et eros non quam ultricies interdum. Proin ac dolor vel neque ullamcorper blandit vitae et felis. Morbi ante urna, imperdiet vel neque vitae, porta ullamcorper metus. Quisque bibendum venenatis eros sed commodo. Nullam ultrices tortor non diam ullamcorper auctor. In urna tellus, auctor sit amet est ut, scelerisque volutpat diam.</p>
        </div>
      </div>
      <div class="row h-100 flex-center">
        <div class="row flex-lg-center">
          <div class="col-md-12">
            <div class="carousel slide" id="carouselCategory" data-bs-touch="false" data-bs-interval="false">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <div class="row h-100">
                    <div class="col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2">
                      <div class="card h-100 w-100 text-white"><a class="stretched-link" href="!#"><img class="img-fluid" src="assets/img/gallery/food.png" alt="" /></a>
                        <div class="card-img-overlay d-flex align-items-end bg-dark-gradient">
                          <h5 class="text-white fs--1">Food</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2">
                      <div class="card h-100 w-100 text-white"><a class="stretched-link" href="!#"><img class="img-fluid" src="assets/img/gallery/backpacking.png" alt="" /></a>
                        <div class="card-img-overlay d-flex align-items-end bg-dark-gradient">
                          <h5 class="text-white fs--1">Backpacking</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2">
                      <div class="card h-100 w-100 text-white"><a class="stretched-link" href="!#"><img class="img-fluid" src="assets/img/gallery/beaches.png" alt="" /></a>
                        <div class="card-img-overlay d-flex align-items-end bg-dark-gradient">
                          <h5 class="text-white fs--1">Beaches,coast and island</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2">
                      <div class="card h-100 w-100 text-white"><a class="stretched-link" href="!#"><img class="img-fluid" src="assets/img/gallery/art-culture.png" alt="" /></a>
                        <div class="card-img-overlay d-flex align-items-end bg-dark-gradient">
                          <h5 class="text-white fs--1">Art and culture</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2">
                      <div class="card h-100 w-100 text-white"><a class="stretched-link" href="!#"><img class="img-fluid" src="assets/img/gallery/wild.png" alt="" /></a>
                        <div class="card-img-overlay d-flex align-items-end bg-dark-gradient">
                          <h5 class="text-white fs--1">Wildlife and nature</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2">
                      <div class="card h-100 w-100 text-white"><a class="stretched-link" href="!#"><img class="img-fluid" src="assets/img/gallery/hill.jpg" alt="" /></a>
                        <div class="card-img-overlay d-flex align-items-end bg-dark-gradient">
                          <h5 class="text-white fs--1">Hill and nature</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <div class="row h-100">
                    <div class="col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2">
                      <div class="card h-100 w-100 text-white"><a class="stretched-link" href="!#"><img class="img-fluid" src="assets/img/gallery/food.png" alt="" /></a>
                        <div class="card-img-overlay d-flex align-items-end bg-dark-gradient">
                          <h5 class="text-white fs--1">Food</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2">
                      <div class="card h-100 w-100 text-white"><a class="stretched-link" href="!#"><img class="img-fluid" src="assets/img/gallery/backpacking.png" alt="" /></a>
                        <div class="card-img-overlay d-flex align-items-end bg-dark-gradient">
                          <h5 class="text-white fs--1">Backpacking</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2">
                      <div class="card h-100 w-100 text-white"><a class="stretched-link" href="!#"><img class="img-fluid" src="assets/img/gallery/beaches.png" alt="" /></a>
                        <div class="card-img-overlay d-flex align-items-end bg-dark-gradient">
                          <h5 class="text-white fs--1">Beaches,coast and island</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2">
                      <div class="card h-100 w-100 text-white"><a class="stretched-link" href="!#"><img class="img-fluid" src="assets/img/gallery/art-culture.png" alt="" /></a>
                        <div class="card-img-overlay d-flex align-items-end bg-dark-gradient">
                          <h5 class="text-white fs--1">Art and culture</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2">
                      <div class="card h-100 w-100 text-white"><a class="stretched-link" href="!#"><img class="img-fluid" src="assets/img/gallery/wild.png" alt="" /></a>
                        <div class="card-img-overlay d-flex align-items-end bg-dark-gradient">
                          <h5 class="text-white fs--1">Wildlife and nature</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2">
                      <div class="card h-100 w-100 text-white"><a class="stretched-link" href="!#"><img class="img-fluid" src="assets/img/gallery/hill.jpg" alt="" /></a>
                        <div class="card-img-overlay d-flex align-items-end bg-dark-gradient">
                          <h5 class="text-white fs--1">Hill and nature</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row h-100 offset-lg-2">
                    <div class="col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2">
                      <div class="card h-100 w-100 text-white"><a class="stretched-link" href="!#"><img class="img-fluid" src="assets/img/gallery/food.png" alt="" /></a>
                        <div class="card-img-overlay d-flex align-items-end bg-dark-gradient">
                          <h5 class="text-white fs--1">Food</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2">
                      <div class="card h-100 w-100 text-white"><a class="stretched-link" href="!#"><img class="img-fluid" src="assets/img/gallery/backpacking.png" alt="" /></a>
                        <div class="card-img-overlay d-flex align-items-end bg-dark-gradient">
                          <h5 class="text-white fs--1">Backpacking</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2">
                      <div class="card h-100 w-100 text-white"><a class="stretched-link" href="!#"><img class="img-fluid" src="assets/img/gallery/beaches.png" alt="" /></a>
                        <div class="card-img-overlay d-flex align-items-end bg-dark-gradient">
                          <h5 class="text-white fs--1">Beaches,coast and island</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2">
                      <div class="card h-100 w-100 text-white"><a class="stretched-link" href="!#"><img class="img-fluid" src="assets/img/gallery/art-culture.png" alt="" /></a>
                        <div class="card-img-overlay d-flex align-items-end bg-dark-gradient">
                          <h5 class="text-white fs--1">Art and culture</h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-6 col-sm-4 col-xl-2 mb-3 hover-top px-2">
                      <div class="card h-100 w-100 text-white"><a class="stretched-link" href="!#"><img class="img-fluid" src="assets/img/gallery/wild.png" alt="" /></a>
                        <div class="card-img-overlay d-flex align-items-end bg-dark-gradient">
                          <h5 class="text-white fs--1">Wildlife and nature</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-12 position-relative"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselCategory" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselCategory" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- end of .container-->
  </section><!-- <section> close ============================-->
  <!-- ============================================-->



  <!-- ============================================-->
  <!-- <section> begin ============================-->
  <section class="pt-5">
    <div class="container">
      <div class="row flex-center mb-5">
        <div class="col-lg-8 text-center">
          <h1 class="fw-bold fs-md-3 fs-lg-4 fs-xl-5">Traveller's Experiences</h1>
          <hr class="mx-auto text-primary my-4" style="height:3px; width:70px;" />
        </div>
        <div class="carousel slide" id="carouselExampleDark" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <div class="row h-100 flex-center">
                <div class="col-12 col-lg-7 mb-3 mb-md-0">
                  <div class="card h-100">
                    <div class="card-body d-flex flex-center flex-column">
                      <p class="text-center card-text mb-5">“Curabitur posuere ullamcorper pulvinar. Donec dignissim bibendum leo, at faucibus enim aliquam eu. Nullam quis pulvinar diam, ac elementum urna. Integer id vehicula tortor, nec pulvinar libero. Ut elit elit, fringilla a nisi ut, dapibus eleifend quam.” </p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/user-2.png" alt="" /></div>
                      </div>
                      <div class="mt-3 text-center">
                        <h6 class="text-1000 fw-bold">Donquixote Law</h6>
                        <p class="fs--1 fw-normal mb-0">Traveller</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <div class="row h-100 flex-center">
                <div class="col-12 col-lg-7 mb-3 mb-md-0">
                  <div class="card h-100">
                    <div class="card-body d-flex flex-center flex-column">
                      <p class="text-center card-text mb-5">“Curabitur posuere ullamcorper pulvinar. Donec dignissim bibendum leo, at faucibus enim aliquam eu. Nullam quis pulvinar diam, ac elementum urna. Integer id vehicula tortor, nec pulvinar libero. Ut elit elit, fringilla a nisi ut, dapibus eleifend quam.” </p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/user-1.png" alt="" /></div>
                      </div>
                      <div class="mt-3 text-center">
                        <h6 class="text-1000 fw-bold">Viezh Robert</h6>
                        <p class="fs--1 fw-normal mb-0">Traveller</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <div class="row h-100 flex-center">
                <div class="col-12 col-lg-7 mb-3 mb-md-0">
                  <div class="card h-100">
                    <div class="card-body d-flex flex-center flex-column">
                      <p class="text-center card-text mb-5">“Curabitur posuere ullamcorper pulvinar. Donec dignissim bibendum leo, at faucibus enim aliquam eu. Nullam quis pulvinar diam, ac elementum urna. Integer id vehicula tortor, nec pulvinar libero. Ut elit elit, fringilla a nisi ut, dapibus eleifend quam.” </p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/user-2.png" alt="" /></div>
                      </div>
                      <div class="mt-3 text-center">
                        <h6 class="text-1000 fw-bold">Donquixote Law</h6>
                        <p class="fs--1 fw-normal mb-0">Traveller</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row h-100 flex-center">
                <div class="col-12 col-lg-7 mb-3 mb-md-0">
                  <div class="card h-100">
                    <div class="card-body d-flex flex-center flex-column">
                      <p class="text-center card-text mb-5">“Curabitur posuere ullamcorper pulvinar. Donec dignissim bibendum leo, at faucibus enim aliquam eu. Nullam quis pulvinar diam, ac elementum urna. Integer id vehicula tortor, nec pulvinar libero. Ut elit elit, fringilla a nisi ut, dapibus eleifend quam.” </p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center"><img class="img-fluid" src="assets/img/gallery/user-1.png" alt="" /></div>
                      </div>
                      <div class="mt-3 text-center">
                        <h6 class="text-1000 fw-bold">Viezh Robert</h6>
                        <p class="fs--1 fw-normal mb-0">Traveller</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row px-3 px-md-0">
            <div class="col-12 position-relative d-flex flex-center">
              <ol class="carousel-indicators">
                <li class="active" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="3"></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div><!-- end of .container-->
  </section><!-- <section> close ============================-->
  <!-- ============================================-->

  <section id="booking">
    <div class="bg-holder" style="background-image:url(assets/img//gallery/booking.png);background-position:center;background-size:cover;"></div>
    <!--/.bg-holder-->
    <div class="container">
      <div class="row">
        <div class="col-12 py-8 text-white">
          <div class="d-flex flex-column flex-center">
            <h2 class="text-white fs-2 fs-md-3">WE WILL SEE YOU</h2>
            <h1 class="text-white fs-2 fs-sm-4 fs-lg-7 fw-bold">Enjoy 30% Off On First Trip</h1>
          </div>
          <form class="row gy-2 gx-md-2 gx-lg-4 flex-center my-6">
            <div class="col-6 col-md-3"><label class="visually-hidden" for="inlineFormSelectPref">Destinations</label><select class="form-select" id="inlineFormSelectPref">
                <option selected="">Destinations</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select></div>
            <div class="col-6 col-md-3"><label class="visually-hidden" for="autoSizingSelect">Package</label><select class="form-select" id="autoSizingSelect">
                <option selected="">Package</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select></div>
            <div class="col-6 col-md-3"><label class="visually-hidden" for="date">Date</label>
              <div class="input-group"> <input class="form-control" id="date" type="date" /></div>
            </div>
            <div class="col-6 col-md-auto"><button class="btn btn-lg btn-primary" type="submit">Book Now</button></div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection

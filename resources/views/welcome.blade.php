@extends('layouts.main')

@section('content')
  <section class="w3l-main-slider" id="home">
    <div class="banner-content">
      <div id="demo-1"
        data-zs-src='["assets/images/banner1.jpg", "assets/images/banner2.jpg","assets/images/banner3.jpg", "assets/images/banner4.jpg"]'
        data-zs-overlay="dots">
        <div class="demo-inner-content">
          <div class="container">
            <div class="banner-infhny">
              <h3>You don't need to go far to find what matters.</h3>
              <h6 class="mb-3">Discover your next adventure</h6>
              <div class="flex-wrap search-wthree-field mt-md-5 mt-4">
                <form action="#" method="post" class="booking-form">
                  <div class="row book-form">
                    <div class="form-input col-md-8 mt-md-0 mt-3">
                      <input type="text" name="" placeholder="Province you are Located in" required="">
                    </div>
                    <div class="bottom-btn col-md-4 mt-md-0 mt-3">
                      <button class="btn btn-style btn-secondary"><span class="fa fa-search mr-3"
                          aria-hidden="true"></span> Search</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /main-slider -->
  <!-- //banner-slider-->

  <!--/grids-->
  <section class="w3l-grids-3 py-5">
    <div class="container py-md-5">
      <div class="title-content text-left mb-lg-5 mb-4">
        <h6 class="sub-title">Visit</h6>
        <h3 class="hny-title">Popular Hotels</h3>
      </div>
      <div class="row bottom-ab-grids">
  <!--/row-grids-->
  @foreach($all as $hotel)
        <div class="col-lg-6 subject-card mt-lg-0 mt-4">
          <div class="subject-card-header p-4">
            <a href="/more/{{$hotel->id}}" class="card_title p-lg-4d-block">
              <div class="row align-items-center">
                <div class="col-sm-5 subject-img">
                  <img src="{{asset('storage/Hotels/'. $hotel->file)}}" class="img-fluid" alt="">
                </div>
                <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                  <h4>{{$hotel->name}}</h4>
                  <p>{{$hotel->province}}</p>
                  <div class="dst-btm">
                    <h6 class=""> Located in </h6>
                    <span>{{$hotel->district}}</span>
                  </div>
                  <p class="sub-para">{{$hotel->email}}</p>
                </div>
              </div>
            </a>
          </div>
          </div>
          @endforeach
          <!--//row-grids-->
      </div>
    </div>
  </section>
  <!--//grids-->
  <!--/w3l-bottom-->
  <section class="w3l-bottom py-5">
    <div class="container py-md-4 py-3 text-center">
      <div class="row my-lg-4 mt-4">
        <div class="col-lg-9 col-md-10 ml-auto">
          <div class="bottom-info ml-auto">
            <div class="header-section text-left">
              <h3 class="hny-title two">Resting and going out makes a man wiser, but less happy.</h3>
              <p class="mt-3 pr-lg-5">Hotelines helps you find best Hotels and restaurant for your meetings and more activies
                Enjoy Your Search <i>With Us!!!</i>
              </p>
              <a href="/register" class="btn btn-style btn-secondary mt-5">Get Started</a>
            </div>
           

          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
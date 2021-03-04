@extends('layouts.main')

@section('content')
  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container">
        <h2 class="title">{{$hotel->name}}</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="/">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> {{$hotel->name}} Rooms </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
 <!--  Work gallery section -->
 <section class="grids-1 py-5">
  <div class="grids py-lg-5 py-md-4">
      <div class="container">
          <h3 class="hny-title mb-5">Rooms / <a style="color:green" href="/moretables/{{ $hotel->id }}">Tables</a> </h3>
          <div class="row">
            @foreach($allrooms as $room)
            <div class="col-lg-4 col-md-4 col-6">
                  <div class="column">
                      <a href="blog-single.html"><img src="{{asset('storage/rooms/'. $room->file)}}" alt="" class="img-fluid"></a>
                      <div class="info">
                          <p><span>${{$room->price}} Per </span>Day & Night </p>
                          <div class="dst-btm">
                            <h6 class="">{{$room->type}}</h6>
                            <p>{{$room->description}}</p>
                            <span><a href="" class="btn btn-success">Book Now</a></span>
                          </div>
                      </div>
                  </div>
              </div>
              @endforeach
              
          </div>
      </div>
</div></section>
<!--  Work gallery section -->
@endsection
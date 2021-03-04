@extends('layouts.main')

@section('content')
  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container">
        <h2 class="title">{{$hotel->name}}</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="/more/{{$hotel->id}}">back</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span>   Restaurant Tables </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
 <!--  Work gallery section -->
 <section class="grids-1 py-5">
  <div class="grids py-lg-5 py-md-4">
      <div class="container">
          <h3 class="hny-title mb-5"><a style="color:green" href="/more/{{$hotel->id}}">Rooms </a>/ Tables </h3>
          <div class="row">
            @foreach($alltables as $table)
            <div class="col-lg-4 col-md-4 col-6">
                  <div class="column">
                      <a href="blog-single.html"><img src="{{asset('storage/Tables/'. $table->file)}}" alt="" class="img-fluid"></a>
                      <div class="info">
                          <p><span>${{$table->price}} Per </span>Table</p>
                          <div class="dst-btm">
                            <h6 class="">{{$table->name}} | <a href="" class="btn btn-success">Book Now</a></h6>
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
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Add More Rooms') }} </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 <form action="/addh" method="post" enctype="multipart/form-data">
    @csrf
    @foreach($hotels as $h)
    <input type="hidden" name="hotels_id" value="{{ $h->id }}">
    @endforeach
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Room type</label>
    <span style="color:red">@error('type') {{$message}} @enderror</span>
    <input type="text" class="form-control" value="" name="type" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <span style="color:red">@error('description') {{$message}} @enderror</span>
    <textarea class="form-control" name="description" id="" cols="20" rows="5"></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Attach Room Image</label>
    <span style="color:red">@error('file') {{$message}} @enderror</span>
    <input type="file" class="form-control" name="file" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Price in dorals($)</label>
    <span style="color:red">@error('price') {{$message}} @enderror</span>
    <input type="text" class="form-control" value="" name="price" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-success">Add Room</button>
  @foreach($hotels as $h)
  <a href="/HotelRooms/{{$h->id}}" class="btn btn-warning">Back</a>
  @endforeach
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

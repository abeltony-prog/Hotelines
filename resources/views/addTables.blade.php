@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Add More Tables') }} </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 <form action="/add" method="post" enctype="multipart/form-data">
    @csrf
    @foreach($tables as $t)
    <input type="hidden" name="hotels_id" value="{{ $t->id }}">
    @endforeach
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Table name</label>
    <span style="color:red">@error('name') {{$message}} @enderror</span>
    <input type="text" class="form-control" value="" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Attach table Image</label>
    <span style="color:red">@error('file') {{$message}} @enderror</span>
    <input type="file" class="form-control" name="file" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Price in Doralls($)</label>
    <span style="color:red">@error('price') {{$message}} @enderror</span>
    <input type="text" class="form-control" value="" name="price" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-success">Add Table</button>
  @foreach($tables as $t)
  <a href="/HotelRooms/{{$t->id}}" class="btn btn-warning">Go Back</a>
  @endforeach

</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

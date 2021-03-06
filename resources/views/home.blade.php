@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} | All My Hotels</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">Hotel Name</th>
      <th scope="col">email</th>
      <th scope="col">
        <a href="/dashboard" class="btn btn-success">Add Hotels</a>
      </th>
    </tr>
  </thead>
  <tbody>
  @foreach($allhotels as $hotel)
    <tr>
      <th>{{$hotel ->name}}</th>
      <td>{{$hotel ->email}}</td>
      <td>
      <a href="/HotelRooms/{{$hotel->id}}" class="btn btn-primary">Open</a>
      <a href="/bookingList/{{$hotel->id}}" class="btn btn-success">Bookings</a>
      <button class="btn btn-danger">Delete</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

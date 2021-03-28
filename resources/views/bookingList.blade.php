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
      <th scope="col">Room Name</th>
      <th scope="col">Number of rooms</th>
      <th scope="col">Arrival Date</th>
      <th scope="col">Leaving Date</th>
      <th scope="col">Phone Number</th>
    </tr>
  </thead>
  <tbody>
  @foreach($allbookings as $booking)
    <tr>
      @foreach($room as $r)
      <th>{{$r ->type}}</th>
      @endforeach
      <td>{{$booking ->nroom}}</td>
      <td>{{$booking ->adate}}</td>
      <td>{{$booking ->ldate}}</td>
      <td>{{$booking ->phone}}</td>
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

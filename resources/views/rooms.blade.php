@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Rooms') }} | <a href="/addRoom" class="btn btn-primary">Add</a> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      <div class="row">
                      @foreach($allrooms as $room)
                        <div class="col-sm-4">
                            <div class="card-body">
                            <img class="col-md-12" src="{{asset('storage/rooms/'. $room->file)}}" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-body">
                                <h5 class="card-title"><b>{{$room->type}} | {{ $room->price }}$ Single Night</b></h5>
                                <p class="card-text">{{$room->description}}</p>
                                <a href="#" class="btn btn-primary">edit</a>
                                <a href="#" class="btn btn-danger">delete</a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

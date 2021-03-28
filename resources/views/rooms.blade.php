@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Rooms') }} | <a href="/addRoom/{{$hotel->id}}" class="btn btn-primary">Add</a> </div>

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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>{{ __('Restaurant') }} Tables Reservation</b> | <a href="/addTables/{{$hotel->id}}" class="btn btn-primary">Add table</a> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                    @foreach($alltables as $table)
                        <div class="col-sm-3">
                            <div class="card-body">
                            <img class="col-md-12" src="{{asset('storage/Tables/'. $table->file)}}" alt="">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card-body">
                                <h5 class="card-title"><b>{{$table->name}}</b></h5>
                                <p style="color:blue" class="card-text">{{$table->price}}$ Single table</p>
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
@endsection

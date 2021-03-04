<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <div class="container">
    <main class="py-4">
            <h1 style="text-align:center">Enter Hotel Details</h1>
            <form method="post" action="/addHotel" enctype="multipart/form-data"> 
            @csrf
            <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
            <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hotel's Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ old('name') }}" aria-describedby="nameHelp">
                    <span style="color:red">@error('name') {{ $message }} @enderror</span>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Province Or City</label>
                    <input type="text" name="province" class="form-control" id="exampleInputEmail1" value="{{ old('province') }}" aria-describedby="cityHelp">
                    <span style="color:red">@error('province') {{ $message }} @enderror</span>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">District</label>
                    <input type="text" name="district" class="form-control" id="exampleInputEmail1" value="{{ old('district') }}" aria-describedby="districtHelp">
                    <span style="color:red">@error('district') {{ $message }} @enderror</span>

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ old('email') }}" aria-describedby="emailHelp">
                    <span style="color:red">@error('email') {{ $message }} @enderror</span>

                </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Telephone</label>
              <input type="text" name="telephone" class="form-control" value="{{ old('telephone') }}" id="exampleInputPassword1">
              <span style="color:red">@error('telephone') {{ $message }} @enderror</span>

            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Attach Profile</label>
              <input type="file" name="file" class="form-control" id="exampleInput">
              <span style="color:red">@error('file') {{ $message }} @enderror</span>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">allow all Terms and Conditions</label>
             </div>
             <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </main>
    </div>
    </div>
</body>
</html>

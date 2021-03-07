<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <title>{{$room->type}} | Hotelines</title>
</head>
<style>
    body {
    background: #dfd;
    min-height: 100vh;
    vertical-align: middle;
    display: flex
}

.card {
    margin: auto;
    width: 600px;
    padding: 3rem 3.5rem;
    box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}

.mt-50 {
    margin-top: 50px
}

.mb-50 {
    margin-bottom: 50px
}

@media(max-width:767px) {
    .card {
        width: 90%;
        padding: 1.5rem
    }
}

@media(height:1366px) {
    .card {
        width: 90%;
        padding: 8vh
    }
}

.card-title {
    font-weight: 700;
    font-size: 2.5em
}

.nav {
    display: flex
}

.nav ul {
    list-style-type: none;
    display: flex;
    padding-inline-start: unset;
    margin-bottom: 6vh
}

.nav li {
    padding: 1rem
}

.nav li a {
    color: black;
    text-decoration: none
}

.active {
    border-bottom: 2px solid black;
    font-weight: bold
}

input {
    border: none;
    outline: none;
    font-size: 1rem;
    font-weight: 600;
    color: #000;
    width: 100%;
    min-width: unset;
    background-color: transparent;
    border-color: transparent;
    margin: 0
}

form a {
    color: grey;
    text-decoration: none;
    font-size: 0.87rem;
    font-weight: bold
}

form a:hover {
    color: grey;
    text-decoration: none
}

form .row {
    margin: 0;
    overflow: hidden
}

form .row-1 {
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 0.5rem;
    outline: none;
    width: 100%;
    min-width: unset;
    border-radius: 5px;
    background-color: rgba(221, 228, 236, 0.301);
    border-color: rgba(221, 228, 236, 0.459);
    margin: 2vh 0;
    overflow: hidden
}

form .row-2 {
    border: none;
    outline: none;
    background-color: transparent;
    margin: 0;
    padding: 0 0.8rem
}

form .row .row-2 {
    border: none;
    outline: none;
    background-color: transparent;
    margin: 0;
    padding: 0 0.8rem
}

form .row .col-2,
.col-7,
.col-3 {
    display: flex;
    align-items: center;
    text-align: center;
    padding: 0 1vh
}

form .row .col-2 {
    padding-right: 0
}

#card-header {
    font-weight: bold;
    font-size: 0.9rem
}

#card-inner {
    font-size: 0.7rem;
    color: gray
}

.three .col-7 {
    padding-left: 0
}

.three {
    overflow: hidden;
    justify-content: space-between
}

.three .col-2 {
    border: 1px solid rgba(0, 0, 0, 0.137);
    padding: 0.5rem;
    outline: none;
    width: 100%;
    min-width: unset;
    border-radius: 5px;
    background-color: rgba(221, 228, 236, 0.301);
    border-color: rgba(221, 228, 236, 0.459);
    margin: 2vh 0;
    width: fit-content;
    overflow: hidden
}

.three .col-2 input {
    font-size: 0.7rem;
    margin-left: 1vh
}

.btn {
    width: 100%;
    background-color: rgb(65, 202, 127);
    border-color: rgb(65, 202, 127);
    color: white;
    justify-content: center;
    padding: 2vh 0;
    margin-top: 3vh
}

.btn:focus {
    box-shadow: none;
    outline: none;
    box-shadow: none;
    color: white;
    -webkit-box-shadow: none;
    -webkit-user-select: none;
    transition: none
}

.btn:hover {
    color: white
}

input:focus::-webkit-input-placeholder {
    color: transparent
}

input:focus:-moz-placeholder {
    color: transparent
}

input:focus::-moz-placeholder {
    color: transparent
}

input:focus:-ms-input-placeholder {
    color: transparent
}
.btn-hotel{
    text-decoration:none;
    color:black;
}
</style>
<body>
<div class="card mt-50 mb-50">
    <div class="card-title mx-auto"> <a href="/" class="btn-hotel">Hotelines</a> </div>
    <div class="nav">
        <ul class="mx-auto">
            <li class="active">Payment</li>
        </ul>
    </div>
    <form action="/book" method="post">
    @csrf
    <input type="hidden" name="hotels_id" value="{{$room->hotels_id}}">
    <input type="hidden" name="rooms_id" value="{{$room->id}}">
        <span id="card-header">Number of rooms</span>
        <div class="row row-1">
            <div class="col-7"> <input type="text" name="nroom" placeholder="Enter number of rooms you want"> </div>
            <span style="color:red">@error('nroom') {{ $message }} @enderror</span>
        </div>
        <span id="card-header">Date of arrival</span>
        <div class="row row-1">
            <div class="col-7"> <input type="date" name="adate" placeholder="date of arrival"> </div>
            <span style="color:red">@error('adate') {{ $message }} @enderror</span>

        </div>
        <span id="card-header">Date of leaving</span>
        <div class="row row-1">
            <div class="col-7"> <input type="date" name="ldate" placeholder="date of leaving"> </div>
            <span style="color:red">@error('ldate') {{ $message }} @enderror</span>
        </div> 

        <span id="card-header">Add payment card:</span>
        <div class="row-1">
            <div class="row row-2"> <span id="card-inner">Card holder name</span> </div>
            <div class="row row-2"> <input type="text" name="name" placeholder="Bojan Viner"> </div>
        </div>            <span style="color:red">@error('name') {{ $message }} @enderror</span>

        <div class="row three">
            <div class="col-7">
                <div class="row-1">
                    <div class="row row-2"> <span id="card-inner">Card number</span> </div>
                    <div class="row row-2"> <input type="text" name="card" placeholder="5134-5264-4"> </div>
                </div>
                <span style="color:red">@error('card') {{ $message }} @enderror</span>

            </div>
            <div class="col-2"> <input type="text" name="expdate" placeholder="Exp. date"> </div>
            <span style="color:red">@error('expdate') {{ $message }} @enderror</span>

            <div class="col-2"> <input type="text" name="phone" placeholder="Telephone"> </div>
            <span style="color:red">@error('phone') {{ $message }} @enderror</span>

        </div> <button class="btn d-flex mx-auto"><b>Book Now</b></button>
    </form>
</div>
<!--  Work gallery section -->

</body>
</html>
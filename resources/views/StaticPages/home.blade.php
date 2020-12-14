@extends('shared.layout')
@section('main-content')
    <div class="homepage">
        <div class= "card-container">
            <div class="card"></div>
            <div class="tall card">
                 <a href="{{ url('/restaurant') }}">
                    <img class=""src="{{asset('img/restaurant.jpg')}}" alt="">
                 </a>
            </div>
            <div class="tall card">
            <a href="{{ url('/restaurant') }}">
                    <img class=""src="{{asset('img/bar.png')}}" alt="">
                 </a>
            </div>
            <div class="card last"></div>
        </div>
    </div>
@endsection
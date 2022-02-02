@extends('layouts.base')

@section('pageTitle')
    Comics Laravel
@endsection

@section('pageContent')
    <div class="hero">
        <img src="{{asset('img/jumbotron.jpg')}}" alt="jumbotron">
    </div>

    <div class="container">
        
        <div class="cards">
            @foreach ($comics as $comic)
            <div class="card">
                <a href="#">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <h3>{{$comic['series']}}</h3>
                </a>
            </div>  
        @endforeach
        </div>
        <div class="center">
            <button>
                load more
            </button>
        </div>
       
    </div>
    <div class="links">
        <div class="container">
                <ul>
                    <li><img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="icon comics-digital-comics"><a href="#"> Digital comics</a></li>
                    <li><img src="{{asset('img/buy-comics-merchandise.png')}}" alt="icon comics-merchandise"><a href="#">DC Merchandise</a></li>
                    <li><img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="icon comics-subscriptions"><a href="#">Subscription</a></li>
                    <li><img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="icon comics-shop-locator"><a href="#">Comic shop Locator</a></li>
                    <li><img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="icon dc-power-visa"><a href="#">CD Power Visa</a></li>
                </ul>

        </div>
    </div>
@endsection
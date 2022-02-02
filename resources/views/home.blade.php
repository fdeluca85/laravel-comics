@extends('layouts.base')

@section('pageTitle')
    Comics Laravel
@endsection

@section('pageContent')
<div class="hero">
    <img src="{{asset('img/jumbotron.jpg')}}" alt="">
</div>

    <div class="container">
        
        <div class="cards">
            @foreach ($comics as $comic)
            <div class="card">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                <h3>{{$comic['series']}}</h3>
            </div>  
        @endforeach
        </div>
       
    </div>
@endsection
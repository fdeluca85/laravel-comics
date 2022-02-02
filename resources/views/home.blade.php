@extends('layouts.base')

@section('pageTitle')
    Comics Laravel
@endsection

@section('pageContent')
    <div class="container">
        
        @foreach ($comics as $comic)
            <div class="card">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                <h3>{{$comic['title']}}</h3>
            </div>  
        @endforeach
       
    </div>
@endsection
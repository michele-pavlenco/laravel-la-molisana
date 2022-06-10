@extends('layouts.base')

@section('pageTitle')
La Molisana - Prodotti
@endsection

@section('mainContent')
<h1>Prodotti</h1>
@dump($paste)
<div class="container">
    <h2>Le lunghe</h2>
    <div class="row">
        @foreach ($lunghe as $pasta)
            <div class="col">
                <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                <h2>{{$pasta['titolo']}}</h2>
            </div>
        @endforeach
    </div>
<h2>Le corte</h2>
    <div class="row">
        @foreach ($corte as $pasta)
            <div class="col">
                <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                <h2>{{$pasta['titolo']}}</h2>
            </div>
        @endforeach
    </div>
<h2>LE cortissime</h2>
    <div class="row">
        @foreach ($cortissime as $pasta)
            <div class="col">
                <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                <h2>{{$pasta['titolo']}}</h2>
            </div>
        @endforeach
    </div>
</div>

@endsection

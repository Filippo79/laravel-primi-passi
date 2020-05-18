@php
    $card = config('products');
    $prodotto = $card[$id];
@endphp
@extends('layout.user')
@section('titolo')
    Prodotto
@endsection
@section('main')
    <div class="container-prodotto">
        <h3>{{$prodotto['titolo']}}</h3>
        <img src="{{$prodotto['src-h']}}" alt="{{$prodotto['titolo']}}">
        <img src="{{$prodotto['src-p']}}" alt="">
        <div class="testo">
            {!!$prodotto['descrizione']!!}
        </div>

    </div>
@endsection

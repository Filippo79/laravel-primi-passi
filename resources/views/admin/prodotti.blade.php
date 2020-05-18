@php
    $cards = config('products');
@endphp
@extends('layout.admin')
@section('titolo')
    Prodotti
@endsection
@section('main')
    <table>
        <thead>
            <tr>
                <th>NOME</th>
                <th>DESCRIZIONE</th>
                <th>TIPO</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cards as  $prodotti)
                <tr>
                    <th>{{$prodotti['titolo']}}</th>
                    <th>{!!$prodotti['descrizione']!!}</th>
                    <th>{{$prodotti['tipo']}}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

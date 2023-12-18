@extends('layouts.main')      

@section('title','HDC Events')

@section('content')

<h1>Produtos</h1>
<a href="/">Link para home</a>


@if($busca != '')
    <p>O usuario esta buscando por {{ $busca }}</p>
@endif 


@endsection
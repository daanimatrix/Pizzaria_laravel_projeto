@extends('layouts.main')      

@section('title','Produto')

@section('content')

<h1>Produtos</h1>
<p>Exibindo produto {{ $id }}</p>
<a href="/">Link para home</a>

@if($id != null)
    <p>Exibindo produto id: {{$id}}</p>
@endif

@endsection
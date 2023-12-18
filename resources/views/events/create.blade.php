@extends('layouts.main')      

@section('title','Criar evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie a sua pizza</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem da Pizza:</label>
            <input type="file" class="form-control-file" id="image" name="image" placeholder="Nome do Pizza">
        </div>
        <div class="form-group">
            <label for="title">Nome</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>
        <!-- <div class="form-group">
            <label for="date">Data do evento:</label>
            <input type="date" class="form-control" id="date" name="date" >
        </div> -->
        <div class="form-group">
            <label for="city">Filial:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
        </div>
        <div class="form-group">
            <label for="private">Estara na promoção ?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="price">Preço:</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Preço da Pizza">
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento ?"></textarea>    
        </div>
        <div class="form-group">
            <label for="title">Adicione itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Azeitona">Azeitona
            </div>   
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Queijo">Queijo
            </div>  
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Tomate">Tomate
            </div> 
            <div class="form-group">
                <input type="checkbox" name="items[]" value="manjericão">manjericão
            </div> 
            <div class="form-group">
                <input type="checkbox" name="items[]" value="oregano">oregano
            </div> 
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Pizza">

    </form>
</div>

@endsection

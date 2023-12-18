@extends('layouts.main')

@section('title', 'Contato')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="mb-4">
                <h2>Pizzaria Delícia Suprema</h2>
                <p><strong>Endereço:</strong> Rua das Pizzas, 123</p>
                <p><strong>Cidade:</strong> Saborville</p>
                <p><strong>Telefone:</strong> (555) 123-4567</p>
                <p><strong>Email:</strong> contato@deliciasuprema.com</p>
            </div>

            <h2 class="mb-4">Entre em Contato Conosco</h2>

            <form>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" placeholder="Seu Nome">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Seu Email">
                </div>
                <div class="mb-3">
                    <label for="mensagem" class="form-label">Mensagem:</label>
                    <textarea class="form-control" id="mensagem" rows="5" placeholder="Sua Mensagem"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
            </form>
        </div>
    </div>
</div>
@endsection

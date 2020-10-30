@extends('layout.app')

@section('title', 'Pets')

@section('content')
    <div class="container">
        <h1 class="text-center my-4">Todos os pets estão te esperando</h1>
        <a class="btn btn-outline-secondary mb-4 mr-2" href="/"><i class="fa fa-chevron-left"></i> Voltar</a>
        <a class="btn btn-outline-success mb-4" href="/pets/create"><i class="fa fa-plus"></i> Cadastrar</a>
        <div class="d-flex">
            <div class="row">
                @foreach ($pets as $pet)
                    <div class="col-md-4 mb-4">
                        <div class="card my-md-4 mr-md-4">
                            <div class="card-body">
                                <h5 class="card-title">{{ $pet->raca }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{$pet->especie->especie}}</h6>
                                <p class="card-text">{{ $pet->descricao }}</p>
                                <a class="btn btn-outline-secondary" href="/pets/{{$pet->id}}">Mais detalhes</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
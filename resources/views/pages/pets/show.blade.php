@extends('layout.app')

@section('title', $pet->raca)

@section('content')
<div class="container">
    <h1 class="text-center my-4">Detalhes do Pet {{ $pet->raca }}</h1>
    <a class="btn btn-outline-secondary" href="/pets"><i class="fa fa-chevron-left"></i> Voltar</a>
    <div class="card my-3">
        <div class="card-body">
            {{-- <label for="">Espécie</label>
            <input type="text" class="form-control" value="{{ $pet->especie->especie }}" readonly>

            <label for="">Raça</label>
            <input type="text" class="form-control" value="{{ $pet->raca }}" readonly>

            <label for="">Situação</label>
            <input type="text" class="form-control" value="{{ $pet->situacao->situacao }}" readonly>

            <label for="">Porte</label>
            <input type="text" class="form-control" value="{{ $pet->porte->porte }}" readonly>

            <label for="">Sexo</label>
            <input type="text" class="form-control" value="{{ $pet->sexo }}" readonly>

            <label for="">Descrição</label>
            <textarea type="text" class="form-control" readonly>{{ $pet->descricao }}</textarea>

            <label for="">Cadastrante</label>
            <input type="text" class="form-control" value="{{ $pet->contato->nome }}" readonly>

            <label for="">Whatsapp</label>
            <input type="text" class="form-control" value="{{ $pet->contato->whatsapp }}" readonly> --}}
            
            <div class="border-bottom p-2 mb-2 rounded">
                <p><b>Espécie: </b> {{ $pet->especie->especie }}</p>
            </div>
            <div class="border-bottom p-2 mb-2 rounded">
                <p><b>Raça: </b> {{ $pet->raca }}</p>
            </div>
            <div class="border-bottom p-2 mb-2 rounded">
                <p><b>Situação: </b> {{ $pet->situacao->situacao }}</p>
            </div>
            <div class="border-bottom p-2 mb-2 rounded">
                <p><b>Porte: </b> {{ $pet->porte->porte }}</p>
            </div>
            <div class="border-bottom p-2 mb-2 rounded">
                <p><b>Sexo: </b> 
                    @if ($pet->sexo == 'M')
                        Macho
                    @else
                        Fêmea
                    @endif
                </p>
            </div>
            <div class="border-bottom p-2 mb-2 rounded">
                <p><b>Descrição: </b> {{ $pet->descricao }}</p>
            </div>
            <div class="border-bottom p-2 mb-2 rounded">
                <p><b>Cadastrante: </b> {{ $pet->contato->nome }}</p>
            </div>
            <div class="p-2 mb-2 rounded">
                <p><b>Whatsapp: </b> {{ $pet->contato->whatsapp }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
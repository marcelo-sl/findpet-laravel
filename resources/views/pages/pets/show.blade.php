@extends('layout.app')

@section('title', $pet->raca)

@section('content')
<div class="container">
    <h1 class="text-center my-4">Detalhes do Pet {{ $pet->raca }}</h1>
    <a class="btn btn-outline-secondary" href="/pets"><i class="fa fa-chevron-left"></i> Voltar</a>
    <div class="card my-3 mb-3">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="{{url('storage/' . $pet->imagem)}}" class="card-img" alt="{{$pet->raca}}">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h2 class="card-title">{{$pet->especie->especie}}</h2>
              <h6 class="card-subtitle mb-2">{{$pet->raca}}</h6>
              <p class="card-text">{{$pet->descricao}}</p>
              <p class="card-text">
                @switch($pet->situacao->situacao)
                    @case('Perdido')
                        <span class="badge badge-danger">{{$pet->situacao->situacao}}</span>
                        @break
                    @case('Encontrado')
                        <span class="badge badge-success">{{$pet->situacao->situacao}}</span>
                        @break
                    @default
                        <span class="badge badge-info">{{$pet->situacao->situacao}}</span>
                @endswitch
              </p>
            </div>
          </div>
        </div>
    </div>
    <ul class="list-group mb-3">
        <li class="list-group-item"><p><b>Porte: </b> {{ $pet->porte->porte }}</p></li>
        <li class="list-group-item">
            @if ($pet->sexo == 'M')
                <p><b>Sexo: </b>Macho</p>
            @else
                <p><b>Sexo: </b>Fêmea</p>
            @endif
        </li>
        <li class="list-group-item"><p><b>Cadastrante: </b> {{ $pet->contato->nome }}</p></li>
        <li class="list-group-item"><p><b>Whatsapp: </b> {{ $pet->contato->whatsapp }}</p></li>
      </ul>
</div>
@endsection
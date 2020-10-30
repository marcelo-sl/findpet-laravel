@extends('layout.app')

@section('title', 'Cadastro de Pet')

@section('content')
    <div class="container">
      <form style="width:70%;margin:20px auto;" method="POST" action="/pets">
        @csrf
        <h1 class="text-center my-4">Cadastre seu Pet</h1>
        <div class="row">
            <div class="form-group col">
                <label for="especie">Espécie</label>
                <select class="form-control" id="especie" name="especie" required>
                  <option value="" disabled selected>Escolha uma espécie</option>
                  @foreach ($especies as $especie)
                    <option value="{{ $especie->id }}"> {{ $especie->especie }} </option>
                  @endforeach
                  
                </select>
              </div>
            <div class="form-group col">
                <label for="raca">Raça</label>
                <input type="text"  class="form-control" id="raca" name="raca" placeholder="Digite a raça" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col">
                <label for="situacao">Situação</label>
                <select class="form-control" id="situacao" name="situacao" required>
                  <option value="" disabled selected>Escolha uma situação</option>
                  @foreach ($situacoes as $situacao)
                    <option value="{{$situacao->id}}">{{$situacao->situacao}}</option>
                  @endforeach
                  
                </select>
              </div>
            <div class="form-group col">
                <label for="porte">Porte</label>
                <select class="form-control" id="porte" name="porte" required>
                  <option value="" disabled selected>Escolha um porte</option>
                  @foreach ($portes as $porte)
                    <option value="{{$porte->id}}">{{$porte->porte}}</option>
                  @endforeach
                  
                </select>
              </div>
        </div>
        <div class="form-group">
            <label for="sexo">Sexo</label>
            <select class="form-control" id="sexo" name="sexo" required>
              <option value="" disabled selected>Informe o sexo do Pet</option>
              <option value="M">Macho</option>
              <option value="F">Fêmea</option>
            </select>
        </div>
        <div class="form-group">
            <label for="cadastrante">Nome cadastrante</label>
            <input type="text"  class="form-control" id="cadastrante" name="nome" placeholder="Nome do cadastrante" required>
        </div>
        <div class="form-group">
            <label for="whatsapp">Whatsapp</label>
            <input type="text"  class="form-control" id="whatsapp" name="whatsapp" placeholder="Número whatsapp" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
          </div>

          <a href="/pets" class="btn btn-secondary mr-2"><i class="fa fa-chevron-left"></i> Voltar</a>
          <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Cadastrar</button>
        </form>
    </div>
@endsection
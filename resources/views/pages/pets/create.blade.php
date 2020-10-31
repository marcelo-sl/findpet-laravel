@extends('layout.app')

@section('title', 'Cadastro de Pet')

@section('content')
    <div class="container">
      <form style="width:70%;margin:20px auto;" method="POST" action="/pets" enctype="multipart/form-data">
        @csrf
        <h1 class="text-center my-4">Cadastre seu Pet</h1>
        @if (isset($erros))
            <div class="alert alert-{{$erros['tipo']}} alert-dismissible fade show" role="alert">
              <strong>Calma lá!</strong> {{$erros['msg']}}.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        @endif
        <div class="row">
            <div class="form-group col">
                <label for="especie">Espécie</label>
                <select class="form-control" id="especie" name="especie" required>
                  <option value="" disabled selected>Escolha uma espécie</option>
                  @foreach ($especies as $especie)
                    <option @if(old('especie') == $especie->id) selected @endif value="{{ $especie->id }}"> {{ $especie->especie }} </option>
                  @endforeach
                  
                </select>
              </div>
            <div class="form-group col">
                <label for="raca">Raça</label>
                <input type="text"  class="form-control" id="raca" name="raca" value="{{old('raca')}}" placeholder="Digite a raça" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col">
                <label for="situacao">Situação</label>
                <select class="form-control" id="situacao" name="situacao" required>
                  <option value="" disabled selected>Escolha uma situação</option>
                  @foreach ($situacoes as $situacao)
                    <option @if(old('situacao') == $situacao->id) selected @endif value="{{$situacao->id}}">{{$situacao->situacao}}</option>
                  @endforeach
                  
                </select>
              </div>
            <div class="form-group col">
                <label for="porte">Porte</label>
                <select class="form-control" id="porte" name="porte" required>
                  <option value="" disabled selected>Escolha um porte</option>
                  @foreach ($portes as $porte)
                    <option @if(old('porte') == $porte->id) selected @endif value="{{$porte->id}}">{{$porte->porte}}</option>
                  @endforeach
                  
                </select>
              </div>
        </div>
        <div class="form-group">
            <label for="sexo">Sexo</label>
            <select class="form-control" id="sexo" name="sexo" required>
              <option value="" disabled selected>Informe o sexo do Pet</option>
              <option @if(old('sexo') == "M") selected @endif value="M">Macho</option>
              <option @if(old('especie') == "F") selected @endif value="F">Fêmea</option>
            </select>
        </div>
        <div class="form-group">
            <label for="cadastrante">Nome cadastrante</label>
            <input type="text"  class="form-control" id="cadastrante" name="nome" value="{{old('nome')}}" placeholder="Nome do cadastrante" required>
        </div>
        <div class="form-group">
            <label for="whatsapp">Whatsapp</label>
            <input type="text"  class="form-control" id="whatsapp" name="whatsapp" value="{{old('whatsapp')}}" placeholder="Número whatsapp" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3">{{old('descricao')}}</textarea>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
          </div>
          <div class="custom-file">
            <input type="file" name="imagem" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Escolha um arquivo</label>
          </div>
        </div>

          <a href="/pets" class="btn btn-outline-secondary mr-2"><i class="fa fa-chevron-left"></i> Voltar</a>
          <button type="submit" class="btn btn-outline-success"><i class="fa fa-plus"></i> Cadastrar</button>
        </form>
    </div>
@endsection
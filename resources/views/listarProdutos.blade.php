@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Listar Produtos</b></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
       
      

<a href="{{route('cadastrar.create')}}" class="btn btn-success btn btn-md">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"> Novo Produto </span> 
</a>

<br><br>
<table class="table table table-bordered table-hover table-sm table-md">
  <thead>
    <tr>
      <th scope="col" >Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Valor</th>
      <th scope="col">Qtd</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    
      @foreach($produtos as $produto)
      <th scope="row">{{$produto->id}}</th>
      <td>{{$produto->nome}}</td>
      <td>{{$produto->valor}}</td>
      <td>{{$produto->qtd}}</td>
      
      <td>
          <a href="{{route('cadastrar.edit',$produto->id)}}" class="btn btn-primary">
            <span class="glyphicon glyphicon-trash" aria-hidden="true">    Editar</span>
          </a>     
          <a href="{{route('cadastrar.show',$produto->id)}}" class="btn btn-danger">
           <span class="glyphicon glyphicon-pencil" aria-hidden="true">  Excluir</span>
          </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

                    

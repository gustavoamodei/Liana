@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-6 col-md-offset-3 "> 
            <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">Excluir</h3>
            </div>
            
                <div class="panel-body text-center">
                    <p><b>Id:</b>{{$dados->id}}</p>
                    <p><b>Nome:</b> {{$dados->nome}}</p>
                    <br>
                    <p><b>Valor:</b> {{$dados->valor}}</p>
                    <br>
                    <p><b>Descrição:</b> {{$dados->descricao}}</p>
                </div>
                <div class="panel-footer text-center">Deseja Excluir?
                <form action="{{route('cadastrar.destroy',$dados->id)}}" method="POST">
            {!! method_field('DELETE')!!}
            {{ csrf_field() }}
            <br>
            <input type="submit" value="Excluir" class="  form-control btn btn-danger ">
            <br><br>
            <a href="{{route('cadastrar.index')}}"> <button type="button" class=" form-control btn btn-success">Voltar</button></a>
            </form>
                </div>
            </div>
            </div>
            
    </div>
    </div>
</div>
@endsection


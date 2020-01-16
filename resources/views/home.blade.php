@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ações</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class ="row text-center">  
                        <a href="{{route('cadastrar.create')}}"> <button type="button" class="btn btn-primary btn-lg">Cadastrar</button></a>
                        <!--<a href='cadastra'> <button type="button" class="btn btn-warning btn-lg">Vender</button></a>-->
                        <a href="{{route('cadastrar.index')}}"> <button type="button" class="btn btn-danger btn-lg">Listar Produtos</button></a>
                        <!--<a href='cadastra'> <button type="button" class="btn btn-dark btn-lg">Listar Vendas</button></a>-->
                    </div>                
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

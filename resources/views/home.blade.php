@extends('layouts.master')

@section('content')
	<style>
	</style>
	<div class="col-sm-6 col-sm-offset-3">
	    <div class="panel panel-default">
	    	<div class="panel-heading text-center">
	    		<strong>Dados do usuário</strong>
	    		<a href="" class="float-right"><i class="fa fa-pencil"></i></a>
	    	</div>
	    	<div class="panel-body">
	    		<ul class="list-group">
	    			@if (Auth::check()) 
						<li class="list-group-item"><strong class="col-sm-6 text-right">Nome:</strong> {{ Auth::user()->name }}</li>
						<li class="list-group-item"><strong class="col-sm-6 text-right">E-mail:</strong> {{ Auth::user()->email }}</li>
						<li class="list-group-item"><strong class="col-sm-6 text-right">Cadastro de Pessoa Fisica:</strong> {{ Auth::user()->cpf }}</li>
						<li class="list-group-item"><strong class="col-sm-6 text-right">Registro Geral:</strong> {{ Auth::user()->rg }}</li>
						<li class="list-group-item"><strong class="col-sm-6 text-right">Data de nascimento:</strong> {{ Auth::user()->birth }}</li>
						<li class="list-group-item"><strong class="col-sm-6 text-right">Gênero:</strong> {{ Auth::user()->sex }}</li>
						<li class="list-group-item"><strong class="col-sm-6 text-right">CEP:</strong> {{ Auth::user()->cep }}</li>
						<li class="list-group-item"><strong class="col-sm-6 text-right">Endereço:</strong> {{ Auth::user()->address }}</li>
						<li class="list-group-item"><strong class="col-sm-6 text-right">Bairro:</strong> {{ Auth::user()->neighbourhood }}</li>
						<li class="list-group-item"><strong class="col-sm-6 text-right">Cidade:</strong> {{ Auth::user()->city }}</li>
						<li class="list-group-item"><strong class="col-sm-6 text-right">Unidade Federativa:</strong> {{ Auth::user()->uf }}</li>
	    			@endif
	    		</ul>
	    	</div>
	    </div>
    </div>
@endsection
@extends('layouts.master')

@section('content')
	<div class="col-sm-6 col-sm-offset-3">
	    <div class="panel panel-default">
	    	<div class="panel-heading text-center">
	    		<strong>Dados do usuário</strong>
	    		<a href="/user" class="float-right"><i class="fa fa-eye"></i></a>
	    	</div>

	    	<div class="panel-body">
    			@if (Auth::check()) 
    			<form action="/user" method="POST">
    				{{ csrf_field() }}
    				{{ method_field('PATCH') }}
    				<input type="hidden" value="{{ Auth::user()->id }}" name="id">
	    			<ul class="list-group">
						<li class="list-group-item">
							<label for="name" class="col-sm-6 text-right">Nome:</label> 

							<input type="text" name="name" id="name" value="{{ Auth::user()->name }}" class="col-sm-6" required/>
						</li>

						<li class="list-group-item">
							<label for="email" class="col-sm-6 text-right">E-mail:</label> 

							<input type="email" name="email" id="email" value="{{ Auth::user()->email }}" class="col-sm-6" required/>
						</li>

						<li class="list-group-item">
							<label for="cpf" class="col-sm-6 text-right">Cadastro de Pessoa Fisica:</label> 

							<input type="text" name="cpf" id="cpf" value="{{ Auth::user()->cpf }}" class="col-sm-6" data-mask="000.000.000-00" data-mask-reverse="true" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required/>
						</li>

						<li class="list-group-item">
							<label for="rg" class="col-sm-6 text-right">Registro Geral:</label> 

							<input type="text" name="rg" id="rg" type="text" value="{{ Auth::user()->rg }}" class="col-sm-6" data-mask="00.000.000-A" data-mask-reverse="true" pattern="\d{2}\.\d{3}\.\d{3}-\w{1}" required/>
						</li>

						<li class="list-group-item">
							<label for="birth" class="col-sm-6 text-right">Data de nascimento:</label> 

							<input type="date" name="birth" id="birth" type="dates" value="{{ Auth::user()->birth }}" class="col-sm-6" required/>
						</li>

						<li class="list-group-item">
							<label for="sex" class="col-sm-6 text-right">Gênero:</label>

							<div class="select-editable col-sm-6">
							  <select onchange="this.nextElementSibling.value=this.value">
							    <option value=""></option>
							    <option value="Masculino">Masculino</option>
							    <option value="Feminino">Feminino</option>
							  </select>
							  <input type="text" name="sex" value="{{ Auth::user()->sex }}"/>
							</div>
						</li>
						
						<li class="list-group-item">
							<label for="cep" class="col-sm-6 text-right">CEP:</label>
							<input type="text" name="cep" id="cep" value="{{ Auth::user()->cep }}" class="col-sm-6"/ data-mask="00000-000" pattern="\d{5}-\d{3}" required> 
						</li>
						
						<li class="list-group-item">
							<label for="address" class="col-sm-6 text-right">Endereço:</label>
							<input type="text" name="address" id="address"  value="{{ Auth::user()->address }}" class="col-sm-6"required/>
						</li>

						<li class="list-group-item">
							<label for="neighbourhood" class="col-sm-6 text-right">Bairro:</label> 
							<input type="text" name="neighbourhood" id="neighbourhood" type="text" value="{{ Auth::user()->neighbourhood }}" class="col-sm-6" required/>
						</li>
						
						<li class="list-group-item">
							<label for="city" class="col-sm-6 text-right">Cidade:</label> 
							<input type="text" name="city" id="city" value="{{ Auth::user()->city }}" class="col-sm-6" required/>
						</li>
						
						<li class="list-group-item">
							<label for="uf" class="col-sm-6 text-right">Unidade Federativa:</label>
							<input type="text" name="uf" id="uf" value="{{ Auth::user()->uf }}" class="col-sm-6" required/>
						</li>

						<li class="list-group-item">
							<button type="submit" class="btn btn-primary float-right">Editar</button>
						</li>
	    			</ul>
    			</form>
    			@endif
	    	</div>
	    </div>
    </div>
@endsection
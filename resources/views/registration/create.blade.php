@extends ('layouts.master')

@section('content')
	<div class="col-sm-8 col-sm-offset-2">
		<h1>Registre-se</h1>

		<hr />

		<form class="" method="POST" action="/register">
	      {{ csrf_field() }}

	      <div class="form-group">
	        <label for="name">Nome:</label>
	        <input type="text" name="name" id="name" class="form-control" required>
	      </div>

	      <div class="form-group">
	        <label for="email">E-mail:</label>
	        <input type="email" name="email" id="email" class="form-control" required>
	      </div>

	      <div class="form-group">
	        <label for="cpf">CPF:</label>
	        <input type="text" name="cpf" id="cpf" class="form-control" data-mask="000.000.000-00" data-mask-reverse="true" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required>
	      </div>

	      <div class="form-group">
	        <label for="rg">RG:</label>
	        <input type="text" name="rg" id="rg" class="form-control" data-mask="00.000.000-A" data-mask-reverse="true" pattern="\d{2}\.\d{3}\.\d{3}-\w{1}" required>
	      </div>

	      <div class="form-group">
	        <label for="birth">Data de Nascimento:</label>
	        <input type="date" name="birth" id="birth" class="form-control" required>
	      </div>

	      <div class="form-group">
	        <label for="sex">Gênero:</label>
	        <div class="radio">
		        <label>
		        	<input type="radio" name="sex" id="sex" value="Masculino" required>
		        	Masculino
		        </label>
	        </div>
	        
	        <div class="radio">
		        <label>
		        	<input type="radio" name="sex" id="sex" value="Feminino" required>
		        	Feminino
		        </label>
	        </div>

	        <div class="radio">
		        <label>
		        	<input type="radio" name="sex" id="other_r" required>
		        	<input type="text" name="sex" id="other" class="form-control" disabled="true" required>
	        </div>
	      </div>

	      <div class="form-group">
	        <label for="cep">CEP:</label>
	        <input type="text" name="cep" id="cep" class="form-control" data-mask="00000-000" pattern="\d{5}-\d{3}" required>
	      </div>

	      <div class="form-group">
	        <label for="address">Logradouro:</label>
	        <input type="text" name="address" id="address" class="form-control" required>
	      </div>

	      <div class="form-group">
	        <label for="neighbourhood">Bairro:</label>
	        <input type="text" name="neighbourhood" id="neighbourhood" class="form-control" required>
	      </div>

	      <div class="form-group">
	        <label for="city">Cidade:</label>
	        <input type="text" name="city" id="city" class="form-control" required>
	      </div>

	      <div class="form-group">
	        <label for="uf">UF:</label>
	        <input type="text" name="uf" id="uf" class="form-control" maxlength="2" required>
	      </div>

	      <div class="form-group">
	        <label for="password">Senha:</label>
	        <input type="password" name="password" id="password" class="form-control" required>
	      </div>

	      <div class="form-group">
	        <label for="password_confirmation">Confirmação de Senha:</label>
	        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
	      </div>

	      <hr />

	      <div class="form-group">
	        <button type="submit" class="btn btn-primary">Registrar</button>
	      </div>

	      @include('layouts.errors')
	    </form>
	</div>
@endsection
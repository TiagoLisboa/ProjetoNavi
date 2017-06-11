@extends ('layouts.master')

@section('content')
	<div class="col-sm-8 col-sm-offset-2">
		<h1>Registre-se</h1>

		<hr />

		<form class="" action="/register" method="post">
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
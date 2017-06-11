@extends ('layouts.master')

@section('content')
	<div class="col-sm-8 col-sm-offset-2">
		<h1>Login</h1>

		<hr />

		<form class="" method="POST" action="/login">
	      {{ csrf_field() }}

	      @include('layouts.errors')

	      <div class="form-group">
	        <label for="email">E-mail:</label>
	        <input type="email" name="email" id="email" class="form-control" required>
	      </div>

	      <div class="form-group">
	        <label for="password">Senha:</label>
	        <input type="password" name="password" id="password" class="form-control" required>
	      </div>

	      <hr />

	      <div class="form-group">
	        <button type="submit" class="btn btn-primary">Login</button>
	        <a href="/register" class="f-r">Novo um usuário</a>
	      </div>
	    </form>
	</div>
@endsection
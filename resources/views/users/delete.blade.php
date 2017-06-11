@extends ("layouts.master")

@section ("content")
	<div class="card m-auto">
	  <div class="card-block">
	    <h4 class="card-title">Tem certeza que deseja apagar sua conta?</h4>
	    <p class="card-text">Se desejar continuar, todos os dados serão perdidos e não poderão ser recuperados.</p>
	    <form action="/user" method="POST">
	        {{ method_field('DELETE') }}
	        {{ csrf_field() }}
	        <input type="hidden" value="{{ Auth::user()->id }}" name="id">
	        <a href="/user/edit" class="btn btn-primary">Voltar</a>
	        <button class="btn btn-danger float-right">Deletar Usuário</button>
	    </form>
	  </div>
	</div>	
@endsection
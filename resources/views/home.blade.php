@extends("layouts.master")

@section("content")
	<div class="col-sm-8 col-sm-offset-2">
		<h1>Bem vindo, {{ Auth::user()->name }}!</h1>
	</div>
@endsection
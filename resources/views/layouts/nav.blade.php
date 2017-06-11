<header class="main-header container">
	<nav class="row">
		<div class="col-sm-12">
			@if (Auth::check())
				<ul class="nav nav-tabs float-right">
					<li role="presentation" class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				      		{{ Auth::user()->name }}
				    	</a>
				    	<ul class="dropdown-menu">
				    		<li><a href="/logout">Logout</a></li>
				    	</ul>
				  	</li>
				</ul>
			@endif
		</div>
	</nav>
</header>
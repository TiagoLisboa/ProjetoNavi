<header class="main-header">
	<nav>
		@if (Auth::check())
			<ul class="nav nav-tabs f-r">
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
	</nav>
</header>
@section('capa')
@show

<header>

	<nav class="nav-extended">

		<div class="flex flex-center nav menu-bar">

			<div class="menu menu-left">
				<ul>
					<li><a href="{{ route('main.home') }}">Início</a></li>
					<li><a href="{{ route('main.galeria') }}">Galeria</a></li>
				</ul>
			</div>
			<div class="logo">
				<a href="{{ route('main.home') }}" class="brand-logo">
					<i class="logo"></i>
					<span>Adelma Pedrosa</span>
					<small>fotografia newborn</small>
				</a>
			</div>
			<div class="menu menu-right">
				<ul>
					<li><a href="{{ route('main.home') }}">Sobre</a></li>
					<li><a href="{{ route('main.contato') }}">Contato</a></li>
				</ul>
			</div>

			<a href="#" data-activates="nav-mobile" class="button-collapse btn-floating btn-flat hide-on-large-only"><i class="material-icons">menu</i></a>

		</div>

	</nav>


	<div class="nav-header">
		<h1>@yield('page-title')</h1>
	</div>

</header>

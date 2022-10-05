<footer class="grey darken-3">

	<div class="page-footer container">

		<div class="row">

			<div class="col l4 m4 s12 flex flex-column">
				<div class="logo logo-footer">
					<a href="{{ route('main.home') }}" class="brand-logo white-text">
						<i class="logo"></i>
						<span>Adelma Pedrosa</span>
						<small>fotografia newborn</small>
					</a>
				</div>
			</div>

			<div class="col l4 m4 s12 flex flex-column center-align">
				<h5>Institucional</h5>
				<ul>
					<li>
						<a href="#">Início</a>
					</li>
					<li>
						<a href="#">Galeria</a>
					</li>
					<li>
						<a href="#">Blog</a>
					</li>
					<li>
						<a href="#">Sobre</a>
					</li>
					<li>
						<a href="#">Portfólio</a>
					</li>
					<li>
						<a href="#">Contato</a>
					</li>
				</ul>
			</div>

			<div class="col l4 m4 s12 flex flex-end flex-column">
				<div class="row no-padding">
					<div class="col s12 no-padding">
						Endereço
					</div>
				</div>
				<div class="row no-padding">
					<div class="col s12 no-padding">
						{{-- <h5 class="right-align">Institucional</h5> --}}
						<ul class="social">
							<li>
								<a href="#">
									<i class="icon whatsapp"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon instagram"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon facebook"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon youtube"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</div>

	</div>

	<div class="copy grey darken-4">
		<div class="container">
			<div class="row">
				<div class="col l6 s12 flex flex-start">
					{{ date('Y') }} - Todos os direitos reservados &copy; Adelma Fotografias
				</div>
				<div class="col l6 s12 flex flex-column flex-end">
					Desenvolvido por Alisson Guedes
				</div>
			</div>
		</div>
	</div>

</footer>

@extends('app')

@section('content')

<div id="slider">
	<div class="slider fullscreen">
		<ul class="slides">
			@for($i = 1; $i <= 12; $i ++ )
				<li>
					<img src="{{ asset('img/site/ensaios/' . $i . '.jpg') }}" alt="">
				</li>
			@endfor
		</ul>
	</div>
</div>

<section id="portfolio" class="no-padding">

	<div class="row grey darken-3">
		<div class="col s12">
			<div class="title-section">
				<h3>Meus últimos trabalhos</h3>
				<h2>Galeria</h2>
			</div>
		</div>
	</div>

	<div class="b e">
		@for($i = 1; $i <= 12; $i ++ )
			<div class="d hx hf gu gallery-item gallery-expand ce polygon">
				<div class="gallery-curve-wrapper">
					<a class="gallery-cover">
						<img class="responsive-img" src="{{ asset('img/site/ensaios/'. $i. '.jpg') }}" alt="placeholder" crossOrigin="anonymous">
					</a>
					<div class="gallery-body">
						<div class="title-wrapper">
							<h3>Aquamarine</h3>
							<span class="gj">$29.99</span>
						</div>
						<section class="flow-text">
							<p>
								Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.
							</p>
							<p>
								Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.
							</p>
						</section>

					</div>
					<div class="gallery-action">
						<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
					</div>
				</div>
			</div>
		@endfor
	</div>
</section>


<section id="portfolio" class="white darken-3">
	<div class="row">
		<div class="col s12">

			<div class="title-section black-text">
				<h3>Minha história</h3>
				<h2>Sobre mim</h2>
			</div>

			<div class="content-section flow-text">

				<div class="container">

					<section>

						<article>

							<p>Apaixonada pela arte da fotografia, sempre tive o sonho de poder trabalhar e viver dela. Porém, o tempo acabou me levando para caminhos diferentes profissionalmente.</p>

							<p>No entanto, o amor pela fotografia falou mais alto e, de alguma forma, atraí esse universo para minha vida.</p>

							<p>
								<img src="{{ asset('img/site/ensaios/3.jpg') }}" alt="" class="right ml-20 mt-10 mb-10 w-50">
								Comecei nesse mercado em 1999 e, desde então, fui estudando e me aperfeiçoando cada vez mais. Apaixonada pelos ensaios de família, gestantes, infantis e, principalmente, <a href="#"><em>NewBorn</em></a>.</p>

							<p>Com experiência e buscando cada vez mais me atualizar nesse mercado concorrido, tento expressar em minhas fotos todo o amor e a emoção do cliente naquele momento para que a fotografia carregue consigo, não só a imagem daquele dia, mas tudo o que ele representa.</p>

						</article>

					</section>


				</div>

			</div>
		</div>
	</div>
</section>

@endsection

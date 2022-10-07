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
								<img src="{{ asset('img/site/3.jpg') }}" alt="" class="right ml-20 mt-10 mb-10 w-50">
								Comecei nesse mercado em 1999 e, desde então, fui estudando e me aperfeiçoando cada vez mais. Apaixonada pelos ensaios de família, gestantes, infantis e, principalmente, <a href="#"><em>NewBorn</em></a>.</p>

							<p>Com experiência e buscando cada vez mais me atualizar nesse mercado concorrido, tento expressar em minhas fotos todo o amor e a emoção do cliente naquele momento para que a fotografia carregue consigo, não só a imagem daquele dia, mas tudo o que ele representa.</p>

						</article>

					</section>

					{{-- <div id="lipsum">
						<p>
							<img src="{{ asset('img/site/1.jpg') }}" alt="" class="left mr-20 mt-10 mb-10 w-50">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit tristique metus quis venenatis. Aenean id sem quis dui bibendum pretium. Donec sed velit non nisl volutpat tempor. Nam euismod metus mi, a pharetra lacus cursus nec. Donec eleifend ligula vel augue ullamcorper interdum. Proin iaculis nisl lectus, sit amet euismod ligula elementum eu. Nam blandit dui vel nisl imperdiet sollicitudin. Praesent a blandit risus. Proin tristique felis eget accumsan cursus.
					</p>
					<p>
						Nullam vitae risus nec metus accumsan sollicitudin id eget risus. In sodales ullamcorper purus, sit amet pharetra neque ultrices sed. Mauris varius euismod ex, ut semper nisi luctus quis. Integer diam eros, varius non neque eget, interdum dignissim sem. Praesent neque neque, gravida eu egestas tincidunt, varius a ex. Proin pharetra vulputate ante, ac pulvinar mi sollicitudin quis. Donec ex quam, volutpat facilisis bibendum eu, vulputate at eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In porta nulla a blandit congue.
					</p>
					<p>
						Vestibulum vestibulum ullamcorper tristique. Nullam ac efficitur lorem. Curabitur tincidunt ut arcu cursus suscipit. Aliquam nec congue ante, et ultricies nulla. Vivamus vitae vehicula sem, vitae fringilla erat. Praesent ut nisl in quam ornare molestie. Sed sagittis augue vitae nisl placerat accumsan. Duis posuere imperdiet elit mollis sagittis. Sed sollicitudin rhoncus turpis sagittis commodo. Nullam mollis hendrerit tellus, at pulvinar ipsum efficitur nec. Nam venenatis, leo a porta rhoncus, nunc mi condimentum diam, vitae vulputate ante mauris consequat lectus. Nunc nec gravida leo, vel cursus tortor. Etiam sit amet vestibulum urna, vel ultrices tortor.
					</p>
					<p>
						<img src="{{ asset('img/site/1.jpg') }}" alt="" class="right ml-20 mt-10 mb-10 w-50">
						Proin rhoncus, dui eget aliquet fermentum, arcu lectus pretium felis, dictum sollicitudin risus elit at magna. Phasellus rutrum justo sed eros posuere, sit amet iaculis lacus accumsan. Vestibulum sollicitudin, lectus a interdum pharetra, magna leo fringilla urna, quis aliquam eros ligula id justo. Donec tincidunt interdum urna sed pulvinar. Fusce porttitor libero sed leo dictum accumsan. Cras massa ante, vehicula at feugiat sit amet, cursus nec enim. Maecenas vitae posuere ligula.
					</p>
					<p>
						Sed efficitur tempus ligula. Morbi interdum tortor quis sapien euismod, non condimentum erat tempus. Vivamus finibus laoreet dapibus. Nam maximus lectus ac sem ultricies, ac sagittis diam gravida. Nunc accumsan risus ac lacus accumsan, a euismod lectus luctus. Nam ultricies arcu sit amet tortor fermentum, quis sollicitudin arcu aliquet. Morbi id tellus id lectus malesuada placerat nec et quam.
					</p>
				</div> --}}

			</div>

		</div>
	</div>
	</div>
</section>

@endsection

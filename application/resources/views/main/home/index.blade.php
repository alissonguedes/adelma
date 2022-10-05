@extends('app')

@section('content')

<div id="slider">
	<div class="slider fullscreen">
		<ul class="slides">
			@for($i = 1; $i <= 12; $i ++ )
				<li>
					<img src="{{ asset('img/site/' . $i . '.jpg') }}" alt="">
				</li>
			@endfor
		</ul>
	</div>
</div>

<section id="content-page" class="no-padding">
	<div class="row grey darken-3">
		<div class="col s12">
			<div class="title-section">
				<h3>Meus últimos trabalhos</h3>
				<h2>Galeria</h2>
			</div>
		</div>
	</div>
	<div class="b e">
		<div class="d hx hf gu gallery-item gallery-expand ce polygon">
			<div class="gallery-curve-wrapper">
				<a class="gallery-cover gray">
					<img class="responsive-img" src="{{ asset('img/site/1.jpg') }}" alt="placeholder" crossOrigin="anonymous">
				</a>
				<div class="gallery-body">
					<div class="title-wrapper">
						<h3>Aquamarine</h3>
						<span class="gj">$29.99</span>
					</div>
					<p class="fi">
						Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
					<p class="fi">
						Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

					{{-- <div class="carousel-wrapper">
							<div class="t carousel">
								<a class="carousel-item" href="#one!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-sun.jpg?v=53287264807679260261487025906" crossOrigin="anonymous"></a>
								<a class="carousel-item" href="#two!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-maze.jpg?v=142381636332995208141487025933" crossOrigin="anonymous"></a>
								<a class="carousel-item" href="#three!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-ice.jpg?v=104744048428002372381487025923" crossOrigin="anonymous"></a>
								<a class="carousel-item" href="#four!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-cave.jpg?v=131272822431341251431487023516" crossOrigin="anonymous"></a>
								<a class="carousel-item" href="#five!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-grapefruit.jpg?v=40704836766041654421487026006" crossOrigin="anonymous"></a>
							</div>
						</div> --}}

				</div>
				<div class="gallery-action">
					<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
				</div>
			</div>
		</div>
		<div class="d hx hf gu gallery-item gallery-expand ce polygon">
			<div class="gallery-curve-wrapper">
				<a class="gallery-cover gray">
					<img src="{{ asset('img/site/2.jpg') }}" alt="placeholder" crossOrigin="anonymous">
				</a>
				<div class="gallery-body">
					<div class="title-wrapper">
						<h3>Sun</h3>
						<span class="gj">$9.99</span>
					</div>
					<p class="fi">
						Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
					<p class="fi">
						Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

					<div class="carousel-wrapper">
						<div class="t carousel">
							<a class="carousel-item" href="#one!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-sun.jpg?v=53287264807679260261487025906" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#two!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-maze.jpg?v=142381636332995208141487025933" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#three!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-ice.jpg?v=104744048428002372381487025923" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#four!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-cave.jpg?v=131272822431341251431487023516" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#five!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-grapefruit.jpg?v=40704836766041654421487026006" crossOrigin="anonymous"></a>
						</div>
					</div>
				</div>
				<div class="gallery-action">
					<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
				</div>
			</div>
		</div>
		<div class="d hx hf gu gallery-item gallery-expand ce bigbang">
			<div class="gallery-curve-wrapper">
				<a class="gallery-cover gray">
					<img class="responsive-img" src="{{ asset('img/site/3.jpg') }}" alt="placeholder" crossOrigin="anonymous">
				</a>
				<div class="gallery-body">
					<div class="title-wrapper">
						<h3>Big Bang 1</h3>
						<span class="gj">$23.99</span>
					</div>
					<p class="fi">
						Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
					<p class="fi">
						Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

					<div class="carousel-wrapper">
						<div class="t carousel">
							<a class="carousel-item" href="#one!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-sun.jpg?v=53287264807679260261487025906" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#two!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-maze.jpg?v=142381636332995208141487025933" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#three!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-ice.jpg?v=104744048428002372381487025923" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#four!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-cave.jpg?v=131272822431341251431487023516" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#five!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-grapefruit.jpg?v=40704836766041654421487026006" crossOrigin="anonymous"></a>
						</div>
					</div>
				</div>
				<div class="gallery-action">
					<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
				</div>
			</div>
		</div>
		<div class="d hx hf gu gallery-item gallery-expand ce polygon">
			<div class="gallery-curve-wrapper">
				<a class="gallery-cover gray">
					<img src="{{ asset('img/site/4.jpg') }}" alt="placeholder" crossOrigin="anonymous">
				</a>
				<div class="gallery-body">
					<div class="title-wrapper">
						<h3>Maze</h3>
						<span class="gj">$11.99</span>
					</div>
					<p class="fi">
						Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
					<p class="fi">
						Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

					<div class="carousel-wrapper">
						<div class="t carousel">
							<a class="carousel-item" href="#one!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-sun.jpg?v=53287264807679260261487025906" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#two!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-maze.jpg?v=142381636332995208141487025933" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#three!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-ice.jpg?v=104744048428002372381487025923" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#four!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-cave.jpg?v=131272822431341251431487023516" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#five!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-grapefruit.jpg?v=40704836766041654421487026006" crossOrigin="anonymous"></a>
						</div>
					</div>
				</div>
				<div class="gallery-action">
					<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
				</div>
			</div>
		</div>
		<div class="d hx hf gu gallery-item gallery-expand ce polygon">
			<div class="gallery-curve-wrapper">
				<a class="gallery-cover gray">
					<img src="{{ asset('img/site/5.jpg') }}" alt="placeholder" crossOrigin="anonymous">
				</a>
				<div class="gallery-body">
					<div class="title-wrapper">
						<h3>Ice</h3>
						<span class="gj">$14.99</span>
					</div>
					<p class="fi">
						Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
					<p class="fi">
						Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

					<div class="carousel-wrapper">
						<div class="t carousel">
							<a class="carousel-item" href="#one!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-sun.jpg?v=53287264807679260261487025906" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#two!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-maze.jpg?v=142381636332995208141487025933" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#three!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-ice.jpg?v=104744048428002372381487025923" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#four!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-cave.jpg?v=131272822431341251431487023516" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#five!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-grapefruit.jpg?v=40704836766041654421487026006" crossOrigin="anonymous"></a>
						</div>
					</div>
				</div>
				<div class="gallery-action">
					<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
				</div>
			</div>
		</div>
		<div class="d hx hf gu gallery-item gallery-expand ce polygon">
			<div class="gallery-curve-wrapper">
				<a class="gallery-cover gray">
					<img src="{{ asset('img/site/6.jpg') }}" alt="placeholder" crossOrigin="anonymous">
				</a>
				<div class="gallery-body">
					<div class="title-wrapper">
						<h3>Cave</h3>
						<span class="gj">$4.99</span>
					</div>
					<p class="fi">
						Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
					<p class="fi">
						Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

					<div class="carousel-wrapper">
						<div class="t carousel">
							<a class="carousel-item" href="#one!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-sun.jpg?v=53287264807679260261487025906" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#two!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-maze.jpg?v=142381636332995208141487025933" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#three!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-ice.jpg?v=104744048428002372381487025923" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#four!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-cave.jpg?v=131272822431341251431487023516" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#five!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-grapefruit.jpg?v=40704836766041654421487026006" crossOrigin="anonymous"></a>
						</div>
					</div>
				</div>
				<div class="gallery-action">
					<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
				</div>
			</div>
		</div>
		<div class="d hx hf gu gallery-item gallery-expand ce polygon">
			<div class="gallery-curve-wrapper">
				<a class="gallery-cover gray">
					<img src="{{ asset('img/site/7.jpg') }}" alt="placeholder" crossOrigin="anonymous">
				</a>
				<div class="gallery-body">
					<div class="title-wrapper">
						<h3>Grapefruit</h3>
						<span class="gj">$14.99</span>
					</div>

					<p class="fi">
						Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
					<p class="fi">
						Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

					<div class="carousel-wrapper">
						<div class="t carousel">
							<a class="carousel-item" href="#one!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-sun.jpg?v=53287264807679260261487025906" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#two!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-maze.jpg?v=142381636332995208141487025933" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#three!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-ice.jpg?v=104744048428002372381487025923" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#four!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-cave.jpg?v=131272822431341251431487023516" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#five!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-grapefruit.jpg?v=40704836766041654421487026006" crossOrigin="anonymous"></a>
						</div>
					</div>

				</div>
				<div class="gallery-action">
					<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
				</div>
			</div>
		</div>
		<div class="d hx hf gu gallery-item gallery-expand ce bigbang">
			<div class="gallery-curve-wrapper">
				<a class="gallery-cover gray">
					<img class="responsive-img" src="{{ asset('img/site/8.jpg') }}" alt="placeholder" crossOrigin="anonymous">
				</a>
				<div class="gallery-body">
					<div class="title-wrapper">
						<h3>Big Bang 2</h3>
						<span class="gj">$40.99</span>
					</div>
					<p class="fi">
						Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
					<p class="fi">
						Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

					<div class="carousel-wrapper">
						<div class="t carousel">
							<a class="carousel-item" href="#one!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-sun.jpg?v=53287264807679260261487025906" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#two!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-maze.jpg?v=142381636332995208141487025933" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#three!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-ice.jpg?v=104744048428002372381487025923" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#four!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-cave.jpg?v=131272822431341251431487023516" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#five!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-grapefruit.jpg?v=40704836766041654421487026006" crossOrigin="anonymous"></a>
						</div>
					</div>
				</div>
				<div class="gallery-action">
					<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
				</div>
			</div>
		</div>
		<div class="d hx hf gu gallery-item gallery-expand ce bigbang">
			<div class="gallery-curve-wrapper">
				<a class="gallery-cover gray">
					<img class="responsive-img" src="{{ asset('img/site/9.jpg') }}" alt="placeholder" crossOrigin="anonymous">
				</a>
				<div class="gallery-body">
					<div class="title-wrapper">
						<h3>Big Bang 3</h3>
						<span class="gj">$18.99</span>
					</div>
					<p class="fi">
						Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
					<p class="fi">
						Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

					<div class="carousel-wrapper">
						<div class="t carousel">
							<a class="carousel-item" href="#one!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-sun.jpg?v=53287264807679260261487025906" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#two!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-maze.jpg?v=142381636332995208141487025933" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#three!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-ice.jpg?v=104744048428002372381487025923" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#four!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-cave.jpg?v=131272822431341251431487023516" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#five!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-grapefruit.jpg?v=40704836766041654421487026006" crossOrigin="anonymous"></a>
						</div>
					</div>
				</div>
				<div class="gallery-action">
					<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
				</div>
			</div>
		</div>

		<div class="d hx hf gu gallery-item gallery-expand ce sacred">
			<div class="gallery-curve-wrapper">
				<a class="gallery-cover gray">
					<img class="responsive-img" src="{{ asset('img/site/10.jpg') }}" alt="placeholder" crossOrigin="anonymous">
				</a>
				<div class="gallery-body">
					<div class="title-wrapper">
						<h3>Circle</h3>
						<span class="gj">$10.99</span>
					</div>
					<p class="fi">
						Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
					<p class="fi">
						Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

					<div class="carousel-wrapper">
						<div class="t carousel">
							<a class="carousel-item" href="#one!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-sun.jpg?v=53287264807679260261487025906" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#two!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-maze.jpg?v=142381636332995208141487025933" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#three!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-ice.jpg?v=104744048428002372381487025923" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#four!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-cave.jpg?v=131272822431341251431487023516" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#five!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-grapefruit.jpg?v=40704836766041654421487026006" crossOrigin="anonymous"></a>
						</div>
					</div>
				</div>
				<div class="gallery-action">
					<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
				</div>
			</div>
		</div>

		<div class="d hx hf gu gallery-item gallery-expand ce sacred">
			<div class="gallery-curve-wrapper">
				<a class="gallery-cover gray">
					<img class="responsive-img" src="{{ asset('img/site/11.jpg') }}" alt="placeholder" crossOrigin="anonymous">
				</a>
				<div class="gallery-body">
					<div class="title-wrapper">
						<h3>Triangle</h3>
						<span class="gj">$10.99</span>
					</div>
					<p class="fi">
						Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
					<p class="fi">
						Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

					<div class="carousel-wrapper">
						<div class="t carousel">
							<a class="carousel-item" href="#one!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-sun.jpg?v=53287264807679260261487025906" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#two!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-maze.jpg?v=142381636332995208141487025933" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#three!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-ice.jpg?v=104744048428002372381487025923" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#four!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-cave.jpg?v=131272822431341251431487023516" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#five!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-grapefruit.jpg?v=40704836766041654421487026006" crossOrigin="anonymous"></a>
						</div>
					</div>
				</div>
				<div class="gallery-action">
					<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
				</div>
			</div>
		</div>

		<div class="d hx hf gu gallery-item gallery-expand ce sacred">
			<div class="gallery-curve-wrapper">
				<a class="gallery-cover gray">
					<img class="responsive-img" src="{{ asset('img/site/12.jpg') }}" alt="placeholder" crossOrigin="anonymous">
				</a>
				<div class="gallery-body">
					<div class="title-wrapper">
						<h3>Hexagon</h3>
						<span class="gj">$10.99</span>
					</div>
					<p class="fi">
						Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
					<p class="fi">
						Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

					<div class="carousel-wrapper">
						<div class="t carousel">
							<a class="carousel-item" href="#one!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-sun.jpg?v=53287264807679260261487025906" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#two!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-maze.jpg?v=142381636332995208141487025933" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#three!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-ice.jpg?v=104744048428002372381487025923" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#four!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-cave.jpg?v=131272822431341251431487023516" crossOrigin="anonymous"></a>
							<a class="carousel-item" href="#five!"><img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-grapefruit.jpg?v=40704836766041654421487026006" crossOrigin="anonymous"></a>
						</div>
					</div>
				</div>
				<div class="gallery-action">
					<a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
				</div>
			</div>
		</div>

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

					<div id="lipsum">
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
					</div>

				</div>

			</div>
		</div>
	</div>
</section>

@endsection

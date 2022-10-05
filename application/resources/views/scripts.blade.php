<!-- Core Javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/materialize/0.98.0/js/materialize.min.js"></script>
<script src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/gallery.min.opt.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>

<script>
	$(document).ready(function() {
		$('.slider').slider({
			'duration': 2000,
			'indicators': false
		});
	});
	$(function() {
		$(".popup-gallery").magnificPopup({
			delegate: "a",
			type: "image",
			closeOnContentClick: !0,
			fixedContentPos: !0,
			tLoading: "Loading image #%curr%...",
			mainClass: "mfp-img-mobile mfp-no-margins mfp-with-zoom",
			gallery: {
				enabled: !0,
				navigateByImgClick: !0,
				preload: [0, 1]
			},
			image: {
				verticalFit: !0,
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
				titleSrc: function(e) {
					return e.el.attr("title") + "<small>by Marsel Van Oosten</small>"
				},
				zoom: {
					enabled: !0,
					duration: 300
				}
			}
		})
	});
</script>

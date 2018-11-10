$(document).ready(function(){

	// Mobile nav
	$('.menu-opener').bigSlide({
		side: 'right',
		easyClose: true,
		menuWidth: '260px'
	});

	// Sliders
	$('.main-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: true,
		// responsive: [
		// 	{
		// 		breakpoint: 992,
		// 		settings: {
		// 			slidesToShow: 2,
		// 			dots: true,
		// 			arrows: true
		// 		}
		// 	},
		// 	{
		// 		breakpoint: 768,
		// 		settings: {
		// 			slidesToShow: 1,
		// 			dots: true,
		// 			arrows: false
		// 		}
		// 	}
		// ]
	});

	$('.advantages-slider').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					dots: true,
					arrows: true
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					dots: true,
					arrows: true,
					infinite: true
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
					dots: true,
					arrows: true,
					infinite: true
				}
			}
		]
	});

	$('.projects-slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					dots: true,
					arrows: true
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					dots: true,
					arrows: true,
					infinite: true
				}
			}
		]
	});

	$('.brands-slider').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					dots: true,
					arrows: true
				}
			},
			{
				breakpoint: 768,
				settings: {
					variableWidth: true,
					slidesToShow: 1,
					dots: true,
					arrows: true
				}
			}
		]
	});

	// Parallax
	$('[id*="parallax-viewport"]').each(function(){
		var scene = document.getElementById( $(this).attr('id') );
		var parallaxInstance = new Parallax(scene);
	});

	// Scroll to anchor
	$("body").on('click', '[href*="#"]', function(e){
		var fixed_offset = $('.header').innerHeight();
		$('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 500);
		e.preventDefault();
	});

	// Sticky Header
	var isSticky = false;

	$(window).scroll(function(){
		if( !isSticky && $(window).scrollTop() > 170 ){
			$('.sticky-header').addClass('visible');
			isSticky = true;
		} else if(isSticky && $(window).scrollTop() <= 170){
			$('.sticky-header').removeClass('visible');
			isSticky = false;
		}
	});

	// Tilt JS
	// $('.add-tilt').tilt({
	// 	perspective: 1500
	// });

	// TODO: ↓↓↓ remove this script ↓↓↓
	// Current menu item highlithing
	$(function () {
		var location = window.location.href;
		var cur_url = location.split('/').pop();

		$('.top-nav li, .panel-nav li, .footer-nav li').each(function () {
			var link = $(this).find('a').attr('href');

			// console.log(link);

			if (cur_url == '') {
				cur_url = 'index.php';
			}

			if (cur_url == link)
			{
				$(this).addClass('current-menu-item');
				$(this).parents('li').addClass('current-menu-parent');
			}
		});
	});
});
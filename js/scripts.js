$(document).ready(function(){

	// Mobile nav
	$('.menu-opener').bigSlide({
		side: 'right',
		easyClose: true,
		menuWidth: '260px'
	});

	// Top Nav
	$('.top-nav li').hover(function(){
		clearTimeout($.data(this,'timer'));
		$(this).children('ul').stop().slideDown(200).css({'z-index': 110});
	}, function(){
		$.data(this,'timer', setTimeout($.proxy(function() {
			$(this).children('ul').stop().slideUp(200).css({'z-index': 50});
		}, this), 200));
	});

	// News List
	$('.news-list').masonry({
		// options
		itemSelector: '.news-list .item',
		columnWidth: '.grid-sizer',
		percentPosition: true,
		horizontalOrder: true // для вывода блоков в том порядке, в котором они в html. Если убрать, скрипт будет заполнять пространство максимально равномерно, но нарушая порядок
	});

	// Sliders
	// $('.main-slider').slick({
	// 	infinite: true,
	// 	slidesToShow: 1,
	// 	slidesToScroll: 1,
	// 	dots: true,
	// 	arrows: true
	// });

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
	// var isSticky = false;

	// $(window).scroll(function(){
	// 	if( !isSticky && $(window).scrollTop() > 170 ){
	// 		$('.sticky-header').addClass('visible');
	// 		isSticky = true;
	// 	} else if(isSticky && $(window).scrollTop() <= 170){
	// 		$('.sticky-header').removeClass('visible');
	// 		isSticky = false;
	// 	}
	// });

	// TODO: ↓↓↓ remove this script ↓↓↓
	// Current menu item highlithing
	$(function () {
		var location = window.location.href;
		var cur_url = location.split('/').pop();

		$('.top-nav li, .panel-nav li, .footer-nav li').each(function () {
			var link = $(this).find('a').attr('href');

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
/** @format */

jQuery(function ($) {
	'use strict';
	
	//*============ parallaxie js ==============*/

	if ($('.parallaxie').length) {
		if ($(window).width() > 767) {
			$('.parallaxie').parallaxie({
				speed: 0.5,
			});
		}
	}

	//*============ background image js ==============*/
	$('[data-bg-img]').each(function () {
		var bg = $(this).data('bg-img');
		$(this).css({
			background: 'no-repeat center 0/cover url(' + bg + ')',
		});
	});

	//* Navbar Fixed
	function navbarFixedTwo() {
		if ($('.sticky_nav').length) {
			$(window).scroll(function () {
				var scroll = $(window).scrollTop();
				if (scroll) {
					$('.sticky_nav').addClass('navbar_fixed');
				} else {
					$('.sticky_nav').removeClass('navbar_fixed');
				}
			});
		}
	}
	navbarFixedTwo();

	if ($('.site-header').hasClass('site-header')) {
		var nav = $('.site-header');
		$(window).on('load resize', function () {
			var headerHeight = nav.outerHeight();
			nav.css('height', headerHeight).show();
		});
	}

	function Menu_js() {
		if ($('.submenu').length) {
			$('.submenu > .dropdown-toggle').click(function () {
				var location = $(this).attr('href');
				window.location.href = location;
				return false;
			});
		}
	}
	Menu_js();

	function menu_dropdown() {
		if ($(window).width() < 992) {
			$('.menu > li .mobile_dropdown_icon,.search_cart .shpping-cart').on(
				'click',
				function (event) {
					// $(this)
					// 	// .parents('.dropdown-menu')
					// 	.first()
					// 	.find('.open')
					// 	.addClass('open');
					// $(this).toggleClass('open');
					$(this).parent().find('.dropdown-menu').first().slideToggle(700);
					$(this)
						.parent()
						.find('.mobile_dropdown_icon')
						.first()
						.toggleClass('arrow_rotate');
					$(this).parent().siblings().find('.dropdown-menu').slideUp(700);
					$(this)
						.parent()
						.siblings()
						.find('.mobile_dropdown_icon')
						.removeClass('arrow_rotate');
				}
			);
		}
	}
	menu_dropdown();

	// $('.menu > li .mobile_dropdown_icon').on('click', function () {
	// 	$('.menu > li .mobile_dropdown_icon').removeClass('open');
	// 	$(this).addClass('open');
	// });

	// $('.menu li .dropdown-menu li .mobile_dropdown_icon').on(
	// 	'click',
	// 	function () {
	// 		$(this).not('open').addClass('open');
	// 	}
	// );

	// $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
	// 	if (!$(this).next().hasClass('show')) {
	// 		$(this)
	// 			.parents('.dropdown-menu')
	// 			.first()
	// 			.find('.show')
	// 			.removeClass('show');
	// 	}
	// 	var $subMenu = $(this).next('.dropdown-menu');
	// 	$subMenu.toggleClass('show');
	// 	$(this)
	// 		.parents('li.nav-item.dropdown.show')
	// 		.on('.dropdown', function (e) {
	// 			$('.dropdown-menu > .dropdown .show').removeClass('show');
	// 		});
	// 	$('.dropdown-menu a.dropdown-toggle').removeClass('show_dropdown');
	// 	if ($(this).next().hasClass('show')) {
	// 		$(this).addClass('show_dropdown');
	// 	}
	// 	return false;
	// });

	// $('.menu li')
	// 	.next()
	// 	.find('li')
	// 	.on('click', '.mobile_dropdown_icon', function () {
	// 		$(this).parent('ul').addClass('open');
	// 	});

	// $('.menu li .mobile_dropdown_icon').on('click', function () {
	// 	// $('.menu > li > .mobile_dropdown_icon').removeClass('open');
	// 	// if ($('.menu > li > .mobile_dropdown_icon').hasClass('open')) {
	// 	// 	$(this).removeClass('open');
	// 	// } else {
	// 	// 	$('.menu li .mobile_dropdown_icon').removeClass('open');
	// 	// }
	// 	$(this).toggleClass('open');
	// });
	// $('.menu li')
	// 	.next('li')
	// 	.on('click', '.mobile_dropdown_icon', function () {
	// 		$('.menu li .mobile_dropdown_icon').addClass('open');
	// 	});

	// $('.menu > li.open .mobile_dropdown_icon').on('click', function () {
	// 	if (
	// 		$('.menu > li.open .mobile_dropdown_icon').parent().hasClass('active')
	// 	) {
	// 		$('.menu > li.open .mobile_dropdown_icon').parent().removeClass('active');
	// 	} else {
	// 		$('.menu > li .mobile_dropdown_icon').parent().addClass('active');
	// 	}
	// 	return false;
	// });

	// $('.menu > li .mobile_dropdown_icon').on('click', function () {
	// 	if ($('.menu > li .mobile_dropdown_icon').is('open')) {
	// 		$(this).removeClass('open');
	// 		console.log(this);
	// 	} else {
	// 		$(this).toggleClass('open');
	// 	}
	// 	return false;
	// });

	// $('.menu > li .mobile_dropdown_icon').click(function () {
	// 	var myDropDown = $(this).next('ul');

	// 	if (myDropDown.is(':visible')) {
	// 		$(this).removeClass('open');
	// 		// myDropDown.hide();
	// 	} else {
	// 		// myDropDown.fadeIn();
	// 		$(this).addClass('drop-down-open');
	// 	}

	// 	return false;
	// });

	// $('html').click(function (e) {
	// 	$('.drop-down-wrapper').hide();
	// });

	// $('.drop-down-wrapper').click(function (e) {
	// 	e.stopPropagation();
	// });

	// $('.menu > li .mobile_dropdown_icon').each(function () {
	// 	var $this = $(this);
	// 	$this.on('click', function (e) {
	// 		var has = $this.parent().hasClass('active');
	// 		$(this).removeClass('active');
	// 		if (has) {
	// 			$this.parent().removeClass('active');
	// 		} else {
	// 			$this.parent().addClass('active');
	// 		}
	// 	});
	// });

	$('.search > a').on('click', function () {
		if ($(this).parent().hasClass('open')) {
			$(this).parent().removeClass('open');
		} else {
			$(this).parent().addClass('open');
		}
		return false;
	});

	$('.navbar-toggler').on('click', function () {
		if ($('.navbar-toggler').hasClass('collapsed')) {
			$(this).removeClass('collapsed');
		} else {
			$(this).addClass('collapsed');
		}

		if ($('.navbar-collapse').not('show')) {
			$('.navbar-collapse').removeClass('show').slideToggle(700);
		} else {
			$('.navbar-collapse').addClass('show').slideUp(700);
		}
	});
});

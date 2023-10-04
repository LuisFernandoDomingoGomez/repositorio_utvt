(function($) {
	
	"use strict";
	
	
	//Hide Loading Box (Preloader)
	function handlePreloader() {
		if($('.preloader').length){
			$('body').addClass('page-loaded');
			$('.preloader').delay(0).fadeOut(0);
		}
	}
	
	
	//Update Header Style and Scroll to Top
	function headerStyle() {
		if($('.main-header').length){
			var windowpos = $(window).scrollTop();
			var siteHeader = $('.main-header');
			var scrollLink = $('.scroll-to-top');
			if (windowpos >= 1) {
				siteHeader.addClass('fixed-header');
				scrollLink.fadeIn(300);
			} else {
				siteHeader.removeClass('fixed-header');
				scrollLink.fadeOut(300);
			}
		}
	}
	headerStyle();

	//Search Toggle
	if ($('#scroll-nav').length) {
		$(window).on("load",function(){
			$("#scroll-nav li a,#scroll-nav-2 li a").mPageScroll2id({
				highlightSelector:"#scroll-nav li a"
			});
		});
	}

	// Custom Scroll Linsk / Sidebar

	if($('.hidden-bar .custom-links li a').length){
		$(".hidden-bar .custom-links li a").on('click', function(e) {
			e.preventDefault();
		   $('.hidden-bar,body').removeClass('visible-sidebar');

		});
	}
	
	//Hidden Bar Menu Config
	function hiddenBarMenuConfig() {
		var menuWrap = $('.hidden-bar .side-menu');
		// appending expander button
		menuWrap.find('li.dropdown > a').append(function () {
			return '<button type="button" class="btn-expander"><i class="icon sl-icon-arrow-down"></i></button>';
		});
		// hidding submenu
		menuWrap.find('.dropdown').children('ul').hide();

		$(".hidden-bar .side-menu ul li.dropdown .btn-expander").on('click', function(e) {
			e.preventDefault();
			$(this).parent('').parent('li').children('ul').slideToggle();
			// toggling arrow of expander
			$(this).find('i').toggleClass('sl-icon-arrow-up sl-icon-arrow-down');
			return false;
		});
	}

	hiddenBarMenuConfig();


	//Custom Scroll for Hidden Sidebar
	if ($('.hidden-bar-wrapper').length) {
		
		$('.hidden-bar-closer,.menu-backdrop').on('click', function () {
			$('.hidden-bar,body').removeClass('visible-sidebar');
		});
		$(document).keydown(function(e){
	        if(e.keyCode == 27) {
	            $('.hidden-bar,body').removeClass('visible-sidebar');
	        }
	    });
		$('.hidden-bar-opener').on('click', function () {
			$('.hidden-bar,body').addClass('visible-sidebar');
		});
	}

	//Event Countdown Timer
	if($('.time-countdown').length){  
		$('.time-countdown').each(function() {
		var $this = $(this), finalDate = $(this).data('countdown');
		$this.countdown(finalDate, function(event) {
			var $this = $(this).html(event.strftime('' + '<div class="counter-column days"><span class="count">%D</span><span class="period">Days</span></div> ' + '<div class="counter-column hours"><span class="count">%H</span><span class="period">Hours</span></div>  ' + '<div class="counter-column minutes"><span class="count">%M</span><span class="period">Minutes</span></div>  ' + '<div class="counter-column seconds"><span class="count">%S</span><span class="period">Seconds</span></div>'));
		});
	 });
	}

	//Event Countdown Timer
	if($('.time-countdown-two').length){  
		$('.time-countdown-two').each(function() {
		var $this = $(this), finalDate = $(this).data('countdown');
		$this.countdown(finalDate, function(event) {
			var $this = $(this).html(event.strftime('' + '<div class="counter-column days"><span class="period">Days</span><span class="count">%D</span></div> ' + '<div class="counter-column hours"><span class="period">Hours</span><span class="count">%H</span></div>  ' + '<div class="counter-column minutes"><span class="period">Minutes</span><span class="count">%M</span></div>  ' + '<div class="counter-column seconds"><span class="period">Seconds</span><span class="count">%S</span></div>'));
		});
	 });
	}

	//How Work Carousel 
	if ($('.how-work-carousel').length) {
		$('.how-work-carousel').bxSlider({
			pagerCustom: '.pager-one',
			auto:false,
			startSlide: 1,
			infiniteLoop: false,
			easing:'swing',
			adaptiveHeight: true,
			pause: 5000,
			slideMargin: 50,
			captions: true
		});
	}

	//Token Sale Slider
	if ($('.token-sale-carousel').length) {
		$('.token-sale-carousel').owlCarousel({
			loop:false,
			margin:80,
			nav:true,
			smartSpeed: 700,
			autoplay: true,
			autoplayTimeout:7000,
			navText: [ '<span class="prev-btn sl-icon-arrow-left"></span>', '<span class="next-btn sl-icon-arrow-right"></span>' ],
			responsive:{
				0:{
					items:1,
					margin:30
				},
				600:{
					items:2,
					margin:20
				},
				768:{
					items:3,
					margin:20
				},
				992:{
					items:4,
					margin:30
				},
				1200:{
					items:4,
					margin:50
				},
				1366:{
					items:5
				}
			}
		});    		
	}

	//Token Sale Slider
	if ($('.token-sale-carousel-two').length) {
		$('.token-sale-carousel-two').owlCarousel({
			loop:false,
			margin:50,
			nav:true,
			smartSpeed: 700,
			autoplay: true,
			autoplayTimeout:7000,
			navText: [ '<span class="prev-btn sl-icon-arrow-left"></span>', '<span class="next-btn sl-icon-arrow-right"></span>' ],
			responsive:{
				0:{
					items:1,
					margin:30
				},
				600:{
					items:2,
					margin:20
				},
				768:{
					items:3,
					margin:20
				},
				992:{
					items:3,
					margin:30
				},
				1200:{
					items:4,
					margin:30
				},
				1366:{
					items:5
				}
			}
		});    		
	}

	//Roadmap Slider
	if ($('.roadmap-carousel').length) {
		$('.roadmap-carousel').owlCarousel({
			loop:false,
			margin:0,
			nav:true,
			smartSpeed: 700,
			autoplay: false,
			autoplayTimeout:7000,
			navText: [ '<span class="prev-btn sl-icon-arrow-left"></span>', '<span class="next-btn sl-icon-arrow-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				768:{
					items:2
				},
				992:{
					items:3
				},
				1200:{
					items:4
				},
				1366:{
					items:5
				}
			}
		});    		
	}

	//Partners Carousel
	if ($('.partners-carousel').length) {
		$('.partners-carousel').owlCarousel({
			loop:false,
			margin:30,
			nav:true,
			smartSpeed: 700,
			autoplay: true,
			autoplayTimeout:7000,
			navText: [ '<span class="prev-btn sl-icon-arrow-left"></span>', '<span class="next-btn sl-icon-arrow-right"></span>' ],
			responsive:{
				0:{
					items:2
				},
				600:{
					items:3
				},
				768:{
					items:3
				},
				992:{
					items:4
				},
				1200:{
					items:5
				}
			}
		});    		
	}

	//News Slider
	if ($('.news-carousel').length) {
		$('.news-carousel').owlCarousel({
			loop:false,
			margin:30,
			nav:true,
			smartSpeed: 700,
			autoplay: true,
			autoplayTimeout:7000,
			navText: [ '<span class="prev-btn sl-icon-arrow-left"></span>', '<span class="next-btn sl-icon-arrow-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				768:{
					items:2
				},
				992:{
					items:2
				},
				1200:{
					items:3
				}
			}
		});    		
	}

	//Team Slider
	if ($('.team-carousel').length) {
		$('.team-carousel').owlCarousel({
			loop:false,
			margin:30,
			nav:true,
			smartSpeed: 700,
			autoplay: true,
			autoplayTimeout:7000,
			navText: [ '<span class="prev-btn sl-icon-arrow-left"></span>', '<span class="next-btn sl-icon-arrow-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				768:{
					items:2
				},
				992:{
					items:3
				},
				1200:{
					items:4
				}
			}
		});    		
	}

	//Team Slider
	if ($('.team-carousel-two').length) {
		$('.team-carousel-two').owlCarousel({
			loop:false,
			margin:60,
			nav:true,
			smartSpeed: 700,
			autoplay: true,
			autoplayTimeout:7000,
			navText: [ '<span class="prev-btn sl-icon-arrow-left"></span>', '<span class="next-btn sl-icon-arrow-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				768:{
					items:2
				},
				992:{
					items:2
				},
				1200:{
					items:3
				},
				1440:{
					items:4
				}
			}
		});    		
	}

	//Team Slider
	if ($('.team-carousel-three').length) {
		$('.team-carousel-three').owlCarousel({
			loop:true,
			margin:50,
			nav:true,
			smartSpeed: 700,
			autoplay: true,
			autoplayTimeout:7000,
			navText: [ '<span class="prev-btn sl-icon-arrow-left"></span>', '<span class="next-btn sl-icon-arrow-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				768:{
					items:1
				},
				992:{
					items:2
				},
				1200:{
					items:2
				},
				1440:{
					items:2
				}
			}
		});    		
	}

	//Creations Slider
	if ($('.creation-carousel').length) {
		$('.creation-carousel').owlCarousel({
			loop:true,
			margin:12,
			nav:true,
			smartSpeed: 700,
			autoplay: false,
			autoplayTimeout:7000,
			navText: [ '<span class="prev-btn sl-icon-arrow-left"></span>', '<span class="next-btn sl-icon-arrow-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				768:{
					items:2
				},
				992:{
					items:3
				},
				1200:{
					items:4
				},
				1600:{
					items:4
				},
				1800:{
					items:5
				}
			}
		});    		
	}

	//Artwork Slider
	if ($('.artwork-carousel').length) {
		$('.artwork-carousel').owlCarousel({
			loop:true,
			margin:2,
			nav:true,
			smartSpeed: 700,
			autoplay: false,
			autoplayTimeout:7000,
			navText: [ '<span class="prev-btn sl-icon-arrow-left"></span>', '<span class="next-btn sl-icon-arrow-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				768:{
					items:2
				},
				992:{
					items:3
				},
				1366:{
					items:3
				},
				1500:{
					items:4
				},
				1920:{
					items:5
				}
			}
		});    		
	}

	//Testimonials Slider
	if ($('.testi-carousel').length) {
		$('.testi-carousel').owlCarousel({
			loop:true,
			margin:50,
			nav:true,
			smartSpeed: 700,
			autoplay: false,
			autoplayTimeout:7000,
			navText: [ '<span class="prev-btn sl-icon-arrow-left"></span>', '<span class="next-btn sl-icon-arrow-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				768:{
					items:1
				},
				992:{
					items:1
				}
			}
		});    		
	}

	//Tabs Box
	if($('.tabs-box').length){
		$('.tabs-box .tab-buttons .tab-btn').on('click', function(e) {
			e.preventDefault();
			var target = $($(this).attr('data-tab'));
			
			if ($(target).is(':visible')){
				return false;
			}else{
				target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
				$(this).addClass('active-btn');
				target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
				target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
				$(target).fadeIn(300);
				$(target).addClass('active-tab');
			}
		});
	}
	
	//Accordion Box
	if($('.accordion-box').length){
		$(".accordion-box").on('click', '.acc-btn', function() {

			var outerBox = $(this).parents('.accordion-box');
			var target = $(this).parents('.accordion');

			if ($(this).next('.acc-content').is(':visible')){
				//return false;
				$(this).removeClass('active');
				$(this).next('.acc-content').slideUp(300);
				$(outerBox).children('.accordion').removeClass('active-block');
			}else{
				$(outerBox).find('.accordion .acc-btn').removeClass('active');
				$(this).addClass('active');
				$(outerBox).children('.accordion').removeClass('active-block');
				$(outerBox).find('.accordion').children('.acc-content').slideUp(300);
				$(this).next('.acc-content').slideDown(300);
				$(this).parent('.accordion').addClass('active-block');
			}
		});
	}

	//LightBox / Fancybox
	if($('.lightbox-image').length) {
		$('.lightbox-image').fancybox({
			openEffect  : 'fade',
			closeEffect : 'fade',
			helpers : {
				media : {}
			}
		});
	}

	//Custom Seclect Box
	if($('.custom-select-box').length){
		$('.custom-select-box').selectmenu().selectmenu('menuWidget').addClass('overflow');
	}
	

	// Scroll to a Specific Div
	if($('.scroll-to-target').length){
		$(".scroll-to-target").on('click', function() {
			var target = $(this).attr('data-target');
		   // animate
		   $('html, body').animate({
			   scrollTop: $(target).offset().top
			 }, 1500);
	
		});
	}
	
	// Elements Animation
	if($('.wow').length){
		var wow = new WOW(
		  {
			boxClass:     'wow',      // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset:       0,          // distance to the element when triggering the animation (default is 0)
			mobile:       false,       // trigger animations on mobile devices (default is true)
			live:         true       // act on asynchronously loaded content (default is true)
		  }
		);
		wow.init();
	}
	
	
/* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */
	
	$(window).on('scroll', function() {
		headerStyle();
	});
	
/* ==========================================================================
   When document is loading, do
   ========================================================================== */
	
	$(window).on('load', function() {
		handlePreloader();
		if($('body.page-loaded').length){
			$('body').addClass('page-done');
		}
	});

/* ==========================================================================
   When document is Resized
   ========================================================================== */
	
	$(window).on('resize', function() {
		
	});
	
	

})(window.jQuery);
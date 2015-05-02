
(function($) {

	"use strict";

	var Main = {

		init: function() {
			
			//Header Settings
			this.headerSettings();
			
			//Feature Section
			this.featureSection();
			
			//Sticky
			this.stickyItems();
			
			//Header Options
			this.headerOptions();
			
			//Main Menu
			this.mainMenu();
			
			//Bg Loader
			this.bgLoader();
			
			//Animation Bg
			this.animatedBg();
			
			//Filters
			this.filters();
			
			//Portfolio Fields
			this.portfolioFields();
			
			//Section Full Width
			this.fullWidth();
			
			//Fixed Sidebar
			this.fixedSidebar();
			
			//Progress Bars
			this.progressBars();
			
			//Accordion Toggles
			this.accordionToggle();
			
			//Tabs
			this.tabs();
			
			//Info Box
			this.infoBox();
			
			//Team
			this.team();
			
			//partners
			this.advancedPartners();
			
			//Video Bg
			this.videoBg();
			
			//Back to top
			this.backtoTop();
			
			//Carousel
			this.carousel();
				
			//Isotope
			this.isotope();
			
			//Hovers
			this.hovers();
			
			//Slider
			this.slider();
			
			//Magnific Popup
			this.popUp();
			
			//Map
			this.map();
			
			//Animations
			this.animations();
			
			//Contact Form
			this.contactForm();
			
			//Testimonial
			this.testimonial();

			//Stamp Gallery
			this.stampGallery();

			//Fit Vid
			this.fitVid();
		
		
		},
			
		headerSettings: function() {
			
			var header = $('#grve-header'),
				headerHeight = parseInt(header.attr('data-height')),
				logo = header.find('.grve-logo'),
				element = header.find('img');
			
			header.css('height',headerHeight);
			logo.css('height',headerHeight);
			logo.find('img').css('max-height',headerHeight);
			
			if(!$('#grve-feature-section').length && !isMobile.any()){
				header.css('position','fixed');
			}
			
			//Show Header
			imagesLoaded(element,function(){
				
				header.animate({'opacity':1},500);
				$('#grve-wrapper').css('visibility','visible');
				$('.grve-sub-title span').stop(true,true).transition({ x: 0, delay:600 },600,'cubic-bezier(0.77, 0, 0.175, 1)');
				
			});	
	
		},
		
		stickyItems: function(){
			if(!isMobile.any() && $(window).width() > 1023 ){
			
				$('#grve-header').sticky({ topSpacing: 0 });
			
			}
		},
		
		headerOptions: function() {
				
			$('.grve-header-search-btn').click(function(){
			
				setTimeout(function () {
					$('#grve-search-modal').find('#grve-search').focus();
				}, 100);
				
			});
		
		},
		
		mainMenu: function() {
		
			var mainMenu = $('.grve-main-menu'),
				menuItem = mainMenu.find(' > ul > li '),
				subMenu = menuItem.find(' ul '),
				btnMenu = $('<div/>', {'class':'grve-mainmenu-btn'}),
				$this = this;
		
			menuItem.addClass('grve-menu-item');
			subMenu.addClass('grve-submenu');
			subMenu.parent().addClass('grve-have-child');
			btnMenu.prependTo('.grve-have-child');
			
			$('.grve-menu-btn').click(function(event){

				
				$('#grve-wrapper').toggleClass('menu-open');
					
					$('.grve-main-menu').css('display','block');
					$('.grve-main-menu > ul ').transition({ x: 0 },500,'cubic-bezier(0,0.9,0.3,1)', {queue: false});
					$('.grve-close-btn ').transition({ x: 0, delay: 900 },300,'cubic-bezier(0,0.9,0.3,1)');
					

				event.preventDefault();
				
				menuItem.each(function(i) {
					$(this).transition({ x: 0, delay:i*200 },600,'cubic-bezier(0,0.9,0.3,1)', {queue: false});
				});
			});
			
			
			$('.grve-mainmenu-btn').click(function(){
				
				$(this).parent().toggleClass('active');
				$(this).parent().find(' > .grve-submenu ').slideToggle(200);
				
			});
			$('.grve-close-btn').click(function (event){
			
				$('#grve-wrapper').toggleClass('menu-open');
				
				menuItem.transition({ x: 320 },0);
				$(this).transition({ x: 320 },600,'cubic-bezier(0,0.9,0.3,1)', {queue: false});
				$('.grve-main-menu > ul ').transition({ x: 320 },600,'cubic-bezier(0,0.9,0.3,1)',function(){
				
					subMenu.css('display','none');
					menuItem.removeClass('active');
					$('.grve-main-menu').css('display','none');
				
				});
				
				event.preventDefault();
			});
			
		},
		
		featureSection: function(){
		
			if ( isMobile.any() ) {
				if( window.location !== window.parent.location ) {
					if($('#grve-feature-section').hasClass('grve-fullscreen')) {
						$('#grve-feature-section').attr('data-height', '500').removeClass('grve-fullscreen');
					}
				}
			}
		
			if($('#grve-feature-section').hasClass('grve-fullscreen')) {
			
				
				var windowHeight = $(window).height(),
					windowWidth = $(window).width(),
					headerHeight = $('#grve-header').attr('data-height');
					
				$('#grve-feature-section').css({'height':windowHeight - headerHeight});
				$('#grve-theme-body').css({'top':windowHeight - headerHeight});
				
				if(isMobile.any()) {
					$('#grve-feature-section').css({'position':'relative'});
					$('#grve-theme-body').css({'top':0});
				}
					
					
			} else {
			
				var featureHeight = $('#grve-feature-section').attr('data-height');

				$('#grve-feature-section').css({'height':featureHeight});
				$('#grve-theme-body').css({'top':parseInt(featureHeight)});
				
				if(isMobile.any()) {
					$('#grve-feature-section').css({'position':'relative'});
					$('#grve-theme-body').css({'top':0});
				}
				
			}
		
			//Feature Slider
			if($('.grve-feature-element.grve-slider').length && $('#grve-feature-section').hasClass('grve-fullscreen')) {

				$('.grve-feature-element.grve-slider').find('.slides li').css({'height':windowHeight - headerHeight, 'width':windowWidth});
				
				if(!isMobile.any()) {
					$(window).on("scroll", function() {
					
						var $scroll = $(window).scrollTop();

						$('.grve-feature-element.grve-slider').find('.grve-slider-caption').css({ 'opacity' : (1 - $scroll/600) });
						
						
					});
				}
			} else {
			
				$('.grve-feature-element.grve-slider').find('.slides li').css({'height':parseInt(featureHeight)});
				
			}
			
			//Feature Map
			if($('.grve-feature-element.grve-map').length && $('#grve-feature-section').hasClass('grve-fullscreen')) {
				
				if(isMobile.any()) {
					$('#grve-feature-section, .grve-feature-element.grve-map').css({'height':windowHeight/2, 'width':windowWidth});
					$('#grve-theme-body').css({'top':windowHeight/2});
				} else {	
					$('.grve-feature-element.grve-map').css({'height':windowHeight - headerHeight, 'width':windowWidth});
				}
				
			} else {
			
				$('.grve-feature-element.grve-map').css({'height':parseInt(featureHeight)});
				
			}
			
		},
		
		slider: function() {

			$('.grve-slider').each(function(){
				var $that = $(this);
					
					$that.flexslider({
						animation: "fade",
						controlNav: false,
						smoothHeight: false,
						animationSpeed: 500,
						easing: "linear",
						nextText: " ",
						prevText: " ",
						directionNav: true,
						pauseOnHover: false,
						animationLoop: true,
						useCSS: true,
						slideshowSpeed: 3500
					});

				
			});	
			
		},
		
		testimonial: function(){
		
			$('.grve-testimonial-carousel').each(function(){
				var $that = $(this);	
				$that.flexslider({
					animation: "slide",
					controlNav: true,
					animationLoop: true,
					slideshowSpeed: 3000,
					pauseOnHover: true,
					directionNav: false,
					smoothHeight: true
				});
			});
		
		},
		
		bgLoader: function() {

			$('.grve-bg-image1').each(function () {
				function imageUrl(input) {
					return input.replace(/"/g,"").replace(/url\(|\)$/ig, "");
				}
				var image = new Image(),
					$that = $(this);
				image.src = imageUrl($that.css('background-image'));
				image.onload = function () {
					$that.animate({'opacity':1},300);
				};
			});
			
		},
		
		animatedBg: function(){
		
			if($('.grve-animated-bg').length){
				var bgPosition = 0;
				setInterval(function(){
					bgPosition++;
					$('.grve-animated-bg').css('background-position',bgPosition+'px 0px');
				},75);
			}
		
		},
			
		popUp: function(){
		
			//IMAGE
			$('.grve-image-popup').magnificPopup({ 
				type: 'image',
				fixedContentPos: false,
				fixedBgPos: false,
				mainClass: 'mfp-no-margins mfp-with-zoom',
				image: {
					verticalFit: true
				},
				zoom: {
					enabled: true,
					duration: 300
				}
			});
			
			//GALLERY
			$('.grve-gallery-popup').magnificPopup({
				delegate: 'a',
				type: 'image',
				fixedContentPos: false,
				fixedBgPos: false,
				tLoading: 'Loading image #%curr%...',
				mainClass: 'mfp-img-mobile',
				gallery: {
					enabled: true,
					navigateByImgClick: true,
					preload: [0,1] // Will preload 0 - before current, and 1 after the current image
				},
				image: {
					tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
					titleSrc: function(item) {
						return item.el.find('.grve-hover-title').html();
					}
				},
				zoom: {
					enabled: true,
					duration: 300
				}
			});
			
			//VIDEOS
			$('.grve-youtube-popup, .grve-vimeo-popup').magnificPopup({
				disableOn: 700,
				type: 'iframe',
				fixedContentPos: false,
				fixedBgPos: false,
				mainClass: 'mfp-fade',
				removalDelay: 160,
				preloader: false
			});
			
			//INLINE TUPE
			$('.grve-header-options-popup').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: false,
				preloader: false,			
				midClick: true,
				removalDelay: 300,
				mainClass: 'mfp-bg my-mfp-zoom-in'
			});
		},
		
		animations: function(){
		
			if(isMobile.any()) {

				$('.grve-animated-item').css('opacity',1);

				
			} else {
				$('.grve-animated-item').each(function() {
					var timeDelay = $(this).attr('data-delay');
					$(this).appear(function() {
					var $that = $(this);
						setTimeout(function () {
							$that.addClass('animated');
						}, timeDelay);
					},{accX: 0, accY: -150});

				});
			}
		},
		
		carousel: function() {

			$('.grve-carousel').each(function(){
				var carousel = $(this),
					carouselItem = carousel.find('.grve-carousel-item'),
					element = carousel.find('img'),
					columns = parseInt($(this).attr('data-columns'));
				
				this.calculateColumns = function(){
				
					if($(window).width() < 801 && $(window).width() > 385) {
						columns = 2;
					} else
					if($(window).width() < 385) {
						columns = 1;
					} 
					else {
						columns = parseInt($(this).attr('data-columns'));
					}
					
				}
				this.calculateColumns();
				
				imagesLoaded(element,function(){

					var itemWidth = carousel.width() / columns;
					carousel.animate({'opacity':1});

					carousel.carouFredSel({
						auto: true,
						scroll : {
							fx: "scroll",
							duration: 800,
							easing: "easeInOutCubic",						
							pauseOnHover: true
						},
						prev: '#prev2',
						next: '#next2',
						pagination: "#pager2",
						circular: true,
						responsive: true,
						padding     : 10,
						align       : "center",
						swipe: {
							onMouse: true,
							onTouch: true
						},
						items: {
							height : 'auto',
							width  : itemWidth,
							visible: columns
						}
					},{
						wrapper: {
							element: "div",
							classname: "grve-carousel-inner"
						}
					});
						
				});
				
				if(isMobile.any()){
					carouselItem.each(function(){
					
						var carouselLink = $(this).find('.grve-btn'),
							carouselLinkClone = $('<a/>', {'class':'grve-carousel-btn'});
							
						carouselLink.clone().attr('class','grve-carousel-btn').empty().prependTo($(this));
											
					});
				}

			});
		},
		
		isotope: function() {
		
			$('.grve-isotope-container').each( function() {
				var $container = $(this),
					layout = $(this).attr('data-layout'),
					isotopeItem = $(this).find('.grve-isotope-item'),
					element = $container.find('img'),
					columns = parseInt($(this).attr('data-columns'));

				
				this.isotopeColumns = function(){
				
					if($(window).width() < 801 && $(window).width() > 385) {
						columns = 2;
					} else
					if($(window).width() < 385) {
						columns = 1;
					} 
					else {
						columns = parseInt($(this).attr('data-columns'));
					}
					
				}
				this.isotopeColumns();

				isotopeItem.css('width',parseInt(($container.width() / columns),10));
				imagesLoaded(element,function(instance){
					$container.isotope({
						itemSelector: isotopeItem,
						layoutMode: layout,
						columnWidth: parseInt(($container.width() / columns ),10)
					});
					$container.animate({'opacity': 1},1300);
				});
				
				$container.parent().find('.grve-filter li').click(function(){
					var selector = $(this).attr('data-filter');
					$container.isotope({
						filter: selector
					});
					$(this).addClass('selected').siblings().removeClass('selected');
				});
				
				$(window).smartresize(function(){
					$container.isotope({
						itemSelector: isotopeItem,
						layoutMode: layout,
						columnWidth: parseInt(($container.width() / columns ),10)
					});
				});
			});

		},
		
		stampGallery: function(){
		
			$('.grve-stamp-masonry').each( function() {
				var $container = $(this),
					item = $container.find('.grve-stamp-element'),
					cornerStamp = $container.find('.grve-corner-stamp'),
					element = $container.find('img'),
					columns = parseInt($(this).attr('data-columns'));
					
				this.galleryColumns = function(){
				
					if($(window).width() < 801 && $(window).width() > 385) {
						columns = 2;
					} else
					if($(window).width() < 385) {
						columns = 1;
					} 
					else {
						columns = parseInt($(this).attr('data-columns'));
					}
					
				}
				this.galleryColumns();

				item.css('width', parseInt($container.width() / columns));
				if($('html').hasClass('grve-mobile') ) {
					cornerStamp.css('width', item.width() +2);
				} else {
					cornerStamp.css('width', item.width()*2 +4);
				}
				
				imagesLoaded(element,function(instance){
					$container.isotope({
						itemSelector: item,
						masonry: {
							columnWidth: parseInt($container.width() / columns),
							cornerStampSelector: cornerStamp
						}
					});
					$container.animate({'opacity': 1},600);
				});
				
				$(window).smartresize(function(){
					$container.isotope({
						itemSelector: item,
						masonry: {
							columnWidth: parseInt($container.width() / columns),
							cornerStampSelector: cornerStamp
						}
					});
				});
			});

		},
		
		filters: function(){
		
			var item = $('.grve-blog-label .grve-filter li');
			if(item.parent().parent().parent().hasClass('grve-related-post')) return;
			item.each( function() {
				var itemWidth = $(this).outerWidth();
				
				if($('html.grve-mobile').length){
					$(this).css({'width':itemWidth + 10});
					return;
				}
				if($(this).hasClass('selected')) {
					$(this).css({'width':itemWidth + 10});
				} else {
					$(this).css({'width':30});
				}

				
				$(this).hover(function(){
					$(this).css({'width':itemWidth  + 10});
				},function(){
					if($(this).hasClass('selected')) return;
					$(this).css({'width':30});
				
				});

				$(this).click(function(){
					$(this).css({'width':itemWidth  + 10}).siblings().css({'width':30});
				});

			});
		
		},
		
		portfolioFields: function(){
		
			$('.grve-fields li .grve-fields-title').click(function () {
				$(this)
					.toggleClass('active').next().slideToggle(350)
					.parent().siblings().find('.grve-fields-title').removeClass('active')
					.next().slideUp(350);
			});
		
		},
		
		hovers: function(){
		
			$(' .grve-hover-item ').each( function() { 
			
				$(this).hoverdir(); 
			
			});
			
		},
		
		fullWidth: function() {
		
			var $outerSpace = Math.ceil( (($(window).width() - parseInt($('.grve-main-content').width())) / 2) );
		
			$('.grve-main-content .grve-section, .grve-partner-advanced li').each(function(){
			
				if($('.grve-sidebar').length && $(window).width() > 959){
					if($('.grve-right-sidebar').length){
						$(this).css({
							'margin-left': - $outerSpace ,
							'margin-right': - ($outerSpace + $('.grve-sidebar').outerWidth() + 30),
							'padding-left':  $outerSpace,
							'padding-right':  ($outerSpace + $('.grve-sidebar').outerWidth() + 30)
						});
					} else {
						$(this).css({
							'margin-left': - ($outerSpace + $('.grve-sidebar').outerWidth() + 30) ,
							'margin-right': - $outerSpace,
							'padding-left':  ($outerSpace + $('.grve-sidebar').outerWidth() + 30),
							'padding-right':  $outerSpace
						});
					}
				} else {
				$(this).css({
					'margin-left': - $outerSpace ,
					'margin-right': - $outerSpace,
					'padding-left':  $outerSpace,
					'padding-right':  $outerSpace
				});	
				}
			});
			
			$('.grve-fullwidth-element').each(function(){
			
				if($('.grve-sidebar').length && $(window).width() > 959){
					if($('.grve-right-sidebar').length){
						$(this).css({
							'margin-left': - $outerSpace ,
							'margin-right': - ($outerSpace + $('.grve-sidebar').outerWidth() + 30)
						});
					} else {
						$(this).css({
							'margin-left': - ($outerSpace + $('.grve-sidebar').outerWidth() + 30) ,
							'margin-right': - $outerSpace
						});
					}
				} else {
				$(this).css({
					'margin-left': - $outerSpace ,
					'margin-right': - $outerSpace
				});	
				}
				
			});
			
		},
		
		fixedSidebar: function(){
		
			var sidebar = $('.grve-sidebar.grve-fixed-sidebar'),
				content = $('.grve-main-content'),
				contentWidth = content.outerWidth(),
				top = 150,
				margin = 0;

			
			if(!$('.grve-left-sidebar').length) {
				margin = contentWidth +30;
			}
			
			$(window).on('scroll', function() {	
			
				if(!sidebar.length || sidebar.height() >= content.height() ) return;
				var contentTop = content.offset().top,
					contentHeight = content.height(),
					sidebarHeight = sidebar.height(),
					contentBottom = contentTop + contentHeight;	
					
					if( $(window).scrollTop() > contentTop - top && $(window).scrollTop() < contentBottom - ( top + sidebarHeight )){
						sidebar.css({'position':'fixed', 'margin-left':margin, 'top':top, 'bottom':'auto'});
					} 
					else if( $(window).scrollTop() > contentTop ){
						sidebar.css({'position':'absolute', 'margin-left':margin, 'top':'auto', 'bottom':0});
					} 
					else if( $(window).scrollTop() < contentTop ){
						sidebar.css({'position':'static', 'margin-left':0, 'top':'auto', 'bottom':0});
					}
			});

		},
		
		progressBars: function(){
		
			$('.grve-progress-bar').each(function() { 
				var val = $(this).attr('data-value'),
					percentage = $('<div class="grve-percentage">'+ val + '%'+'</div>');
				$(this).find('.grve-bar-line').delay(1000).animate({width: val + '%'}, 1200, 'easeOutBack');
				percentage.appendTo($(this).find('.grve-bar'));
				$(this).find('.grve-percentage').delay(1200).animate({left: val + '%'}, 1200, 'easeOutBack');
			});
		
		},
		
		accordionToggle: function(){
		
			$('.grve-toggle-wrapper li.active').find('.grve-title').addClass('active');
			$('.grve-toggle-wrapper li .grve-title').click(function () {
				$(this)
					.toggleClass('active')
					.next().slideToggle(350);
			});
			
			$('.grve-accordion-wrapper li.active').find('.grve-title').addClass('active');
			$('.grve-accordion-wrapper li .grve-title').click(function () {
				$(this)
					.toggleClass('active').next().slideToggle(350)
					.parent().siblings().find('.grve-title').removeClass('active')
					.next().slideUp(350);
			});
		
		},
		
		tabs: function(){
		
			this.titleSize = function(){
				$('.grve-horizontal-tab').each(function(){
					var numberTitles = $(this).find('.grve-tabs-title li').size(),
						tabTitles = $(this).find('.grve-tabs-title');
						
					if($(window).width() < 641 ){
						$(this).find('.grve-tabs-title li').css('width', '');
					} else {
						$(this).find('.grve-tabs-title li').css('width', tabTitles.width() / numberTitles).parent().animate({'opacity':1},900);
					}
				});
			}
			this.titleSize();
			$(window).resize(this.titleSize);
			
			$('.grve-tabs-title li').click(function () {
				$(this).addClass('active').siblings().removeClass('active');
				$(this).parent().parent().find('.grve-tabs-wrapper').find('.grve-tab-content').eq($(this).index()).addClass('active').siblings().removeClass('active');
			});
		
		},
		
		infoBox: function(){
		
			var infoMessage = $('.grve-message'),
			closeBtn = infoMessage.find($('.grve-close'));
			closeBtn.click(function () {
				$(this).parent().slideUp(150);
			});	
			
		},
		
		team: function(){
		
			$('.grve-team-item').each(function () {
				var $that = $(this),
					teamMedia = $that.find('.grve-team-media'),
					teamPerson = $that.find('.grve-team-person'),
					teamSocial = $that.find('.grve-team-social');
					
				function grve_team_size() {
					teamMedia.css('height',teamMedia.width());
				}
				grve_team_size();
				$(window).resize(grve_team_size);
				
				$that.hover(function(){
					teamPerson.stop().animate({'top': - teamSocial.height()},{queue:false,duration:200, easing:'easeOutQuart'});
					console.log(teamSocial.height());
				}, function() {
					teamPerson.stop().animate({'top': 0},{queue:false,duration:400, easing:'easeInOutQuad'});
				});
			});
		
		},
		
		advancedPartners: function(){
		
			$('.grve-partner-advanced').each(function () {
			
				var partners = $(this).find('li'),
					partnersNumber = partners.size(),
					cnt = -1;
				
				partners.each(function () {
				
					cnt++;
					$(this).find('.grve-partner-color').css('opacity',cnt * (1 / partnersNumber));
					
				});
				
				partners.click(function(){
				
					$(this).find('.grve-partner-content').slideToggle(600, 'easeOutBack');
				});
				
			});
			
		},
		
		map: function(){
					
			$('.grve-map').each( function() {
				var map = $(this),
					address = map.attr('data-address'),
					maptype = map.attr('data-maptype');		
				
				map.css({'opacity':0});
				
				map.gMap({
					maptype: maptype,
					scrollwheel: false,
					draggable: false,
					zoom: 14,
					controls: {
						zoomControl: true,
						zoomControlOptions: {
							style:google.maps.ZoomControlStyle.SMALL,
							position: google.maps.ControlPosition.LEFT_CENTER
						},
						mapTypeControl:false
					},
					markers: [
						{
							address: address,
							popup: false,
						}
					],
					icon:
						{
							image:              "images/markers/markers.png",
							shadow:             false,
							iconsize:           [90, 54],
							shadowsize:         false,
							iconanchor:         [45, 60],
							infowindowanchor:   [20, 60]
						}
				});
				map.delay(600).animate({'opacity':1});
			
			});

		},
		
		videoBg: function(){
		
			$('.grve-video-bg-element').css('display','block');
			$('.grve-video-bg-element').each(function(){
				var video = $(this),
					videoHeight = video.height(),
					videoSectionHeight = video.parent().outerHeight();
				
				//set video top position
				if( videoSectionHeight >= videoHeight ){
					video.css('top', -(videoSectionHeight - videoHeight) /2 );
				} else {
					video.css('top', -videoSectionHeight /2 );
				}

			});
		
		},
		
		fitVid: function(){
		
			$(".grve-video, .grve-media").fitVids();
		
		},
		
		backtoTop: function(){
		
			var btnUp = $('<div/>', {'class':'grve-top-btn'});
				btnUp.appendTo('#grve-wrapper');

			$('.grve-top-btn').click(function(){
			
				$('html, body').animate({scrollTop: 0}, 1200, 'easeInOutQuad');
			
			});
			$(window).on('scroll', function() {			
				if ($(this).scrollTop() > 600)
					$('.grve-top-btn').addClass('active');
				else
					$('.grve-top-btn').removeClass('active');
			});
		
		},
		
		contactForm: function(){
		
			$.fn.resetForm = function () {
			  $(this).each (function() { this.reset(); });
			}
			
			$('.grve-form-button').click(function(){
				
				var currentForm = $(this).closest('form.grve-form');
								
				var nameElem = currentForm.find("[name='name']").first();
				var emailElem = currentForm.find("[name='email']").first();
				var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

				currentForm.find(".grve-form-result").removeClass('active').html("");
				
				if ( "" == nameElem.val() ){ 
					currentForm.find(".grve-form-result").addClass('active').html("Name must not be empty!");
					nameElem.focus();
				} else if ( !emailReg.test( emailElem.val() ) || "" == emailElem.val() ) {
					currentForm.find(".grve-form-result").addClass('active').html("Invalid Email, please provide a correct email!");
					emailElem.focus();
				} else {
				
					$.post("send-form.php", currentForm.serialize(),  function(response) {
						if ( 'sent' == response ) {
							currentForm.find(".grve-form-result").addClass('active').html("Your email was sent!");
							currentForm.resetForm();
						} else {
							currentForm.find(".grve-form-result").addClass('active').html("Your email failed, try again later!");
						}
					});
				}
				return false;
			 
			});	
		
		}

	};
	
	var isMobile = {
		Android: function() {
			return navigator.userAgent.match(/Android/i);
		},
		BlackBerry: function() {
			return navigator.userAgent.match(/BlackBerry/i);
		},
		iOS: function() {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
		Opera: function() {
			return navigator.userAgent.match(/Opera Mini/i);
		},
		Windows: function() {
			return navigator.userAgent.match(/IEMobile/i);
		},
		any: function() {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		}
	};
	
	Main.init();
	
	//Window Resize
	$(window).afterResize(function() {
		
		//Header Settings
		Main.headerSettings();
		
		//Feature Section
		Main.featureSection();
			
		//Section Full Width
		Main.fullWidth();
		
		//Carousel
		Main.carousel();
		
		//Isotope
		Main.isotope();
		
		//Stamp Gallery
		Main.stampGallery();
		
		//Fixed Sidebar
		Main.fixedSidebar();
		
		//Slider
		Main.slider();
		
		//Map
		Main.map();
		
	});
			
	$(document).ready( function() {
		
		//Parallax Slider
		$('.scene').parallax();

		

	});
	
})(jQuery);
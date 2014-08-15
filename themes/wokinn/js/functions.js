(function($){

	"use strict";

	$(function(){
		var isActive;


		// Controla js en .large
		mediaCheck({
		    media: '(min-width: 64.063em)',
		    	entry: function() {
		      		alturaHeader();
		      		console.log('enter large');
		      		$(window).resize( function(){
						alturaHeader();
					});

					$('.hasTooltip').each(function() {
						console.log($(this).next('div img'));
						$(this).qtip({
							content: {
								text: $(this).next('div')
							},
							position: {
						        viewport: $(window),
						        my: 'bottom center',
						        at: 'center',
						        target: $(this).find('.nombre'),
						    },
						    events: {
								render: function(event, api) {
									var elem = api.elements.tip;
								}
							}
						});
					});
	    		}
		});


		// Controla js en .medium
		mediaCheck({
		    media: '(min-width: 40.063em)',
		    	entry: function() {
					/*alturaHeader();
		      		console.log('enter medium');
		      		$(window).resize( function(){
						alturaHeader();
					});*/
					if ( $('.grid').length > 0 ){
						console.log(seccionActual);
						if (seccionActual == 'nosotros')
							isotopeA();
						isotope();
					}

					$('.hasTooltip').each(function() {
						$(this).qtip('destroy');
					});
	    		},
		    	exit: function() {
		    		console.log('exit medium');
		    		console.log(isActive);
		    		if ( isActive == true ){
		    			isotopeDestroy();
		    			console.log('después de destruir');
		    		}

		    	}
		});
		// Controla js en .small y .xmall
		mediaCheck({
		    media: '(max-width: 40.062em)',
		    	entry: function() {
	    			togglePlatillosMovil();
	    		},
		    	exit: function() {
		    	}
		});

		//TOOLTIP


		//Fancybox
	    $('.fancybox').fancybox({
	    	beforeShow : function() {
		        var alt = this.element.find('img').attr('alt');
		        this.inner.find('img').attr('alt', alt);
		        this.title = alt;
		    }
	    });

		///////////////////////////////////
		/////////// FUNCIONES /////////////
		///////////////////////////////////

		// Menú móvil
		//mostrarMenu();
		toggleMenuMovil();

		if(seccionActual == 'contacto')
			creaMapa();

		function isotope(){
			var $container = $('.grid').imagesLoaded( function() {
				$container.isotope({
				  itemSelector: 'article',
				  layoutMode: 'masonry'
				});
			});
			isActive = true;
			console.log(isActive);
		}

		function isotopeA(){
			var $container = $('.grid').imagesLoaded( function() {
				$container.isotope({
				  itemSelector: 'a',
				  layoutMode: 'masonry'
				});
			});
		}

		function isotopeDestroy(){
			var $container = $('.grid');
			$container.isotope('destroy');
		}

		function validacion(forma){
			$(forma).validate();
		}

		///////////////////////////////////
		/////////// DESKTOP /////////////
		///////////////////////////////////

		validacion('.forma-contacto');

		///////////////////////////////////
		/////////// RESPONSIVE /////////////
		///////////////////////////////////



	});

	function alturaHeader(isSet){
		var alturaH1 = $('h1').height();
		$('header > div > .bloque-datos').height(alturaH1);
	}

	function mostrarMenu() {
		$(window).resize(function(){
			if ($(window).width() > 750)
		   		$('.navegacion').attr('style', 'display: block');
		   	else
		   		$('.navegacion').attr('style', 'display: none');
		});
	}

	function toggleMenuMovil(){
		$('#btn-movil').on('click', function(e){
			e.preventDefault();
			if($('.navegacion').css('display')=='none'){
				$(this).find('a').css('color', '#FFF');
				$('.navegacion').slideDown('fast');
			} else {
				$(this).find('a').css('color', '#E97200');
				$('.navegacion').slideUp('fast');
			}
		});
	}

	function creaMapa(){
		var styles = [
			{
			  stylers: [
				{ hue: "#E97200" }
			  ]
			}
		];

		var map;
		var lat = 19.4179248
		var lng = -99.1635773;
		function initialize() {
			var centro = new google.maps.LatLng(lat, lng);
			var mapOptions = {
				zoom: 17,
				center: centro,
				styles: styles
			};
			map = new google.maps.Map(document.getElementById('map'),
			mapOptions);
			var marker = new google.maps.Marker({
				position: centro,
				map: map,
				title:"Wok Inn"
		 	});
		}

		google.maps.event.addDomListener(window, 'load', initialize);
	}

	function togglePlatillosMovil(){
		$('.categoria h3').unbind('click').on('click', function(){
			var platillos = $(this).parent().find('ul');
			console.log('twice');
			if(platillos.css('display') == 'none'){
				platillos.slideDown('slow');
				console.log('display none');
			} else {
				platillos.slideUp('fast');
				console.log('display else');
			}
		});
	}

})(jQuery);
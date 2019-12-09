(function () {

	'use strict';



	// iPad and iPod detection
	var isiPad = function(){
		return (navigator.platform.indexOf("iPad") != -1);
	};

	var isiPhone = function(){
	    return (
			(navigator.platform.indexOf("iPhone") != -1) ||
			(navigator.platform.indexOf("iPod") != -1)
	    );
	};

	// Main Menu Superfish
	var mainMenu = function() {

		$('#primary-menu').superfish({
			delay: 0,
			animation: {
				opacity: 'show'
			},
			speed: 'fast',
			cssArrows: true,
			disableHI: true
		});

	};

	// Parallax
	var parallax = function() {
		$(window).stellar();
	};


	// Offcanvas and cloning of the main menu
	var offcanvas = function() {

		var $clone = $('#menu').clone();
		$clone.attr({
			'id' : 'offcanvas-menu'
		});
		$clone.find('> ul').attr({
			'class' : '',
			'id' : ''
		});

		$('#page').prepend($clone);

		// click the burger
		$('.js-fh5co-nav-toggle').on('click', function(){

			if ( $('body').hasClass('offcanvas') ) {
				$('body').removeClass('offcanvas');
			} else {
				$('body').addClass('offcanvas');
			}


		});

		$('#offcanvas-menu').css('height', $(window).height());

		$(window).resize(function(){
			var w = $(window);


			$('#offcanvas-menu').css('height', w.height());

			if ( w.width() > 769 ) {
				if ( $('body').hasClass('offcanvas') ) {
					$('body').removeClass('offcanvas');
				}
			}

		});

	}



	// Click outside of the Mobile Menu
	var mobileMenuOutsideClick = function() {
		$(document).click(function (e) {
	    var container = $("#offcanvas-menu, .js-fh5co-nav-toggle");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {
	      if ( $('body').hasClass('offcanvas') ) {
				$('body').removeClass('offcanvas');
			}
	    }
		});
	};


	// Animations

	var contentWayPoint = function() {
		var i = 0;
		$('.animate-box').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('animated') ) {

				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .animate-box.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							el.addClass('fadeInUp animated');
							el.removeClass('item-animate');
						},  k * 50, 'easeInOutExpo' );
					});

				}, 500);

			}

		} , { offset: '85%' } );
	};

	var stickyBanner = function() {
		var $stickyElement = $('.sticky-banner');
		var sticky;
		if ($stickyElement.length) {
		  sticky = new Waypoint.Sticky({
		      element: $stickyElement[0],
		      offset: 0
		  })
		}
	};

	// Document on load.
	$(function(){
		mainMenu();
		parallax();
		offcanvas();
		mobileMenuOutsideClick();
		contentWayPoint();
		stickyBanner();
	});

	$(function(){
        $('#imagem').change(function(){
            const file =$(this)[0].files[0]
            const fileReader = new FileReader()
            fileReader.onloadend = function(){
                 $('#preview').attr('src', fileReader.result)
            }
            fileReader.readAsDataURL(file)
        })

	})

	// lista AJAX para ONG
	 $(function(){
		var id = $('#id-perfil').val()
		$.ajax({
				method:'GET',
				url: 'home/listar-ongs/'+id,
					success: function(response){
						console.log(response)
					   for(var i = 0; i < response.ongs.length; i++ ){

                        if(response.ongs[i].pivot.permission_level == 1){


                            $('#card').attr('style', 'display:block;')

							if(response.ongs[i].avatar == ''){
								$('#card').prepend('<a href="/homeOng/'+response.ongs[i].id+'" ><img src="images/avatar-ong-default.png" class="card-img-top" width="100px" height="200px" alt="..."></a>\
								<div class="card-body"><h5 class="card-title">'+response.ongs[i].name+'</h5>\
									 <p class="card-text">'+ response.ongs[i].description +'</p>\
									<a href="/homeOng/'+response.ongs[i].id+'" class="btn-editar">Minha ONG</a>\
								<div> ')
							}else{
							$('#card').prepend('<a href="/homeOng/'+response.ongs[i].id+'" ><img src="' + response.ongs[i].avatar + '" class="card-img-top" width="100px" height="200px" alt="..." title="'+response.ongs[i].name+'"></a>\
												<div class="card-body"><h5 class="card-title">'+response.ongs[i].name+'</h5>\
												 	<p class="card-text">'+ response.ongs[i].description +'</p>\
													<a href="/homeOng/'+response.ongs[i].id+'" class="btn-editar">Minha ONG</a>\
												<div> ')

								}
                            }
                        else if(response.ongs[i].pivot.permission_level == 0){

                            $('#ong-follow-title').attr('style', 'display:block;')
                            $('#tabela-acompanho').attr('style', 'display:block;')
							$('#tabela-acompanho').prepend('<tr>\
																<td><a href="/homeOng/'+response.ongs[i].id+'" ><img src="'+response.ongs[i].avatar+'" title="'+response.ongs[i].name+'"></a></td>\
																<td>'+response.ongs[i].name+'</td>\
																<td class="text-truncate" style="max-width: 150px;">'+response.ongs[i].description+'</td>\
															</tr>')

                        }
                        }
					}

					})
				});

	// lista AJAX para EVENTOS
	$(function(){
		var id = $('#id-perfil').val()
		$.ajax({
				method:'GET',
				url: 'home/listar-eventos/'+id,
					success: function(response){
						console.log(response)

						if(response){
							/* $('#card-evento').attr('style', 'display:block;') */
							for(var i = 0; i < response.actions_events.length; i++ ){
								$('#card-evento-title').attr('style', 'display:block;')

								$('#card-evento').prepend('<div class="evento-content box-img-animate"><a href="/eventos/'+response.actions_events[i].id+'" class="galeria" class="d-flex align-items-center ">\
																<img src="'+response.actions_events[i].image+'" title="'+response.actions_events[i].title+'" >\
															</a>\
															<div class="text-truncate" >'+response.actions_events[i].description+'</div></div>')



						}
					}
					}

					})
				});





$('#btn-busca').click(function(e){
    var busca = $('#busca').val()
    if(!busca){
        $('#alert-busca').prop('style', 'display:block;')
        }else{
            $.ajax({
                method:'GET',
                url: 'busca/'+busca,
                success: function(response){
                    if(response.length > 0){
                        $('#box-result').css('display', 'block')
                        $('#box-result').css('max-height', '800px')
                        $('#box-result').css('overflow', 'scroll')
                            for(var i = 0; i < response.length; i++ ){
                                $('#tabela').addClass('reset').append('<tr class="result-busca"><td width="25%"><a href="homeOng/'+response[i].id+'" ><img src="'+response[i].avatar+'" title="'+response[i].name+'"></a></td><td width="25%">'+response[i].name+'</td><td width="25%">'+response[i].description+'</td> <td width="25%">'+response[i].district+'</td></tr>')
                            }
                        }
                        else{
                            alert('Nenhum resultado encontrado')
                            $('#tabela').empty()
                        }
                    }
                })
            }
            e.preventDefault()
                if($('.result-busca').length >0 ){
                    $('.reset').empty()
                }
});




}());


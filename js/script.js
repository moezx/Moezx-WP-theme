(function ($, window) {

    var App = App ||
        {
            init: function () {
                $('.js-toggle-search').on('click', function () {
                    $('.js-search').toggleClass('is-visible');
                });

                $('.js-gallery').find('a').each(function () {
                    if ($(this).children('img').length) {
                        $(this).attr('rel', 'gallery');
                    }
                }).end().magnificPopup({
                    delegate: '[rel="gallery"]',
                    type: 'image',
                    gallery: {
                        enabled: true
                    }
                });

                $('.js-next a').on('click', function (e) {
                    $(infinite_scroll.contentSelector).infinitescroll(infinite_scroll);

                    var $body = $('body');

                    $body.scrollTop($body.scrollTop() - 1);

                    e.preventDefault();
                })
            }
        };
  
    $(document).ready(function () {
        App.init();
		
		var navToggle = $('#nav-toggle'),
			nav = $('nav'),
			navLinks = nav.find('a');

			navToggle.on('click',function(){
			navToggle.toggleClass('active');
			nav.toggleClass('open');
		return false;
	});
			navLinks.on('click',function(){
			navToggle.toggleClass('active');
			nav.toggleClass('open');
	});

	$(document).on('click',function(){
			if (nav.hasClass('open')){
			navToggle.toggleClass('active');
			nav.toggleClass('open');
	}
	});
	
	$('.btn-slide').click(function(){
	$('#panel').slideToggle("slow");
	$(this).toggleClass("active"); return false;
	});		
	
	$(window).scroll(function() {   
			var header = $('header');
  
			if ($(this).scrollTop() > 1){  
			header.addClass("scrolled");
	}
		else{
    header.removeClass("scrolled");
	}
	});
	
	$( "#social-share" ).click(function() {
	$("#social").toggleClass("visible").slideToggle(200);
	});

	if ( $( '.welcome' )[0] ){
	$( '.author-info' ).hide();
	$( 'span.info-edit' ).click(function(){
	$( '.author-info' ).toggle();
	});
	}
		
    });
}(jQuery, window));

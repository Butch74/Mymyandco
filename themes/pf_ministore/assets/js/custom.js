/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */
 $(document).ready(function(){
 	floatHeader();
 	//popup
 	$('.magnific_item').magnificPopup({
		  	type:'image',
		  	mainClass: 'mfp-with-zoom', // this class is for CSS animation below

		  	zoom: {
		      enabled: true, // By default it's false, so don't forget to enable it

		      duration: 300, // duration of the effect, in milliseconds
		      easing: 'ease-in-out', // CSS transition easing function

		      // The "opener" function should return the element from which popup will be zoomed in
		      // and to which popup will be scaled down
		      // By defailt it looks for an image tag:
		      opener: function(openerElement) {
		        // openerElement is the element on which popup was initialized, in this case its <a> tag
		        // you don't need to add "opener" option if this code matches your needs, it's defailt one.
		        return openerElement.is('a') ? openerElement : openerElement.find('a');
		    }
		  	},
		  	fixedContentPos: false
		 });
 	
	

	  //gototop
		$(window).scroll(function() {
		    if ($(window).scrollTop() >= 200) {
		        $('#to_top').fadeIn();
		    } else {
		        $('#to_top').fadeOut();
		    }
		});
		$("#to_top").click(function(){
			$("body,html").animate({scrollTop:0	},"normal");
			$("#page").animate({scrollTop:0	},"normal");
				return!1
		});

});

(function(window) {

	'use strict';

	var openCtrl = document.querySelector('.search-focus'),
		closeCtrl = document.querySelector('.button-close'),
		searchContainer = document.querySelector('.search-widget'),
		inputSearch = searchContainer.querySelector('.ps_search');

	function init() {
		initEvents();	
	}

	function initEvents() {
		openCtrl.addEventListener('click', openSearch);
		closeCtrl.addEventListener('click', closeSearch);
		document.addEventListener('keyup', function(ev) {
			// escape key.
			if( ev.keyCode == 27 ) {
				closeSearch();
			}
		});
	}

	function openSearch() {
		searchContainer.classList.add('open');
		inputSearch.focus();
	}

	function closeSearch() {
		searchContainer.classList.remove('open');
		inputSearch.blur();
		inputSearch.value = '';
	}

	init();

})(window);

function floatHeader(){
	if($(window).width() >= 1024){
	    if( $("body").hasClass("keep-header") ){
	        $("#header").addClass( "headerFixed" );
	        var hideheight =  $("#header").height()+120; 
	        $("#page").css( "padding-top", $("#header").height() );
	        $(window).scroll(function() {
	            var pos = $(window).scrollTop();
	            if( pos >= hideheight ){
	                $(".header-default").addClass("mini-navbar");
	                $(".header1").addClass("mini-navbar");
	            }else {
	               $(".header-default").removeClass("mini-navbar");
	               $(".header1").removeClass("mini-navbar");
	            } 
	        });
	    }
	}else{
		$("#header").removeClass( "headerFixed" );
	}
}
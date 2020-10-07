$(document).ready(function() {
    "use strict";
	
	
	/*----------------------------- Scroll To Top -----------------------*/
	$(window).on('scroll',function () {
		if ($(this).scrollTop() > 600) {
			$('#scrollup').fadeIn();
		} else {
			$('#scrollup').fadeOut();
		}
	});

	$('#scrollup').on('click',function(){
		$('html, body').animate({
		scrollTop: 0
	}, 1500);
	return false;
	});
	
	
	/*-------------- Counterup ------------------*/	
	$('.counter').counterUp({
		delay: 10,
		time: 10000
	});
	
	
	/*-------------- Gmaps ------------------*/	
	var map;
	$('.ev-map-display').each(function() {
	  	var element = $(this).attr('id');
	  	map = new GMaps({
	  	el: '#' + element,
		lat: 23.7947172,
        lng: 90.3971412,
		scrollwheel: false
	  });
	  
      map.addMarker({
        lat: 23.7947172,
        lng: 90.3971412,
        title: 'Banani',
		icon:'assets/images/icon/mapicon.png',
       
      });
      map.addMarker({
        lat: 23.8045652,
        lng: 90.4134221,
		icon:'assets/images/icon/mapicon.png',
        title: 'Marker with InfoWindow',
        infoWindow: {
          content: '<p>HTML Content</p>'
        }
      });
	});
	
	
    /*----------------------------- wow  -----------------------*/
	var wow = new WOW(
		{
			boxClass:     'wow',      // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset:       0,          // distance to the element when triggering the animation (default is 0)
			mobile:       true,       // trigger animations on mobile devices (default is true)
			live:         true,       // act on asynchronously loaded content (default is true)
			callback:     function(box) {
				// the callback is fired every time an animation is started
				// the argument that is passed in is the DOM node being animated
			},
			scrollContainer: null // optional scroll container selector, otherwise use window
		}
	);
	wow.init();
	
	
	/*-------------- Search-box ------------------*/	
	var submitIcon = $('.searchbox-icon');
	var inputBox = $('.searchbox-input');
	var searchBox = $('.searchbox');
	var isOpen = false;
	submitIcon.click(function(){
		if(isOpen == false){
			searchBox.addClass('searchbox-open');
			inputBox.focus();
			isOpen = true;
		} else {
			searchBox.removeClass('searchbox-open');
			inputBox.focusout();
			isOpen = false;
		}
	});  
	submitIcon.mouseup(function(){
		return false;
	});
	searchBox.mouseup(function(){
		return false;
	});
	$(document).mouseup(function(){
		if(isOpen == true){
			$('.searchbox-icon').css('display','block');
			submitIcon.click();
		}
	});
		
	function buttonUp(){
		var inputVal = $('.searchbox-input').val();
		inputVal = $.trim(inputVal).length;
		if( inputVal !== 0){
			$('.searchbox-icon').css('display','none');
		} else {
			$('.searchbox-input').val('');
			$('.searchbox-icon').css('display','block');
		}
	}
		
	$('#myTabs a').on('click',function (e) {
	  e.preventDefault()
	  $(this).tab('fast')
	})
	
	
	/*-------------- lsb lightbox ------------------*/	
	$.fn.lightspeedBox();
	
	
	/*-------------- Responsive-Menu ------------------*/	
	jQuery(function ($) {
		var menu = $('.rm-nav').rMenu({
		});
	});
	
	
	/*-------------- Revolution Slider  ------------------*/	
	var tpj=jQuery;
	var revapi1081;
	tpj(document).ready(function() {
		if(tpj("#rev_slider").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider");
		}else{
			revapi1081 = tpj("#rev_slider").show().revolution({
				sliderType:"standard",
jsFileLocation:"assets/js/",
				sliderLayout:"fullscreen",
				dottedOverlay:"none",
				delay:5000,
				navigation: {
					keyboardNavigation:"on",
					keyboard_direction: "vertical",
					mouseScrollNavigation:"off",
					mouseScrollReverse:"default",
					onHoverStop:"off",
					touch:{
						touchenabled:"on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "vertical",
						drag_block_vertical: false
					}
					,
					bullets: {
						enable:true,
						hide_onmobile:true,
						hide_under:778,
						style:"hermes",
						hide_onleave:false,
						direction:"vertical",
						h_align:"right",
						v_align:"center",
						h_offset:20,
						v_offset:0,
						space:5,
						tmp:''
					}
				},
				responsiveLevels:[1240,1024,778,480],
				visibilityLevels:[1240,1024,778,480],
				gridwidth:[1240,1024,778,480],
				gridheight:[600,600,600,600],
				lazyType:"smart",
				shadow:0,
				spinner:"spinner2",
				stopLoop:"off",
				stopAfterLoops:0,
				stopAtSlide:0,
				shuffle:"off",
				autoHeight:"off",
				fullScreenAutoWidth:"off",
				fullScreenAlignForce:"off",
				fullScreenOffsetContainer: ".header",
				fullScreenOffset: "",
				disableProgressBar:"on",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
			});
		}
	});
			
			
	/*-------------- Pre-loader ------------------*/	
	$("#loading").delay(200).fadeOut(500);
	$("#loading-center").on('click',function() {
	$("#loading").fadeOut(500);
	});
	
	
}(jQuery));
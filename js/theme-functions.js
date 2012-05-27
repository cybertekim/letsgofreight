$(document).ready(function() {
	//Tab Jquery
	$(".tab_content").hide(); 
	$("ul.tabs li:first").addClass("active").show(); 
	$(".tab_content:first").show(); 
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active");
		$(this).addClass("active"); 
		$(".tab_content").hide(); 
		var activeTab = $(this).find("a").attr("href"); 
		$(activeTab).fadeIn(); 
		return false;
	});
	
	//To top Jquery
	$().UItoTop({ easingType: 'easeOutQuart' });
	
	//TinyNav Jquery
	$('#menu').tinyNav({
	  active: 'selected'
	});	 
	
	//Social fade Jquery  
	$('.rssfade, .fbfade, .twfade, .drbfade').append('<span class="hover"></span>').each(function () {
	var $span = $('> span.hover', this).css('opacity', 0);
	$(this).hover(function () {
	  $span.stop().fadeTo(400, 1);
	}, function () {
	  $span.stop().fadeTo(500, 0);
	});	 
  
	//Flexslider Jquery
	$('.flexslider').flexslider();
	  
	//Client slider Jquery
	$('.clientslider').cycle({
		timeout: 7000,  // milliseconds between slide transitions (0 to disable auto advance)
		fx:     'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		prev:   '#clprev', // selector for element to use as click trigger for next slide  
		next:   '#clnext', // selector for element to use as click trigger for previous slide
		pause:   0,	  // true to enable "pause on hover"
		cleartypeNoBg: true, // set to true to disable extra cleartype fixing (leave false to force background color setting on slides)
		pauseOnPagerHover: 0 // true to pause when hovering over pager link
	});	
	
	//Bottom Carousel Jquery
	$('#carousel').elastislide({
		imageW 	: 185,
		minItems	: 4
	});
	
	//Twitter Jquery
	$("#twitter").getTwitter({
		userName: "Indoneztheme",
		numTweets: 1,
		loaderText: "Loading tweets...",
		slideIn: true,
		slideDuration: 750
	});
	
	//Fancybox Jquery
	$(".fancybox").fancybox({
		padding: 10,

		openEffect : 'elastic',
		openSpeed  : 250,

		closeEffect : 'elastic',
		closeSpeed  : 250,

		closeClick : true,

		helpers : {
			overlay : {
				opacity : 0.65
			}
		}
	});	
	
	//Fade portfolio
	$(".fade").fadeTo(1, 1);
		$(".fade").hover(
		  function () {$(this).fadeTo("fast", 0.45);},
		  function () { $(this).fadeTo("slow", 1);}
		);					
	
	});
});
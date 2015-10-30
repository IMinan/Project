/* Java Code */

$(document).ready(function(){
	$(window).scroll(function(){
		$('footer').css({
			"position": "relative"
		});

		var width = $(window).scrollTop();

		$('.navbar-top').animate({
			"position": "fixed",
			"padding": "0"
		});
	});



	$('.drop a.plus').click(function(){
		$(this).hide();
		$(this).next().show();

		$(this).next().next('.profile-article-text').stop().slideToggle(500);
	});

	$('.drop a.minus').click(function(){
		$(this).hide();
		$(this).prev().show();

		$(this).next('.profile-article-text').stop().slideToggle(500);
	});



	$('.article-header a').hover(function(){
		$(this).stop().animate({
			backgroundColor: "#fff",
          	color: "#000",
          	boxShadowColor: "#1fa67a"
		});

	}).mouseout(function(){
		$(this).stop().animate({
			backgroundColor: "#000",
          	color: "#fff",
		},200);	
		
	});

	$('.delete').hover(function(){
		$(this).stop().animate({
			backgroundColor: "#fff",
          	color: "#D30505",
          	boxShadowColor: "#333"
		},300);

	}).mouseout(function(){
		$(this).stop().animate({
			backgroundColor: "#D30505",
          	color: "#fff",
		},150);	
		
	});

	$('.navbar-nav li a').hover(function(){
		$(this).stop().animate({
			backgroundColor: "#444"
		},100);
	}).mouseout(function(){
		$(this).stop().animate({
			backgroundColor: "#000"
		},100);
	});
});
$(document).ready(function(){
	$("#mouse").mouseenter(function(){
		$(this).animate({height:"5%"},500)
	})
	$(".service").mouseenter(function(){
		$(this).animate({fontSize:"150%"},500)
	});

	$(".service").mouseleave(function(){
		$(this).animate({fontSize:"100%"},500)
	});
});
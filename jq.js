$(document).ready(function(){
	$(".fa-bars").click(function(){
		$("#dropMenu").fadeToggle(1000);
	});

	$(".service").mouseenter(function(){
		$(this).animate({fontSize:"150%"},500)
	});

	$(".service").mouseleave(function(){
		$(this).animate({fontSize:"100%"},500)
	});
});
$(document).ready(function(){
	//slider-overlay with play and stop effect
	$("#slider").mouseenter(function(){
		$("#slider-overlay").fadeIn(50);
	});
    $("#slider").mouseleave(function(){
        $("#slider-overlay").fadeOut(200);
    });
    $("#stop").click(function(){
    	$(this).hide();
    	$("#play").show();
	});
    $("#play").click(function(){
        $(this).hide();
        $("#stop").show();
    });

    //mouse anchor
   $("#mouse").click(function(){
        var target = document.getElementById("services");
        $('html, body').animate({scrollTop: $(target).offset().top}, 1000 );
    });

});

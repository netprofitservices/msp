
/* fade in sections function */
				
function chainAnim(e,s,o) {
		var $fade = $(e);
		 $fade.each(function( i ){
				$(this).delay(i * s).fadeTo(s,o);
		});
} 		  
				  



$(document).ready(function() {
 
 
 
			 
			 $(".right-bullet a").hover(
				  function () {
					$(this).delay(200).animate({
						left: '10'
					  }, 500);
				  }, 
				  function () {
					$(this).stop().animate({
						left: '0'
					  }, 500);
				  }
			);
			
			 
			 /*price option table fade in*/ 			 
				 $("#pricing-table article").hide();
				 chainAnim('.membership-option',500,'1');


  			 /*price table active class */
			 $("#pricing-table article").hover(
				 function () {
					$("#pricing-table article").removeClass("active");
					$(this).toggleClass("active");
				 }
				
			);
			

			


  			 /*price table button animate style */
			 $("#pricing-table .blue-green-btn, .animate-hover").hover(
				  function () {
					$(this).stop().animate({
						top: '-5'
					  }, 500, function() {
						// Animation complete.
					  });
				  }, 
				  function () {
					$(this).stop().animate({
						top: '0'
					  }, 200, function() {
						// Animation complete.
					  });
				  }
			);
			
			
			 
 /*map fades in */
				 $(".map .phases").hide();
				 chainAnim('.phases',500,'1');
			
						 /*price table active class */
						 $(".phase-one, .phase-one-text").hover(
							 function () {
								$(".phase-one-text").css({
									fontWeight: 'bold'
								});
								$(".phase-two").css({
									opacity: '0.4'
								});
								$(".phase-one").addClass("hover");
								$("#hover-des").text("Phase One");
								
							 }, function () {
								$(".phase-one-text").css({
										fontWeight: 'normal'
								});
								$(".phase-two").css({
									opacity: '1'
								});
								$(".phase-one").removeClass("hover");
								$("#hover-des").text("");
							  }
							
						);
						
						
			
						 /*price table active class */
						 $(".phase-two, .phase-two-text").hover(
							 function () {
								$(".phase-two-text").css({
									fontWeight: 'bold'
								});
								$(".phase-one").css({
									opacity: '0.4'
								});
								$(".phase-two").addClass("hover");
								$("#hover-des").html("Phase Two");
								
							 }, function () {
								$(".phase-two-text").css({
										fontWeight: 'normal'
								});
								$(".phase-one").css({
									opacity: '1'
								});
								$(".phase-two").removeClass("hover");
								$("#hover-des").html("");
							  }
							
						);
			
			
						 /*price table active class */
						 $(".phase-three").hover(
							 function () {
								$(".phase-three-text").css({
									fontWeight: 'bold'
								});
								$(".phase-three").addClass("hover");
								$("#hover-des").html("Phase Three");
								
							 }, function () {
								$(".phase-three-text").css({
										fontWeight: 'normal'
								});
								$(".phase-three").removeClass("hover");
								$("#hover-des").html("");
							  }
							
						);
			
			
			
			
	$(".member-requirement").hover(
				  function () {
					$(this).find(".arrow").show("slide", { direction: "left" }, 500);
				  }, 
				  function () {
					$(this).find(".arrow").fadeOut();
				  }
			);
			
			
/* ########### 

sticky button 

################## */	
			  $(".sticky").show("slide", { direction: "down" }, 1000);
		
				if($(window).scrollTop() + $(window).height() > $(document).height() - 150) {	
					   $(".sticky").css({
						  bottom: 150
					   });
				   }
		   

			
			
function isiPad(){
    return (navigator.platform.indexOf("iPad") != -1);
}

if( !(isiPad())){
    /* if not ipad*/
	
	
	
 /*when scroll, this breaks on iPad*/			
		$(window).scroll(function() {
			if($(window).scrollTop() + $(window).height() > $(document).height() - 150) {
			
			   $(".sticky").css({
				  bottom: 150
			   });
		   } else{
			   $(".sticky").css({
				  bottom: 0
			   });
		   }
		});
	
	
}




/* ########### 

Fancybox, Lightbox

################## */	
	$('.fancybox').fancybox(
			{type : 'iframe'}
	);
	
	$('.fancybox-small').fancybox(
	{
		maxWidth	: 750,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	}
	);
	

  			
			

  
});




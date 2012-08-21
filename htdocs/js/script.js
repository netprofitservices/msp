
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
			
			
			 /* general slide up down
			 $(".hasChildren").mouseenter( function () {
					  $(this).find(".show-hide").html("&#9668;");
					   $(this).find(".children").stop().slideDown();
					   $(this).addClass("selected");
					   
			
	
				  }
			);*/ 
			
			
			 /* general slide up down*/ 
			 $(".hasChildren a").click(function(){
					
					$(this).siblings(".children").stop().slideToggle();
					  $(this).find("span").html("&#9660;");
					   $(this).parent().toggleClass("selected");				
					   
								   
					   return false;
			 });
			 

			 
			 $(document).click(function() {
					$(".hasChildren .children").stop().slideUp();
					  $(".hasChildren .children span").html("&#9660;");
					   $(".hasChildren").removeClass("selected");
				
			});
			 
			 
			
			 /* upcoming events*/ 
			 $("#see-all-upcoming").click(function(){
				 $(".upcoming-events").slideToggle('slow', function() {
					 	if( $(this).is(":hidden") ){
							$("#see-all-upcoming").html("SHOW ALL EVENTS <span>&nbsp;</span>");
							$("#see-all-upcoming").removeClass("shown").addClass("hide");
						} else{
							$("#see-all-upcoming").html("HIDE ALL EVENTS <span>&nbsp;</span>");
							$("#see-all-upcoming").removeClass("hide").addClass("shown");
							
						}
					 
				 });
					 
				 return false;
			 });
			 
			 
			
			 
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

Instructor page

################## */	
			 $(".see-bio").hover(
				  function () {
					$(this).stop().animate({
						right: '40'
					  }, 500, function() {
						// Animation complete.
					  });
				  }, 
				  function () {
					$(this).stop().animate({
						right: '50'
					  }, 200, function() {
						// Animation complete.
					  });
				  }
			);
			
			 $(".instructor-list > li").hover(
				  function () {
					 $(this).addClass("active");
						$(".instructor-list > li:not('.active')").stop().fadeTo('fast', 0.4, function() {
						  // Animation complete.
						});
						
				  }, 
				  function () {
					 $(this).removeClass("active");
						$(".instructor-list > li").stop().fadeTo('fast', 1, function() {
						  // Animation complete.
						});
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

	
	
} else{
		
	/* hide sticky */	
	$(".sticky").hide();	

}


	var isiPhone = navigator.userAgent.toLowerCase().indexOf("iphone");
	if(isiPhone > -1)
	  {
			/* hide sticky */	
		$(".sticky").hide();	
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




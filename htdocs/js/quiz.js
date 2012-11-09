// JavaScript Document




$().ready(function() {
	
	
	$(".quiz-section .yes-no a").click(function(){
		
		$(this).siblings("a").removeClass("selected");
		$(this).addClass("selected");
		return false;
		
		alert("sdfs");
		
	});
	
	
	
});
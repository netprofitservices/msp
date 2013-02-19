

$(function() {




	$("#show-cat").click(function(event){
		event.preventDefault();
	});



	$("#tips-cat input[name=sort-tips]:radio").change(function () {
		

			
			if ($(this).attr("checked")) {
				
					var currentselected = $(this).siblings("span").text();			
					var currentselectedTipsClass = $(this).attr('id');	
										
					$(".tips-detail").fadeOut("fast");
					
					if ( currentselectedTipsClass == "tips-all") {
						$(".tips-detail").fadeIn("fast");	
						
					} else {
						$("."+ currentselectedTipsClass).fadeIn("fast");					
					};
					

            
					$("#show-cat").text(currentselected);
      	  }
			else {
				
			}
			
			
	});





});
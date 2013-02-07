

$(function() {




	$("#show-cat").click(function(event){
		event.preventDefault();
	});



	$("#tips-cat input[name=sort-tips]:radio").change(function () {
			
			if ($(this).attr("checked")) {
				
					var currentselected = $(this).siblings("span").text();
            
					$("#show-cat").text(currentselected);
      	  }
			else {
				
			}
			
			
	});





});
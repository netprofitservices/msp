


$.validator.setDefaults({
	
  /*invalidHandler: function(form, validator) {
      var errors = validator.numberOfInvalids();
      if (errors) {
			$(".form-btn").addClass("disabled");
     
      } else{
			$(".form-btn").removeClass("disabled");
	  }
    },*/

	submitHandler: function(form) { 
		fields = $(form).serialize()
		action = $(form).attr('action')

		$.post(action, fields, function(data, textStatus) {
			if (data == 'ok') {
				$("#form-message").removeClass("error");
				$("#form-message").fadeIn();
				$("#form-message").html(" <h2>Thank you!</h2> Your form has been submitted.");
				$(".form form").hide();
				$(".myform").hide();
				
				// Prepschool signup redirect to prepschool
				if (action == 'prepschoolsignup') {
					setTimeout('window.location.href = "prepschool"', 1000);
					
				}
			} else {
				$("#form-message").fadeIn();
				$("#form-message").addClass("error");
				$("#form-message").html("There was a problem saving your data.");
			}
		})
		
		
		return false
			//setTimeout("parent.$.fancybox.close()", 3000);		

/*			alert(a)
			alert(b)
			fields = $(form).serialize()
			action = $(form).attr('action')
			alert(fields)
			alert(action)
			$("#form-message").fadeIn();
			$("#form-message").html(" <h2>Thank you!</h2> Your form has been submitted.");
			$(".form form").hide();
			setTimeout("parent.$.fancybox.close()", 3000);

			return false	
*/		
	}
});




$.validator.addMethod(
    'noPlaceholder', function (value, element) {
        return value !== element.defaultValue;
    }, 'Please replace the default text.'
);



$().ready(function() {
	
	/*$(".myform input").keyup(function(event) {
		
		if($(".myform").valid() == true) {
			alert("valid");

		}
		
	});*/


	// validate contact form
	$("#contact-form").validate({
		onkeyup: false,
		rules: {	
			firstname: {
				required: true,
				minlength: 2
			},	
			phone:{
				number:true,
				minlength: 7,
				maxlength: 10
			},
			emailaddress: {
				required: true,
				email: true
			},
			comments: {
				required: true,
				minlength: 2
			}
		},
		messages: {	
			phone: "Please enter a correct phone number",
			emailaddress: "Please enter a valid email address"
			
		}
	});
	
	

	// validate newsletter form
	$("#newsletter-form").validate();
	
	
	
	
$('#join-network-form input[type="text"], #join-network-form input[type="email"], #member-login-form input[type="email"],  #networkty-sign-up-prep-school input[type="text"]').each(function() {

	var default_value = this.value;

	$(this).focus(function(){
		if(this.value == default_value) {
			this.value = '';
		}
	});

	$(this).blur(function(){
		if(this.value == '') {
			this.value = default_value;
		}
	});

});
	
	
	// validate join network banner form
	$("#join-network-form").validate({
		errorLabelContainer: "#messageBox",
		wrapper: "li",
		rules: {
			zip:{
				required: true,
				minlength: 5,
				number: true
			}
		},
		messages: {	
			emailaddress: "Please enter a valid email address",
			zip: "Please enter a correct zip code"
			
		}
	});
	
	// validate join network thank you page, free trial form
	$("#networkty-sign-up-prep-school").validate({
		wrapper: "div",
		errorLabelContainer: "#messageBox",
		
		messages: {	
			firstname: "Please enter your first name",
			lastname: "Please enter your last name"
			
		}
	});
	
	
		
	// validate join network banner form
	$("#member-login-form").validate({
			onkeyup: false,
		wrapper: "div",
		rules: {
			emailaddress:{
				required: true
			}
		},
	  errorPlacement: function(error, element) {
		  var arrow = "<div class='arrowhead'></div>";
		   error.insertAfter(element);
		    error.addClass('errormessage');
			$(arrow).prependTo(error);
			
		   },
		messages: {	
			emailaddress: "Please enter a valid email address or username"		
			
		}
	});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	// validate application form
	$("#request-application").validate({
		onkeyup: false,
		focusInvalid: true,

		rules: {	
			firstname: {
				required: true,
				minlength: 2
			},
			emailaddress: {
				required: true,
				email: true
			},
			phone:{
				number:true,
				minlength: 7,
				maxlength: 10
			},
			zip:{
				required: true,
				minlength: 5,
				number: true
			},
			comments: {
				required: false,
				minlength: 2
			}
		},
		messages: {	
			phone: "Please enter a correct phone number",
			emailaddress: "Please enter a valid email address",
			zip: "Please enter a correct zip code"
			
		}
	});
	
	
	

	
	// validate create profile
	$("#create-profile").validate({
		onkeyup: false,
		focusInvalid: true,

		rules: {	
			emailaddress: {
				required: true,
				email: true
			},
			username: {
				required: true,
				minlength: 5
			},
			zip:{
				required: true,
				minlength: 5,
				number: true
			},
			password: {
				required: true,
				minlength: 5
			},
			password2: {
				required: true,
				minlength: 5,
				equalTo: "#password"
			},
			terms: {
				required: true
			}
		},
		messages: {	
			username: "Username field cannot be blank ",
			password: "Your password must contain 5 or more characters and including at least 1 number ",
			password2: "Please make sure your password matches",
			emailaddress: "Please enter a valid email address",
			zip: "Please enter a correct zip code",
			terms: "You must agree to our Terms of Services before becoming a member"
			
		}
	});
	
	
	
});
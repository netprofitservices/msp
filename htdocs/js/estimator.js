// JavaScript Document

$.fn.digits = function(){ 
    return this.each(function(){ 
        $(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") ); 
    })
}





$().ready(function() {

	
	var membersNum;
	
	var instructorsNum;
	
	var sharedcourses;	

	var instructorsNum;
	
	var hoursWeekly;
	
	var keyInstructor;		
	
	var courseRating;		
		
	
	var showReferral = 0;
	
	var monthlyReach =  $("#monthly-reach").val();
	
	var referralSite =  $("#referral-sitevisit").val();
	
	var referralEnroll =  $("#referral-enroll").val();
	
	var referralMonth;
	
	var referralYear;
	
	
	
	var totalRevenue;
	var totalRevenueShared;
	var instructorBonus;
	var shareCoursesPercent;
	var sharePercentwithRating;
	
	var incomeMonthly;
	var growthRate;
	
	var incomeYearly;
	var incomeHourly;
	
	var mspMarketingBudget;
	
	var referralFirstYear;
	var referralSecondYear;
	var marketReferralMem;

	
	
/* #######################################

		Setting variables end		
	
############################################ */	



	
	
	$(".value a").click(function(){		
			
			$(this).siblings().removeClass("selected");
			$(this).addClass("selected");
		
		return false;
	});
	
	
	
	
	$(".plus").click(function(){		
			var inputvalue = parseInt($(this).siblings("input").val());
			
			if ( $(this).hasClass("plus-200")) {			
				inputvalue = inputvalue + 200;
				
			} else{
				inputvalue = inputvalue + 1;	
			}			
		
			$(this).siblings("input").val(inputvalue);
		
		return false;
	});
	
	

		
	$(".minus").click(function(){		
			var inputvalue = parseInt($(this).siblings("input").val());
			
			if ( $(this).hasClass("minus-200")) {
				if(inputvalue >= 200){			
					inputvalue = inputvalue - 200;
				};
				
			} else{
				if(inputvalue >= 2 && !$(this).parent().parent().hasClass("growth-rate")){	
					inputvalue = inputvalue - 1;
				};
				
			}	
			
			if($(this).parent().parent().hasClass("growth-rate") && inputvalue >= 1 ){
				inputvalue = inputvalue - 1;
				
			}
		
		
		
			$(this).siblings("input").val(inputvalue);
		
		return false;
	});
	
	
	$("#show-how").click(function(){	
			
			$(".explain-calculation").show();
			$(this).hide();
		
			
			return false;
	
	});
	
			
	$("#show-referral").click(function(){	
			
			$(".referral-calcuator").show();
			$(".referral-enable").hide();
			
			
			showReferral = 1;
			
			
			return false;
	
	});
	
	


			
	$("#residual-submit").click(function(){	
			
			if (showReferral == 1) {

					$("#referral-results").show();	

			}
			
			if( $(this).is(".referral-only")){
					$("#referral-results").show();	
			}
		
			calculateRevenue();
			
			return false;
	
	});
	
	
/* if growth rate change do these */	
	$("#growth-rate").change(function() {		
			clearVal();
	});
	
		$(".growth-rate .minus, .growth-rate .plus ").click(function(){	
			clearVal();
		
		});	
		
		function clearVal(){
			$("#income-month").text("");
			$("#income-year").text("");
			$("#income-hour").text("");		
			$(".refresh-alert").show();
		};
	
		$(".restart, .refresh-alert a ").click(function(){	
			calculateRevenue();		
			
			$(".refresh-alert").hide();
			
			return false;
		});
	
	
/* if referral value changes do these */	
	$(".referral-calcuator input").change(function() {
			recalcReferrals();
	});
	
	$("#marketReferral-yes,  .referral-calcuator .plus, .referral-calcuator .minus ").click(function(){	
			recalcReferrals();					
			return false;
	});
	
	
	$("#marketReferral-no").click(function(){
		showReferral = 0;
		$("#referral-results").hide();
		$("#marketReferral-yes").addClass("selected");
		$(this).removeClass("selected");
		$(".referral-calcuator").hide();
		$(".referral-enable").show();
		return false;
	});
	
	
	
	function recalcReferrals(){
		
		/*update value */
			monthlyReach =  $("#monthly-reach").val();		
			referralSite =  $("#referral-sitevisit").val();	
			referralEnroll =  $("#referral-enroll").val();

				
								
		/* Market Referral Members? setting*/
		if ($("#marketReferral-yes").hasClass("selected")){
			marketReferralMem = 1;
		} else{
			marketReferralMem = 0;
		};
		
		referralMonth =( monthlyReach * (referralSite / 100) * (referralEnroll / 100) ) * marketReferralMem;
		$("#referral-first-month").text( Math.round(referralMonth));
		$("#referral-first-month").digits();
		
		referralYear =  referralMonth * 12;
		$("#referral-year").text(Math.round(referralYear));	
		$("#referral-year").digits();		
			
		
	}
	
		
	
/* primary calculate function */	
	function calculateRevenue() {
	
		
		membersNum = parseInt($("#members-num").val());
		
		instructorsNum = parseInt($("#instructors-num").val());	
	
		instructorsNum = parseInt($("#instructors-num").val());	
		
		hoursWeekly =  parseInt($("#hours-spend").val());
		
		
		
		/* Your share of courses setting */
		if ($("#share-small").hasClass("selected")){
			sharedcourses = 0.5;
		}
		if ($("#share-even").hasClass("selected")){
			sharedcourses = 1;
		}
		if ($("#share-double").hasClass("selected")){
			sharedcourses = 2;
		}
		
		
		/* Are you the key instructor setting*/
		if ($("#key-yes").hasClass("selected")){
			keyInstructor = 1
		} else{
			keyInstructor = 0;
		}



		
		/* course rating setting */
		if ($("#average").hasClass("selected")){
			courseRating = 1;
		}
		if ($("#above-average").hasClass("selected")){
			courseRating = 1.5;
		}
		if ($("#superior").hasClass("selected")){
			courseRating = 2;
		}
		
		
		
		
		/* Market Referral Members? setting*/
		if ($("#marketReferral-yes").hasClass("selected")){
			marketReferralMem = 1;
		} else{
			marketReferralMem = 0;
		}

		mspMarketingBudget = membersNum * 4;		
		$("#marketing-budget-amount").text(mspMarketingBudget);
		$("#marketing-budget-amount").digits();
		$("#marketing-budget-amount").prepend("$");
		
	
		totalRevenue = membersNum * 20 * 0.8;
		
		totalRevenueShared = totalRevenue * 0.3;
		
		instructorBonus = totalRevenue * 0.2 * keyInstructor * 0.5;
					
		/*shareCoursesPercent = Math.round((sharedcourses / instructorsNum) * 100).toFixed(0);*/
		shareCoursesPercent = ((sharedcourses / instructorsNum) * 100).toFixed(2);
		
		
		sharePercentwithRating = (shareCoursesPercent * courseRating).toFixed(2);
		
		incomeMonthly = (totalRevenueShared + instructorBonus) * (sharePercentwithRating / 100);
		incomeMonthly = Math.round(incomeMonthly).toFixed(0);
		
		growthRate = $("#growth-rate").val() / 100;
		


		if( growthRate > 0) {
			/*Future Value of a Series compound interest forumla: PMT * ( ( (1 + i)n - 1) / i )*/		
			incomeYearly = incomeMonthly * ((Math.pow( 1 + growthRate, 12) - 1) / growthRate) ;		
		} else{
			incomeYearly = incomeMonthly * 12;
		}
		
		incomeYearly =  Math.round(incomeYearly).toFixed(0);
		
		
		incomeHourly = Math.round(incomeYearly / (48 * hoursWeekly)).toFixed(0);
		
		$("#how-total").text(totalRevenue).digits().prepend("$");		
		$("#how-share").text(totalRevenueShared).digits().prepend("$");
		$("#how-bonus").text(instructorBonus).digits().prepend("$");
		$("#how-your-share").text(shareCoursesPercent + "%");		
		$("#how-your-share-rating").text(sharePercentwithRating + "%");	
		
		
		$("#income-month").text(incomeMonthly);		
		$("#income-month").digits();
		
		$("#income-year").text(incomeYearly);
		$("#income-year").digits();
		
		$("#income-hour").text(incomeHourly);
		$("#income-hour").digits();



		
		
		referralMonth =( monthlyReach * (referralSite / 100) * (referralEnroll / 100) ) * marketReferralMem;
		$("#referral-first-month").text( Math.round(referralMonth));
		
		referralYear =  referralMonth * 12;
		$("#referral-year").text(Math.round(referralYear));		
		
		

		referralFirstYear = (referralMonth*2)+(referralMonth*2*2)+(referralMonth*3*2.5)+(referralMonth*4*2.5)+(referralMonth*5*3)+(referralMonth*6*3)+(referralMonth*7*3)+(referralMonth*8*3.5)+(referralMonth*9*3.5)+(referralMonth*10*3.5)+(referralMonth*11*3.5)+(referralMonth*12*3.5);
		$("#referral-income-year").text(Math.round(referralFirstYear));	
		$("#referral-income-year").digits();
		
		referralSecondYear = (referralMonth * 12 * 4 );		
		$("#referral-income-month").text(Math.round(referralSecondYear));
		$("#referral-income-month").digits();

		
	
		$(".residual-result").fadeIn();
		$("html, body").animate({ scrollTop: 280 }, "slow");
		
		
	}
	
	
	
	
	
});
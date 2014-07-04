$(document).ready(function(){
	var i = 0;
	var j = 0;
	$("#loginbox").click(function(){
		if(j > 0){
			$('.newbox_signup').slideUp('slow');
			j = 0;
		}
		if(i == 1)
		{
			$('.newbox').slideUp('slow');
			i = 0;
		} else {
			$('.newbox').slideDown('slow');
			i++;
		}
	});
	
	$("#slider").click(function(){
		$('.newbox').slideUp('slow');
			i = 0;
	});
	
	$("#maincontent").click(function(){
		$('.newbox').slideUp('slow');
			i = 0;
	});
	
	
	
	$("#signupbox").click(function(){
		if(i > 0){
			$('.newbox').slideUp('slow');
			i = 0;
		}
		if(j == 1)
		{
			$('.newbox_signup').slideUp('slow');
			j = 0;
		} else {
			$('.newbox_signup').slideDown('slow');
			j++;
		}
	});
	
	$("#slider").click(function(){
		$('.newbox_signup').slideUp('slow');
			j = 0;
	});
	
	$("#maincontent").click(function(){
		$('.newbox_signup').slideUp('slow');
			j = 0;
	});
});
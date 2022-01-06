function sendEmail(){
	var name = $('input[name="name"]').val();
	var phone = $('input[name="tel"]').val();
	var email = $('input[name="email"]').val();
	var message = $('textarea[name="message"]').val();
	var data = {
		action:"send_email_ajax",
		"name": name,
		"tel":phone,
		"email":email,
		"message":message
	};
	$.ajax({
		type:'POST',
		url:ajaxurl,
		data:data,
		success:function(data){
			if(data === "success"){
				$('.email-field').hide(500, function(){
					$('.notification').html("<h4>Your message has been sent. We will respond to you shortly</h4>");
					$('.notification h4').css('color','#004d00');
					$('.notification h4').css('align','center');
					setTimeout(function(){
						// Reset all of the inputs to be blank
						$('input[name="name"]').val("");
						$('input[name="tel"]').val("");
						$('input[name="email"]').val("");
						$('textarea[name="message"]').val("");
						
						$('.notification').hide();
						$('.email-field').show();	
					}, 5000);
				});
			}
		}
	});
	return false;
}


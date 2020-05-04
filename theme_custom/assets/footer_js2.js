
function sendContact() {
	var valid;	
	valid = validateContact();
	if(valid) {
		jQuery.ajax({
		url: "/theme/lambda/contact_mail.php",
		data:'userEmail='+$("#userEmail").val(),
		type: "POST",
		success:function(data){
		$("#mail-status").html(data);
		},
		error:function (){}
		});
	}
}

function validateContact() {
	var valid = true;	
	$(".demoInputBox").css('background-color','');
	$(".info").html('');
	
	
	if(!$("#userEmail").val()) {
		$("#userEmail-info").html("(required)");
		$("#userEmail").css('background-color','#FFFFDF');
		valid = false;
	}
	
	return valid;
}

function toggleFooter() {
	$(this).toggleClass('flipped')
        $('.footerColumns').slideToggle(function () {
            $('body, html').animate({ scrollTop: $('body').height() });
        });
}
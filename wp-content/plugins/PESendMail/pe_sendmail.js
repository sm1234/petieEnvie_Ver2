jQuery(document).ready( function($) {
	
$("#c_submit").click( function(){
	var name1=$('#c_name').val();
	var sub1=$('#c_subject').val();
	var message1=$('#c_message').val();
	var tele1=$('#c_tele').val();
	var email=$('#c_email').val();
	$.post(
			sendAjax.ajaxurl,
            {
	         action: 'send_mail',
	         name: name1,
	         sub: sub1,
	         message: message1,
	         tele: tele1,
	         emailid: email,
	         wpnl_nonce: sendAjax.send_nonce
	        }
	      );
});

});
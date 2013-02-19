jQuery(document).ready( function($) {

//For NewsLetter SignUp	
	$("#mc-embedded-subscribe").click( function(){
        var EmailID = $("#mce-EMAIL").val();
        var isAllWell=true;
		var error="";
		$("#mce-EMAIL").popover('destroy');
//Validation of the Email Id of the visitor
if(EmailID == "")
{	
	error="Please Enter Your Email ID";
	isAllWell=false;
}

else if(!((EmailID.indexOf("@")>0) && (EmailID.indexOf(".")>0)) || /[^a-zA-Z0-9.@_-]/.test(EmailID)) 
{	
	error="This is not a valid Email ID";
	isAllWell=false;
}

else
{
	sub=EmailID.substring((EmailID.indexOf("@"))+1);
	if(sub.indexOf(".")<=0) 
	{
	error="This is not a valid Email ID";
	isAllWell=false;
	}
}

if(!isAllWell)
{
	$('#mce-EMAIL').attr("data-content",error);
	$("#mce-EMAIL").popover('show');
}

//This part is executed if the Email Id is correct
else
{
	$.post(
			subsAjax.ajaxurl,
            {
	         action: 'save_subs_in_DB',
	         emailid: EmailID,
	         wpnl_nonce: subsAjax.subs_nonce
	        },
			function(data)
			{
	        	$('#elabel').text('Thanks For Subscibing our newsletter');	        									
				$('#mce-EMAIL').val('');
			}
		);
}
	

return false;
});


	$('#mce-EMAIL').val('');


});
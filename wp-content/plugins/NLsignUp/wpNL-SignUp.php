<?php
/*
 Plugin Name: PE_CustomNewsLetter_Subscription
 */
?>
<?php  
function fn_display_subscriptionArea()
{
	
	$output = '';	
	$output .= '<p><span class="name">-<br> Newsletter <br>-</span></p>
				<p>Keep up to date on all the goings on at Petite Envie</p>'.
	'<form method="post">'.
	'<input type="hidden" value="1" name="form_tools_form_id"></input>'.
	'<div class="control-group">'.
	'<label class="control-label hidden" for="mce-EMAIL">Email Address</label>'.
    '<div class="controls"><input id="mce-EMAIL" class="" type="text" name="EMAIL" required="required" placeholder="- EMAIL ADDRESS -"
    data-toggle="popover" data-placement="right" data-content=""></input></div>'.
    '<b><font color="white"><label id="elabel"></label></font></b></div>'.
    '<input id="mc-embedded-subscribe" type="submit" name="subscribe" value="- SUBSCRIBE -"></input>'.
	'</form>';
	
	return $output;	
}

/*
 *Load the JS files. After enqueuing, this uses add_action wp_enque_scripts
*/
function register_js_file_for_subscription(){
	//nonce is used for security precaution
	$subs_nonce = wp_create_nonce('subscription_submit_nonce');
	wp_enqueue_script('subsJSAJAXfile',WP_PLUGIN_URL.'/NLsignUp/customSignUp.js',array('jquery'));
	//use localize scripts for loading data that might be needed
	wp_localize_script('subsJSAJAXfile', 'sendAjax', array('ajaxurl' => admin_url('admin-ajax.php'), 'subs_nonce' => $subs_nonce));
}

//This is used to initiate the DB action for what ever plugin wants to do
function fn_save_subs_in_DB()
	{
		
		$nonce = $_POST['wpnl_nonce'];
		
		if(!wp_verify_nonce($nonce, 'subscription_submit_nonce'))
			wp_die('Don\'t Cheat!');
		
		$emailID = $_POST['emailid'];
		
		
		$request   = array(
				'apikey' => '841164ce2c0b688e04a2f36d91ec0ede-us6',
				'id' => 'ca66a59aa0',
				'email_address' => $emailID,
				'double_optin' => FALSE,
				'merge_vars' => array(
						'OPTIN_TIME' => date('Y-M-D H:i:s')
				)
		);
		$result = wp_remote_post(
				'http://'.substr('841164ce2c0b688e04a2f36d91ec0ede-us6',-3).'.api.mailchimp.com/1.3/?output=php&method=listSubscribe',
				array( 'body' => json_encode($request))
		);
	}

	
//add the JS file
add_action( 'wp_enqueue_scripts', 'register_js_file_for_subscription');

//admin-ajax.php takes care of associating the wp_ajax action with the action mentioned in the JS
add_action( 'wp_ajax_nopriv_save_subs_in_DB', 'fn_save_subs_in_DB');
add_action( 'wp_ajax_save_subs_in_DB', 'fn_save_subs_in_DB' );
	
?>
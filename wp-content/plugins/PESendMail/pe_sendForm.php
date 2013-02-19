<?php
/*
 Plugin Name: PE_Send_Mail
 */
?>


<?php  
//Displays the Form for sending Email
function fn_display_sendingArea()
{
	
	$output = '';	
	$output .= '<p><span class="name">
      -
    <br>
      Enquiries
    <br>
      -
    </span></p>
    <p>
      Please complete the following to enquire about our products
    </p>
    <form method="post">
    <input type="hidden" value="1" name="form_tools_form_id"></input>
    <div class="control-group">
      <!-- Text input-->
    <label class="control-label hidden" for="name">
      Name
    </label>
    <div class="controls">
    	<input id="c_name" class="" type="text" required="required" name="name" placeholder="- NAME -"></input>
    	</div>
    	</div>
    <div class="control-group">
      <!-- Text input-->
    <label class="control-label hidden" for="subject">
      Subject
    </label>
    <div class="controls">
    	<input id="c_subject" class="" type="text" name="subject" placeholder="- SUBJECT -"></input> 	
    </div>
    </div>
    <div class="control-group">
      <!-- Text input-->
    <label class="control-label hidden" for="message">
      Message
    </label>
    <div class="controls">
    	<textarea id="c_message" class="" name="message" placeholder="- MESSAGE -"></textarea>
    </div>
    </div>
    <div class="control-group">
      <!-- Text input-->
    <label class="control-label hidden" for="telephone">
      Contact Number
    </label>
    <div class="controls">
    	<input id="c_tele" class="" type="text" required="required" name="telephone" placeholder="- CONTACT NUMBER -"></input>    	
    </div>
    </div>
    <div class="control-group">
      <!-- Text input-->
    <label class="control-label hidden" for="email">
      Contact Email
    </label>
    <div class="controls">
    	<input id="c_email" class="" type="text" required="required" name="email" placeholder="- CONTACT EMAIL -"></input>
    </div>
    </div>
    <input id="c_submit" type="submit" value="- SEND -"></input>
    </form>';

    return $output;	
}

/*
 *Load the JS files. After enqueuing, this uses add_action wp_enque_scripts
*/
function register_js_file_for_sending(){
	//nonce is used for security precaution
	$send_nonce = wp_create_nonce('sending_submit_nonce');
	wp_enqueue_script('sendJSAJAXfile',WP_PLUGIN_URL.'/PESendMail/pe_sendmail.js',array('jquery'));
	//use localize scripts for loading data that might be needed
	wp_localize_script('sendJSAJAXfile', 'subsAjax', array('ajaxurl' => admin_url('admin-ajax.php'), 'send_nonce' => $send_nonce));
}

//This function sends mail to Petite Envie
function fn_send_mail()
{
	$nonce = $_POST['wpnl_nonce'];
		
		if(!wp_verify_nonce($nonce, 'sending_submit_nonce'))
			wp_die('Don\'t Cheat!');

			 $name=$_POST['name'];
	         $sub=$_POST['sub'];
	         $message=$_POST['message'];
	         $tele=$_POST['tele'];
	         $emailid=$_POST['emailid'];
			 $c_message=$message.' Contact No. '.$tele.' Contact Email. '.$emailid;
mail('jaysethi007@yahoo.com',$sub,$c_message);
}

//add the JS file
add_action( 'wp_enqueue_scripts', 'register_js_file_for_sending');

//admin-ajax.php takes care of associating the wp_ajax action with the action mentioned in the JS
add_action( 'wp_ajax_nopriv_send_mail', 'fn_send_mail');
add_action( 'wp_ajax_send_mail', 'fn_send_mail' );
?>
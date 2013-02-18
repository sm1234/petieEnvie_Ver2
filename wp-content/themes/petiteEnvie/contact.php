<?php
/*
Template Name: Contact
*/
get_header();
?>
<div class="static-panel">
<div class="container">
<div class="row">
<div class="span3"></div>

<div class="span6">

					<p><span class="name">-<br>Contact<br>-</span></p>
					<p>Address Goes Here</p>
					<p class="mb-20"><span class="name-small"><a target="_blank" href="http://goo.gl/maps/ErCrr">- View on map -</a></span></p>
					<p class="maquette">Tel: 0151 638 0011<br>Email <a href="mailto:queries@petiteenvie.com">queries@petiteenvie.com</a></p>
					

					
					
					

					
					<p><span class="name-small">- Newsletter -</span></p>
					<p>Keep up to date on all the goings on at Petite Envie</p>
					
					<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
					<form novalidate="" target="_blank" class="validate" name="mc-embedded-subscribe-form" id="mc-embedded-subscribe-form" method="post" action="http://pickledwalnutcatering.us6.list-manage1.com/subscribe/post?u=b0dee4e7dad27df9ebbb263cf&amp;id=de80395095">
					<div class="mc-field-group">
						<label class="hidden" for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
					</label>
						<input type="email" id="mce-EMAIL" class="required email" name="EMAIL" value="" placeholder="- EMAIL ADDRESS -">
					</div>
						<div class="clear" id="mce-responses">
							<div style="display:none" id="mce-error-response" class="response"></div>
							<div style="display:none" id="mce-success-response" class="response"></div>
						</div>	<div class="clear"><input type="submit" class="button" id="mc-embedded-subscribe" name="subscribe" value="Subscribe"></div>
					</form>
					</div>
					
					<!--End mc_embed_signup-->

</div>
<div class="span3"></div>
</div>
</div>
</div>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".Oursecondary").hide();
	$("#peBody").removeClass();
	$("#peBody").addClass("contact");
	$("#peBody").css("padding-top","35px");	
});
</script>
<?php
get_footer();
?>
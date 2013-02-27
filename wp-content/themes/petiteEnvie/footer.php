<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<?php
wp_enqueue_script("jquery");
wp_register_script('abc', get_template_directory_uri().'/js/bootstrap.js',array('jquery'));
wp_register_script('def', get_template_directory_uri().'/js/extra.js',array('jquery'));
wp_register_script('ghi', get_template_directory_uri().'/js/script.js',array('jquery'));
wp_enqueue_script('abc');
wp_enqueue_script('def');
wp_enqueue_script('ghi');
?>



<?php 

wp_footer(); ?>
</body>
</html>
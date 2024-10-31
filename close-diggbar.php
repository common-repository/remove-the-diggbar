<?php
/*
Plugin Name: Remove the DiggBar
Plugin URI: http://valums.com/wordpress-plugin-diggbar/
Description: This plugin prevents your blog from being put in a frame.
Version: 0.2
Author: Andrew Valums
Author URI: http://valums.com
*/
add_action('wp_head', 'valumsCloseDiggBar');
function valumsCloseDiggBar(){ ?>
	<script type="text/javascript">
		if (window != top){
			top.location.replace(window.location);
		}
	</script>
<?php
} ?>

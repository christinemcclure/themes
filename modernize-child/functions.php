<?php 
	function gce_remove_css() {
		wp_dequeue_style( 'gce_styles' );
	}

	add_action( 'wp_enqueue_scripts', 'gce_remove_css' );
?>
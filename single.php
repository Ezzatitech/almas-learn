<?php
get_header();

// Elementor `single` location
if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) {
	get_template_part( 'inc/template-parts/single' );
}

get_footer();
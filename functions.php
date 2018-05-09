<?php

// Setup


//Includes
include(get_template_directory(). '/includes/front/enqueue.php');
include(get_template_directory(). '/includes/setup.php');
include(get_template_directory().'/includes/widgets.php');
include (get_template_directory().'/includes/theme-customizer.php');
include (get_template_directory().'/includes/customizer/social.php');
include (get_template_directory().'/includes/customizer/misc.php');

//Hooks
add_action('wp_enqueue_scripts','ju_enqueue');
add_action('after_setup_theme','ju_setup_theme');
add_action('widgets_init','ju_widgets');
add_action('customize_register','ju_customize_register');

//Shortcodes
<?php
function ju_setup_theme(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');//Enable RSS
	add_theme_support('html5',array('comment-list','comment-form','search-form','gallery','caption'));//Enable HTML5

//	add_theme_support('starter-content',$starter_content);
//    add_theme_support('menus'); not required in newer versions of wordpress

    register_nav_menu('primary',__('Primary Menu', 'udemy'));
	register_nav_menu('secondary',__('Secondary Menu', 'udemy'));

	if (function_exists('quads_register_ad')){
		quads_register_ad( array('location' => 'udemy_header', 'description' => 'Udemy Header position') );
	}
}
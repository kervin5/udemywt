<?php
function ju_setup_theme(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');//Enable RSS
	add_theme_support('html5',array('comment-list','comment-form','search-form','gallery','caption'));//Enable HTML5
//enable different post formats
	add_theme_support('post-formats',array('aside','gallery','link','image','quote','video','audio'));

	add_theme_support('woocommerce');

	//Image sizes
add_image_size('ju-post-image',860,575,false);


//	add_theme_support('starter-content',$starter_content);
//    add_theme_support('menus'); not required in newer versions of wordpress

    register_nav_menu('primary',__('Primary Menu', 'udemy'));
	register_nav_menu('secondary',__('Secondary Menu', 'udemy'));

	if (function_exists('quads_register_ad')){
		quads_register_ad( array('location' => 'udemy_header', 'description' => 'Udemy Header position') );
	}
}
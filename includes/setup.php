<?php
function ju_setup_theme(){
    add_theme_support('post-thumbnails');
//    add_theme_support('menus'); not required in newer versions of wordpress

    register_nav_menu('primary',__('Primary Menu', 'udemy'));
}
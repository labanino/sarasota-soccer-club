<?php

/**
 * Remove the content editor from ALL pages
 */
function remove_content_editor()
{
    remove_post_type_support('page', 'editor');
}

add_action('admin_head', 'remove_content_editor');

function boilerplate_load_assets()
{
    wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/scripts.min.js'), ['wp-element'], '1.0', true);
    wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/style.css'));
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function boilerplate_add_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'boilerplate_add_support');

// register the nav
function register_my_menu() {
        register_nav_menus( [
            'main-menu' => __( 'Main Menu', 'text_domain' ),
            'footer'  => __( 'Footer ', 'text_domain' ),
            'mobile'  => __( 'Mobile ', 'text_domain' ),
            ]
    );
}
add_action( 'init', 'register_my_menu' );

// let's add "*active*" as a class to the li
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
    if( in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

// let's add our custom class to the actual link tag
function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'main-menu') {
        $classes[] = '';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="menuButton"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');
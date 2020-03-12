<?php


function load_stylesheets()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, "all");

    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), false, "all");

    wp_enqueue_style('style');
}


add_action('wp_enqueue_scripts', 'load_stylesheets');


function include_jquery()
{

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), 1, true);
    add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');


function loadjs()
{
    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');
}


add_action('wp_enqueue_scripts', 'loadjs');


add_theme_support('menus');




register_nav_menus(

    array(
        'header-menu' => __("Header Menu", "theme"),
        'footer-menu' => __("Fotter Menu", "theme"),
    )

);


function menu_classes($classes, $item, $args)
{
    if ($args->theme_location == "header-menu") {
        $classes[] = 'nav-item';
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'menu_classes', 1, 3);




function wpse156165_menu_add_class($atts, $item, $args)
{
    $class = 'nav-link'; // or something based on $item
    $atts['class'] = $class;
    return $atts;
}

add_filter('nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3);

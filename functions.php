<?php
add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_enqueue_scripts', 'theme_scripts');

add_theme_support('menus');

function style_theme()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css");
    wp_enqueue_style('main', get_template_directory_uri() . "/assets/css/main.css");
    wp_enqueue_style('fontawesome', get_template_directory_uri() . "/assets/fontawesome/css/all.min.css");
};


function theme_scripts()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js');

    wp_localize_script('script', 'themepath', array('path' => get_template_directory_uri() )); 

    wp_enqueue_script('backstretch', get_template_directory_uri() . '/assets/js/jquery.backstretch.min.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js');

};

add_filter('nav_menu_link_attributes', 'nav_link_filter', 10, 4);
function nav_link_filter($attr)
{
    if ($attr['href'] == get_bloginfo('url') . '/') {
        $attr['class'] = 'nav-link tm-nav-link';
    }
    if ($attr['href'] == get_bloginfo('url') . '/about/') {
        $attr['class'] = 'nav-link tm-nav-link';
    }
    if ($attr['href'] == get_bloginfo('url') . '/portfolio/') {
        $attr['class'] = 'nav-link tm-nav-link';
    }
    if ($attr['href'] == get_bloginfo('url') . '/contact/') {
        $attr['class'] = 'nav-link tm-nav-link';
    }
    return $attr;
}

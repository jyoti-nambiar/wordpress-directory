<?php


function theme_css_script()
{
    // wp_enqueue_style('theme-script', get_template_directory_uri() . '/css/custom.css');
    //wp_enqueue_style('custom', get_stylesheet_uri());
    wp_enqueue_style('style', get_template_directory_uri() . '/css/custom.css', false, '1.1', 'all');
}
add_action('wp_enqueue_scripts', 'theme_css_script');


function test()
{
    var_dump(get_template_directory_uri());
}
add_action('init', 'test');

if (
    !function_exists('mytheme_register_nav_menu')
) {

    function mytheme_register_nav_menu()
    {
        register_nav_menus(array(
            'primary_menu' => __('Primary Menu', 'text_domain'),
            'footer_menu'  => __('Footer Menu', 'text_domain'),
        ));
    }
    add_action('after_setup_theme', 'mytheme_register_nav_menu', 0);
}


function theme_js_script()
{
    wp_enqueue_style(
        'script',
        get_template_directory_uri() . '/js/main.js'
    );
}

add_action('wp_enqueue_scripts', 'theme_js_script');

<?php
if (!defined('ABSPATH'))
    exit;

define('ELIXWEB_THEME_VERSION', '1.0.0');
define('ELIXWEB_THEME_DIR', get_template_directory());
define('ELIXWEB_THEME_URI', get_template_directory_uri());
define('ELIXWEB_TEXT_DOMAIN', 'elixweb');

function elixweb_enqueue_scripts()
{
    wp_enqueue_style('elixweb-style', ELIXWEB_THEME_URI . '/assets/css/style.css', [], ELIXWEB_THEME_VERSION);
    wp_enqueue_script('jquery');
    wp_enqueue_script('elixweb-script', ELIXWEB_THEME_URI . '/assets/js/main.js', ['jquery'], ELIXWEB_THEME_VERSION, true);
}
add_action('wp_enqueue_scripts', 'elixweb_enqueue_scripts');

function elixweb_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('menus');

    register_nav_menus([
        'header_right' => __('Right header', ELIXWEB_TEXT_DOMAIN),
        'header_left' => __('Left header', ELIXWEB_TEXT_DOMAIN),
    ]);
}
add_action('after_setup_theme', 'elixweb_theme_setup');
?>
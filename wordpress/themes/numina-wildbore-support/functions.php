<?php
if (!defined('ABSPATH')) { exit; }
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('html5', array('search-form','comment-form','gallery','caption','style','script'));
});
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('numina-support', get_stylesheet_uri(), array(), '0.1.0');
});

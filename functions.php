<?php

add_action('wp_enqueue_scripts', 'utc_enqueue_child_theme_styles', PHP_INT_MAX);

function utc_enqueue_child_theme_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
}

/* ============================================================================
  ENABLE MORE BUTTONS
  =========================================================================== */

add_filter('mce_buttons_3', 'utc_enable_more_buttons');

function utc_enable_more_buttons($buttons) {
    $buttons[] = 'fontselect';
    $buttons[] = 'fontsizeselect';
    $buttons[] = 'styleselect';
    $buttons[] = 'backcolor';
    $buttons[] = 'newdocument';
    $buttons[] = 'cut';
    $buttons[] = 'copy';
    $buttons[] = 'charmap';
    $buttons[] = 'hr';
    $buttons[] = 'visualaid';

    return $buttons;
}

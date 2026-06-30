<?php

function sayrina_portfolio_assets() {
    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css',
        array(),
        '5.3.8'
    );

    // CSS personalizado
    wp_enqueue_style(
        'custom-style',
        get_template_directory_uri() . '/assets/scss/estilos.css',
        array('theme-style'),
        filemtime(get_template_directory() . '/assets/scss/estilos.css')
    );

    // Bootstrap JS bundle
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.8',
        true
    );

    // Tu JS personalizado
    wp_enqueue_script(
        'custom-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array('bootstrap-js'),
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );
}

add_action('wp_enqueue_scripts', 'sayrina_portfolio_assets');

function sayrina_portfolio_setup() {
  register_nav_menus(array(
    'menu-principal' => __('Menú Principal', 'sayrina-portfolio')
  ));
}

add_action('after_setup_theme', 'sayrina_portfolio_setup');


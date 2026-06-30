<?php

function sayrina_portfolio_assets() {

    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css',
        array(),
        '5.3.8'
    );

    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri(),
        array('bootstrap-css'),
        '1.0'
    );

    $custom_css_path = get_template_directory() . '/assets/scss/estilos.css';
    $custom_css_uri  = get_template_directory_uri() . '/assets/scss/estilos.css';

    if (file_exists($custom_css_path)) {
        wp_enqueue_style(
            'custom-style',
            $custom_css_uri,
            array('theme-style'),
            filemtime($custom_css_path)
        );
    }

    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.8',
        true
    );

    $custom_js_path = get_template_directory() . '/assets/js/main.js';
    $custom_js_uri  = get_template_directory_uri() . '/assets/js/main.js';

    if (file_exists($custom_js_path)) {
        wp_enqueue_script(
            'custom-js',
            $custom_js_uri,
            array('bootstrap-js'),
            filemtime($custom_js_path),
            true
        );
    }
}

add_action('wp_enqueue_scripts', 'sayrina_portfolio_assets');


function sayrina_portfolio_setup() {
    register_nav_menus(array(
        'menu-principal' => __('Menú Principal', 'portafolio-sayrina')
    ));
}

add_action('after_setup_theme', 'sayrina_portfolio_setup');


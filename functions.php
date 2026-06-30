<?php

function sayrina_portfolio_setup() {
  register_nav_menus(array(
    'menu-principal' => __('Menú Principal', 'portafolio-sayrina')
  ));
}

add_action('after_setup_theme', 'sayrina_portfolio_setup');


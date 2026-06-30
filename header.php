<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <div class="container header-container d-flex justify-content-center">

    <nav class="site-nav menu-fondo" aria-label="Menú principal">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'menu-principal',
          'menu_class'     => 'lista-menu',
          'container'      => false,
          'fallback_cb'    => false
        ));
      ?>
    </nav>

  </div>
</header>
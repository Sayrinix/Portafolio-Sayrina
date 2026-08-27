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

        <nav class="site-nav menu-fondo navbar navbar-expand-lg" aria-label="Menú principal">

            <div class="container-fluid">

                <!-- BOTÓN HAMBURGUESA -->
                <button
                    class="navbar-toggler boton-menu-mobile"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#menuPrincipal"
                    aria-controls="menuPrincipal"
                    aria-expanded="false"
                    aria-label="Abrir menú de navegación"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>


                <!-- MENÚ -->
                <div
                    class="collapse navbar-collapse"
                    id="menuPrincipal"
                >

                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-principal',
                        'menu_class'     => 'lista-menu navbar-nav',
                        'container'      => false,
                        'fallback_cb'    => false
                    ));
                    ?>

                </div>

            </div>

        </nav>

    </div>

</header>
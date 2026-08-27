<?php
/*
Template Name: Home
*/
get_header();
?>
<main>

<div class="bg-image ps-5 d-flex justify-content-start align-items-center">
    <div>
        <p class="p-light">Sayrina Luciano - Web Development · eCommerce · UX · Digital Experience</p>
        <h1 class="h1-light">Cada proyecto cuenta una<br>historia. Esta es la mía.</h1>
    </div>
</div> 

<div class="p-5 mb-5">
        <p class="h3-brown text-center">"Diseño y desarrollo experiencias digitales conectando tecnología, necesidades de usuario y objetivos de negocio."</p>
    </div>

<!-- PRÓXIMOS PROYECTOS -->
<div class="d-flex flex-column flex-lg-row mt-5 altura-div2">
    <img class="me-lg-2 mb-3 mb-lg-0 imagen-arreglo" 
         src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/proyecto-destacado.png')?>" 
         alt="Persona Mayor Mujer usando un celular">

    <div class="col-12 col-lg-4 fondo-destacado d-flex flex-column justify-content-center align-items-center">
        <p class="m-3 pb-3 text-center p-brown">
            Este proyecto trata sobre una radio accesible para personas mayores.
        </p>

        <a href="#" class="boton-ver">Ver más</a>
    </div>
</div>
    
<div class="d-flex flex-column flex-lg-row mt-5 altura-div2">

    <img class="me-lg-4 mb-4 mb-lg-0 imagen-arreglo" 
         src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/quien-soy-home.png')?>" 
         alt="Paisaje de Girasoles pintados en óleo">

    <div class="col-12 col-lg-5 d-flex flex-column">

        <p class="p-brown pb-3">
            "El fin del arte y de la ciencia es servir a la vida"
        </p>

        <div class="row">

            <div class="col-12 col-md-6">
                <h3 class="h3-brown">Nombre</h3>
                <p class="pb-3 p-brown">Sayrina Luciano Jofré</p>
            </div>

            <div class="col-12 col-md-6">
                <h3 class="h3-brown">Profesión</h3>
                <p class="pb-3 p-brown">Diseñadora y Desarrolladora Web</p>
            </div>

        </div>

        <div class="row pt-3">

            <div class="col-12 col-md-6">
                <h3 class="h3-brown">Apasionada por</h3>
                <p class="pb-3 p-brown">
                    Tecnología, Naturaleza, Música, Arte y Libros
                </p>
            </div>

            <div class="col-12 col-md-6">
                <h3 class="h3-brown">Edad</h3>
                <p class="pb-3 p-brown">23 años</p>
            </div>

        </div>

        <div class="d-flex justify-content-lg-end justify-content-center w-100">
            <a href="<?php echo esc_url(get_permalink(17)); ?>" class="boton-ver">
                Ver más
            </a>
        </div>

    </div>
</div>

    <div class="container pb-5">
        <h2 class="h2-brown pb-5 text-center">Habilidades</h2>
        <div class="row pt-5 justify-content-center">

    <div class="col-12 col-md-6 col-lg-4 px-4 borde-col d-flex flex-column align-items-center">
        <h3 class="h3-brown pb-4">Creatividad</h3>

        <p class="p-brown text-center">
            Capacidad para generar ideas innovadoras y transformarlas en soluciones visuales y funcionales que respondan a necesidades reales.
        </p>
    </div>

    <div class="col-12 col-md-6 col-lg-4 px-4 borde-col d-flex flex-column align-items-center">
        <h3 class="h3-brown pb-4">Javascript</h3>

        <p class="p-brown text-center">
            Desarrollo de experiencias web dinámicas e interactivas mediante la implementación de funcionalidades que mejoran la usabilidad y el rendimiento.
        </p>
    </div>

    <div class="col-12 col-md-6 col-lg-4 px-4 d-flex flex-column align-items-center">
        <h3 class="h3-brown pb-4">Diseño UX/UI</h3>

        <p class="p-brown text-center">
            Diseño de interfaces intuitivas y atractivas, centradas en las necesidades del usuario y orientadas a una experiencia eficiente.
        </p>
    </div>

</div>
        <div class="d-flex mt-5 justify-content-center w-100">
            <a href="<?php echo esc_url(get_permalink(15)); ?>" class="boton-ver">Ver más</a>
        </div>
    </div>

    <div class="container pt-5 mb-5">
        <div class="d-flex flex-column align-items-center">
            <h2 class="h2-brown pb-2 text-center">Proyectos</h2>
            <p class="p-brown pb-5">Descubre mis proyectos realizados</p>
        </div>
        <div class="row align-items-center g-4">

    <div class="col-12 col-md-4">
        <a href="<?php echo esc_url(get_permalink(72)); ?>">
            <img class="imagen-arreglo hover-imagen"
                 src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/rick-morty-proy.png')?>"
                 alt="">
        </a>
    </div>

    <div class="col-12 col-md-4">
        <a href="<?php echo esc_url(get_permalink(74)); ?>">
            <img class="imagen-arreglo-2 hover-imagen"
                 src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/fitness-proy.png')?>"
                 alt="">
        </a>
    </div>

    <div class="col-12 col-md-4">
        <a href="<?php echo esc_url(get_permalink(67)); ?>">
            <img class="imagen-arreglo hover-imagen"
                 src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/aurora-proy.png')?>"
                 alt="">
        </a>
    </div>

</div>
        <div class="d-flex mt-5 justify-content-center">
            <a href="<?php echo esc_url(get_permalink(23)); ?>" class="boton-ver">Ver más</a>
        </div>
    </div>
</main> 
<?php get_footer(); ?>
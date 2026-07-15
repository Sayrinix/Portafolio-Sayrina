<?php
/*
Template Name: Home
*/
get_header();
?>
<main>

<div class="bg-image w-100 d-flex justify-content-start ms-5 ps-4 align-items-center h-100">
    <div>
        <p class="p-light">Sayrina Luciano - UX Designer & Web Developer</p>
        <h1 class="h1-light">Cada proyecto cuenta una<br>historia. Esta es la mía.</h1>
    </div>
</div> 


<div class="container mb-5 altura-div1">
        <h2 class="h2-brown pb-5 text-center">Próximos Proyectos</h2>
        <div class="d-flex mt-5 altura-div2">
            <img class="me-2 imagen-arreglo" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/proyecto-destacado.png')?>" alt="Persona Mayor Mujer usando un celular">
            <div class="col-lg-4 fondo-destacado d-flex flex-column justify-content-center align-items-center">
                <p class="m-3 pb-3 text-center p-brown">Este proyecto trata sobre una radio accesible para personas mayores.</p>
                <a href="#" class="boton-ver">Ver más</a>
            </div>
        </div>
    </div>

    <div class="container mb-5 pb-5">
        <h2 class="h2-brown pb-5 text-center">¿Quién soy?</h2>
        <div class="d-flex mt-5 altura-div2">
            <img class="me-4 imagen-arreglo" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/quien-soy-home.png')?>" alt="Paisaje de Girasoles pintados en óleo">
            <div class="col-lg-5 d-flex flex-column">
                <p class="p-brown pb-3">"El fin del arte y de la ciencia es servir a la vida"</p>
                <div class="row">
                    <div class="col">
                        <h3 class="h3-brown">Nombre</h3>
                        <p class="pb-3 p-brown">Sayrina Luciano Jofré</p>
                    </div>
                    <div class="col">
                        <h3 class="h3-brown">Profesión</h3>
                        <p class="pb-3 p-brown">Diseñadora y Desarrolladora Web</p>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col">
                        <h3 class="h3-brown">Apasionada por</h3>
                        <p class="pb-3 p-brown">Tecnología, Naturaleza, Música, Arte y Libros</p>
                    </div>
                    <div class="col">
                        <h3 class="h3-brown">Edad</h3>
                        <p class="pb-3 p-brown">23 años</p>
                    </div>
                </div>
                <div class="d-flex justify-content-end w-80">
                    <a href="<?php echo esc_url(get_permalink(17)); ?>" class="boton-ver">Ver más</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-5">
        <h2 class="h2-brown pb-5 text-center">Habilidades y Metodología</h2>
        <div class="d-flex pt-5 justify-content-center">
            <div class="col me-4 pe-4 borde-col d-flex flex-column align-items-center">
                <h3 class="h3-brown pb-4">Creatividad</h3>
                <p class="p-brown text-center">Capacidad para generar ideas innovadoras y transformarlas en soluciones visuales y funcionales que respondan a necesidades reales.</p>
            </div>
            <div class="col me-4 pe-4 borde-col d-flex flex-column align-items-center">
                <h3 class="h3-brown pb-4">Javascript</h3>
                <p class="p-brown text-center">Desarrollo de experiencias web dinámicas e interactivas mediante la implementación de funcionalidades que mejoran la usabilidad y el rendimiento.</p>
            </div>
            <div class="col d-flex flex-column align-items-center">
                <h3 class="h3-brown pb-4">Diseño UX/UI</h3>
                <p class="p-brown text-center">Diseño de interfaces intuitivas y atractivas, centradas en las necesidades del usuario y orientadas a una experiencia eficiente.</p>
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
        <div class="row d-flex align-items-center">
            <div class="col">
                <a href="<?php echo esc_url(get_permalink(72)); ?>"><img class="imagen-arreglo hover-imagen" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/rick-morty-proy.png')?>" alt=""></a>
            </div>
            <div class="col">
                <a href="<?php echo esc_url(get_permalink(74)); ?>"><img class="imagen-arreglo-2 hover-imagen" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/fitness-proy.png')?>" alt=""></a>
            </div>
            <div class="col">
                <a href="<?php echo esc_url(get_permalink(67)); ?>"><img class="imagen-arreglo hover-imagen" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/aurora-proy.png')?>" alt=""></a>
            </div>
        </div>
        <div class="d-flex mt-5 justify-content-center">
            <a href="<?php echo esc_url(get_permalink(23)); ?>" class="boton-ver">Ver más</a>
        </div>
    </div>
</main> 
<?php get_footer(); ?>
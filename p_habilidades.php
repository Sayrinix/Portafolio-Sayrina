<?php
/*
Template Name: Habilidades
*/
get_header();
?>
<main>
 <div class="metodologia-banner">
 </div>
 <div class="mt-5">
       <h1 class="h1-brown text-center">Habilidades Blandas</h1>  
    </div>
 <div class="container-fluid mt-5 bg-color-hab d-flex flex-column justify-content-center align-items-center h-100">
    
        <div class="row d-flex justify-content-center">
            <div class="col-4 me-5">
                <div class="row pb-5">
                    <div class="col">
                        <img class="arreglo-img-hab-bl" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/habilidad-1.jpg')?>" alt="Un hombre y una mujer trabajando y analizando datos.">
                    </div>
                    <div class="col">
                        <h3 class="h3-brown">Titulo</h3>
                        <p class="p-brown-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col">
                        <img class="arreglo-img-hab-bl" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/habilidad-2.jpg')?>" alt="Un hombre y una mujer trabajando y analizando datos.">
                    </div>
                    <div class="col">
                        <h3 class="h3-brown">Titulo</h3>
                        <p class="p-brown-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col">
                        <img class="arreglo-img-hab-bl" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/habilidad-3.jpg')?>" alt="Un hombre y una mujer trabajando y analizando datos.">
                    </div>
                    <div class="col">
                        <h3 class="h3-brown">Titulo</h3>
                        <p class="p-brown-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row pb-5">
                    <div class="col">
                        <img class="arreglo-img-hab-bl" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/habilidad-4.jpg')?>" alt="Un hombre y una mujer trabajando y analizando datos.">
                    </div>
                    <div class="col">
                        <h3 class="h3-brown">Titulo</h3>
                        <p class="p-brown-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col">
                        <img class="arreglo-img-hab-bl" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/habilidad-5.jpg')?>" alt="Un hombre y una mujer trabajando y analizando datos.">
                    </div>
                    <div class="col">
                        <h3 class="h3-brown">Titulo</h3>
                        <p class="p-brown-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col">
                        <img class="arreglo-img-hab-bl" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/habilidad-6.jpg')?>" alt="Un hombre y una mujer trabajando y analizando datos.">
                    </div>
                    <div class="col">
                        <h3 class="h3-brown">Titulo</h3>
                        <p class="p-brown-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>    
        </div>
    
 </div>
 <div class="text-center mt-5 pt-5">
    <h2 class="h2-brown">Habilidades Técnicas</h2>
</div>

<div id="carouselExample" class="carousel slide mt-5">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <div class="d-flex justify-content-center">
                <div class="text-center bg-color-tecnicas-1 me-3">
                    <h3 class="h3-brown pb-3">Diseño UX/UI</h3>
                    <p class="p-brown"></p>
                </div>

                <div class="text-center bg-color-tecnicas-2 me-3">
                    <h3 class="h3-brown pb-3">HTML/CSS</h3>
                    <p class="p-brown"></p>
                </div>

                <div class="text-center bg-color-tecnicas-1 me-3">
                    <h3 class="h3-brown pb-3">CMS Wordpress</h3>
                    <p class="p-brown"></p>
                </div>

                <div class="text-center bg-color-tecnicas-2">
                    <h3 class="h3-brown">Javascript</h3>
                    <p class="p-brown"></p>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="d-flex justify-content-center">
                <div class="text-center bg-color-tecnicas-1 me-3">
                    <h3 class="h3-brown pb-3">Accesibilidad Web</h3>
                    <p class="p-brown"></p>
                </div>

                <div class="text-center bg-color-tecnicas-2 me-3">
                    <h3 class="h3-brown pb-3">SEO y Posicionamiento</h3>
                    <p class="p-brown"></p>
                </div>

                <div class="text-center bg-color-tecnicas-1 me-3">
                    <h3 class="h3-brown pb-3">Elementor PRO</h3>
                    <p class="p-brown"></p>
                </div>

                <div class="text-center bg-color-tecnicas-2">
                    <h3 class="h3-brown pb-3">Wordpress Headless</h3>
                    <p class="p-brown"></p>
                </div>
            </div>
        </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>

<div class="mt-5 pt-5 mb-5 pb-5 posicion-div-met">
    <div class="mt-5 w-100 d-flex justify-content-center">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/metodologia.png')?>" alt="">
    </div>
    <div class="d-flex flex-column justify-content-start w-auto posicion-met-1">
        <span class="h3-brown">Título</span>
        <span class="p-brown">parrafo</span>
    </div>
    <div class="d-flex flex-column justify-content-start w-auto">
        <span class="h3-brown">Título</span>
        <span class="p-brown">parrafo</span>
    </div>
    <div class="d-flex flex-column justify-content-start w-auto">
        <span class="h3-brown">Título</span>
        <span class="p-brown">parrafo</span>
    </div>
    <div class="d-flex flex-column justify-content-start w-auto">
        <span class="h3-brown">Título</span>
        <span class="p-brown">parrafo</span>
    </div>
    <div class="d-flex flex-column justify-content-end w-auto">
        <span class="h3-brown">Título</span>
        <span class="p-brown">parrafo</span>
    </div>
    <div class="d-flex flex-column justify-content-end w-auto">
        <span class="h3-brown">Título</span>
        <span class="p-brown">parrafo</span>
    </div>
    <div class="d-flex flex-column justify-content-end w-auto">
        <span class="h3-brown">Título</span>
        <span class="p-brown">parrafo</span>
    </div>
</div>
</main>
<?php get_footer(); ?>
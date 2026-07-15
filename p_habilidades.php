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
 <div class="h2-brown text-center">
    Habilidades Técnicas
 </div>
 <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active d-flex">
      <div class="text-center bg-color-tecnicas-1 me-1">
        <h3 class="h3-brown">Diseño UX/UI</h3>
        <p class="p-brown"></p>
      </div>
      <div class="text-center bg-color-tecnicas-2 me-1">
        <h3 class="h3-brown">Diseño UX/UI</h3>
        <p class="p-brown"></p>
      </div>
      <div class="text-center bg-color-tecnicas-1 me-1">
        <h3 class="h3-brown">Diseño UX/UI</h3>
        <p class="p-brown"></p>
      </div>
      <div class="text-center bg-color-tecnicas-2 me-1">
        <h3 class="h3-brown">Diseño UX/UI</h3>
        <p class="p-brown"></p>
      </div>
    </div>
    <div class="carousel-item d-flex">
      <div class="text-center bg-color-tecnicas-1 me-1">
        <h3 class="h3-brown">Diseño UX/UI</h3>
        <p class="p-brown"></p>
      </div>
      <div class="text-center bg-color-tecnicas-2 me-1">
        <h3 class="h3-brown">Diseño UX/UI</h3>
        <p class="p-brown"></p>
      </div>
      <div class="text-center bg-color-tecnicas-1 me-1">
        <h3 class="h3-brown">Diseño UX/UI</h3>
        <p class="p-brown"></p>
      </div>
      <div class="text-center bg-color-tecnicas-2 me-1">
        <h3 class="h3-brown">Diseño UX/UI</h3>
        <p class="p-brown"></p>
      </div>
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
   
</main>
<?php get_footer(); ?>
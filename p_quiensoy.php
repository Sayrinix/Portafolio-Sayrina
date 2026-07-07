<?php
/*
Template Name: ¿Quién soy?
*/
get_header();
?>
<main>
<div class="container-fluid bg-color-qn d-flex flex-column align-items-center justify-content-center">
    <h1 class="h1-brown">Sayrina Luciano Jofré</h1>
    <p class="p-brown">Diseñadora y Desarrolladora Web</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-6">
            <img class="arreglo-imagen-perfil" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/foto-perfil.jpeg')?>" alt="">
        </div>
        <div class="col-4 bg-color-desc">
            <p class="p-brown">Mi nombre es Sayrina Luciano, tengo 23 años y vivo en Viña del Mar. Me interesa muchísimo la tecnología y crear experiencias que solucionen problemas de la vida cotidiana. También me gusta leer, escribir, el arte y la música.</p>
        </div>
    </div>
</div>
<?php get_footer(); ?>
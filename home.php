<?php
get_header();
?>
<main>
<div class="container margen-cont-hero">
    <div class="row g-0">
        <div class="col-5 m-0 arreglo-hero-blog d-flex flex-column align-items-center justify-content-center text-center">
            <h1 class="h1-brown">Toda gran experiencia, comienza con una idea.</h1>
            <p class="p-brown">¡Descubre nuestro Blog!</p>
        </div>
        <div class="col-7 m-0">
            <img class="arreglo-img-blog-hero" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/blog-hero.png')?>" alt="">
        </div>
    </div>
</div>
<?php get_footer(); ?>
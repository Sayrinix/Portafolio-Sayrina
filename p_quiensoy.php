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

<div class="container mt-5 pt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-6 pe-3">
            <img class="arreglo-imagen-perfil" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/foto-perfil.jpeg')?>" alt="">
        </div>
        <div class="col-4 bg-color-desc d-flex justify-content-center align-items-center">
            <p class="p-brown p-5">Mi nombre es Sayrina Luciano, tengo 23 años y vivo en Viña del Mar. Me interesa muchísimo la tecnología y crear experiencias que solucionen problemas de la vida cotidiana. También me gusta leer, escribir, el arte y la música.</p>
        </div>
    </div>
</div>
<div class="container mt-5 pt-5">
    <div class="row mb-5">
        <div class="col-12 d-flex justify-content-center">
            <h2 class="h2-brown">Enfoque Profesional</h2>
            <p class="p-brown text-center">Mi enfoque se encuentra en la intersección entre las necesidades de las personas, las posibilidades de la tecnología y los objetivos del negocio.</p>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-3 enfoque-card">
            <h3 class="h3-brown pb-3">Usuarios</h3>
            <p class="p-brown-2"><strong>Diseño centrado en las personas</strong></p>
            <p class="p-brown-2">Comprender las necesidades, comportamientos y contextos de los usuarios para crear experiencias digitales intuitivas, accesibles y útiles, donde la tecnología responda a problemas reales.</p>
        </div>
        <div class="col-4 enfoque-card">
            <h3 class="h3-brown pb-3">Tecnología</h3>
            <p class="p-brown-2"><strong>Soluciones digitales que funcionan</strong></p>
            <p class="p-brown-2">Utilizar el desarrollo y las herramientas tecnológicas para transformar necesidades en soluciones digitales funcionales, escalables y bien construidas, conectando diseño, implementación y mejora continua.</p>
        </div>
        <div class="col-3 enfoque-card">
            <h3 class="h3-brown pb-3">Visión Empresarial</h3>
            <p class="p-brown-2"><strong>Tecnología con propósito de negocio</strong></p>
            <p class="p-brown-2">Comprender los objetivos del negocio para desarrollar soluciones que generen valor, utilizando eCommerce, marketing, analítica y métricas para apoyar decisiones y oportunidades de crecimiento.</p>
        </div>
    </div>
</div>

<div class="container mt-5 pt-5">
    <div class="row mb-5">
        <div class="col-12 d-flex justify-content-center">
            <h2 class="h2-brown">Valor Diferencial</h2>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-12">
            <img class="arreglo-girasol" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/girasol.png')?>" alt="">
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-2 arreglo-valor d-flex align-items-center justify-content-center">
            <p class="p-brown-2">Tecnología con enfoque humano</p>
        </div>
        <div class="col-2 arreglo-valor d-flex align-items-center justify-content-center">
            <p class="p-brown-2">Accesibilidad como base, no como extra</p>
        </div>
        <div class="col-2 arreglo-valor d-flex align-items-center justify-content-center">
            <p class="p-brown-2">Decisiones basadas en evidencia</p>
        </div>
        <div class="col-2 arreglo-valor d-flex align-items-center justify-content-center">
            <p class="p-brown-2">Puente entre tecnología y negocio</p>
        </div>
        <div class="col-2 arreglo-valor d-flex align-items-center justify-content-center">
            <p class="p-brown-2">Aprendizaje y adaptación continua</p>
        </div>
        <div class="col-2 arreglo-valor d-flex align-items-center justify-content-center">
            <p class="p-brown-2">Desarrollo digital con propósito</p>
        </div>
    </div>
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-8 d-flex flex-column align-items-center mt-5 justify-content-center arreglo-cta">
         <p class="p-brown text-center mt-4 pb-4">Si te interesa conocer más sobre mí <br> ¡Visita mis Proyectos!</p>
        <a href="<?php echo esc_url(get_permalink(23)); ?>" class="boton-ver">Ver Proyectos</a>  
        </div>
    </div>
</div>
</main>
<?php get_footer(); ?>
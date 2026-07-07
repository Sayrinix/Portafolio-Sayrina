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
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-3 enfoque-card">
            <h3 class="h3-brown pb-3">Soluciones digitales para personas mayores</h3>
            <p class="p-brown">Me interesa desarrollar soluciones digitales accesibles, simples y funcionales que faciliten la experiencia de uso de las personas mayores en entornos digitales.</p>
        </div>
        <div class="col-3 enfoque-card">
            <h3 class="h3-brown pb-3">Posicionamiento Digital para emprendedores</h3>
            <p class="p-brown">Me interesa apoyar a emprendedores y pequeñas marcas en la construcción de una presencia digital sólida, estratégica y coherente. Este enfoque considera el desarrollo de sitios web, optimización SEO, estructura de contenidos e identidad digital</p>
        </div>
        <div class="col-3 enfoque-card">
            <h3 class="h3-brown pb-3">Investigación en Seguridad Digital</h3>
            <p class="p-brown">Mi interés está especialmente orientado a acercar la seguridad digital a personas y grupos que no siempre cuentan con conocimientos técnicos, promoviendo una cultura digital más informada, responsable y preventiva.</p>
        </div>
    </div>
</div>
<?php get_footer(); ?>
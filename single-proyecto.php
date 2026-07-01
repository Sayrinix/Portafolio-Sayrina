<?php get_header(); ?>
<main>

<div class="container">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

<?php
 
 $titulo = get_field('titulo_del_proyecto');
 $imagen_destacada = get_field('imagen_destacada');
 $descripcion_breve = get_field('descripcion_breve_del_proyecto');
 $rol = get_field('rol_estudiante');
 $imagen_principal = get_field('imagen_principal');
 $descripcion = get_field('descripcion_general');
 $problematica = get_field('problematica');
$tecnologia_1 = get_field('tecnologia_1');
$tecnologia_2 = get_field('tecnologia_2');
$tecnologia_3 = get_field('tecnologia_3');
$tecnologia_4 = get_field('tecnologia_4');
$tecnologia_5 = get_field('tecnologia_5');
$tecnologia_6 = get_field('tecnologia_6');
$tecnologia_7 = get_field('tecnologia_7');
$imagen_proceso_1 = get_field('imagen_proceso_1');
$descripcion_proceso_1 = get_field('descripcion_proceso_1');

$imagen_proceso_2 = get_field('imagen_proceso_2');
$descripcion_proceso_2 = get_field('descripcion_proceso_2');

$imagen_proceso_3 = get_field('imagen_proceso_3');
$descripcion_proceso_3 = get_field('descripcion_proceso_3');

$imagen_proceso_4 = get_field('imagen_proceso_4');
$descripcion_proceso_4 = get_field('descripcion_proceso_4');

$imagen_proceso_5 = get_field('imagen_proceso_5');
$descripcion_proceso_5 = get_field('descripcion_proceso_5');

$imagen_proceso_6 = get_field('imagen_proceso_6');
$descripcion_proceso_6 = get_field('descripcion_proceso_6');

$resultados = get_field('resultados_e_impacto');
$oportunidades = get_field('oportunidades_de_mejora');      
?>

<div class="row">
    <div class="col-8">
        <?php if ($titulo) : ?>
        <h1 class="h1-brown"><?php echo esc_html($titulo); ?></h1>
        <?php endif; ?>
        
        <?php if ($rol) : ?>
        <h2 class="h2-brown"><?php echo esc_html($rol); ?></h2>
        <?php endif; ?>
        
        <?php if ($imagen_principal) : ?>
        <img class="arreglo-imagen-principal" src="<?php echo esc_url($imagen_principal['url']); ?>" alt="<?php echo esc_attr($imagen_principal['alt']); ?>">
         <?php endif; ?>

         <h2 class="h2-brown">Descripción</h2>
        
         <?php if ($descripcion) : ?>
        <p class="p-brown"><?php echo esc_html($descripcion); ?></p>
        <?php endif; ?>
        
        <hr class="linea-separacion">

        <h2 class="h2-brown">Problemática</h2>

        <?php if ($problematica) : ?>
        <p class="p-brown"><?php echo esc_html($problematica); ?></p>
        <?php endif; ?>

        
        <h2 class="h2-brown">Tecnologías</h2>

        <div class="contenedor-tecnologias">
            <?php if ($tecnologia_1) : ?>
            <img class="arreglo-icono-tec pe-1" src="<?php echo esc_url($tecnologia_1['url']); ?>" alt="<?php echo esc_attr($tecnologia_1['alt']); ?>">
            <?php endif; ?>

            <?php if ($tecnologia_2) : ?>
            <img class="arreglo-icono-tec pe-1" src="<?php echo esc_url($tecnologia_2['url']); ?>" alt="<?php echo esc_attr($tecnologia_2['alt']); ?>">
            <?php endif; ?>

            <?php if ($tecnologia_3) : ?>
            <img class="arreglo-icono-tec pe-1" src="<?php echo esc_url($tecnologia_3['url']); ?>" alt="<?php echo esc_attr($tecnologia_3['alt']); ?>">
            <?php endif; ?>

            <?php if ($tecnologia_4) : ?>
            <img class="arreglo-icono-tec pe-1" src="<?php echo esc_url($tecnologia_4['url']); ?>" alt="<?php echo esc_attr($tecnologia_4['alt']); ?>">
            <?php endif; ?>

            <?php if ($tecnologia_5) : ?>
            <img class="arreglo-icono-tec pe-1" src="<?php echo esc_url($tecnologia_5['url']); ?>" alt="<?php echo esc_attr($tecnologia_5['alt']); ?>">
            <?php endif; ?>

            <?php if ($tecnologia_6) : ?>
            <img class="arreglo-icono-tec pe-1" src="<?php echo esc_url($tecnologia_6['url']); ?>" alt="<?php echo esc_attr($tecnologia_6('alt']); ?>">
            <?php endif; ?>

            <?php if ($tecnologia_7) : ?>
            <img class="arreglo-icono-tec pe-1" src="<?php echo esc_url($tecnologia_7['url']); ?>" alt="<?php echo esc_attr($tecnologia_7['alt']); ?>">
            <?php endif; ?>
        </div>
        
        <h2 class="h2-brown">Proceso</h2>

<div id="carouselProyecto" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="row g-4">

        <div class="col-12 col-md-6">
          <div class="carousel-project-card">
            <?php if ($imagen_proceso_1) : ?>
            <img src="<?php echo esc_url($imagen_proceso_1['url']); ?>" class="d-block w-100 carousel-project-img" alt="<?php echo esc_attr($imagen_proceso_1['alt']); ?>">
            <?php endif; ?>

            <?php if ($descripcion_proceso_1) : ?>
            <p class="carousel-project-text p-brown">
             <?php echo esc_html($descripcion_proceso_1); ?>
            </p>
            <?php endif; ?>
          </div>
        </div>

        <div class="col-12 col-md-6">
          <div class="carousel-project-card">
              <?php if ($imagen_proceso_2) : ?>
            <img src="<?php echo esc_url($imagen_proceso_2['url']); ?>" class="d-block w-100 carousel-project-img" alt="<?php echo esc_attr($imagen_proceso_2['alt']); ?>">
            <?php endif; ?>

            <?php if ($descripcion_proceso_2) : ?>
            <p class="carousel-project-text p-brown">
             <?php echo esc_html($descripcion_proceso_2); ?>
            </p>
            <?php endif; ?>
          </div>
        </div>

      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <div class="row g-4">

        <div class="col-12 col-md-6">
          <div class="carousel-project-card">
              <?php if ($imagen_proceso_3) : ?>
            <img src="<?php echo esc_url($imagen_proceso_3['url']); ?>" class="d-block w-100 carousel-project-img" alt="<?php echo esc_attr($imagen_proceso_3['alt']); ?>">
            <?php endif; ?>

            <?php if ($descripcion_proceso_3) : ?>
            <p class="carousel-project-text p-brown">
             <?php echo esc_html($descripcion_proceso_3); ?>
            </p>
            <?php endif; ?>
          </div>
        </div>

        <div class="col-12 col-md-6">
          <div class="carousel-project-card">
              <?php if ($imagen_proceso_4) : ?>
            <img src="<?php echo esc_url($imagen_proceso_4['url']); ?>" class="d-block w-100 carousel-project-img" alt="<?php echo esc_attr($imagen_proceso_4['alt']); ?>">
            <?php endif; ?>

            <?php if ($descripcion_proceso_4) : ?>
            <p class="carousel-project-text p-brown">
             <?php echo esc_html($descripcion_proceso_4); ?>
            </p>
            <?php endif; ?>
          </div>
        </div>

      </div>
    </div>
    
     <!-- Slide 3 -->
    <div class="carousel-item">
      <div class="row g-4">

        <div class="col-12 col-md-6">
          <div class="carousel-project-card">
            <?php if ($imagen_proceso_5) : ?>
            <img src="<?php echo esc_url($imagen_proceso_5['url']); ?>" class="d-block w-100 carousel-project-img" alt="<?php echo esc_attr($imagen_proceso_5['alt']); ?>">
            <?php endif; ?>

            <?php if ($descripcion_proceso_5) : ?>
            <p class="carousel-project-text p-brown">
             <?php echo esc_html($descripcion_proceso_5); ?>
            </p>
            <?php endif; ?>
          </div>
        </div>

        <div class="col-12 col-md-6">
          <div class="carousel-project-card">
              <?php if ($imagen_proceso_6) : ?>
            <img src="<?php echo esc_url($imagen_proceso_6['url']); ?>" class="d-block w-100 carousel-project-img" alt="<?php echo esc_attr($imagen_proceso_6['alt']); ?>">
            <?php endif; ?>

            <?php if ($descripcion_proceso_6) : ?>
            <p class="carousel-project-text p-brown">
             <?php echo esc_html($descripcion_proceso_6); ?>
            </p>
            <?php endif; ?>
          </div>
        </div>

      </div>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselProyecto" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselProyecto" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>

<h2 class="h2-brown">Resultados e Impacto</h2>
        
         <?php if ($resultados) : ?>
        <p class="p-brown"><?php echo esc_html($resultados); ?></p>
        <?php endif; ?>
        
        <hr class="linea-separacion">

<h2 class="h2-brown">Oportunidades de Mejora</h2>

        <?php if ($oportunidades) : ?>
        <p class="p-brown"><?php echo esc_html($oportunidades); ?></p>
        <?php endif; ?>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
</main>
<?php get_footer(); ?>
    
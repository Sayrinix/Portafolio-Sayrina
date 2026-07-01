<?php
/*
Template Name: Proyectos
*/
get_header();
?>
<main>
    <div class="container-fluid altura-imaginaria">

    </div>
    <div class="container-fluid altura-div-filtros">

    </div>
  <div class="container d-flex justify-content-center">
    <?php
            $projects_query = new WP_Query(array(
                'post_type'      => 'proyecto',
                'posts_per_page' => 4,
                'orderby'        => 'date',
                'order'          => 'DESC'
            ));
            ?>
            <?php if ($projects_query->have_posts()) : ?>
            
    <div class="row">
        <?php while ($projects_query->have_posts()) : $projects_query->the_post(); ?>

        <?php
            $titulo = get_field('titulo_del_proyecto'); 
            $descripcion = get_field('descripcion_breve_del_proyecto');
            $imagen_destacada = get_field('imagen_destacada');
        ?>

        
            <div class="col-3 altura-div-destacada">
                
                <a href="<?php the_permalink(); ?>">
                    <?php if ($imagen_destacada) : ?>
                    <img class="imagen-destacada-arreglo" src="<?php echo esc_url($imagen_destacada['url']); ?>" 
                    alt="<?php echo esc_attr($imagen_destacada['alt']); ?>">
                    <?php endif; ?>
                </a>
               
            </div>
            <div class="col-2 d-flex flex-column justify-content-end">
                <?php if ($titulo) : ?>
                <h3 class="h3-brown"><?php echo esc_html($titulo); ?></h3>
                <?php endif; ?>
                <?php if ($descripcion) : ?>
                <p class="p-brown"><?php echo esc_html($descripcion); ?></p>
                <?php endif; ?>
                <a class="boton-ver" href="<?php the_permalink(); ?>">Ver más</a>
            </div>
        
        <?php endwhile; ?>
    </div>
        <?php wp_reset_postdata(); ?>

        <?php else : ?>

            <p>No hay proyectos publicados todavía.</p>

        <?php endif; ?>
  </div> 
</main>
<?php get_footer(); ?>
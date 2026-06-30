<?php
/*
Template Name: Proyectos
*/
get_header();
?>
<main>
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
        ?>

        <div class="col-5 d-flex">
            <div class="altura-div-destacada">
                <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('thumbnail', array(
                        'class' => 'imagen-destacada-arreglo',
                        'alt'   => esc_attr(get_the_title())
                    )); ?>
                </a>
                <?php endif; ?>
            </div>
            <div>
                <?php if ($titulo) : ?>
                <h3 class="h3-brown"><?php echo esc_html($titulo); ?></h3>
                <?php endif; ?>
                <?php if ($descripcion) : ?>
                <p class="p-brown"><?php echo esc_html($descripcion); ?></p>
                <?php endif; ?>
                <a class="boton-ver" href="<?php the_permalink(); ?>">Ver más</a>
            </div>
        </div>
        <div class="col-1">

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
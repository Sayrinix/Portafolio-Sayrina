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
            <?php
            $titulo = get_field('titulo_del_proyecto'); 
            $descripcion = get_field('descripcion_breve_del_proyecto')
            ?>
    <div class="row">
        <?php while ($projects_query->have_posts()) : $projects_query->the_post(); ?>
        <div class="col-5 d-flex">
            <?php if (has_post_thumbnail()) : ?>
            <img class="imagen-destacada-arreglo" src="<?php the_post_thumbnail('large'); ?>" alt="">
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
    </div>
  </div>  
</main>
<?php get_footer(); ?>
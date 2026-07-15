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
        <div class="d-flex justify-content-center gap-3 mb-5">
            <button class="boton-ver boton-filtro active" data-filter="todos">
                Todos
            </button>

            <button class="boton-ver boton-filtro" data-filter="finalizados">
                Finalizados
            </button>

            <button class="boton-ver boton-filtro" data-filter="en-desarrollo">
                En desarrollo
            </button>

            <button class="boton-ver boton-filtro" data-filter="planificados">
                Planificados
            </button>
        </div>
    </div>
  <div class="container d-flex justify-content-center">
    <?php

    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $projects_query = new WP_Query(array(
                'post_type'      => 'proyecto',
                'posts_per_page' => 4,
                'orderby'        => 'date',
                'order'          => 'DESC',
                'paged'          => $paged
            ));
            ?>
            <?php if ($projects_query->have_posts()) : ?>
            
    <div class="row mb-5">
        <?php while ($projects_query->have_posts()) : $projects_query->the_post(); ?>

        <?php
            $titulo = get_field('titulo_del_proyecto'); 
            $descripcion = get_field('descripcion_breve_del_proyecto');
            $imagen_destacada = get_field('imagen_destacada');
        ?>

        <?php
                    $terms = get_the_terms(get_the_ID(), 'estado_proyecto');
                    $estado_slugs = '';

                    if ($terms && !is_wp_error($terms)) {
                        foreach ($terms as $term) {
                            $estado_slugs .= $term->slug . ' ';
                        }
                    }
        ?>


        
            <div class="col-3 altura-div-destacada mb-5 mt-5">
                
                <a href="<?php the_permalink(); ?>">
                    <?php if ($imagen_destacada) : ?>
                    <img class="imagen-destacada-arreglo" src="<?php echo esc_url($imagen_destacada['url']); ?>" 
                    alt="<?php echo esc_attr($imagen_destacada['alt']); ?>">
                    <?php endif; ?>
                </a>
               
            </div>
            <div class="col-3 d-flex flex-column justify-content-end altura-div-destacada mb-5 mt-5 pe-0 me-0">
                <?php if ($titulo) : ?>
                <h3 class="h3-brown"><?php echo esc_html($titulo); ?></h3>
                <?php endif; ?>
                <?php if ($descripcion) : ?>
                <p class="p-brown"><?php echo esc_html($descripcion); ?></p>
                <?php endif; ?>
                <div class="d-flex">
                    <a class="boton-ver" href="<?php the_permalink(); ?>">Ver más</a>
                </div>

            </div>
        
        <?php endwhile; ?>

        <nav class="paginacion-proyectos" aria-label="Paginación de proyectos">
                    <?php
                    echo paginate_links(array(
                        'total'     => $projects_query->max_num_pages,
                        'prev_text' => '← Anterior',
                        'next_text' => 'Siguiente →',
                        'type'      => 'list',
                        'current'   => max(1, $paged)

                    ));
                    ?>
                </nav>
    </div>
        <?php wp_reset_postdata(); ?>

        <?php else : ?>

            <p>No hay proyectos publicados todavía.</p>

        <?php endif; ?>
  </div> 
</main>
<?php get_footer(); ?>
<?php
get_header();
?>
<main>
<div class="container margen-cont-hero">
    <div class="row g-0">
        <div class="col-5 m-0 arreglo-hero-blog d-flex flex-column align-items-center justify-content-center text-center">
            <h1 class="h1-brown">Toda gran experiencia, comienza <br> con una idea.</h1>
            <p class="p-brown">¡Descubre nuestro Blog!</p>
        </div>
        <div class="col-7 m-0">
            <img class="arreglo-img-blog-hero" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/blog-hero.png')?>" alt="">
        </div>
    </div>
</div>

<div class="container mt-5 pt-5">
    <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;

            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 1,
                'paged'          => $paged,
                'category_name'  => 'destacado',
            );

            $blog_query = new WP_Query($args);
            ?>

            <?php if ($blog_query->have_posts()) : ?>
    <div class="row">
        <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>

        <div class="col-6 posicion-imagen-dest-1">
                <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large', array('class' => 'img-arreglo-dest')); ?>
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg" alt="Imagen por defecto" class="img-fluid">
                    <?php endif; ?>
                </a>
            <div>
                <span class="p-brown-2 posicion-span-left"><?php echo get_the_date(); ?></span>
                <?php
                $categories = get_the_category();
                if (!empty($categories)) :
                ?>
                    <span class="p-brown-2 posicion-span-right">
                        <?php echo esc_html($categories[0]->name); ?>
                    </span>
                <?php endif; ?>                        
            </div>       
        </div>

        <div class="col-5 ms-5 altura-cont-dest">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h3><a class="h3-brown pb-2" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="p-brown-2"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
            </div>
            <div class="w-auto d-flex justify-content-end">
                <a class="boton-ver-s" href="<?php the_permalink(); ?>">Ver más</a>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>

            <?php else : ?>

                <p>No hay entradas publicadas todavía.</p>

            <?php endif; ?>
</div>

<div>
  <ul class="nav nav-underline display-flex justify-content-center" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active h2-brown-link" id="accesibilidad-tab" data-bs-toggle="tab" data-bs-target="#accesibilidad-tab-pane" type="button" role="tab" aria-controls="accesibilidad-tab-pane" aria-selected="true">Accesibilidad</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link h2-brown-link" id="posicionamiento-tab" data-bs-toggle="tab" data-bs-target="#posicionamiento-tab-pane" type="button" role="tab" aria-controls="posicionamiento-tab-pane" aria-selected="false">Posicionamiento Web</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link h2-brown-link" id="seguridad-tab" data-bs-toggle="tab" data-bs-target="#seguridad-tab-pane" type="button" role="tab" aria-controls="seguridad-tab-pane" aria-selected="false">Seguridad Digital</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link h2-brown-link" id="programacion-tab" data-bs-toggle="tab" data-bs-target="#programacion-tab-pane" type="button" role="tab" aria-controls="programacion-tab-pane" aria-selected="false">Programación</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="accesibilidad-tab-pane"            role="tabpanel" aria-labelledby="accesibilidad-tab" tabindex="0">
        <div class="container mt-5 pt-5">
        <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;

            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 4,
                'paged'          => $paged,
                'category_name'  => 'accesibilidad',
            );

            $blog_query = new WP_Query($args);
            ?>

            <?php if ($blog_query->have_posts()) : ?>
                <div class="row">
                    <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                    <div class="col-3 posicion-imagen-category">
                        <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large', array('class' => 'img-arreglo-category')); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg" alt="Imagen por defecto" class="img-fluid">
                                <?php endif; ?>
                            </a>
                            <span class="p-brown-2 posicion-span-left-category"><?php echo get_the_date(); ?></span>
                        
                    </div>
                    <div class="col-3 ps-3 display-flex flex-column justify-content-center align-items-center altura-cont-category">
                        <div>
                            <h3><a class="h3-brown pb-2" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="p-brown-2"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                        </div>
                        
                        <div class="w-auto d-flex justify-content-start">
                            <a class="boton-ver-s" href="<?php the_permalink(); ?>">Ver más</a>
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

                <p>No hay entradas publicadas todavía.</p>

            <?php endif; ?>
        </div>
    </div>
  <div class="tab-pane fade" id="posicionamiento-tab-pane" role="tabpanel" aria-labelledby="posicionamiento-tab" tabindex="0">

    <div class="container mt-5 pt-5">
        <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;

            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 4,
                'paged'          => $paged,
                'category_name'  => 'posicionamiento',
            );

            $blog_query = new WP_Query($args);
            ?>

            <?php if ($blog_query->have_posts()) : ?>
                <div class="row">
                    <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                    <div class="col-3 posicion-imagen-category">
                        <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large', array('class' => 'img-arreglo-category')); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg" alt="Imagen por defecto" class="img-fluid">
                                <?php endif; ?>
                            </a>
                            <span class="p-brown-2 posicion-span-left-category"><?php echo get_the_date(); ?></span>
                        
                    </div>
                    <div class="col-3 ps-3 display-flex flex-column justify-content-center align-items-cente altura-cont-category">
                        <h3><a class="h3-brown pb-2" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p class="p-brown-2"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                        <div class="w-auto d-flex justify-content-start">
                            <a class="boton-ver-s" href="<?php the_permalink(); ?>">Ver más</a>
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

                <p>No hay entradas publicadas todavía.</p>

            <?php endif; ?>
        </div>
  </div>
  <div class="tab-pane fade" id="seguridad-tab-pane" role="tabpanel" aria-labelledby="seguridad-tab" tabindex="0">
        <div class="container mt-5 pt-5">
        <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;

            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 4,
                'paged'          => $paged,
                'category_name'  => 'seguridad',
            );

            $blog_query = new WP_Query($args);
            ?>

            <?php if ($blog_query->have_posts()) : ?>
                <div class="row">
                    <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                    <div class="col-3 posicion-imagen-category">
                        <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large', array('class' => 'img-arreglo-category')); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg" alt="Imagen por defecto" class="img-fluid">
                                <?php endif; ?>
                            </a>
                            <span class="p-brown-2 posicion-span-left-category"><?php echo get_the_date(); ?></span>
                        
                    </div>
                    <div class="col-3 ps-3 display-flex flex-column justify-content-center align-items-center altura-cont-category">
                        <h3><a class="h3-brown pb-2" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p class="p-brown-2"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                        <div class="w-auto d-flex justify-content-start">
                            <a class="boton-ver-s" href="<?php the_permalink(); ?>">Ver más</a>
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

                <p>No hay entradas publicadas todavía.</p>

            <?php endif; ?>
        </div>
  </div>
  <div class="tab-pane fade" id="programacion-tab-pane" role="tabpanel" aria-labelledby="programacion-tab" tabindex="0">
        <div class="container mt-5 pt-5">
        <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;

            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 4,
                'paged'          => $paged,
                'category_name'  => 'programacion',
            );

            $blog_query = new WP_Query($args);
            ?>

            <?php if ($blog_query->have_posts()) : ?>
                <div class="row">
                    <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                    <div class="col-3 posicion-imagen-category">
                        <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large', array('class' => 'img-arreglo-category')); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg" alt="Imagen por defecto" class="img-fluid">
                                <?php endif; ?>
                            </a>
                            <span class="p-brown-2 posicion-span-left-category"><?php echo get_the_date(); ?></span>
                        
                    </div>
                    <div class="col-3 ps-3 display-flex flex-column justify-content-center align-items-center altura-cont-category">
                        <h3><a class="h3-brown pb-2" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p class="p-brown-2"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                        <div class="w-auto d-flex justify-content-start">
                            <a class="boton-ver-s" href="<?php the_permalink(); ?>">Ver más</a>
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

                <p>No hay entradas publicadas todavía.</p>

            <?php endif; ?>
        </div>
  </div>
</div>
</div>
<?php get_footer(); ?>
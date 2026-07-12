<?php get_header(); ?>

<main class="margen-cont-hero">
    <div class="container">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        
        <?php
        $titulo_2 = get_field('titulo_2_imagen');
        $imagen = get_field('imagen_secundaria');
        $conclusion = get_field('conclusion_final');
        ?>
        <div class="row">
            <div class="col-8">
                <?php if (has_post_thumbnail()) : ?>
                 <?php the_post_thumbnail('large', array('class' => 'img-principal-single-blog')); ?> 
                <?php endif; ?>
                <div class="d-flex">
                    <span class="p-brown-2 pe-5"><?php echo get_the_date(); ?></span>

                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) :
                    ?>
                        <span class="p-brown-2"><?php echo esc_html($categories[0]->name); ?></span>
                    <?php endif; ?>
                </div>
                <div>
                    <h1 class="h1-brown"><?php the_title(); ?></h1>
                    <div class="p-brown-2"><?php the_content(); ?></div>
                </div>
                <div class="row">
                    <div class="col-5">
                        <?php if ($imagen) : ?>
                        <img class="img-sec-single-blog" src="<?php echo esc_url($imagen['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>">
                        <?php endif; ?>    
                    </div>
                    <div class="col-3">
                        <?php if ($titulo_2) : ?>
                        <h2 class="h2-brown"><?php echo esc_html($titulo_2); ?></h2>
                        <?php endif; ?> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <?php if ($conclusion) : ?> 
                        <p class="p-brown-2"><?php echo esc_html($conclusion); ?></p>
                        <?php endif; ?> 
                    </div>
                </div>
                
            </div>
            <div class="col-4">
                <aside>
                     <?php
                        $proyectos_recomendados = new WP_Query(array(
                            'post_type'      => 'post',
                            'posts_per_page' => 4,
                            'orderby'        => 'rand',
                            'post__not_in'   => array(get_the_ID())
                        ));
                        ?>

                    <?php if ($proyectos_recomendados->have_posts()) : ?>

                    <div>

                        <?php while ($proyectos_recomendados->have_posts()) : $proyectos_recomendados->the_post(); ?>

                        <article class="d-flex flex-column align-items-center mb-3 pb-3">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('large', array('class' => 'img-arreglo-single-blog')); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg" alt="Imagen por defecto" class="img-fluid">
                                    <?php endif; ?>
                                </a>

                            <h3 class="h3-brown-s">
                                <?php the_title(); ?>
                            </h3>

                            <a class="boton-ver-s" href="<?php the_permalink(); ?>">
                                Ver más
                            </a>

                            <hr class="linea-separacion mt-3">

                        </article>

                        <?php endwhile; ?>
                    </div>

                
                    <?php wp_reset_postdata(); ?>

                    <?php else : ?>

                        <p class="p-brown">No hay otros proyectos disponibles.</p>

                    <?php endif; ?>
                </aside>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>
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
        <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>

            <?php else : ?>

                <p>No hay entradas publicadas todavía.</p>

            <?php endif; ?>
</div>
<?php get_footer(); ?>
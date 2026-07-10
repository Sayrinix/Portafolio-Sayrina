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

        <div class="col-6 ps-3 display-flex flex-column justify-content-center align-items-center">
            <h3><a class="h3-brown pb-2" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="p-brown-2"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
            <div class="w-auto d-flex justify-content-end">
                <a class="boton-ver-s" href="<?php the_permalink(); ?>">Ver más</a>
            </div>
        </div>
    </div>
    <?php wp_reset_postdata(); ?>

            <?php else : ?>

                <p>No hay entradas publicadas todavía.</p>

            <?php endif; ?>
</div>

<div>
  <ul class="nav nav-underline" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="accesibilidad-tab" data-bs-toggle="tab" data-bs-target="#accesibilidad-tab-pane" type="button" role="tab" aria-controls="accesibilidad-tab-pane" aria-selected="true">Accesibilidad</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Disabled</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="accesibilidad-tab-pane" role="tabpanel" aria-labelledby="accesibilidad-tab" tabindex="0">
<div class="container">
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
            <div class="col-3 posicion-imagen-category{">
                <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', array('class' => 'img-arreglo-category')); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg" alt="Imagen por defecto" class="img-fluid">
                        <?php endif; ?>
                    </a>
                <div>
                    <span class="p-brown-2 posicion-span-left"><?php echo get_the_date(); ?></span>
                </div>
            </div>
            <?php endwhile; ?>
            <div class="col-2 ps-3 display-flex flex-column justify-content-center align-items-center">
                <h3><a class="h3-brown pb-2" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class="p-brown-2"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                <div class="w-auto d-flex justify-content-start">
                    <a class="boton-ver-s" href="<?php the_permalink(); ?>">Ver más</a>
                </div>
            </div>
        </div>
<?php wp_reset_postdata(); ?>

<?php else : ?>

    <p>No hay entradas publicadas todavía.</p>

<?php endif; ?>
</div>
  </div>
  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
</div>
</div>
<?php get_footer(); ?>
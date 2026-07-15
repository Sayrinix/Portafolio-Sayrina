<?php
/*
Template Name: CV
*/
get_header();
?>
<main>
    <div class="bg-color-cv">
        <h1 class="h1-brown">Curriculum Vitae</h1>
    </div>
  <div class="container">
    <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="visor-cv mt-5">
                <?php the_content(); ?>
            </div>
                 
            <?php endwhile; ?>
        <?php endif; ?>   
  </div> 
</main>
<?php get_footer(); ?>
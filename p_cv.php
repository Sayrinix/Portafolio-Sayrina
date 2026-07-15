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
  <div class="container d-flex justify-content-center w-100">
    <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                 <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>   
  </div> 
</main>
<?php get_footer(); ?>
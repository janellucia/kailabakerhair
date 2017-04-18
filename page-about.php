<?php

/*
  Template Name: About Page
*/

get_header();  ?>

<div class="main" id="main" tabindex="-1">
  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div class="about-wrap">
        <h2>about me</h2>
        <p class="about-info"><?php the_content(); ?></p>
      </div>

      
      

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
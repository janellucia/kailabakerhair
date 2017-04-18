<?php

/*
	Template Name: Front Page
*/

get_header();  ?>

<div class="main" id="main" tabindex="-1">
  <div class="container">

  <section class="row">
  	<?php query_posts(array( 
          'post_type' => 'portfolio_post_type',
          'showposts' => -1,
          'orderby' => 'date', 

        ) );  
    ?>
    <?php while (have_posts()) : the_post(); ?>
    <article class="each-post col-md-6">

	    <div class="portfolio-photo lazyload">
          <?php the_post_thumbnail('full'); ?>

	    	<div class="portfolio-content">
		      <h3><?php the_title(); ?></h3>
		      <div class="box"><?php the_content(); ?></div>
		    </div>
	    </div>
	    
  </article><!-- /.each-post -->
    <?php endwhile;?>
</section><!-- /.row -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>








  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
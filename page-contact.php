<?php

/*
	Template Name: Contact Page
*/

get_header();  ?>

<div class="main">
	<div class="half-hero halfHeroAbout">
	   <div class="overlay">
	      <?php // Start the loop ?>
	      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	       <?php endwhile; // end the loop?>
	       <h2><?php the_title(); ?></h2>
	   </div>
	</div>
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
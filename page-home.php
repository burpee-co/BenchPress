<?php

/*
	Template Name: Home Page
*/

get_header();  ?>

<div class="main mainHome">


		<div class="hero">
		 	<div class="overlay">
		 		<h1><?php echo get_bloginfo ('title') ?></h1>
		 		<h2><?php echo get_bloginfo ( 'description' ); ?></h2>
		 	</div>
			<!-- <img src="images/kettlebell3.jpg" alt=""> -->
		</div>


	  <div class="container homeContainer">

	    <?php // Start the loop ?>
	    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	      <?php the_content(); ?>

	    <?php endwhile; // end the loop?>
	  </div> <!-- /.container -->

	  <div class="homeWidgets">
	  	<div class="container">
	  		<?php dynamic_sidebar('home-widget-area'); ?>
	  	</div>
	  </div>

	  <div class="half-hero">
	  </div>

</div> <!-- /.main -->


<?php get_footer(); ?>
<?php

/*
	Template Name: Home Page
*/

get_header();  ?>

<?php global $post; ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>

<div class="main mainHome">

		<div class="hero" style="background: url(<?php echo $src[0]; ?> ) !important; background-size: cover !important; background-attachment: fixed !important;">
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
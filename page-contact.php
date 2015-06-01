<?php

/*
	Template Name: Contact Page
*/

get_header();  ?>

<?php global $post; ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>

<div class="main">
	<div class="half-hero halfHeroAbout" style="background: url(<?php echo $src[0]; ?> ) !important; background-size: cover !important; background-attachment: fixed !important;">
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
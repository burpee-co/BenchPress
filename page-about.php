<?php 

/*
  Template Name: About Page
*/

  get_header();  ?>

  <?php global $post; ?>
  <?php
  $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
  ?>

  <div class="main">
    <div class="half-hero halfHeroAbout" style="background: url(<?php echo $src[0]; ?> ) !important; background-size: cover !important; background-attachment: fixed !important;">
       <div class="overlay">
           <h2><?php the_title(); ?></h2>
          <?php // Start the loop ?>
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
           <h3><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></h3>
           <?php endwhile; // end the loop?>
       </div>
    </div>

    <div class="container aboutContainer">
    
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="aboutContent">
          <?php the_content(); ?>
        </div>

      <?php endwhile; // end the loop?>
    </div> <!-- /.container -->
  </div> <!-- /.main -->

<?php get_footer(); ?>
<?php 

/*
  Template Name: About Page
*/

  get_header();  ?>

  <div class="main">
    <div class="half-hero">
       <div class="overlay">
           <h1><?php echo get_bloginfo ('title') ?></h1>
           <h2><?php echo get_bloginfo ('description'); ?></h2>
       </div>
      <img src="images/kettlebell3.jpg" alt="">
    </div>
    <div class="container aboutContainer">
  
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      
<!--         <div class="aboutHeader">
          <?php wp_get_attachment_image(); ?>
        </div> -->

        <div class="aboutContent">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </div>

      <?php endwhile; // end the loop?>
    </div> <!-- /.container -->
  </div> <!-- /.main -->

<?php get_footer(); ?>
<?php 

/*
  Template Name: About Page
*/

  get_header();  ?>

  <div class="main">
    <div class="container aboutContainer">
  
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      
        <div class="aboutContent">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </div>

        <div class="aboutCert">
          <h3>Certifications</h3>
        </div>

      <?php endwhile; // end the loop?>
    </div> <!-- /.container -->
  </div> <!-- /.main -->

<?php get_footer(); ?>
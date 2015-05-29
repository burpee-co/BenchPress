<?php 

/*
  Template Name: About Page
*/

  get_header();  ?>

  <div class="main">
    <div class="half-hero halfHeroAbout">
       <div class="overlay">
           <h2>
             <?php global $current_user;
                  get_currentuserinfo();
                  echo $current_user->user_firstname . "\n";
                  echo $current_user->user_lastname . "\n";
              ?> 
           </h2>
           <h3><?php the_title(); ?></h3>
       </div>
    </div>

    <div class="container aboutContainer">
    
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="aboutInnerContainer">
          <div class="aboutAvatar">
            <?php echo get_avatar( $post->post_author, 300 ); ?>
          </div>
          <div class="aboutMe">
           <?php echo get_the_author_meta( 'description' ); ?> 
           </div>
        </div>

        <div class="aboutContent">
          <?php the_content(); ?>
        </div>

      <?php endwhile; // end the loop?>
    </div> <!-- /.container -->
  </div> <!-- /.main -->

<?php get_footer(); ?>
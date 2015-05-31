<?php

/*
	Template Name: Blog Page
*/

get_header();  ?>
<?php global $post; ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>

<div class="main">

  <div class="half-hero halfHeroAbout" style="background: url(<?php echo $src[0]; ?> ) !important; background-size: cover !important; background-attachment: fixed !important;">
     <div class="overlay">
         <h2><?php BLOG ?></h2>
     </div>
  </div>
  <div class="container">

    <div class="content">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
<?php get_header(); ?>
<?php global $post; ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>

<div class="main">

 <div class="container no-header">
   <div class="content">

     <?php
         /* Queue the first post, that way we know who
          * the author is when we try to get their name,
          * URL, description, avatar, etc.
          */
         if ( have_posts() )
             the_post();
     ?>

     <?php
         // If a user has filled out their description, show a bio on their entries.
         if ( get_the_author_meta('description') ) : ?>
       
       <div class="authorSubHeader">
         <div class="authorAvatar">
               <?php echo get_avatar( get_the_author_meta('user_email'), 150); ?>
         </div>
         <div class="authorInnerSubHeader">
           <h2 class="authorAbout">About <?php the_author(); ?> </h2>
           <div class="authorBio">
             <?php the_author_meta('description'); ?>
           </div>
         </div>
       </div>

       <?php endif; ?>

         <?php
             rewind_posts();
             get_template_part('loop', 'author');
         ?>
   </div> <!-- /.content -->

   <?php get_sidebar(); ?>

 </div> <!-- /.container -->
</div> <!-- /.main -->
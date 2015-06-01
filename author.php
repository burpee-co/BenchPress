<?php get_header(); ?>
<?php global $post; ?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
?>

<div class="main">

  <div class="half-hero halfHeroAbout" style="background: url(<?php echo $src[0]; ?> ) !important; background-size: cover !important; background-attachment: fixed !important;">
     <div class="overlay">
         <h2><?php the_title(); ?></h2>
     </div>
  </div>
  <div class="container">
    <div class="content">

      <?php
      	/* Queue the first post, that way we know who
      	 * the author is when we try to get their name,
      	 * URL, description, avatar, etc.
      	 */
      	if ( have_posts() )
      		the_post();
      ?>

      <h1>Author Archives:
        <a class="name" href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>">
          <?php the_author(); ?>
        </a>
      </h1>

      <?php
      	// If a user has filled out their description, show a bio on their entries.
      	if ( get_the_author_meta('description') ) : ?>

          <h2>About <?php the_author(); ?> </h2>
      		<?php echo get_avatar( get_the_author_meta('user_email'), 60); ?>
      		<?php the_author_meta('description'); ?>

        <?php endif; ?>

      	<?php
      		rewind_posts();
      		get_template_part('loop', 'author');
      	?>
    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
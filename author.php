<?php get_header(); ?>

<!-- Tyn, just letting you know I'm editing some of the stuff here -->

<div class="main">
  <div class="authorHeader">
   <h1><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></h1>
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
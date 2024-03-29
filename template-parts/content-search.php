<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-6 col-lg-4'); ?>>
	<header class="entry-header">

		<?php echo get_the_post_thumbnail($post_id, 'product-thumb'); ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php starting_theme_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<!--<div class="entry-summary">
		<?php //the_excerpt(); ?>
	</div> .entry-summary -->

	<!--<footer class="entry-footer">
		<?php //starting_theme_entry_footer(); ?>
	</footer>.entry-footer -->
</article><!-- #post-## -->

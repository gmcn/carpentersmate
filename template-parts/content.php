<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" class="col-md-6">

	<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo the_title(); ?>" loading="lazy">

	<div class="entry-content" style="background: #FAFAFA;">

		<header class="entry-header">
			<h1><?php the_title(); ?></h1>

			<div class="single_post__meta">

				<strong>By:</strong> <?php echo get_author_name(); ?>  |  <strong>Posted:</strong> <?php echo the_date('y/m/Y'); ?>

			</div>


		</header><!-- .entry-header -->


		<?php echo the_excerpt(); ?>

		<a class="more" href="<?php echo the_permalink(); ?>">Read More</a>

		<?php
			// the_content( sprintf(
			// 	/* translators: %s: Name of current post. */
			// 	wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'starting-theme' ), array( 'span' => array( 'class' => array() ) ) ),
			// 	the_title( '<span class="screen-reader-text">"', '"</span>', false )
			// ) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'starting-theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

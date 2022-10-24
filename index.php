<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

	<header class="container-fluid content-page_header">

		<div class="container">
			<div class="row">
				<div class="col-md-8">
					Latest News
				</div>
				<div class="col-md-4 content-page_header__breadcrumbs align-self-center">
					<?php
						if ( function_exists('yoast_breadcrumb') ) {
						  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						}
						?>
				</div>
			</div>
		</div>
	</header>

	<div class="container content-area">
		<div id="ajax-posts" class="row" role="main" >

				<?php
						$postsPerPage = 8;
						$args = array(
										'post_type' => 'post',
										'posts_per_page' => $postsPerPage,
										'orderby'   => 'date',
										'post_status' => 'publish',
						);

						$loop = new WP_Query($args);

						while ($loop->have_posts()) : $loop->the_post();
				?>

				<?php

				get_template_part( 'template-parts/content', get_post_format() );


				 ?>

				 <?php endwhile; wp_reset_postdata(); ?>

				 <div class="container">
					 <a id="more_posts" class="more-btn">
						 Load more posts
					 </a>
				 </div>



		 </div><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();

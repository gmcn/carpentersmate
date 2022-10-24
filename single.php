<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Starting_Theme
 */

get_header(); ?>


<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Starting_Theme
 */

get_header(); ?>

<header class="container-fluid content-page_header">

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				Latest News
			</div>
			<div class="col-md-8 content-page_header__breadcrumbs align-self-center">
				<?php
					if ( function_exists('yoast_breadcrumb') ) {
					  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
					}
					?>
			</div>
		</div>
	</div>
</header>

<article class="container single_post">

	<div class="single_post__featured">
		<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo the_title(); ?>" loading="lazy">
	</div>

	<div class="single_post__meta">
		<h1><?php echo the_title(); ?></h1>

		<strong>By:</strong> <?php echo get_author_name(); ?>  |  <strong>Posted:</strong> <?php echo the_date('y/m/Y'); ?>

	</div>

	<?php echo the_content(); ?>

	<div class="row single_post__navigation">
		<div class="col-lg-4">

			<a class="back" href="/news">Return to news</a>

		</div>
		<div class="col-lg-8 single_post__navigation__share align-self-center">

			<span>share with friends</span>

			<a href="https://twitter.com/share?url=<?php echo the_permalink(); ?>&text=<?php echo the_title(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter">

				<svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31">
					  <g id="Group_5" data-name="Group 5" transform="translate(-1316 -2740)">
					    <g id="Group_4" data-name="Group 4" transform="translate(1 -18)">
					      <rect id="bg" width="31" height="31" rx="5" transform="translate(1315 2758)" fill="#f6f6f6"/>
					    </g>
					    <g id="twitter" transform="translate(1322.885 2700.501)">
					      <g id="Group_8" data-name="Group 8" transform="translate(0 47.999)">
					        <path id="Path_29" data-name="Path 29" d="M17.23,49.657a7.364,7.364,0,0,1-2.036.557,3.512,3.512,0,0,0,1.554-1.952,7.059,7.059,0,0,1-2.24.855A3.532,3.532,0,0,0,8.4,51.533a3.637,3.637,0,0,0,.082.805A10,10,0,0,1,1.2,48.643a3.534,3.534,0,0,0,1.085,4.721,3.488,3.488,0,0,1-1.6-.435v.039a3.548,3.548,0,0,0,2.83,3.471,3.525,3.525,0,0,1-.926.116,3.123,3.123,0,0,1-.669-.06,3.566,3.566,0,0,0,3.3,2.457A7.1,7.1,0,0,1,.846,60.458,6.615,6.615,0,0,1,0,60.414,9.944,9.944,0,0,0,5.418,62,9.984,9.984,0,0,0,15.472,51.948c0-.156-.006-.307-.013-.456a7.046,7.046,0,0,0,1.77-1.834Z" transform="translate(0 -47.999)" fill="#c2c2c2"/>
					      </g>
					    </g>
					  </g>
					</svg>



			</a>
			<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>&t=<?php echo the_title(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook">

				<svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31">
				  <g id="Group_4" data-name="Group 4" transform="translate(-1315 -2758)">
				    <rect id="bg" width="31" height="31" rx="5" transform="translate(1315 2758)" fill="#f6f6f6"/>
				    <path id="facebook" d="M11.91,2.325h1.278V.1A16.5,16.5,0,0,0,11.326,0a2.955,2.955,0,0,0-3.1,3.289V5.25H6.187V7.741H8.22V14h2.493V7.741h1.951l.31-2.489H10.713V3.536c0-.719.194-1.211,1.2-1.211Z" transform="translate(1320.813 2766.5)" fill="#c2c2c2"/>
				  </g>
				</svg>


			</a>

			<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo the_title(); ?> - <?php echo the_permalink() ?>" target="_blank">

				<svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31">
				  <g id="Group_5" data-name="Group 5" transform="translate(-1316 -2740)">
				    <g id="Group_4" data-name="Group 4" transform="translate(1 -18)">
				      <rect id="bg" width="31" height="31" rx="5" transform="translate(1315 2758)" fill="#f6f6f6"/>
				    </g>
				    <path id="Path_71" data-name="Path 71" d="M12.931-12.444H1.069a1.051,1.051,0,0,0-.778.292A.933.933,0,0,0,0-11.472V.583a.933.933,0,0,0,.292.681,1.051,1.051,0,0,0,.778.292H12.931a1.051,1.051,0,0,0,.778-.292A.933.933,0,0,0,14,.583V-11.472a.933.933,0,0,0-.292-.681A1.051,1.051,0,0,0,12.931-12.444ZM4.181-.486H2.042V-7.194H4.181ZM3.111-8.069a1.059,1.059,0,0,1-.826-.389,1.294,1.294,0,0,1-.34-.875,1.125,1.125,0,0,1,.34-.826,1.125,1.125,0,0,1,.826-.34,1.125,1.125,0,0,1,.826.34,1.125,1.125,0,0,1,.34.826,1.294,1.294,0,0,1-.34.875A1.059,1.059,0,0,1,3.111-8.069ZM11.958-.486H9.819V-3.792a5.182,5.182,0,0,0-.1-1.167,1,1,0,0,0-.972-.583,1.044,1.044,0,0,0-.972.486,2.432,2.432,0,0,0-.292,1.264V-.486H5.444V-7.194H7.486v.875a1.949,1.949,0,0,1,.729-.729,2.215,2.215,0,0,1,1.215-.34,2.184,2.184,0,0,1,2.042.972,3.942,3.942,0,0,1,.486,2.236Z" transform="translate(1324.5 2760.944)" fill="#c2c2c2"/>
				  </g>
				</svg>

			</a>

				<a href="mailto:?subject=<?php echo the_title(); ?> <?php echo the_permalink(); ?>" title="Share by Email">

					<svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31">
					  <g id="Group_6" data-name="Group 6" transform="translate(-1316 -2740)">
					    <g id="Group_5" data-name="Group 5">
					      <g id="Group_4" data-name="Group 4" transform="translate(1 -18)">
					        <rect id="bg" width="31" height="31" rx="5" transform="translate(1315 2758)" fill="#f6f6f6"/>
					      </g>
					    </g>
					    <path id="letter" d="M1.305,0H15.23a1.311,1.311,0,0,1,1.284,1.062l-8.245,4.6L.021,1.062A1.311,1.311,0,0,1,1.305,0ZM15.23,10.73H1.305A1.309,1.309,0,0,1,0,9.425V2.045l8.054,4.49a.458.458,0,0,0,.213.057.412.412,0,0,0,.213-.057l8.057-4.49v7.38A1.307,1.307,0,0,1,15.23,10.73Zm0,0" transform="translate(1323.231 2750.135)" fill="#c2c2c2"/>
					  </g>
					</svg>


			</a>



		</div>
	</div>

</article>

<?php

// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
	comments_template();
endif;


 ?>

<?php include(locate_template("template-parts/flexi-content/form-samples.php")); ?>



<?php
get_footer();

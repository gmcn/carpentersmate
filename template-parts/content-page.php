<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

?>

<?php echo get_the_post_thumbnail() ?>

<header class="container-fluid content-page_header">

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php echo the_title(); ?>
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

<?php if (is_page('contact')): ?>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2499.10883148895!2d0.5037132159909!3d51.217070779588376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47df30fe629a3e39%3A0xbe71cd69733e049a!2sOSC%20Sales%20Ltd!5e0!3m2!1sen!2suk!4v1635171575489!5m2!1sen!2suk" width="100%" height="570" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<?php endif; ?>

<?php if (is_page(1095)): ?>

	<article id="post-<?php the_ID(); ?>" class="container content-page">

		<h1><?php echo the_title(); ?></h1>

		<div class="row">
			<div class="col-md-8">
				<?php echo the_content(); ?>
			</div>
			<div class="col-md-4">
				<div class="form_recommend">
					<h3>Recommend a stockist</h3>
					<?php echo do_shortcode('[contact-form-7 id="1097" title="Recommend a stockist"]') ?>
				</div>

			</div>
		</div>


	</article>

	<?php elseif (is_page(1155)): ?>

		<article id="post-<?php the_ID(); ?>" class="container content-page">

			<h1><?php echo the_title(); ?></h1>

			<div class="row">
				<div class="col-md-8">
					<?php echo the_content(); ?>
				</div>
				<div class="col-md-4">

					<div class="form_recommend">
						<h3>Become a stockist</h3>
						<p>Interested in becoming a Carpenters Mate stockist? Simply fill in the form below and we’ll get in touch with you.</p>
						<?php echo do_shortcode('[contact-form-7 id="1157" title="Become a stockist"]') ?>
					</div>

				</div>
			</div>


		</article>

<?php elseif (is_page(1138)): ?>

		<article id="post-<?php the_ID(); ?>" class="container content-page">

			<h1><?php echo the_title(); ?></h1>

			<div class="row">
				<div class="col-md-12">
					<?php echo the_content(); ?>
				</div>
			</div>


		</article>

<?php elseif (is_page('contact')): ?>

	<article id="post-<?php the_ID(); ?>" class="container content-page content-contact">

		<div class="row">
			<div class="col-md-4">

				<h1><?php echo the_title(); ?></h1>

				<?php echo the_content(); ?>

				<div class="wow fadeInUp">

						<ul>

							<li class="address">The Forge, Wheelers Lane, <br> Linton, Kent, ME17 4BN</li>

							<li class="phone"><a href="tel:0845 241 9862">0845 241 9862</a> </li>

							<li class="email"><a href="mail:sales@oscsales.com">sales@oscsales.com</a> </li>


						</ul>

						<ul class="social">
							<li>

								<a href="https://twitter.com/Carpenters_Mate" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="14.875" viewBox="0 0 18 14.875">
									  <path id="Path_73" data-name="Path 73" d="M16-11.875l1.125-1.375A1.08,1.08,0,0,0,17.5-14a3.943,3.943,0,0,1-2.125.625h-.25L15-13.5a4.062,4.062,0,0,0-2.562-.875,3.63,3.63,0,0,0-2.562,1.063A3.4,3.4,0,0,0,8.75-10.75l.125,1H8.25A9.256,9.256,0,0,1,3.5-11.5,20.959,20.959,0,0,1,1-13.625a3.444,3.444,0,0,0-.375,2,5.386,5.386,0,0,0,.5,1.75l1,1.625-1.5-.875A3.338,3.338,0,0,0,2-6.25l.75.625L2-5.375A3.41,3.41,0,0,0,4.375-3L5.5-2.75l-1,.625a5.644,5.644,0,0,1-2.5,1,8.031,8.031,0,0,1-2,0A9.143,9.143,0,0,0,5.5.5,9.109,9.109,0,0,0,7,.375L7.75.25A10.909,10.909,0,0,0,13.5-3a11.742,11.742,0,0,0,2.375-4.375,13.41,13.41,0,0,0,.375-3v-.25l.125-.125q1-1,1.625-1.75Z" transform="translate(0 14.375)" fill="#00509f"></path>
									</svg>
								</a>

							</li>

							<li>

								<a href="https://www.youtube.com/user/OSCFasteners" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
									  <path id="Path_71" data-name="Path 71" d="M17-16H1a.956.956,0,0,0-.687.313A.956.956,0,0,0,0-15V1a.956.956,0,0,0,.313.688A.956.956,0,0,0,1,2H9.625V-5H7.25V-7.625H9.625v-2a3.637,3.637,0,0,1,.938-2.687,3.463,3.463,0,0,1,2.563-.937,17.151,17.151,0,0,1,2.125.125v2.375h-1.5a1.472,1.472,0,0,0-1.062.313,1.472,1.472,0,0,0-.312,1.063v1.75h2.75L14.75-5H12.5V2H17a.9.9,0,0,0,.75-.312A1.076,1.076,0,0,0,18,1V-15a.956.956,0,0,0-.312-.687A.956.956,0,0,0,17-16Z" transform="translate(0 16)" fill="#00509f"></path>
									</svg>

								</a>

							</li>

							<li>

								<a href="https://www.facebook.com/CarpentersMate/" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="12.5" viewBox="0 0 18 12.5">
									  <path id="Path_72" data-name="Path 72" d="M17.625-11.375a2.024,2.024,0,0,0-.562-.937A2.031,2.031,0,0,0,16-12.875a22.321,22.321,0,0,0-4-.375H6a22.321,22.321,0,0,0-4,.375,2.031,2.031,0,0,0-1.062.563,2.024,2.024,0,0,0-.562.938A14.449,14.449,0,0,0,0-8.625v3.25a14.449,14.449,0,0,0,.375,2.75,2.024,2.024,0,0,0,.563.938A2.031,2.031,0,0,0,2-1.125,22.321,22.321,0,0,0,6-.75h6a22.321,22.321,0,0,0,4-.375,2.031,2.031,0,0,0,1.063-.562,2.024,2.024,0,0,0,.563-.937A14.449,14.449,0,0,0,18-5.375v-3.25A14.449,14.449,0,0,0,17.625-11.375ZM7.25-4.25v-5.5L11.875-7Z" transform="translate(0 13.25)" fill="#00509f"></path>
									</svg>
								</a>

							</li>


						</ul>


					</div>

			</div>

			<div class="col-md-8 form_contact">

				<h1>Send us a message</h1>

				<?php echo do_shortcode('[contact-form-7 id="1164" title="Contact Form"]') ?>

			</div>
		</div>

		<div class="row button_recommend">
			<div class="col-md-6 ">
				<div class="stockists_become_btn">
					<span>Recommend a stockist</span>
					<a href="/stockists/recommend-a-stockist/">Click Here</a>
				</div>
			</div>

			<div class="col-md-6">

				<div class="stockists_recommend_btn">
					<span>Become a Stockist</span>
					<a href="/stockists/become-a-stockist/">Click Here</a>
				</div>


			</div>
		</div>



	</article>

<?php else: ?>

	<article id="post-<?php the_ID(); ?>" class="container content-page">
		<h1><?php echo the_title(); ?></h1>

		<?php echo the_content(); ?>

		<?php if (is_page('sign-up-to-our-newsletter')): ?>

			<div class="form_newsletter">
				<?php echo do_shortcode('[contact-form-7 id="1101" title="Sign up to our newsletter"]') ?>
			</div>


		<?php endif; ?>

	</article>

<?php endif; ?>

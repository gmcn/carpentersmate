<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?>

	</div><!-- #content -->

	<footer>

		<div class="container site-footer">
			<div class="row site-footer__branding">
				<div class="col-12">
						<a href="/">
							<img src="<?php echo get_template_directory_uri(); ?>/images/carpenters-mate-logo_colour.png" alt="">
						</a>
						<img src="<?php echo get_template_directory_uri(); ?>/images/20YearsSLG.png" alt="20YearsSLG">
				</div>

				</div>

				<div class="row">

					<div class="col-md-6 col-lg-3 footer__contact wow fadeInUp">
						<h5>CONTACT INFO</h5>

						<ul>

							<li class="address">The Forge, Wheelers Lane, Linton, Kent, ME17 4BN</li>

							<li class="phone"><a href="#">0845 241 9862</a> </li>

							<li class="email"><a href="#">sales@oscsales.com</a> </li>


						</ul>

						<ul class="social">
							<li>

								<a href="https://twitter.com/Carpenters_Mate" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="14.875" viewBox="0 0 18 14.875">
									  <path id="Path_73" data-name="Path 73" d="M16-11.875l1.125-1.375A1.08,1.08,0,0,0,17.5-14a3.943,3.943,0,0,1-2.125.625h-.25L15-13.5a4.062,4.062,0,0,0-2.562-.875,3.63,3.63,0,0,0-2.562,1.063A3.4,3.4,0,0,0,8.75-10.75l.125,1H8.25A9.256,9.256,0,0,1,3.5-11.5,20.959,20.959,0,0,1,1-13.625a3.444,3.444,0,0,0-.375,2,5.386,5.386,0,0,0,.5,1.75l1,1.625-1.5-.875A3.338,3.338,0,0,0,2-6.25l.75.625L2-5.375A3.41,3.41,0,0,0,4.375-3L5.5-2.75l-1,.625a5.644,5.644,0,0,1-2.5,1,8.031,8.031,0,0,1-2,0A9.143,9.143,0,0,0,5.5.5,9.109,9.109,0,0,0,7,.375L7.75.25A10.909,10.909,0,0,0,13.5-3a11.742,11.742,0,0,0,2.375-4.375,13.41,13.41,0,0,0,.375-3v-.25l.125-.125q1-1,1.625-1.75Z" transform="translate(0 14.375)" fill="#00509f"/>
									</svg>
								</a>

							</li>

							<li>

								<a href="https://www.youtube.com/user/OSCFasteners" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
									  <path id="Path_71" data-name="Path 71" d="M17-16H1a.956.956,0,0,0-.687.313A.956.956,0,0,0,0-15V1a.956.956,0,0,0,.313.688A.956.956,0,0,0,1,2H9.625V-5H7.25V-7.625H9.625v-2a3.637,3.637,0,0,1,.938-2.687,3.463,3.463,0,0,1,2.563-.937,17.151,17.151,0,0,1,2.125.125v2.375h-1.5a1.472,1.472,0,0,0-1.062.313,1.472,1.472,0,0,0-.312,1.063v1.75h2.75L14.75-5H12.5V2H17a.9.9,0,0,0,.75-.312A1.076,1.076,0,0,0,18,1V-15a.956.956,0,0,0-.312-.687A.956.956,0,0,0,17-16Z" transform="translate(0 16)" fill="#00509f"/>
									</svg>

								</a>

							</li>

							<li>

								<a href="https://www.facebook.com/CarpentersMate/" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="12.5" viewBox="0 0 18 12.5">
									  <path id="Path_72" data-name="Path 72" d="M17.625-11.375a2.024,2.024,0,0,0-.562-.937A2.031,2.031,0,0,0,16-12.875a22.321,22.321,0,0,0-4-.375H6a22.321,22.321,0,0,0-4,.375,2.031,2.031,0,0,0-1.062.563,2.024,2.024,0,0,0-.562.938A14.449,14.449,0,0,0,0-8.625v3.25a14.449,14.449,0,0,0,.375,2.75,2.024,2.024,0,0,0,.563.938A2.031,2.031,0,0,0,2-1.125,22.321,22.321,0,0,0,6-.75h6a22.321,22.321,0,0,0,4-.375,2.031,2.031,0,0,0,1.063-.562,2.024,2.024,0,0,0,.563-.937A14.449,14.449,0,0,0,18-5.375v-3.25A14.449,14.449,0,0,0,17.625-11.375ZM7.25-4.25v-5.5L11.875-7Z" transform="translate(0 13.25)" fill="#00509f"/>
									</svg>
								</a>

							</li>


						</ul>


					</div>

					<div class="col-md-6 col-lg-3 wow fadeInUp">
						<h5>QUICK LINKS</h5>

						<?php
							wp_nav_menu( array(
								'theme_location'  => 'footer',
								'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
								'container'       => 'div',
								'container_class' => 'footer__nav'
								) );
							?>

					</div>

					<div class="col-md-6 col-lg-3 wow fadeInUp">
						<h5>LATEST NEWS</h5>

						<?php
						$args = array(
						  'post_type' => 'post',
							'posts_per_page' => 3,
						);
						$query = new WP_Query( $args ); ?>
						<ul>


						<?php if ( $query->have_posts() ) : ?>
						    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
						      <li>
										<a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
										<span> <?php echo get_the_date(); ?>  </span>
									</li>
						    <?php endwhile; ?>
						<?php endif; ?>
						</ul>
						<?php wp_reset_postdata(); ?>

					</div>

					<div class="col-md-6 col-lg-3 footer__newsletter wow fadeInUp">
						<h5 class="mb-4">SIGN UP TO OUR NEWSLETTER</h5>

						<p>Subscribe to receive tips and tutorials, ideas and news in your inbox.</p>

						<?php echo do_shortcode('[contact-form-7 id="17" title="Newsletter"]'); ?>


					</div>

			</div>
		</div>

		<div class="signature">

			<div class="container">
				<div class="row">

					<div class="col-md-5">
						Copyright © <?php echo date('Y'); ?> All rights reserved. OSC Sales Ltd. Carpenters Mate
					</div>

					<div class="col-md-1">

						<a href="#content">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
							  <g id="Up" transform="translate(-943 -5394)">
							    <rect id="button" width="32" height="32" transform="translate(943 5394)" fill="#fecb16"/>
							    <path id="arrow" d="M958.171,5405.481l-6.663,6.664a.449.449,0,0,0,0,.657l.715.715a.45.45,0,0,0,.658,0l5.619-5.619,5.619,5.619a.45.45,0,0,0,.658,0l.715-.715a.45.45,0,0,0,0-.657l-6.663-6.664a.452.452,0,0,0-.658,0Z" fill="#fff"/>
							  </g>
							</svg>
						</a>

					</div>

					<div class="col-md-5 signature_links">
						<a href="#">Terms & Conditions</a>   |   <a href="#">Privacy Policy</a>  |   <a href="#">Returns & Refunds Policy</a>
					</div>

				</div>
			</div>

		</div><!-- .signature -->
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/618d31ad6885f60a50bb5e12/1fk7ok3u1';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>

</html>

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link type="text/plain" rel="author" href="<?php echo get_template_directory_uri(); ?>/humans.txt" />
<link type="text/plain" rel="robots" href="<?php echo get_template_directory_uri(); ?>/robots.txt" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>

	<header>

		<div class="header_top">
			<div class="container">
				<div class="row">
					<div class="col-6 header_top__contact">
						<a href="mailto:sales@oscsales.com">
						<svg xmlns="http://www.w3.org/2000/svg" width="14.927" height="10.845" viewBox="0 0 14.927 10.845">
							  <path id="icon" d="M377.333,31a1.337,1.337,0,0,1-.941-.362,1.144,1.144,0,0,1-.392-.87V23.651a4.335,4.335,0,0,0,.841.67q3.016,1.9,4.141,2.658.474.323.77.5a4.93,4.93,0,0,0,.787.37,2.566,2.566,0,0,0,.916.189h.017a2.562,2.562,0,0,0,.916-.189,4.944,4.944,0,0,0,.788-.37q.3-.181.77-.5,1.416-.948,4.148-2.658a4.5,4.5,0,0,0,.833-.67v6.116a1.146,1.146,0,0,1-.392.87,1.339,1.339,0,0,1-.941.362Zm6.131-3.944h-.009a1.394,1.394,0,0,1-.416-.069,2.6,2.6,0,0,1-.48-.208c-.169-.092-.313-.176-.433-.25s-.269-.172-.45-.292-.3-.2-.354-.235q-.759-.493-2.182-1.407t-1.707-1.1a3.983,3.983,0,0,1-.975-.889A1.721,1.721,0,0,1,376,21.557a1.478,1.478,0,0,1,.346-1,1.231,1.231,0,0,1,.986-.4h12.262a1.342,1.342,0,0,1,.937.362,1.14,1.14,0,0,1,.4.871,1.933,1.933,0,0,1-.409,1.162,3.82,3.82,0,0,1-1.016.948q-3.132,2.01-3.9,2.5c-.056.036-.175.114-.355.235s-.33.218-.45.292-.264.157-.433.25a2.592,2.592,0,0,1-.479.208,1.4,1.4,0,0,1-.417.069Z" transform="translate(-376 -20.155)" fill="#00509f"/>
							</svg>

							<span>sales@oscsales.com</span></a>

							<a href="tel:0845 241 9862">

							<svg xmlns="http://www.w3.org/2000/svg" width="14.69" height="14.691" viewBox="0 0 14.69 14.691">
							  <path id="icon" d="M584.814,29.037q-.063-.187-.793-.552-.2-.115-.563-.313c-.244-.133-.465-.254-.663-.366s-.384-.219-.558-.323c-.028-.021-.115-.082-.261-.183a2.927,2.927,0,0,0-.371-.224.684.684,0,0,0-.3-.073.864.864,0,0,0-.521.3,5.046,5.046,0,0,0-.574.647,6.251,6.251,0,0,1-.553.647.793.793,0,0,1-.48.3.709.709,0,0,1-.235-.052,2.284,2.284,0,0,1-.214-.089c-.049-.024-.132-.073-.25-.146s-.185-.113-.2-.12a10.341,10.341,0,0,1-4.267-4.267q-.011-.021-.12-.2c-.073-.118-.122-.2-.146-.25a2.256,2.256,0,0,1-.089-.214.705.705,0,0,1-.052-.235.8.8,0,0,1,.3-.48,6.285,6.285,0,0,1,.647-.553,5.005,5.005,0,0,0,.647-.574.865.865,0,0,0,.3-.522.68.68,0,0,0-.073-.3,2.859,2.859,0,0,0-.224-.371c-.1-.146-.162-.233-.183-.261q-.156-.26-.323-.558t-.365-.663q-.2-.365-.313-.563-.365-.73-.553-.793a.586.586,0,0,0-.219-.031,3.431,3.431,0,0,0-.736.1,4.068,4.068,0,0,0-.715.219,2.8,2.8,0,0,0-1.106,1.272,3.868,3.868,0,0,0-.5,2.488,4.5,4.5,0,0,0,.13.6q.094.334.151.5t.214.579c.1.278.167.448.188.511a9.462,9.462,0,0,0,.866,1.826,15.473,15.473,0,0,0,2.248,2.76,15.47,15.47,0,0,0,2.76,2.248,9.484,9.484,0,0,0,1.826.866q.094.031.511.188t.579.213q.161.057.5.152a4.661,4.661,0,0,0,.6.131,4.132,4.132,0,0,0,.548.036,4.053,4.053,0,0,0,1.941-.532,2.8,2.8,0,0,0,1.273-1.106,4.139,4.139,0,0,0,.219-.715,3.434,3.434,0,0,0,.1-.735A.583.583,0,0,0,584.814,29.037Z" transform="translate(-570.155 -17.654)" fill="#00509f"/>
							</svg>

							<span>0845 241 9862</span></a>


					</div>
					<div class="col-6 header_top__social">

						<a href="https://twitter.com/Carpenters_Mate" target="_blank">

							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="14.875" viewBox="0 0 18 14.875">
							  <path id="Path_73" data-name="Path 73" d="M16-11.875l1.125-1.375A1.08,1.08,0,0,0,17.5-14a3.943,3.943,0,0,1-2.125.625h-.25L15-13.5a4.062,4.062,0,0,0-2.562-.875,3.63,3.63,0,0,0-2.562,1.063A3.4,3.4,0,0,0,8.75-10.75l.125,1H8.25A9.256,9.256,0,0,1,3.5-11.5,20.959,20.959,0,0,1,1-13.625a3.444,3.444,0,0,0-.375,2,5.386,5.386,0,0,0,.5,1.75l1,1.625-1.5-.875A3.338,3.338,0,0,0,2-6.25l.75.625L2-5.375A3.41,3.41,0,0,0,4.375-3L5.5-2.75l-1,.625a5.644,5.644,0,0,1-2.5,1,8.031,8.031,0,0,1-2,0A9.143,9.143,0,0,0,5.5.5,9.109,9.109,0,0,0,7,.375L7.75.25A10.909,10.909,0,0,0,13.5-3a11.742,11.742,0,0,0,2.375-4.375,13.41,13.41,0,0,0,.375-3v-.25l.125-.125q1-1,1.625-1.75Z" transform="translate(0 14.375)" fill="#00509f"/>
							</svg>

						</a>

						<a href="https://www.facebook.com/CarpentersMate/" target="_blank">

							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
							  <path id="Path_71" data-name="Path 71" d="M17-16H1a.956.956,0,0,0-.687.313A.956.956,0,0,0,0-15V1a.956.956,0,0,0,.313.688A.956.956,0,0,0,1,2H9.625V-5H7.25V-7.625H9.625v-2a3.637,3.637,0,0,1,.938-2.687,3.463,3.463,0,0,1,2.563-.937,17.151,17.151,0,0,1,2.125.125v2.375h-1.5a1.472,1.472,0,0,0-1.062.313,1.472,1.472,0,0,0-.312,1.063v1.75h2.75L14.75-5H12.5V2H17a.9.9,0,0,0,.75-.312A1.076,1.076,0,0,0,18,1V-15a.956.956,0,0,0-.312-.687A.956.956,0,0,0,17-16Z" transform="translate(0 16)" fill="#00509f"/>
							</svg>

						</a>

						<a href="https://www.youtube.com/user/OSCFasteners" target="_blank">

							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="12.5" viewBox="0 0 18 12.5">
								  <path id="Path_72" data-name="Path 72" d="M17.625-11.375a2.024,2.024,0,0,0-.562-.937A2.031,2.031,0,0,0,16-12.875a22.321,22.321,0,0,0-4-.375H6a22.321,22.321,0,0,0-4,.375,2.031,2.031,0,0,0-1.062.563,2.024,2.024,0,0,0-.562.938A14.449,14.449,0,0,0,0-8.625v3.25a14.449,14.449,0,0,0,.375,2.75,2.024,2.024,0,0,0,.563.938A2.031,2.031,0,0,0,2-1.125,22.321,22.321,0,0,0,6-.75h6a22.321,22.321,0,0,0,4-.375,2.031,2.031,0,0,0,1.063-.562,2.024,2.024,0,0,0,.563-.937A14.449,14.449,0,0,0,18-5.375v-3.25A14.449,14.449,0,0,0,17.625-11.375ZM7.25-4.25v-5.5L11.875-7Z" transform="translate(0 13.25)" fill="#00509f"/>
								</svg>

							</a>


					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="container">


				<div class="row">
					<div class="col-5 col-md-6">
						<a class="navbar-brand" href="/">

							<img src="<?php echo get_template_directory_uri(); ?>/images/carpenters-mate-logo_colour.png" alt="<?php echo get_bloginfo(); ?>" />

						</a>

						<img class="d-none d-xl-inline-block" src="<?php echo get_template_directory_uri(); ?>/images/lifetime-guarantee.png" alt="lifetime-guarantee">

					</div>


					<div class="col-5 align-self-center header_details">

						EXCLUSIVE UK DISTRIBUTORS <img src="<?php echo get_template_directory_uri(); ?>/images/osc-brand.png" alt="">
						<span>CARPENTERS MATE IS AN OSC BRAND. TO VISIT OSC, <a href="https://www.oscsales.co.uk/" target="_blank">CLICK HERE</a></span>

					</div>

					<div class="col-1 align-self-center">
						<div class="header__search header-search __js_header-search">
						<div class="header-search__wrapper">

						<form role="search" method="get" class="search-form" action="/">
								<label>
									<span class="screen-reader-text">Search for:</span>
									<input type="search" class="search-field" placeholder="Type and hit enter to search..." value="" name="s">
								</label>
							</form>

						</div>
						<a class="header-search__toggle" type="button">
							<svg xmlns="http://www.w3.org/2000/svg" width="20.336" height="20.335" viewBox="0 0 20.336 20.335">
							  <g id="Search" transform="translate(-1541.332 -98.332)">
							    <path id="search-2" data-name="search" d="M1543.216,117l-4.192-4.192a8.369,8.369,0,0,0,1.516-4.877,8.461,8.461,0,0,0-.678-3.342,8.426,8.426,0,0,0-4.583-4.583,8.579,8.579,0,0,0-6.685,0,8.425,8.425,0,0,0-4.583,4.583,8.576,8.576,0,0,0,0,6.685,8.426,8.426,0,0,0,4.583,4.583,8.588,8.588,0,0,0,8.219-.837L1541,119.2a1.453,1.453,0,0,0,1.1.465,1.564,1.564,0,0,0,1.112-2.664Zm-7.412-5.2a5.458,5.458,0,1,1,1.607-3.868A5.275,5.275,0,0,1,1535.8,111.8Z" transform="translate(18 -1)" fill="#00509f"/>
							  </g>
							</svg>
						</a>
						</div>
					</div>


					<div class="col-1 d-md-none align-self-center">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
					</div>

				</div>

			</div>

		</div>


		<nav class="navbar navbar-expand-md navbar-dark bg-dark">

			<div class="container">

				<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button> -->

				<?php
					wp_nav_menu( array(
						'theme_location'  => 'menu-1',
						'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarCollapse',
						'menu_class'      => 'navbar-nav mr-auto',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
						) );
					?>
			</div>



	  </nav>

	</header><!-- header -->

	<div id="content" class="site-content">

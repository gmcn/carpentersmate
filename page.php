<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

	<?php if (!is_front_page()): ?>
		<?php include('template-parts/content-page.php'); ?>
	<?php endif; ?>

	<?php include('template-parts/content-flexi.php'); ?>

	<?php if (is_page('find-a-stockist')): ?>

		<div class="container-fluid stockists">
			<div class="container">

			    <h2>Find your local stockist</h2>

					<div class="bh-sl-container">

						<div class="bh-sl-form-container">
							<form id="bh-sl-user-location" method="post" action="#">

									<input type="text" id="bh-sl-address" name="bh-sl-address" placeholder="Enter Town/City/Postcode" />

									<!-- <button id="bh-sl-submit" onclick="document.location+='#stockistResults';"  type="submit">Search</button> -->

									<button id="bh-sl-submit" type="submit">Search</button>

							</form>
						</div>
					</div>

			<a name="stockistResults"></a>

			</div>
		</div>


		<div class="loadingDiv hidden">
		  <div class="vert-align">
		    <!-- <img src="<?php echo get_template_directory_uri() ?>/images/loading.gif" alt="Loading"> -->
		  </div>
		</div>


		<div class="bh-sl-container">

		  <div id="bh-sl-map-container" class="bh-sl-map-container" style="position: relative; height: 100vh;">
		    <div id="bh-sl-map" class="bh-sl-map" style="height: 100vh;">

				</div>

				<div class="container bh-sl-loc-list" >
					<h1>Search Results</h1>

					<ul class="list"></ul>

				</div>

		  </div>
		</div>




		<script src="https://maps.google.com/maps/api/js?key=AIzaSyAfU2hsPF_D_DwXwxr8QEk2NU_RPzBO4YA&region=UK"></script>



		<div class="container">
			<div class="row button_recommend">

				<div class="col-md-6">
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
			
		</div>



	<?php endif; ?>

<?php
// get_sidebar();
get_footer();

<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// global $post;
global $woocommerce, $product, $post, $re_wcvt_options;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

if ( ! $short_description ) {
	return;
}

?>
<div class="woocommerce-product-details__short-description">
	<?php echo $short_description; // WPCS: XSS ok. ?>
</div>

	<?php

	$spec_sheet = get_field('spec_sheet');

	 ?>

<div class="woocommerce-product-details__actions">
	<div class="row">
		<div class="col-md-6 col-lg-3">
			<a href="<?php echo $spec_sheet; ?>" target="_blank">Download PDF</a>
		</div>
		<div class="col-md-6 col-lg-3">
			<a href="/contact" target="_blank">Enquire Now</a>
		</div>
		<div class="col-md-6 col-lg-3">
			<a href="/request-a-sample/" target="_blank">Free Sample</a>
		</div>
		<div class="col-md-6 col-lg-3">
			<a href="/stockists" target="_blank">Stockists</a>
		</div>
	</div>
</div>


<?php
	$attributes = $product->get_attributes();
	$available_variations = $product->get_available_variations();

	$prod_desc = $prod_variation['variation_description'];
 ?>

<table class="table table-striped table-hover table-bordered varations-table tablesorter">
		<thead>
				<tr>
						<th>SKU</th>
						<th>Description</th>
						<?php
								// Show description if option is set to yes
								if ($re_wcvt_options['show_description'] == 'yes') : ?>
								<th>Description</th>
						<?php endif; ?>
						<?php foreach ( $attributes as $name => $options) :?>
						<th>
							<?php
								// echo $woocommerce->attribute_label($attr_name);
								$attr_name = $options['name'];
								if (0 === strpos($attr_name, 'pa_')){
										// $attr_name = $woocommerce->attribute_label($attr_name);
								}
								$trimmedMyString = trim($attr_name, "pa_");
								echo $trimmedMyString;
							?>
						</th>
				<?php endforeach;?>
				<?php
						// Show price if option is set to yes
						if ($re_wcvt_options['show_price'] == 'yes') : ?>
						<!-- <th>Price</th> -->
				<?php endif; ?>
						<!-- <th class="var-qty">QTY</th>
						<th class="var-add-to-cart">Action</th> -->
				</tr>
		</thead>
		<tbody>
		<?php
				/*
				echo '<pre>';
				print_r($re_wcvt_options);
				echo '</pre>';
				*/
		?>
		<?php foreach ($available_variations as $prod_variation) : ?>
				<?php
						// get some vars to work with
						$post_id = $prod_variation['variation_id'];
						$post_object = get_post($post_id);


						//echo '<pre>';
						//print_r($prod_variation);
						//echo '</pre>';

				?>
				<tr>
						<td>
								<?php
									// echo substr($prod_variation['sku'], 5, 100) ; // output SKU but trim the first part that is added
									echo $prod_variation['sku'];


								?>
						</td>
						<td><?php echo $prod_variation['variation_description']; ?></td>
				<?php
				// Show description if option is set to yes
				echo $post_object->description;
				if ($re_wcvt_options['show_description'] == 'yes') : ?>
						<td>
						<?php
								$variation_desc = get_post_meta( $post_object->ID, '_description', true);
								if ( !empty($post_object->post_content)){
										$variation_desc = $post_object->post_content; // post content
								} elseif (!empty($variation_desc)) {
										$variation_desc = get_post_meta( $post_object->ID, '_description', true); // get meta description
								} else {
										$variation_desc = get_the_title($product->id); // parent title
								}
								echo $variation_desc;
						?>
						</td>
				<?php endif; ?>
				<?php foreach ($prod_variation['attributes'] as $attr_name => $attr_value) : ?>
						<td>
						<?php
								// Get the correct variation values
								if (strpos($attr_name, '_pa_')){ // variation is a pre-definted attribute
										$attr_name = substr($attr_name, 10);
										$attr = get_term_by('slug', $attr_value, $attr_name);
										$attr_value = $attr->name;
								} else { // variation is a custom attribute
										//$attr = maybe_unserialize( get_post_meta( $post->ID, '_product_attributes' ) );
										//$attr_value = var_dump($attr);

										//$attr = get_term_by('slug', $attr_value, $attr_name);
										//$attr_value = $attr->name;
								}
								echo $attr_value;
						?>
						</td>
				<?php endforeach;?>
				</tr>
		<?php endforeach;?>
		</tbody>
</table>

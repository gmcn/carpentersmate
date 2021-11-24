<section class="container best-sellers">

  <h2>Best Selling Products</h2>

  <?php
  $args = array(
    'post_type' => 'product',
    'posts_per_page' => 12,
  );

  $query = new WP_Query( $args );

  if ( $query->have_posts() ) : ?>

  <div class="swiper productSwiper">
    <div class="swiper-wrapper">

      <?php while ( $query->have_posts() ) : $query->the_post();

      $thumb = get_the_post_thumbnail($post_id, 'product-thumb');

      ?>

        <div class="swiper-slide">

          <div class="best-sellers__product">

            <div class="best-sellers__product_img">
              <?php if ($thumb): ?>
                <?php echo get_the_post_thumbnail($post_id, 'product-thumb'); ?>
              <?php else : ?>
                <img src="/wp-content/uploads/woocommerce-placeholder-270x270.png" alt="woocommerce-placeholder">
              <?php endif; ?>
            </div>

            <div class="best-sellers__product_wrapper">

              <h3><?php the_title(); ?></h3>

              <a href="<?php echo the_permalink(); ?>">
                Find out more
              </a>
            </div>

          </div>





        </div>

      <?php endwhile; ?>


    </div>

  </div>

  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>



  <?php endif; ?>

  <?php wp_reset_postdata(); ?>

</section>

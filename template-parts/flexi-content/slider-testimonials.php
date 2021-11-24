<section class="section-testimonials">
  <div class="container wow fadeIn" style="overflow: hidden; position: relative">

    <h2>What do our customers say?</h2>

    <?php if ( have_rows('testimonials', 'option') ): ?>
      <div class="swiper testimonialSwiper">
        <div class="swiper-wrapper">
        <?php while ( have_rows('testimonials', 'option') ) : the_row();

        $testimonial_copy = get_sub_field('section_testimonial_copy');
        $testimonial_byline = get_sub_field('section_testimonial_byline');
        $testimonial_company = get_sub_field('section_testimonial_company');

        ?>
          <div class="swiper-slide">

            <?php echo $testimonial_copy; ?>

            <p class="byline"><?php echo $testimonial_byline; ?></p>
            <p class="byline-company"><?php echo $testimonial_company ?></p>

          </div>
        <?php endwhile; ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <?php endif; ?>

  </div>
</section>

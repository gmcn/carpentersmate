<?php if( have_rows('flex-content') ): ?>
 <?php while( have_rows('flex-content') ): the_row(); ?>

   <?php if( get_row_layout() == 'hero_slider' ): ?>

     <?php include(locate_template("template-parts/flexi-content/hero-slider.php")); ?>

   <?php elseif( get_row_layout() == 'section_cta' ): ?>

     <?php include(locate_template("template-parts/flexi-content/cta-bar.php")); ?>

   <?php elseif( get_row_layout() == 'section_cta_contained' ): ?>

     <?php include(locate_template("template-parts/flexi-content/cta-bar-contained.php")); ?>

   <?php elseif( get_row_layout() == 'slider_testimonials' ): ?>

     <?php include(locate_template("template-parts/flexi-content/slider-testimonials.php")); ?>

   <?php elseif( get_row_layout() == 'best_selling_products' ): ?>

     <?php include(locate_template("template-parts/flexi-content/best-sellers.php")); ?>

   <?php elseif( get_row_layout() == 'section_copy_points' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-copy-points.php")); ?>

   <?php elseif( get_row_layout() == 'form_sample' ): ?>

     <?php include(locate_template("template-parts/flexi-content/form-samples.php")); ?>

   <?php elseif( get_row_layout() == 'section_news' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-news.php")); ?>

   <?php elseif( get_row_layout() == 'section_faq' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-faq.php")); ?>

   <?php elseif( get_row_layout() == 'section_videos' ): ?>

     <?php include(locate_template("template-parts/flexi-content/section-videos.php")); ?>

   <?php endif; ?>
 <?php endwhile; ?>
<?php endif; ?>

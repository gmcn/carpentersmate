<?php if( have_rows('faqs') ): ?>
  <section class="container faq">

    <h2>Product FAQs</h2>

    <p>Our products are custom designed by people who truly know what carpenters need – carpenters themselves. So, if you’ve got questions, we’ve got the answers. Check out our FAQs below or call <a href="tel:0845 241 9862">0845 241 9862</a>.</p>

   <div class="row">
	<?php $p = 1; while( have_rows('faqs') ): the_row();
		// vars
		$heading = get_sub_field('faq_main_heading');
		$content = get_sub_field('faq_main_content');
		?>
		<div class="col-md-6 faq_faqs wow fadeInUp">

      <p>
        <a class="btn collapsed" data-toggle="collapse" href="#collapse<?php echo $p ?>" role="button" aria-expanded="false" aria-controls="collapse<?php echo $p ?>">
          <?php echo $heading; ?>
        </a>
      </p>
      <div class="collapse" id="collapse<?php echo $p ?>">
        <div class="card card-body">
          <?php echo $content; ?>
        </div>
      </div>

		</div>
	<?php $p++; endwhile; ?>
    </div>
  </section>
<?php endif; ?>

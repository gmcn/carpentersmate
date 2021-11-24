<?php

$cta_title = get_sub_field('cta_title');
// $cta_details = get_sub_field('cta_details');
$cta_link = get_sub_field('cta_link');

 ?>

<div class="container cta-bar-contained">

    <div class="row">
      <div class="col-lg-8 cta-bar-contained_copy align-self-center">
        <p class="cta-bar-contained_header wow fadeIn"><?php echo $cta_title ?></p>
        <!-- <p class="wow fadeIn"><?php echo $cta_details ?></p> -->
      </div>
      <div class="col-lg-4 cta-bar-contained_link align-self-center">


        <?php
          if( $cta_link ):
              $link_url = $cta_link['url'];
              $link_title = $cta_link['title'];
              $link_target = $cta_link['target'] ? $cta_link['target'] : '_self';
              ?>
              <a class="button wow fadeIn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
          <?php endif; ?>

      </div>
    </div>

</div>

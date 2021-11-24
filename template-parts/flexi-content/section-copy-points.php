<?php

  $section_copy__heading = get_sub_field('section_copy__heading');
  $section_copy__copy = get_sub_field('section_copy__copy');
  $section_copy__link = get_sub_field('section_copy__copy__link');

 ?>

<div class="container section-copy">
  <h2><?php echo $section_copy__heading ?></h2>
  <div class="row">

    <?php if ( have_rows('section_copy__points') ): ?>
      <div class="col-md-6 section-copy__copy wow fadeInLeft">
    <?php else: ?>
      <div class="col-md-12 section-copy__copy wow fadeInDown">
    <?php endif; ?>

      <?php echo $section_copy__copy ?>


      <?php
        if( $section_copy__link ):
        $link_url = $section_copy__link['url'];
        $link_title = $section_copy__link['title'];
        $link_target = $section_copy__link['target'] ? $section_copy__link['target'] : '_self';
        ?>
        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>



    </div>

      <?php if ( have_rows('section_copy__points') ): ?>
        <div class="col-md-6 section-copy__points">
          <?php while ( have_rows('section_copy__points') ) : the_row(); ?>
            <div class="section-copy__points__point row wow fadeInRight">

              <div class="col-md-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="99" height="99" viewBox="0 0 99 99">
                    <g id="Group_6" data-name="Group 6" transform="translate(-1654.5 -1306.5)">
                      <circle id="Ellipse_691" data-name="Ellipse 691" cx="48" cy="48" r="48" transform="translate(1656 1308)" fill="none" stroke="#00509f" stroke-width="3"/>
                      <g id="Group_5" data-name="Group 5" transform="translate(948.446 -171.257)">
                        <path id="Path_71" data-name="Path 71" d="M28.853,85.2v7.649H4.809V68.809H22.076a.924.924,0,0,0,.639-.263L25.72,65.54A.9.9,0,0,0,25.081,64H3.607A3.608,3.608,0,0,0,0,67.607V94.055a3.608,3.608,0,0,0,3.607,3.607H30.055a3.608,3.608,0,0,0,3.607-3.607V82.2a.9.9,0,0,0-1.54-.639l-3.006,3.006A.924.924,0,0,0,28.853,85.2Z" transform="translate(737 1446.952)" fill="#00509f"/>
                        <path id="Path_72" data-name="Path 72" d="M12.379,91.742.534,79.9a1.822,1.822,0,0,1,0-2.577l2.577-2.577a1.822,1.822,0,0,1,2.577,0l7.979,7.979,17.091-17.09a1.822,1.822,0,0,1,2.577,0l2.577,2.577a1.822,1.822,0,0,1,0,2.577L14.956,91.742a1.822,1.822,0,0,1-2.577,0Z" transform="translate(742.485 1444.802)" fill="#00509f"/>
                      </g>
                    </g>
                  </svg>
              </div>

              <div class="col-md-9">
                <p class="title"><?php the_sub_field('point_heading'); ?></p>
                <?php the_sub_field('point_copy'); ?>
              </div>











            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>



  </div>
</div>
</div>

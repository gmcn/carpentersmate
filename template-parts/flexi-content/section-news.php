<section class="container-fluid section-news">

  <div class="container">
    <h2>Latest News</h2>

    <p>Get the latest news and information on Carpenters Mate products, including case studies, tips and tutorials. <br /> If you have any interesting projects or advice you’d like to share with us, feel free to get in <a href="/contact">touch online</a> or give us a call on <a href="tel:0845 241 9862">0845 241 9862</a>.</p>
  </div>
  <div class="row">




    <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 2,
    );
    $query = new WP_Query( $args );
     if ( $query->have_posts() ) : ?>

        <?php while ( $query->have_posts() ) : $query->the_post(); ?>

          <article class="col-md-6 section-news_article" style="background: url(<?php echo get_the_post_thumbnail_url() ?>) center center / cover">
            <div class="row">
              <div class="col-3 col-lg-2">

                <div class="row">
                  <div class="col-6 section-news_article__date">
                    <span><?php echo get_the_date('d'); ?></span>
                    <?php echo get_the_date('M'); ?>
                  </div>
                  <div class="col-6 section-news_article__comment">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.98" height="14.914" viewBox="0 0 18.98 14.914">
                        <path id="icon" d="M155.253,3773.94a9.137,9.137,0,0,1-.911-.17,8.93,8.93,0,0,1-2.945-1.355,10.752,10.752,0,0,1-1.864.169,8.892,8.892,0,0,1-5-1.4q.614.044.932.044a11.173,11.173,0,0,0,3.272-.478,9.368,9.368,0,0,0,2.8-1.366,7.078,7.078,0,0,0,2.034-2.246,5.452,5.452,0,0,0,.466-4.3,6.28,6.28,0,0,1,2.16,1.886,4.134,4.134,0,0,1,.043,4.814,6.214,6.214,0,0,1-2.065,1.87c.07.169.143.324.217.467a2.789,2.789,0,0,0,.264.407q.155.2.239.307c.057.074.149.177.276.313s.208.221.243.264c.007.008.022.023.043.047s.037.043.047.053a.511.511,0,0,1,.043.053.618.618,0,0,1,.037.059l.027.053.021.063c.014.043.016.064.006.068s-.014.026-.01.067a.4.4,0,0,1-.138.235.327.327,0,0,1-.206.075Zm-15.538-2.711a.332.332,0,0,1-.217-.086.344.344,0,0,1-.121-.222.207.207,0,0,1-.011-.069.408.408,0,0,1,.006-.069.246.246,0,0,1,.021-.063l.027-.052.037-.058c.026-.039.039-.057.043-.053s.019-.015.047-.054.043-.054.043-.047c.035-.042.117-.131.243-.264s.219-.239.276-.312.136-.177.239-.307a2.726,2.726,0,0,0,.264-.407c.075-.143.147-.3.218-.467a6.185,6.185,0,0,1-2.066-1.875,4.159,4.159,0,0,1-.752-2.372,4.277,4.277,0,0,1,1-2.723,6.73,6.73,0,0,1,2.716-1.975,10.028,10.028,0,0,1,7.489,0,6.73,6.73,0,0,1,2.716,1.975,4.221,4.221,0,0,1,0,5.445,6.739,6.739,0,0,1-2.716,1.975,9.543,9.543,0,0,1-3.745.725,10.657,10.657,0,0,1-1.864-.169,8.876,8.876,0,0,1-2.945,1.354,9.14,9.14,0,0,1-.91.171Z" transform="translate(-138.01 -3759.028)" fill="#fff"/>
                      </svg>

                      <br />

                    <?php echo get_comments_number(); ?>
                  </div>
                </div>






              </div>
              <div class="col-9 col-lg-9 offset-lg-1">
                <h3><?php the_title(); ?></h3>
                <?php echo the_excerpt(); ?>
                <a href="<?php echo the_permalink(); ?>">Read More</a>
              </div>
            </div>

          </article>

        <?php endwhile; ?>

    <?php endif; ?>

    <?php wp_reset_postdata(); ?>
  </div>
</section>

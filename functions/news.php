<?php

// ajax


function more_post_ajax(){

    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 2;
		$page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;

    header("Content-Type: text/html");

    $args = array(
				'suppress_filters' => true,
        'post_type' => 'post',
        'posts_per_page' => $ppp,
				'paged'    => $page,
				'orderby'   => 'date',
				// 'order' => 'ASC',
				'post_status' => 'publish',
    );

    $loop = new WP_Query($args);

    $out = '';

    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post();
        $out .= '<article class="col-md-6">';
        $out .= '<img src="' . get_the_post_thumbnail_url(get_the_ID()) . '" alt="'. get_the_title() .'" loading="lazy">';
        $out .= '<div class="entry-content" style="background: #FAFAFA;">';
        $out .= '<header class="entry-header">';
        $out .= '<h1>' . get_the_title() . '</h1>';
        $out .= '<div class="single_post__meta">';
				$out .= '<strong>By:</strong> ' . get_author_name() . ' |  <strong>Posted:</strong> ' . get_the_date('y/m/Y');
  			$out .= '</div>';
        $out .= '</header>';
        $out .= '<p>' . get_the_excerpt() . '</p>';
        $out .= '<a class="more" href="' . get_the_permalink() . '">Read More</a>';
        $out .= '</div>';
        $out .= '</article>';


    endwhile;
    endif;
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');

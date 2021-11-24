<?php

$section_title = get_sub_field( "section_title" );
$section_description = get_sub_field( "section_description" );

?>

<?php if ( have_rows('videos') ): ?>
  <div class="container section-videos">
    <h2><?php echo $section_title ?></h2>
    <?php echo $section_description ?>
    <div class="row">
      <?php while ( have_rows('videos') ) : the_row();


      $video_title = get_sub_field( "video_title" );
      $video_description = get_sub_field( "video_description" );
      $video_link = get_sub_field( "video_link" );
      $video_type = get_sub_field( "video_type" );


      ?>
        <div class="col-md-4 section-videos__video">

          <div class="section-videos__video__img">
            <img loading=lazy src="<?php echo parse_youtube_url($video_link, 'hqthumb'); ?>" alt="<?php echo $video_title; ?>" width="100%" />

            <a class="fancybox" data-fancybox-type="iframe" href="<?php echo $video_link ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56">
                <g id="Group_4" data-name="Group 4" transform="translate(-525 -1879)">
                  <path id="Path_74" data-name="Path 74" d="M28,0A28,28,0,1,1,0,28,28,28,0,0,1,28,0Z" transform="translate(525 1879)" opacity="0.5"/>
                  <path id="Path_73" data-name="Path 73" d="M970.915,3620.925l-14.155-10.431v21.176Z" transform="translate(-410.797 -1714)" fill="#fff" stroke="#fff" stroke-width="1"/>
                </g>
              </svg>
            </a>
          </div>






          <span><?php echo $video_type; ?></span>

          <h3><?php echo $video_title; ?></h3>
          <?php echo $video_description; ?>

          <div class="social">

      				<a href="https://twitter.com/share?url=<?php echo $video_link; ?>&text=<<?php echo $video_title; ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter">

      					<svg xmlns="http://www.w3.org/2000/svg" width="20.923" height="17" viewBox="0 0 20.923 17">
      						<g id="twitter" transform="translate(0 -48)">
      							<g id="Group_8" data-name="Group 8" transform="translate(0 48)">
      								<path id="Path_29" data-name="Path 29" d="M20.923,50.013a8.943,8.943,0,0,1-2.472.677,4.265,4.265,0,0,0,1.887-2.371,8.572,8.572,0,0,1-2.72,1.038,4.289,4.289,0,0,0-7.42,2.933,4.417,4.417,0,0,0,.1.978,12.141,12.141,0,0,1-8.841-4.487,4.291,4.291,0,0,0,1.318,5.733,4.236,4.236,0,0,1-1.938-.528v.047a4.309,4.309,0,0,0,3.437,4.215,4.281,4.281,0,0,1-1.125.141,3.793,3.793,0,0,1-.812-.073A4.33,4.33,0,0,0,6.345,61.3a8.619,8.619,0,0,1-5.318,1.829A8.034,8.034,0,0,1,0,63.075,12.076,12.076,0,0,0,6.58,65,12.124,12.124,0,0,0,18.789,52.794c0-.19-.007-.373-.016-.554A8.557,8.557,0,0,0,20.923,50.013Z" transform="translate(0 -48)"/>
      							</g>
      						</g>
      						</svg>

      				</a>
      				<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $video_link; ?>&t=<?php echo $video_title ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook">

      					<svg xmlns="http://www.w3.org/2000/svg" width="8.501" height="17" viewBox="0 0 8.501 17">
      						<path id="facebook" d="M13.136,2.823h1.552V.12A20.04,20.04,0,0,0,12.427,0c-2.238,0-3.77,1.407-3.77,3.994V6.375H6.187V9.4H8.656V17h3.027V9.4h2.369l.376-3.022H11.683V4.294c0-.873.236-1.471,1.453-1.471Z" transform="translate(-6.187)"/>
      					</svg>

      				</a>

      				<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $video_title ?> - <?php echo $video_link; ?>" target="_blank">

      					<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
      						<path id="logo-linkedin" d="M47.64,32H33.453A1.387,1.387,0,0,0,32,33.324V47.543A1.5,1.5,0,0,0,33.453,49H47.636A1.42,1.42,0,0,0,49,47.543V33.324A1.3,1.3,0,0,0,47.64,32ZM37.27,46.17H34.834V38.6H37.27Zm-1.133-8.724h-.017a1.324,1.324,0,1,1,.017,0ZM46.17,46.17H43.735V42.03c0-.992-.354-1.67-1.236-1.67a1.332,1.332,0,0,0-1.249.9,1.64,1.64,0,0,0-.084.6V46.17H38.731V38.6h2.435v1.054a2.466,2.466,0,0,1,2.2-1.231c1.6,0,2.808,1.054,2.808,3.326Z" transform="translate(-32 -32)"/>
      					</svg>



      				</a>

      					<a href="mailto:?subject=<?php echo $video_title; ?> <?php echo $video_link; ?>" title="Share by Email">

      					<svg xmlns="http://www.w3.org/2000/svg" width="26.196" height="17" viewBox="0 0 26.196 17">
      					  <path id="letter" d="M2.068,0h22.06a2.077,2.077,0,0,1,2.034,1.682L13.1,8.962.034,1.682A2.077,2.077,0,0,1,2.068,0Zm22.06,17H2.068A2.074,2.074,0,0,1,0,14.932V3.24l12.76,7.114a.726.726,0,0,0,.338.09.652.652,0,0,0,.338-.09L26.2,3.24V14.932A2.07,2.07,0,0,1,24.128,17Zm0,0"/>
      					</svg>

      				</a>


      		</div>

          <div class="hr">

          </div>

        </div>
      <?php endwhile; ?>
    </div>

  </div>
<?php endif; ?>

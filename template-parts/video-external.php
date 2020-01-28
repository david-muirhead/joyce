
<section id="full-video" class="anims <?php if ( get_sub_field( 'full_screen' ) ): ?>fullspan<?php else: // field_name returned false ?>controls<?php endif; // end of if field_name logic ?>">
		<?php if ( get_sub_field( 'custom_player' ) ): ?>
			<div class="plyr__video-embed" id="player">
		<?php else: // field_name returned false ?>
			<div class="str8vimeo">
		<?php endif; // end of if field_name logic ?>
		<?php $video = get_sub_field('video_embed');

	if ( $video ) {
		// Add autoplay functionality to the video code
		if ( preg_match('/src="(.+?)"/', $video, $matches) ) {
			// Video source URL
			$src = $matches[1];

			// Add option to hide controls, enable HD, and do autoplay -- depending on provider
			$value = get_sub_field('v_options');

			if(in_array('portrait', $value)) {
				$portrait = 1;
			}else {
				$portrait = 0;
			}
			if(in_array('byline', $value)) {
				$byline = 1;
			}else {
				$byline = 0;
			}
			if(in_array('title', $value)) {
				$title = 1;
			}else {
				$title = 0;
			}

			$color = get_sub_field('vimeo_colour');
			$params = array(
				'controls'    => 1,
				'portrait'    => $portrait,
				'byline'    => $byline,
				'title'    => $title,
				'color'		=> $color
			);

			$new_src = add_query_arg($params, $src);

			$video = str_replace($src, $new_src, $video);

			if ( get_sub_field( 'custom_video_image' ) ) {
				$eyedee = 'id="extrl" allowfullscreen';
			};
			// add extra attributes to iframe html
			$attributes = 'frameborder="0" ' .$eyedee . '';

			$video = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $video);
		}
		echo  $video;
	} ?>

	</div>
	<?php if ( get_sub_field( 'custom_video_image' ) ): ?>
		<div class="buttons">
			<img src="<?php the_sub_field('custom_video_image'); ?>" alt="" />
			<!-- if we needed to change height/width we could use viewBox here -->
			<span type="button" id="play-button" class="plyr__control plyr__control--overlaid plyr__tab-focus" data-plyr="play">
				<svg role="presentation" focusable="false">
					<path d="M15.562 8.1L3.87.225c-.818-.562-1.87 0-1.87.9v15.75c0 .9 1.052 1.462 1.87.9L15.563 9.9c.584-.45.584-1.35 0-1.8z"></path>
				</svg>
			</span>
		</div>
	<?php else: // field_name returned false ?>
	<?php endif; // end of if field_name logic ?>



</section>
<span class="video-caption"><p><?php echo get_sub_field('video_embed_description'); ?></p></span>

<section id="full-video" class="anims <?php if ( get_sub_field( 'full_screen_internal' ) ): ?>fullspan<?php else: // field_name returned false ?>controls<?php endif; // end of if field_name logic ?>">
	<video  class="js-player"  <?php if ( get_sub_field( 'looped' ) ): ?>
	playsinline loop autoplay muted
	id="player-loop"
	<?php else: // field_name returned false ?>
	id="player"
	controls
	<?php endif; // end of if field_name logic ?>>
	    <source src="<?php echo the_sub_field('video_upload'); ?>" type="video/mp4" />
	</video>

</section>
<span class="video-caption"><p><?php echo get_sub_field('video_upload_description'); ?></p></span>

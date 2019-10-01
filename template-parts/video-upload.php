<section id="full-video" class="uploaded anims <?php if ( get_sub_field( 'full_screen_internal' ) ): ?>fullspan<?php else: // field_name returned false ?>controls<?php endif; // end of if field_name logic ?>">
	<video  <?php if ( get_sub_field( 'looped' ) ): ?>
	class="js-player looper" id="player-loop" loop muted playsinline
	<?php else: // field_name returned false ?>
	class="js-player" id="player" controls
	<?php endif; // end of if field_name logic ?> src="<?php echo the_sub_field('video_upload');?>" type="video/mp4" >
	</video>
</section>
<span class="video-caption"><p><?php echo get_sub_field('video_upload_description'); ?></p></span>

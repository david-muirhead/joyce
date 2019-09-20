<section id="full-video" class="anims <?php if ( get_sub_field( 'full_screen_internal' ) ): ?>fullspan<?php else: // field_name returned false ?>controls<?php endif; // end of if field_name logic ?>">
	<video  class="js-player"  <?php if ( get_sub_field( 'looped' ) ): ?>
	loop muted playsinline
	id="player-loop"
	<?php else: // field_name returned false ?>
	id="player"
	controls
	<?php endif; // end of if field_name logic ?> src="<?php echo the_sub_field('video_upload');?>" type="video/mp4" >

	</video>
</section>

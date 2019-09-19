<?php ?>
	<video class="noclick" id="target_video" loop muted playsinline src="<?php the_sub_field('sketch_video_mp4'); ?>" type="video/mp4" poster="<?=$url?>">
	<source src="<?php the_sub_field('sketch_video_webm'); ?>" type="video/webm">
	<source src="<?php the_sub_field('sketch_video_mp4'); ?>" type="video/mp4">
	<source src="<?php the_sub_field('sketch_video_ogv'); ?>" type="video/ogv">
		Your browser does not support the video tag.
		<div class="message">

		</div>
	</video>
<?php  ?>

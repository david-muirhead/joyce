<?php
	$slides = get_sub_field('slider_images');
?>
<?php
	$image  = $slides[0]; // get first image in the gallery [1] for second, [2] for third, and so on.
	if( $image ) : // only show the image if it exists
?>
<?php endif; ?>


<div class="carousel full-screen anims">
		<?php
		foreach( $slides as $image ):
		?>
			<div class="carousel-cell">

				<img src="<?php echo $image['url']; ?>">
			</div>

		<?php endforeach; ?>


</div>
<div id="full-slider-title">
	<span ><p><?php echo get_sub_field('slider_images_description'); ?></p></span>
</div>



<?php
$images = get_sub_field('lightbox_images');
?>

<ul class="anims <?php if(get_sub_field('lightbox')){echo 'lightbox-true';}?> lightbox-gallery">
	<?php
	foreach( $images as $image ):
	?>
	<?php // each image contains a custom field called 'link'
	$width = get_field('image_span', $image['ID']);
	$mobile = get_field('mobile_span', $image['ID']);
	?>
	<li class="<?php
	if ( $width ) {
	    echo $width;
	} else {
	    echo 'half';
	}

	if ( $mobile ) {
	    echo $mobile;
	} else {
	    echo ' mob-half';
	}
	?>">
	<?php
				if(get_sub_field('lightbox')){
					echo '<a  class="spanos" href="';
					echo $image['url'];
					echo '">';
				}
	?>
	<img src="<?php echo $image['url']; ?>">
	<?php
		if(get_sub_field('lightbox')){
			echo '</a>';
		}
	?>
	<?php



	?>
	</li>
	<?php endforeach; ?>
	<span><caption><?php echo get_sub_field('lightbox_images_description'); ?></caption></span>
</ul>

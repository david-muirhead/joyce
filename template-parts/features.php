
	<?php

	$linkFeature = get_sub_field('feature_links');

	if( $linkFeature ):
		$linkFeature_url = $linkFeature['url'];
		$linkFeature_title = $linkFeature['title'];
		$linkFeature_target = $linkFeature['target'] ? $linkFeature['target'] : '_self';
		?>

		<a href="<?php echo esc_url($linkFeature_url); ?>" target="<?php echo esc_attr($linkFeature_target); ?>"> <p><?php echo esc_html($linkFeature_title); ?></p></a>

	<?php endif; ?>

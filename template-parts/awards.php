<?php

$linkAward = get_sub_field('awards_list');

if( $linkAward ):
	$linkAward_url = $linkAward['url'];
	$linkAward_title = $linkAward['title'];
	$linkAward_target = $linkAward['target'] ? $linkAward['target'] : '_self';
	?>

	<a href="<?php echo esc_url($linkAward_url); ?>" target="<?php echo esc_attr($linkAward_target); ?>"> <p><?php echo esc_html($linkAward_title); ?></p></a>

<?php endif; ?>

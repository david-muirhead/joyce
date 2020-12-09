<?php
// check for rows (parent repeater)
if( have_rows('linktree-links', 'options') ): ?>
	<?php

	// loop through rows (parent repeater)
	while( have_rows('linktree-links', 'options') ): the_row(); ?>
			<?php

			$link = get_sub_field('linktree-link');

			if( $link ):
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
				?>
				<li><a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><span><?php echo esc_html($link_title); ?><p>→</p></span></a></span></li>

			<?php endif; ?>
			
	<?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
<?php endif; // if( get_field('to-do_lists') ): ?>

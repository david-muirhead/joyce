<?php
/**
 * The default template for displaying vitals
 *
 * Used for Single
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div class="client">
	<h5>Client</h5>
	<hr>
	<?php
		if( have_rows('client') ){
			while ( have_rows('client') ) : the_row();
				$link = get_sub_field('client_link');
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
				echo '<a href="';
				echo esc_url($link_url);
				echo '" target="';
				echo esc_attr($link_target);
				echo '"> <p>';
				echo esc_html($link_title);
				echo '</p></a>';
 			endwhile;
		}
	?>
	<br>
	<h5>Year</h5>
	<hr>
	<?php if( get_field('year') ): ?>
		<p>
				 <?php the_field('year'); ?>
		</p>

	<?php endif; ?>
</div>
<div class="roles">
	<h5>Role</h5>
	<hr>
	<?php
	 	if( have_rows('roles') ){
			while ( have_rows('roles') ) : the_row();
				echo '<p>';
					the_sub_field('role');
				echo '</p>';
			endwhile;
 		}
	?>
</div>
<div>
	<?php
		the_content();
	?>
</div>

<?php
// check for rows (parent repeater)
if( have_rows('custom_lists') ): ?>
	<?php

	// loop through rows (parent repeater)
	while( have_rows('custom_lists') ): the_row(); ?>
		<div class="list">
			<h5><?php the_sub_field('new_list_title'); ?></h5>
			<hr>
			<?php

			// check for rows (sub repeater)
			if( have_rows('new_list_items') ): ?>

				<?php

				// loop through rows (sub repeater)
				while( have_rows('new_list_items') ): the_row();

					// display each item as a list - with a class of completed ( if completed )
					?>
					<?php if( get_sub_field('list_item_link') ){ echo '<a href="'.get_sub_field('list_item_link').'" target="_blank">'; } ?>
						<p><?php the_sub_field('list_item_text'); ?></p>
					<?php if( get_sub_field('list_item_link') ){ echo '</a>'; } ?>
				<?php endwhile; ?>
			<?php endif; //if( get_sub_field('items') ): ?>
		</div>

	<?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
<?php endif; // if( get_field('to-do_lists') ): ?>

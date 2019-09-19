<div>
	<h5>Judging</h5>
	<hr>
	<?php

		while ( have_rows('judging_home') ) : the_row();
			echo '<p>';
				the_sub_field('judging_list');
			echo '</p>';
		endwhile;
	?>
</div>

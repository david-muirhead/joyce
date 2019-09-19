<div>
	<h5>Created For</h5>
	<hr>
	<?php 	
		while ( have_rows('created_for_home') ) : the_row();
			echo '<p>';
				the_sub_field('created_for_list'); 
			echo '</p>';
		endwhile;		 
	?>
</div>

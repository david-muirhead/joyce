<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<?php
	// are there any rows within within our flexible content?
	if( have_rows('home_layout') ):

		// loop through all the rows of flexible content
		while ( have_rows('home_layout') ) : the_row();

			// GALLERY
			if( get_row_layout() == 'select_home_post' ) {
				get_template_part( 'template-parts/home-post', '' );
			} elseif( get_row_layout() == 'select_home_secondary' ) {
				get_template_part( 'template-parts/home-gif', '' );
			} 
		endwhile; // close the loop of flexible content
	endif; // close flexible content conditional
?>

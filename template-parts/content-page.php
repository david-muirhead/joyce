<?php
/**
 * The default template for displaying page content
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class='anims'>
		<?php get_template_part( 'template-parts/vitals', '' ); ?>
	</header>
	<div class="entry-content">

	<?php

		// are there any rows within within our flexible content?
		if( have_rows('page_layout') ):

			// loop through all the rows of flexible content
			while ( have_rows('page_layout') ) : the_row();

				// GALLERY
				if( get_row_layout() == 'gallery_lightbox' ) {

					get_template_part( 'template-parts/gallery', '' );

				}elseif( get_row_layout() == 'gallery_slider' ) {
					get_template_part( 'template-parts/gallery-slider', '' );
				}elseif( get_row_layout() == 'video_external' ) {
					get_template_part( 'template-parts/video-external', '' );
				}elseif( get_row_layout() == 'video-internal' ) {
					get_template_part( 'template-parts/video-upload', '' );
				}

			endwhile; // close the loop of flexible content
		endif; // close flexible content conditional

	?>
	</div>
</article>

<?php
/*
Template Name: Link Page
*/
get_header(); ?>
<div class="link-tree">
	<span class="about-img noclick" data-bg="url(<?php echo the_field('image', 'option'); ?>)">
	</span>
		<?php
			if( have_rows('linktree-links','options') ){
				// loop through the rows of data
				get_template_part( 'template-parts/linktree');
			}
		?>
		<a href="/">Visit full website</a>
</div>
<?php get_footer();

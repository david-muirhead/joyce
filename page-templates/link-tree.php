<?php
/*
Template Name: Link Page
*/
get_header(); ?>
<div class="link-tree">
	<span class="about-img noclick" data-bg="url(<?php echo the_field('image', 'option'); ?>)">
	</span>
	<ul class="list">
		<?php
			if( have_rows('linktree-links','options') ){
				// loop through the rows of data
				get_template_part( 'template-parts/linktree');
			}
		?>
	</ul>
	<span class="weblink">
		<a href="/">Visit full website</a>
	</span>
</div>
<?php get_footer();

<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
			<?php endwhile; ?>
		</main>
	</div>
</div>
<footer class="footer">
<?php
	// check if the repeater field has rows of data
	if( have_rows('awards')&&have_rows('features') ){
	 	// loop through the rows of data
	 	echo '<div class="awards-features">';
		echo'<div><h5>Awards</h5><hr>';
		while ( have_rows('awards') ) : the_row();
				get_template_part( 'template-parts/awards-single');
		endwhile;
		echo'</div><div><h5>Features</h5><hr>';
		while ( have_rows('features') ) : the_row();
			get_template_part( 'template-parts/features' );
    endwhile;
    echo'</div>';
	}elseif( have_rows('awards')){
	 	// loop through the rows of data
	 	echo '<div class="awards-features">';
		echo'<div><h5>Awards</h5><hr>';
		while ( have_rows('awards') ) : the_row();
				get_template_part( 'template-parts/awards-single');
		endwhile;
		echo'</div></div>';
		while ( have_rows('awards') ) : the_row();
				get_template_part( 'template-parts/awards');
		endwhile;
	}elseif( have_rows('features') ){
	 	// loop through the rows of data
	 	echo '<div class="awards-features">';
	 	echo'<div><h5>Features</h5><hr>';
	    while ( have_rows('features') ) : the_row();
			get_template_part( 'template-parts/features' );

	    endwhile;
	    echo'</div>';
	}
	echo '</div>';
	if( have_rows('credits') ){
		get_template_part( 'template-parts/credits' );
	}

?>
</footer>
<!-- Left Arrow -->
<div class="next-post">

<?php
	global $post;
	if(get_previous_post()) {
		$post = get_previous_post();
		setup_postdata($post);
		get_template_part( 'template-parts/featured-image-footer' );
	}else {
	    $first = new WP_Query('posts_per_page=1&order=DESC'); $first->the_post();
	    	get_template_part( 'template-parts/featured-image-footer' );
	  	wp_reset_query();
	};
 ?>
</div>
<?php get_footer();

<?php

$post_object = get_sub_field('home_post');

if( $post_object ):

	// override $post
	$post = $post_object;
	setup_postdata( $post );

	?>
    <div class="full anims">
    	<a href="<?php the_permalink(); ?>">
    	<?php get_template_part( 'template-parts/featured-image-home' ); ?>
    	</a>
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>

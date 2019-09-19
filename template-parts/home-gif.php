
<?php
$post_object = get_sub_field('secondary_post');

if( $post_object ):

	// override $post
	$post = $post_object;
	setup_postdata( $post );

	?>
		<?php if ( get_sub_field( 'has_sketch' ) ): ?>
			<?php if( get_sub_field('align_post') == 'left' ): ?>
				<div class="left-post">
		    	<a href="<?php the_permalink(); ?>">
		    	<?php get_template_part( 'template-parts/featured-image-home' ); ?>
		    	</a>
		    </div>
				<div class="right-gif ">
				<?php if( get_sub_field('sketch_link') ): ?>
					<a class="sketch-link" href="<?php echo the_sub_field('sketch_link'); ?>">
				<?php endif; ?>
				<?php if( get_sub_field('home_sketch') ): ?>
					<img class="noclick" src="<?php echo the_sub_field('home_sketch'); ?>">
					<p class="caption"><?php echo the_sub_field('home_sketch_text'); ?></p>
				<?php else:?>
					<?php get_template_part( 'template-parts/home-sketch-video' ); ?>
					<p class="caption"><?php echo the_sub_field('home_sketch_text'); ?></p>
				<?php endif; ?>
				<?php if( get_sub_field('sketch_link') ): ?>
					</a>
				<?php endif; ?>
				</div>
			<?php elseif( get_sub_field('align_post') == 'right' ):?>
				<div class="left-gif ">
					<?php if( get_sub_field('sketch_link') ): ?>
						<a class="sketch-link" href="<?php echo the_sub_field('sketch_link'); ?>">
					<?php endif; ?>
					<?php if( get_sub_field('home_sketch') ): ?>
						<img class="noclick" src="<?php echo the_sub_field('home_sketch'); ?>">
						<p class="caption"><?php echo the_sub_field('home_sketch_text'); ?></p>
					<?php else:?>
						<?php get_template_part( 'template-parts/home-sketch-video' ); ?>
						<p class="caption"><?php echo the_sub_field('home_sketch_text'); ?></p>
					<?php endif; ?>
					<?php if( get_sub_field('sketch_link') ): ?>
						</a>
					<?php endif; ?>
				</div>
				<div class="right-post ">
		    	<a href="<?php the_permalink(); ?>">
		    	<?php get_template_part( 'template-parts/featured-image-home' ); ?>
		    	</a>
		    </div>
			<?php endif; // end of if field_name logic ?>
		<?php else: // field_name returned false ?>

			<div class="no-sketch anims">
	    	<a href="<?php the_permalink(); ?>">
	    	<?php get_template_part( 'template-parts/featured-image-home' ); ?>
	    	</a>
	    </div>

		<?php endif; // end of if field_name logic ?>

    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>

<?php
/*
Template Name: About
*/
get_header(); ?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<section class="about-head anims">
					<span class="about-img">
						<?php the_post_thumbnail('full'); ?>
					</span>

					<div>
						<?php
						$thisPagesContent = get_the_content();
						$thisPagesContent = apply_filters( 'the_content', $thisPagesContent );
						$thisPagesContent = str_replace( ']]>', ']]&gt;', $thisPagesContent );
						echo '<h2>' . $thisPagesContent . '</h2>';
						?>

						<?php if( get_field('social_blurb') ): ?>
							<p>
								<?php the_field('social_blurb'); ?>
							</p>
						<?php endif; ?>
						<span>
							<?php
								if( have_rows('social_links') ){
								 	// loop through the rows of data
								    while ( have_rows('social_links') ) : the_row();
										get_template_part( 'template-parts/social-list');
								    endwhile;
								}
							?>
						</span>
					</div>
				</section>
				<?php

					// check if the repeater field has rows of data
					echo '<section class="about-main anims"><div class="list-left">';
					// if( have_rows('awards_home') ){
					// 	// loop through the rows of data
					// 	echo'<div><h5>Awards</h5><hr>';
					// 		while ( have_rows('awards_home') ) : the_row();
					//
					// 		get_template_part( 'template-parts/awards' );
					//
					// 		endwhile;
					// 		echo '</div>';
					// }
					//
					// if( have_rows('judging_home') ){
					//  	// loop through the rows of data
					// 	get_template_part( 'template-parts/judging');
					// }
					// if( have_rows('features_home') ){
					//  	// loop through the rows of data
					//  	echo'<div><h5>Features</h5><hr>';
					//     while ( have_rows('features_home') ) : the_row();
					//
					// 		get_template_part( 'template-parts/features' );
					//
					//     endwhile;
					//     echo '</div>';
					// }
					// echo '</div> <div class="speaking-engagements-etc">';
					// if( have_rows('representation_home') ){
					// 	// loop through the rows of data
					// 	get_template_part( 'template-parts/representation');
					// }
					// if( have_rows('speaking_engagements_home') ){
					//  	// loop through the rows of data
					// 	get_template_part( 'template-parts/speaking-engagements');
					// }
					// if( have_rows('created_for_home') ){
					//  	// loop through the rows of data
					// 	get_template_part( 'template-parts/created-for');
					// }
					if( have_rows('custom_lists') ){
						// loop through the rows of data
						get_template_part( 'template-parts/new-list');
					}
					echo '</div><div class="list-right">';
					if( have_rows('custom_lists_right') ){
						// loop through the rows of data
						get_template_part( 'template-parts/new-list-right');
					}
					echo '</div><div class="plug"><p>Website by <a href="http://newassociation.co/">New Association</a></p></div></section>';

				?>

			<?php endwhile; ?>

		</main>
	</div>
</div>
<?php get_footer();

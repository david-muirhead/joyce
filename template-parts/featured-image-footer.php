<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$url = $thumb['0'];
$ratio = $thumb[2] / $thumb[1] * 100;
if( get_field('featured_video_webm') ): ?>
	<a href="<?php echo get_permalink( $next_post->ID ); ?>" class="link">
	<header class="featured-hero front-vid">
	<video  id="target_video" loop muted playsinline src="<?php the_field('featured_video_mp4'); ?>" type="video/mp4" poster="<?=$url?>">
	<source src="<?php the_field('featured_video_webm'); ?>" type="video/webm">
	<source src="<?php the_field('featured_video_mp4'); ?>" type="video/mp4">
	<source src="<?php the_field('featured_video_ogv'); ?>" type="video/ogv">
		Your browser does not support the video tag.
		<div class="message">

		</div>
	</video>


<?php

elseif ( has_post_thumbnail( $post->ID ) ) : ?>

	<a href="<?php echo get_permalink( $next_post->ID ); ?>" class="link">
	<header class="featured-hero-home">

			<img class="lazy" src="<?=$url?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		</span>

<?php endif;?>
<span class="footer-titles">
<?php
the_title( '<h1>', '</h1>' );
?>
<h2>View Project</h2>
</span>
</header>
</a>

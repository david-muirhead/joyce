<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$url = $thumb['0'];
$ratio = $thumb[2] / $thumb[1] * 100;
if( get_field('featured_video_webm') ): ?>
	<header class="featured-hero">
	<div id="target_video" class="video-contain"><video loop muted playsinline poster="<?=$url?>">
	<source src="<?php the_field('featured_video_webm'); ?>" type="video/webm">
	<source src="<?php the_field('featured_video_mp4'); ?>" type="video/mp4">
	<source src="<?php the_field('featured_video_ogv'); ?>" type="video/ogv">
		Your browser does not support the video tag.
		<div class="message">

		</div>
	</video></div>


<?php

elseif ( has_post_thumbnail( $post->ID ) ) : ?>
	<header class="featured-hero" role="banner" >

			<img class="lazy" src="<?=$url?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
<?php else  :?>
	<span class="noimg"></span>
<?php endif;?>
<span class="titles">
<?php
	if ( is_single() ) {
		the_title( '<h1 class="entry-title">', '</h1>' );

	} else {
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	}
?>
<?php if( get_field('sub-heading') ): ?>
	<h2><?php the_field('sub-heading'); ?></h2>

<?php endif; ?>
</span>
</header>

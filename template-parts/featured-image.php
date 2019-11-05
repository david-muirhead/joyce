<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$url = $thumb['0'];
if( get_field('featured_video_webm') ): ?>
	<header class="featured-hero">
	<div class="video-contain">
		<video id="target_video sds" loop muted playsinline src="<?php the_field('featured_video_mp4'); ?>" type="video/mp4" poster="<?=$url?>">
		<source src="<?php the_field('featured_video_webm'); ?>" type="video/webm">
		<source src="<?php the_field('featured_video_mp4'); ?>" type="video/mp4">
		<source src="<?php the_field('featured_video_ogv'); ?>" type="video/ogv">
			Your browser does not support the video tag.
			<div class="message">

			</div>
		</video>
	</div>

<?php

elseif ( has_post_thumbnail( $post->ID ) ) : ?>
<header class="featured-hero" role="banner" style="  overflow:visible;">

	<span href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" style="background:url('<?=$url?>') center center;    height: 100%; display: block; min-height: 200px;display:block;  background-size: cover;"></span>

<?php else  :?>
<header class="featured-hero" role="banner" >
	<span class="noimg"></span>
	<span class="titles">
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

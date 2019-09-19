<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<nav>
	<ul id="list">
	<?php
		$args = array(
		  'numberposts' => -1
		);

		$posts = get_posts($args);

		foreach($posts as $key=>$post){
		  $list .= '<li><a class="cta" hover-data="'.$post->ID.'" href="'. get_permalink() .'" data-video="'.get_field('featured_video_webm').'" data-poster="'.get_the_post_thumbnail_url().'"><span class="title">'.$post->post_title.' </span> <span class="category">'.get_the_category( $id )[0]->name .'</span> <span class="year">'.get_field('year').'</span></a></li>';
		}

		echo $list;
	?>
	</ul>
</nav>

<div id="video-wraps">
	<?php
		$argsVid = array(
			'numberposts' => -1
		);

		$posts = get_posts($argsVid);

		foreach($posts as $keyVid=>$posto){
			$listVid .= '<video preload="auto" class="cta" autoplay="" muted="" loop="" id="'.$posto->ID.'" poster="'.get_the_post_thumbnail_url($posto->ID).'" src="'.get_field('featured_video_mp4', $posto->ID).'" ></video>';
		}

		echo $listVid;
	?>
</div>


<?php get_footer();

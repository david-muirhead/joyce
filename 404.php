<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
			<article>
				<header>
					<h1 class="entry-title"><?php _e( '404', 'foundationpress' ); ?></h1>
				</header>
				<div class="entry-content">
					<div class="error">
						<p class="bottom"><?php _e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'foundationpress' ); ?></p>
					</div>
					<ul>
						<li>
							<?php
								/* translators: %s: home page url */
								printf(
									__( 'Return <a href="%s">home</a>', 'foundationpress' ),
									home_url()
								);
							?>
						</li>
						<li>
							<?php _e( 'Go <a href="javascript:history.back()">Back</a>', 'foundationpress' ); ?>
						</li>
					</ul>
				</div>
			</article>
		</main>
	</div>
</div>
<?php get_footer();

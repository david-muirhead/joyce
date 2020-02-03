<div class="credits">

	<input type="checkbox" name="love" value="love" id="love" checked>

	<label for="love"><h5 class="credits-title">Credits</h5><i></i></label>
	<div class="credits-inner-wrap">
		<ul class="credits-inner">
			<?php while( have_rows('credits') ): the_row();

				// vars
				$title = get_sub_field('title');
				$name = get_sub_field('name');
				?>
				<li >
					<h5><?php echo $title; ?></h5>
					<hr>
					<p><?php echo $name; ?></p>
				</li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>

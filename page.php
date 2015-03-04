<?php

get_header();

?>

			<div class="showcase">
				<?php the_showcase(); ?>
			</div>

			<div id="content" class="site-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="image right">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="content left">
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
			</div>

<?php get_footer(); ?>
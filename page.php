<?php

/*
Template Name: Generic Page
*/

get_header();

?>

			<div class="showcase">
				<?php the_showcase(); ?>
			</div>

			<?php while ( have_posts() ) : the_post(); ?>
				<h1 class="subtitle <?php show_cmb_value( 'page_title_color' ) ?>"><?php show_cmb_value( 'page_subtitle' ) ?></h1>
				<div class="main-content <?php show_cmb_value( 'page_bg_color' ) ?>"
				<?php if ( has_cmb_value( 'page_icon' ) ) { ?>style="background-image: url(<?php show_cmb_value( 'page_icon' ) ?>);"<?php } ?>>
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>

<?php get_footer(); ?>
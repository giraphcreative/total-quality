<?php

/*
Template Name: Industry
*/

get_header();

?>

			<div class="showcase">
				<?php the_showcase(); ?>
			</div>

			<div class="industry group <?php show_cmb_value( 'industry_color' ) ?>"
				<?php if ( has_cmb_value( 'industry_background' ) ) { ?>style="background-image: url(<?php show_cmb_value( 'industry_background' ) ?>);"<?php } ?>>
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="half">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</div>
				<?php endwhile; ?>
				
				<div class="half text-center">

				<?php if ( has_cmb_value( 'industry_button_1_text' ) 
					&& has_cmb_value( 'industry_button_1_color' ) ) { ?>
				<a href="<?php show_cmb_value( 'industry_button_1_link' ) ?>" class="button-large <?php show_cmb_value( 'industry_button_1_color' ) ?>">
					<?php if ( has_cmb_value( 'industry_button_1_icon' ) ) { ?>
					<div class="icon <?php show_cmb_value( 'industry_button_1_color' ) ?>">
						<img src="<?php show_cmb_value( 'industry_button_1_icon' ) ?>">
					</div>
					<?php } ?>
					<?php show_cmb_value( 'industry_button_1_text' ) ?>
					</a>
				<?php } ?>
				
				<?php if ( has_cmb_value( 'industry_button_2_text' ) 
					&& has_cmb_value( 'industry_button_2_color' ) ) { ?>
				<a href="<?php show_cmb_value( 'industry_button_2_link' ) ?>" class="button-large <?php show_cmb_value( 'industry_button_2_color' ) ?>">
					<?php if ( has_cmb_value( 'industry_button_2_icon' ) ) { ?>
					<div class="icon <?php show_cmb_value( 'industry_button_2_color' ) ?>">
						<img src="<?php show_cmb_value( 'industry_button_2_icon' ) ?>">
					</div>
					<?php } ?>
					<?php show_cmb_value( 'industry_button_2_text' ) ?>
					</a>
				<?php } ?>
				
				<?php if ( has_cmb_value( 'industry_button_3_text' ) 
					&& has_cmb_value( 'industry_button_3_color' ) ) { ?>
				<a href="<?php show_cmb_value( 'industry_button_3_link' ) ?>" class="button-large <?php show_cmb_value( 'industry_button_3_color' ) ?>">
					<?php if ( has_cmb_value( 'industry_button_3_icon' ) ) { ?>
					<div class="icon <?php show_cmb_value( 'industry_button_3_color' ) ?>">
						<img src="<?php show_cmb_value( 'industry_button_3_icon' ) ?>">
					</div>
					<?php } ?>
					<?php show_cmb_value( 'industry_button_3_text' ) ?>
					</a>
				<?php } ?>

				</div>
			</div>

			<div class="narrow-thirds bg-blue-dark group">

				<div class="third">
					<?php show_third( 1 ) ?>
				</div>

				<div class="third">
					<?php show_third( 2 ) ?>
				</div>

				<div class="third">
					<?php show_third( 3 ) ?>
				</div>

			</div>

			<div class="white-box group">

				<div class="half news">
					<h3>News</h3>
					<?php 
					$args = array( 'numberposts' => '2' );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){
						echo '<h4><a href="' . get_permalink( $recent["ID"] ) . '">' . date( 'n.j.Y', strtotime( $recent["post_date"] ) ) . '</a></h4>';
						echo "<p>" . ( !empty( $recent['post_excerpt'] ) ? $recent["post_excerpt"] : substr( $recent['post_content'], 0, 200 ) . '...' ) . "</p>";
					}
					?>
				</div>

				<div class="half services">
					<h3>Services</h3>
					<?php
					$services = get_page_by_path( 'services' );
					print $services->post_content;
					?>
				</div>

			</div>

<?php get_footer(); ?>
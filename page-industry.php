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
					<h4><a href="#">01.03.2015</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sapien vitae massa elementum imperdiet. Nullam at viverra orci. Praesent pharetra quam eu orci finibus, eget dapibus nibh porta.</p>
					<h4><a href="#">01.03.2015</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sapien vitae massa elementum imperdiet. Nullam at viverra orci. Praesent pharetra quam eu orci finibus, eget dapibus nibh porta.</p>
				</div>

				<div class="half services">
					<h3>Services</h3>
					<ul>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
						<li>Sed tincidunt sapien vitae massa elementum imperdiet.</li>
						<li>Nullam at viverra orci.</li>
						<li>Praesent pharetra quam eu orci finibus, eget dapibus nibh porta.</li>
						<li>Sed tincidunt sapien vitae massa elementum imperdiet.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
					</ul>
				</div>

			</div>

<?php get_footer(); ?>
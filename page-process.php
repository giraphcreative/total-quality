<?php

/*
Template Name: Process
*/

get_header();

?>

			<div class="showcase">
				<?php the_showcase(); ?>

				<div class="flower">
					<img src="<?php bloginfo( 'template_url' ); ?>/img/flower.png" border="0" width="445" height="445" usemap="#flowermap" class="flower" alt="Our Process" />
					<map name="flowermap">
						<area title="Step 1: Evaluate" href="#step1" shape="poly" coords="221,214,304,74,263,4,181,4,141,74" target="_self" />
						<area title="Step 2: Design" href="#step2" shape="poly" coords="307,77,226,219,389,218,431,149,389,77" target="_self" />
						<area title="Step 3: Research" href="#step3" shape="poly" coords="226,224,388,224,431,296,390,365,307,364" target="_self" />
						<area title="Step 4: Screen" href="#step4" shape="poly" coords="221,224,301,366,262,435,180,436,140,366" target="_self" />
						<area title="Step 5: Offer" href="#step5" shape="poly" coords="215,224,55,223,13,295,53,365,135,364" target="_self" />
						<area title="Step 6: Follow-Up" href="#step6" shape="poly" coords="217,218,135,77,55,77,13,148,53,218" target="_self" />
					</map>
				</div>
			</div>

			<?php while ( have_posts() ) : the_post(); ?>
				<h1 class="subtitle text-center bg-green"><?php show_cmb_value( 'page_subtitle' ) ?></h1>
				<div class="main-content bg-blue-medium-dark">
					<div class="wrap-narrow">
						<?php the_content(); ?>
					</div>
				</div>
			<?php endwhile; ?>

			<div class="process wrap-narrow group">
				
				<div id="step1" class="step one <?php show_cmb_value( 'process_step_1_color' ) ?>">
					<div class="icon">
						<img src="<?php print tq_image_resize( get_cmb_value( 'process_step_1_icon' ), 100, 100, 1, 1 ); ?>">
					</div>
					<div class="step-content">
						<h4><?php show_cmb_value( 'process_step_1_title' ); ?></h4>
						<div class='content'>
							<?php show_cmb_value( 'process_step_1_content' ); ?>
						</div>
					</div>
				</div>
				
				<div id="step2" class="step two <?php show_cmb_value( 'process_step_2_color' ) ?>">
					<div class="icon">
						<img src="<?php print tq_image_resize( get_cmb_value( 'process_step_2_icon' ), 100, 100, 1, 1 ); ?>">
					</div>
					<div class="step-content">
						<h4><?php show_cmb_value( 'process_step_2_title' ); ?></h4>
						<div class='content'>
							<?php show_cmb_value( 'process_step_2_content' ); ?>
						</div>
					</div>
				</div>
				
				<div id="step3" class="step three <?php show_cmb_value( 'process_step_3_color' ) ?>">
					<div class="icon">
						<img src="<?php print tq_image_resize( get_cmb_value( 'process_step_3_icon' ), 100, 100, 1, 1 ); ?>">
					</div>
					<div class="step-content">
						<h4><?php show_cmb_value( 'process_step_3_title' ); ?></h4>
						<div class='content'>
							<?php show_cmb_value( 'process_step_3_content' ); ?>
						</div>
					</div>
				</div>
				
				<div id="step4" class="step four <?php show_cmb_value( 'process_step_4_color' ) ?>">
					<div class="icon">
						<img src="<?php print tq_image_resize( get_cmb_value( 'process_step_4_icon' ), 100, 100, 1, 1 ); ?>">
					</div>
					<div class="step-content">
						<h4><?php show_cmb_value( 'process_step_4_title' ); ?></h4>
						<div class='content'>
							<?php show_cmb_value( 'process_step_4_content' ); ?>
						</div>
					</div>
				</div>
				
				<div id="step5" class="step five <?php show_cmb_value( 'process_step_5_color' ) ?>">
					<div class="icon">
						<img src="<?php print tq_image_resize( get_cmb_value( 'process_step_5_icon' ), 100, 100, 1, 1 ); ?>">
					</div>
					<div class="step-content">
						<h4><?php show_cmb_value( 'process_step_5_title' ); ?></h4>
						<div class='content'>
							<?php show_cmb_value( 'process_step_5_content' ); ?>
						</div>
					</div>
				</div>
				
				<div id="step6" class="step six <?php show_cmb_value( 'process_step_6_color' ) ?>">
					<div class="icon">
						<img src="<?php print tq_image_resize( get_cmb_value( 'process_step_6_icon' ), 100, 100, 1, 1 ); ?>">
					</div>
					<div class="step-content">
						<h4><?php show_cmb_value( 'process_step_6_title' ); ?></h4>
						<div class='content'>
							<?php show_cmb_value( 'process_step_6_content' ); ?>
						</div>
					</div>
				</div>

			</div>

<?php get_footer(); ?>
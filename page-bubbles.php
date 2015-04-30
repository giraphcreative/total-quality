<?php

/*
Template Name: Photo Bubbles
*/

get_header();

$bubbles = get_cmb_value( 'bubbles' );

?>

			<div class="showcase">
				<?php the_showcase(); ?>
			</div>

			<h1 class="subtitle bg-blue-light"><?php show_cmb_value( 'page_subtitle' ) ?></h1>
			<div class="bubbles group bg-blue-medium">
				
				<?php 
				if ( !empty( $bubbles ) ) {
					foreach ( $bubbles as $bubble ) {
						print $bubble["image"];
						?>
				<div class="bubble">
					<div class="photo">
						<?php if ( isset( $bubble['link'] ) ) { if ( !empty( $bubble['link'] ) ) { ?><a href="<?php print $bubble['link'] ?>"><?php } } ?>
						<img src="<?php print tq_image_resize( $bubble["image"], 300, 250, 1, 1 ); ?>">
						<?php if ( isset( $bubble['link'] ) ) { if ( !empty( $bubble['link'] ) ) { ?></a><?php } } ?>
					</div>
					<div class="box">
						<h4><?php print $bubble['title'] ?></h4>
						<p><?php print $bubble['content'] ?></p>
					</div>
				</div>
						<?php
					}
				}
				?>

			</div>

<?php get_footer(); ?>
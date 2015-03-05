<?php

/*
Template Name: Homepage
*/

get_header();

?>

			<div class="showcase">
				<?php the_showcase(); ?>
			</div>

			<a href="/financial" class="button-half bg-blue-light financial">Financial Institutions</a>
			<a href="/manufacturers" class="button-half bg-green manufacturers">Manufacturers</a>

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

				<div class="fifth chat">
					<img src="<?php bloginfo( 'template_url' ) ?>/img/icon-chat.png">
					<p>Lorem ipsum dolar sit amet.</p>
				</div>

				<div class="two-fifth news">
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

				<div class="two-fifth services">
					<h3>Services</h3>
					<?php
					$services = get_page_by_path( 'services' );
					print $services->post_content;
					?>
				</div>

			</div>

<?php get_footer(); ?>
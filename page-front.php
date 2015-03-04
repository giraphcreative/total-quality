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
					<h4><a href="#">01.03.2015</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sapien vitae massa elementum imperdiet. Nullam at viverra orci. Praesent pharetra quam eu orci finibus, eget dapibus nibh porta.</p>
					<h4><a href="#">01.03.2015</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sapien vitae massa elementum imperdiet. Nullam at viverra orci. Praesent pharetra quam eu orci finibus, eget dapibus nibh porta.</p>
				</div>

				<div class="two-fifth services">
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
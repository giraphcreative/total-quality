<?php

/*
Template Name: Front Page
*/

get_header();

?>

			<div class="showcase">
				<?php if ( has_cmb_value( 'showcase_link' ) ) { ?><a href="<?php show_cmb_value( 'showcase_link' ) ?>"><?php } ?>
				<img src="<?php show_cmb_value( 'showcase_photo' ); ?>">
				<?php if ( has_cmb_value( 'showcase_title' ) ) { ?>
					<h1<?php if ( has_cmb_value( 'showcase_title_color' ) ) { ?> class="<?php show_cmb_value( 'showcase_title_color' ) ?>"<?php } ?>>
						<?php show_cmb_value( 'showcase_title' ); ?>
					</h1>
				<?php } ?>
				<?php if ( has_cmb_value( 'showcase_content' ) ) { ?>
				<div class="content">
					<?php show_cmb_value( 'showcase_content' ) ?>
				</div>
				<?php } ?>
				<?php if ( has_cmb_value( 'showcase_button_text' ) 
					&& has_cmb_value( 'showcase_button_color' ) ) { ?>
				<a class="button-large <?php show_cmb_value( 'showcase_button_color' ) ?>">
					<?php if ( has_cmb_value( 'showcase_button_icon' ) ) { ?>
					<div class="icon <?php show_cmb_value( 'showcase_button_color' ) ?>">
						<img src="<?php show_cmb_value( 'showcase_button_icon' ) ?>">
					</div>
					<?php } ?>
					<?php show_cmb_value( 'showcase_button_text' ) ?>
				<?php } ?>
				<?php if ( has_cmb_value( 'showcase_link' ) ) { ?></a><?php } ?>
			</div>

			<a href="#" class="button-half bg-blue-light financial">Financial Institutions</a>
			<a href="#" class="button-half bg-green manufacturers">Manufacturers</a>

			<div class="narrow-thirds bg-blue-dark group">

				<div class="third blue">
					<h3 class="text-center">Decision-Makers</h3>
					<div class="icon-circle bg-blue-medium-dark">
						<img src="img/icon-user-search.png">
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sapien vitae massa elementum imperdiet. Nullam at viverra orci. Praesent pharetra quam eu orci finibus, eget dapibus nibh porta.</p>
					<p><a href="#" class="button arrow-right">Read more</a></p>
				</div>

				<div class="third green">
					<h3 class="text-center">Candidates</h3>
					<div class="icon-circle bg-green">
						<img src="img/icon-binoculars.png">
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sapien vitae massa elementum imperdiet. Nullam at viverra orci. Praesent pharetra quam eu orci finibus, eget dapibus nibh porta.</p>
					<p><a href="#" class="button arrow-right">Read more</a></p>
				</div>

				<div class="third blue-light">
					<h3 class="text-center">Our Process</h3>
					<div class="icon-circle bg-blue-medium">
						<img src="img/icon-flower.png">
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt sapien vitae massa elementum imperdiet. Nullam at viverra orci. Praesent pharetra quam eu orci finibus, eget dapibus nibh porta.</p>
					<p><a href="#" class="button arrow-right">Read more</a></p>
				</div>

			</div>

			<div class="white-box group">

				<div class="fifth chat">
					<img src="img/icon-chat.png">
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
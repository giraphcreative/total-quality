<?php


function the_showcase() {
	if ( has_cmb_value( 'showcase_photo' ) ) {
				?>
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
					&& has_cmb_value( 'showcase_button_color' )
					&& has_cmb_value( 'showcase_link' ) ) { ?>
				<a <?php if ( has_cmb_value( 'showcase_link' ) ) { ?>href="<?php show_cmb_value( 'showcase_link' ) ?>"<?php } ?> class="button-large <?php show_cmb_value( 'showcase_button_color' ) ?>">
					<?php if ( has_cmb_value( 'showcase_button_icon' ) ) { ?>
					<div class="icon <?php show_cmb_value( 'showcase_button_color' ) ?>">
						<img src="<?php show_cmb_value( 'showcase_button_icon' ) ?>">
					</div>
					<?php } ?>
					<?php show_cmb_value( 'showcase_button_text' ) ?>
				</a>
				<?php }
	}
}


?>
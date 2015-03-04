<?php

function show_third( $id = 1 ) {
	if ( has_cmb_value( 'third_' . $id . '_title' ) 
		&& has_cmb_value( 'third_' . $id . '_icon' )  
		&& has_cmb_value( 'third_' . $id . '_color' )
		&& has_cmb_value( 'third_' . $id . '_content' ) 
		&& has_cmb_value( 'third_' . $id . '_link' ) ) { ?>
					<h3 class="text-center"><?php show_cmb_value( 'third_' . $id . '_title' ) ?></h3>
					<div class="icon-circle <?php show_cmb_value( 'third_' . $id . '_color' ) ?>">
						<img src="<?php show_cmb_value( 'third_' . $id . '_icon' ) ?>">
					</div>
					<?php show_cmb_value( 'third_' . $id . '_content' ) ?>
					<p><a href="<?php show_cmb_value( 'third_' . $id . '_link' ) ?>" class="button arrow-right">Read more</a></p>
		<?php
	}
}

?>
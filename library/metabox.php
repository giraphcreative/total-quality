<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

require_once 'metabox/init.php';




/**
 * Metabox for Page Template
 * @author Kenneth White
 * @link https://github.com/WebDevStudios/CMB2/wiki/Adding-your-own-show_on-filters
 *
 * @param bool $display
 * @param array $meta_box
 * @return bool display metabox
 */
function metabox_show_on_template( $display, $meta_box ) {

    if ( !isset( $meta_box['show_on']['key'] ) ) return $display;

    if ( 'template' !== $meta_box['show_on']['key'] ) return $display;

    // Get the current ID
    if( isset( $_GET['post'] ) ) $post_id = $_GET['post'];
    elseif( isset( $_POST['post_ID'] ) ) $post_id = $_POST['post_ID'];
    if( !isset( $post_id ) ) return false;

    $template_name = get_page_template_slug( $post_id );
    $template_name = substr($template_name, 0, -4);

    // If value isn't an array, turn it into one
    $meta_box['show_on']['value'] = !is_array( $meta_box['show_on']['value'] ) ? array( $meta_box['show_on']['value'] ) : $meta_box['show_on']['value'];

    // See if there's a match
    return in_array( $template_name, $meta_box['show_on']['value'] );
}
add_filter( 'cmb2_show_on', 'metabox_show_on_template', 10, 2 );





add_action( 'cmb2_init', 'yourprefix_register_demo_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_init' hook.
 */
function yourprefix_register_demo_metabox() {

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_demo = new_cmb2_box( array(
		'id' => CMB_PREFIX . 'metabox',
		'title' => __( 'Showcase', 'cmb2' ),
		'object_types' => array( 'page', ), // Post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
	) );

	$cmb_demo->add_field( array(
		'name' => __( 'Title', 'cmb2' ),
		'desc' => __( 'Enter a title to display in the showcase.', 'cmb2' ),
		'id' => CMB_PREFIX . 'showcase_title',
		'type' => 'text',
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
	) );

	$cmb_demo->add_field( array(
		'name'    => __( 'Content', 'cmb2' ),
		'desc'    => __( 'Enter the content for the light blue box in the showcase.', 'cmb2' ),
		'id'      => CMB_PREFIX . 'showcase_content',
		'type'    => 'wysiwyg',
		'options' => array( 'textarea_rows' => 5, ),
	) );

	$cmb_demo->add_field( array(
		'name' => __( 'Link', 'cmb2' ),
		'desc' => __( 'Enter a link for the ', 'cmb2' ),
		'id'   => CMB_PREFIX . 'showcase_link',
		'type' => 'text',
	) );

	$cmb_demo->add_field( array(
		'name' => __( 'Photo', 'cmb2' ),
		'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => CMB_PREFIX . 'showcase_photo',
		'type' => 'file',
	) );

}



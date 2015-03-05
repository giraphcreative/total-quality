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



add_action( 'cmb2_init', 'tq_metaboxes' );
function tq_metaboxes() {


	// SHOWCASE METABOX
	$cmb_showcase = new_cmb2_box( array(
		'id' => CMB_PREFIX . 'showcase',
		'title' => __( 'Showcase', 'cmb2' ),
		'object_types' => array( 'page', ), // Post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
	) );

	$cmb_showcase->add_field( array(
		'name' => __( 'Title', 'cmb2' ),
		'desc' => __( 'Enter a title to display in the showcase.', 'cmb2' ),
		'id' => CMB_PREFIX . 'showcase_title',
		'type' => 'text',
	) );

	$cmb_showcase->add_field(array(
	    'name' => 'Title BG Color',
	    'desc' => 'Select a background color for the title.',
	    'id' => CMB_PREFIX . 'showcase_title_color',
	    'type' => 'select',
	    'options' => array(
	        'bg-blue-dark' => __( 'Blue - Dark', 'cmb' ),
	        'bg-blue-medium-dark' => __( 'Blue - Medium Dark', 'cmb' ),
	        'bg-blue-medium' => __( 'Blue - Medium', 'cmb' ),
	        'bg-blue-light' => __( 'Blue - Light', 'cmb' ),
	        'bg-green' => __( 'Green', 'cmb' ),
	    ),
	    'default' => 'bg-blue-dark',
	));

	$cmb_showcase->add_field( array(
		'name' => __( 'Content', 'cmb2' ),
		'desc' => __( 'Enter the content for the light blue box in the showcase.', 'cmb2' ),
		'id' => CMB_PREFIX . 'showcase_content',
		'type' => 'wysiwyg',
		'options' => array( 'textarea_rows' => 5, ),
	) );

	$cmb_showcase->add_field( array(
		'name' => __( 'Photo', 'cmb2' ),
		'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
		'id' => CMB_PREFIX . 'showcase_photo',
		'type' => 'file',
	) );

	$cmb_showcase->add_field( array(
		'name' => __( 'Button Text', 'cmb2' ),
		'desc' => __( 'Text to display on the button', 'cmb2' ),
		'id' => CMB_PREFIX . 'showcase_button_text',
		'type' => 'text',
	) );

	$cmb_showcase->add_field( array(
		'name' => __( 'Button Link', 'cmb2' ),
		'desc' => __( 'Enter a link for the button.', 'cmb2' ),
		'id' => CMB_PREFIX . 'showcase_link',
		'type' => 'text',
	) );

	$cmb_showcase->add_field( array(
		'name' => __( 'Button Icon', 'cmb2' ),
		'desc' => __( 'Upload an image or enter a URL for the button icon.', 'cmb2' ),
		'id' => CMB_PREFIX . 'showcase_button_icon',
		'type' => 'file',
	) );

	$cmb_showcase->add_field(array(
	    'name' => 'Button Color',
	    'desc' => 'Select a color for the button',
	    'id' => CMB_PREFIX . 'showcase_button_color',
	    'type' => 'select',
	    'options' => array(
	        'bg-blue-dark' => __( 'Blue - Dark', 'cmb' ),
	        'bg-blue-medium-dark' => __( 'Blue - Medium Dark', 'cmb' ),
	        'bg-blue-medium' => __( 'Blue - Medium', 'cmb' ),
	        'bg-blue-light' => __( 'Blue - Light', 'cmb' ),
	        'bg-green' => __( 'Green', 'cmb' ),
	    ),
	    'default' => 'bg-blue-dark',
	));


	// INDUSTRY LABEL METABOX
	$cmb_industry = new_cmb2_box( array(
		'id' => CMB_PREFIX . 'industry',
		'title' => __( 'Industry Information', 'cmb2' ),
		'object_types' => array( 'page', ), // Post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'show_on' => array( 'key' => 'template', 'value' => array( 'page-industry' ) )
	) );

	$cmb_industry->add_field( array(
		'name' => 'Background Image',
		'id' => CMB_PREFIX . 'industry_background',
		'type' => 'file',
	) );

	$cmb_industry->add_field(array(
	    'name' => 'Background Color',
	    'id' => CMB_PREFIX . 'industry_color',
	    'type' => 'select',
	    'options' => array(
	        'bg-blue-dark' => __( 'Blue - Dark', 'cmb' ),
	        'bg-blue-medium-dark' => __( 'Blue - Medium Dark', 'cmb' ),
	        'bg-blue-medium' => __( 'Blue - Medium', 'cmb' ),
	        'bg-blue-light' => __( 'Blue - Light', 'cmb' ),
	        'bg-green' => __( 'Green', 'cmb' ),
	    ),
	    'default' => 'bg-blue-dark',
	));

	$cmb_industry->add_field( array(
		'name' => 'Button Text (1)',
		'id' => CMB_PREFIX . 'industry_button_1_text',
		'type' => 'text',
	) );

	$cmb_industry->add_field( array(
		'name' => 'Button Link (1)',
		'id' => CMB_PREFIX . 'industry_button_1_link',
		'type' => 'text',
	) );

	$cmb_industry->add_field( array(
		'name' => 'Button Icon (1)',
		'id' => CMB_PREFIX . 'industry_button_1_icon',
		'type' => 'file',
	) );

	$cmb_industry->add_field(array(
	    'name' => 'Button Color (1)',
	    'id' => CMB_PREFIX . 'industry_button_1_color',
	    'type' => 'select',
	    'options' => array(
	        'bg-blue-dark' => __( 'Blue - Dark', 'cmb' ),
	        'bg-blue-medium-dark' => __( 'Blue - Medium Dark', 'cmb' ),
	        'bg-blue-medium' => __( 'Blue - Medium', 'cmb' ),
	        'bg-blue-light' => __( 'Blue - Light', 'cmb' ),
	        'bg-green' => __( 'Green', 'cmb' ),
	    ),
	    'default' => 'bg-blue-dark',
	));

	$cmb_industry->add_field( array(
		'name' => 'Button Text (2)',
		'id' => CMB_PREFIX . 'industry_button_2_text',
		'type' => 'text',
	) );

	$cmb_industry->add_field( array(
		'name' => 'Button Link (2)',
		'id' => CMB_PREFIX . 'industry_button_2_link',
		'type' => 'text',
	) );

	$cmb_industry->add_field( array(
		'name' => 'Button Icon (2)',
		'id' => CMB_PREFIX . 'industry_button_2_icon',
		'type' => 'file',
	) );

	$cmb_industry->add_field(array(
	    'name' => 'Button Color (2)',
	    'id' => CMB_PREFIX . 'industry_button_2_color',
	    'type' => 'select',
	    'options' => array(
	        'bg-blue-dark' => __( 'Blue - Dark', 'cmb' ),
	        'bg-blue-medium-dark' => __( 'Blue - Medium Dark', 'cmb' ),
	        'bg-blue-medium' => __( 'Blue - Medium', 'cmb' ),
	        'bg-blue-light' => __( 'Blue - Light', 'cmb' ),
	        'bg-green' => __( 'Green', 'cmb' ),
	    ),
	    'default' => 'bg-blue-dark',
	));


	// NARROW-THIRDS METABOX
	$cmb_thirds = new_cmb2_box( array(
		'id' => CMB_PREFIX . 'narrow_thirds',
		'title' => __( 'Narrow Thirds', 'cmb2' ),
		'object_types' => array( 'page', ), // Post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'show_on' => array( 'key' => 'template', 'value' => array( 'page-front', 'page-industry' ) )
	) );

	$cmb_thirds->add_field( array(
		'name' => 'Title (1)',
		'id' => CMB_PREFIX . 'third_1_title',
		'type' => 'text',
	) );

	$cmb_thirds->add_field(array(
	    'name' => 'Color (1)',
	    'id' => CMB_PREFIX . 'third_1_color',
	    'type' => 'select',
	    'options' => array(
	        'bg-blue-dark' => __( 'Blue - Dark', 'cmb' ),
	        'bg-blue-medium-dark' => __( 'Blue - Medium Dark', 'cmb' ),
	        'bg-blue-medium' => __( 'Blue - Medium', 'cmb' ),
	        'bg-blue-light' => __( 'Blue - Light', 'cmb' ),
	        'bg-green' => __( 'Green', 'cmb' ),
	    ),
	    'default' => 'bg-blue-dark',
	));

	$cmb_thirds->add_field( array(
		'name' => 'Icon (1)',
		'id' => CMB_PREFIX . 'third_1_icon',
		'type' => 'file',
	) );

	$cmb_thirds->add_field( array(
		'name' => 'Content (1)',
		'id' => CMB_PREFIX . 'third_1_content',
		'type' => 'wysiwyg',
		'options' => array( 'textarea_rows' => 5, ),
	) );

	$cmb_thirds->add_field( array(
		'name' => 'Link (1)',
		'id' => CMB_PREFIX . 'third_1_link',
		'type' => 'text',
	) );

	$cmb_thirds->add_field( array(
		'name' => 'Title (2)',
		'id' => CMB_PREFIX . 'third_2_title',
		'type' => 'text',
	) );

	$cmb_thirds->add_field(array(
	    'name' => 'Color (2)',
	    'id' => CMB_PREFIX . 'third_2_color',
	    'type' => 'select',
	    'options' => array(
	        'bg-blue-dark' => __( 'Blue - Dark', 'cmb' ),
	        'bg-blue-medium-dark' => __( 'Blue - Medium Dark', 'cmb' ),
	        'bg-blue-medium' => __( 'Blue - Medium', 'cmb' ),
	        'bg-blue-light' => __( 'Blue - Light', 'cmb' ),
	        'bg-green' => __( 'Green', 'cmb' ),
	    ),
	    'default' => 'bg-blue-dark',
	));

	$cmb_thirds->add_field( array(
		'name' => 'Icon (2)',
		'id' => CMB_PREFIX . 'third_2_icon',
		'type' => 'file',
	) );

	$cmb_thirds->add_field( array(
		'name' => 'Content (2)',
		'id' => CMB_PREFIX . 'third_2_content',
		'type' => 'wysiwyg',
		'options' => array( 'textarea_rows' => 5, ),
	) );

	$cmb_thirds->add_field( array(
		'name' => 'Link (2)',
		'id' => CMB_PREFIX . 'third_2_link',
		'type' => 'text',
	) );

	$cmb_thirds->add_field( array(
		'name' => 'Title (3)',
		'id' => CMB_PREFIX . 'third_3_title',
		'type' => 'text',
	) );

	$cmb_thirds->add_field(array(
	    'name' => 'Color (3)',
	    'id' => CMB_PREFIX . 'third_3_color',
	    'type' => 'select',
	    'options' => array(
	        'bg-blue-dark' => __( 'Blue - Dark', 'cmb' ),
	        'bg-blue-medium-dark' => __( 'Blue - Medium Dark', 'cmb' ),
	        'bg-blue-medium' => __( 'Blue - Medium', 'cmb' ),
	        'bg-blue-light' => __( 'Blue - Light', 'cmb' ),
	        'bg-green' => __( 'Green', 'cmb' ),
	    ),
	    'default' => 'bg-blue-dark',
	));

	$cmb_thirds->add_field( array(
		'name' => 'Icon (3)',
		'id' => CMB_PREFIX . 'third_3_icon',
		'type' => 'file',
	) );

	$cmb_thirds->add_field( array(
		'name' => 'Content (3)',
		'id' => CMB_PREFIX . 'third_3_content',
		'type' => 'wysiwyg',
		'options' => array( 'textarea_rows' => 5, ),
	) );

	$cmb_thirds->add_field( array(
		'name' => 'Link (3)',
		'id' => CMB_PREFIX . 'third_3_link',
		'type' => 'text',
	) );


	// PAGE SETTINGS METABOX
	$cmb_page = new_cmb2_box( array(
		'id' => CMB_PREFIX . 'page_settings',
		'title' => __( 'Page Settings', 'cmb2' ),
		'object_types' => array( 'page', ), // Post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'show_on' => array( 'key' => 'template', 'value' => array( 'page' ) )
	) );

	$cmb_page->add_field( array(
		'name' => 'Subtitle',
		'id' => CMB_PREFIX . 'page_subtitle',
		'type' => 'text',
	) );

	$cmb_page->add_field(array(
	    'name' => 'Title Background Color',
	    'id' => CMB_PREFIX . 'page_title_color',
	    'type' => 'select',
	    'options' => array(
	        'bg-blue-dark' => __( 'Blue - Dark', 'cmb' ),
	        'bg-blue-medium-dark' => __( 'Blue - Medium Dark', 'cmb' ),
	        'bg-blue-medium' => __( 'Blue - Medium', 'cmb' ),
	        'bg-blue-light' => __( 'Blue - Light', 'cmb' ),
	        'bg-green' => __( 'Green', 'cmb' ),
	    ),
	    'default' => 'bg-blue-dark',
	));

	$cmb_page->add_field(array(
	    'name' => 'Content Background Color',
	    'id' => CMB_PREFIX . 'page_bg_color',
	    'type' => 'select',
	    'options' => array(
	        'bg-blue-dark' => __( 'Blue - Dark', 'cmb' ),
	        'bg-blue-medium-dark' => __( 'Blue - Medium Dark', 'cmb' ),
	        'bg-blue-medium' => __( 'Blue - Medium', 'cmb' ),
	        'bg-blue-light' => __( 'Blue - Light', 'cmb' ),
	        'bg-green' => __( 'Green', 'cmb' ),
	    ),
	    'default' => 'bg-blue-dark-medium',
	));

	$cmb_page->add_field( array(
		'name' => 'Background Icon',
		'id' => CMB_PREFIX . 'page_icon',
		'type' => 'file',
	) );


	// BUBBLES!
	$cmb_bubbles = new_cmb2_box( array(
		'id' => CMB_PREFIX . 'bubbles',
		'title' => __( 'Bubbles', 'cmb2' ),
		'object_types' => array( 'page', ),
		'show_on' => array( 'key' => 'template', 'value' => array( 'page-bubbles' ) )
	) );

	$cmb_bubbles->add_field( array(
		'name' => 'Subtitle',
		'id' => CMB_PREFIX . 'page_subtitle',
		'type' => 'text',
	) );

	$group_field_id = $cmb_bubbles->add_field( array(
		'id' => CMB_PREFIX . 'bubbles',
		'type' => 'group',
		'description' => __( 'Add photo bubbles into this page.', 'cmb2' ),
		'options' => array(
			'group_title' => __( 'Bubble {#}', 'cmb2' ),
			'add_button' => __( 'Add Bubble', 'cmb2' ),
			'remove_button' => __( 'Remove Bubble', 'cmb2' ),
			'sortable' => true,
		),
	) );

	$cmb_bubbles->add_group_field( $group_field_id, array(
		'name' => __( 'Photo', 'cmb2' ),
		'id' => 'image',
		'type' => 'file',
	) );

	$cmb_bubbles->add_group_field( $group_field_id, array(
		'name' => __( 'Title', 'cmb2' ),
		'id' => 'title',
		'type' => 'text',
	) );

	$cmb_bubbles->add_group_field( $group_field_id, array(
		'name' => __( 'Content', 'cmb2' ),
		'id' => 'content',
		'type' => 'textarea_small',
	) );

	$cmb_bubbles->add_group_field( $group_field_id, array(
		'name' => __( 'Link', 'cmb2' ),
		'id' => 'link',
		'type' => 'text',
	) );


	// PROCESS
	$cmb_process = new_cmb2_box( array(
		'id' => CMB_PREFIX . 'process',
		'title' => __( 'Process', 'cmb2' ),
		'object_types' => array( 'page', ), // Post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'show_on' => array( 'key' => 'template', 'value' => array( 'page-process' ) )
	) );

	$cmb_process->add_field( array(
		'name' => 'Subtitle',
		'id' => CMB_PREFIX . 'page_subtitle',
		'type' => 'text',
	) );

	$cmb_process->add_field( array(
		'name' => 'Step 1 Icon',
		'id' => CMB_PREFIX . 'process_step_1_icon',
		'type' => 'file',
	) );

	$cmb_process->add_field( array(
		'name' => 'Step 1 Title',
		'id' => CMB_PREFIX . 'process_step_1_title',
		'type' => 'text',
	) );

	$cmb_process->add_field( array(
		'name' => 'Step 1 Content',
		'id' => CMB_PREFIX . 'process_step_1_content',
		'type' => 'textarea_small',
	) );

	$cmb_process->add_field(array(
	    'name' => 'Step 1 Color',
	    'id' => CMB_PREFIX . 'process_step_1_color',
	    'type' => 'select',
	    'options' => array(
	        'bg-blue-dark' => __( 'Blue - Dark', 'cmb' ),
	        'bg-blue-medium-dark' => __( 'Blue - Medium Dark', 'cmb' ),
	        'bg-blue-medium' => __( 'Blue - Medium', 'cmb' ),
	        'bg-blue-light' => __( 'Blue - Light', 'cmb' ),
	        'bg-green' => __( 'Green', 'cmb' ),
	        'bg-grey-light' => __( 'Grey', 'cmb' ),
	    ),
	    'default' => 'bg-blue-dark',
	));

	$cmb_process->add_field( array(
		'name' => 'Step 2 Icon',
		'id' => CMB_PREFIX . 'process_step_2_icon',
		'type' => 'file',
	) );

	$cmb_process->add_field( array(
		'name' => 'Step 2 Title',
		'id' => CMB_PREFIX . 'process_step_2_title',
		'type' => 'text',
	) );

	$cmb_process->add_field( array(
		'name' => 'Step 2 Content',
		'id' => CMB_PREFIX . 'process_step_2_content',
		'type' => 'textarea_small',
	) );

	$cmb_process->add_field(array(
	    'name' => 'Step 2 Color',
	    'id' => CMB_PREFIX . 'process_step_2_color',
	    'type' => 'select',
	    'options' => array(
	        'bg-blue-dark' => __( 'Blue - Dark', 'cmb' ),
	        'bg-blue-medium-dark' => __( 'Blue - Medium Dark', 'cmb' ),
	        'bg-blue-medium' => __( 'Blue - Medium', 'cmb' ),
	        'bg-blue-light' => __( 'Blue - Light', 'cmb' ),
	        'bg-green' => __( 'Green', 'cmb' ),
	        'bg-grey-light' => __( 'Grey', 'cmb' ),
	    ),
	    'default' => 'bg-blue-dark',
	));

	$cmb_process->add_field( array(
		'name' => 'Step 3 Icon',
		'id' => CMB_PREFIX . 'process_step_3_icon',
		'type' => 'file',
	) );

	$cmb_process->add_field( array(
		'name' => 'Step 3 Title',
		'id' => CMB_PREFIX . 'process_step_3_title',
		'type' => 'text',
	) );

	$cmb_process->add_field( array(
		'name' => 'Step 3 Content',
		'id' => CMB_PREFIX . 'process_step_3_content',
		'type' => 'textarea_small',
	) );

	$cmb_process->add_field(array(
	    'name' => 'Step 3 Color',
	    'id' => CMB_PREFIX . 'process_step_3_color',
	    'type' => 'select',
	    'options' => array(
	        'bg-blue-dark' => __( 'Blue - Dark', 'cmb' ),
	        'bg-blue-medium-dark' => __( 'Blue - Medium Dark', 'cmb' ),
	        'bg-blue-medium' => __( 'Blue - Medium', 'cmb' ),
	        'bg-blue-light' => __( 'Blue - Light', 'cmb' ),
	        'bg-green' => __( 'Green', 'cmb' ),
	        'bg-grey-light' => __( 'Grey', 'cmb' ),
	    ),
	    'default' => 'bg-blue-dark',
	));

	$cmb_process->add_field( array(
		'name' => 'Step 4 Icon',
		'id' => CMB_PREFIX . 'process_step_4_icon',
		'type' => 'file',
	) );

	$cmb_process->add_field( array(
		'name' => 'Step 4 Title',
		'id' => CMB_PREFIX . 'process_step_4_title',
		'type' => 'text',
	) );

	$cmb_process->add_field( array(
		'name' => 'Step 4 Content',
		'id' => CMB_PREFIX . 'process_step_4_content',
		'type' => 'textarea_small',
	) );

	$cmb_process->add_field(array(
	    'name' => 'Step 4 Color',
	    'id' => CMB_PREFIX . 'process_step_4_color',
	    'type' => 'select',
	    'options' => array(
	        'bg-blue-dark' => __( 'Blue - Dark', 'cmb' ),
	        'bg-blue-medium-dark' => __( 'Blue - Medium Dark', 'cmb' ),
	        'bg-blue-medium' => __( 'Blue - Medium', 'cmb' ),
	        'bg-blue-light' => __( 'Blue - Light', 'cmb' ),
	        'bg-green' => __( 'Green', 'cmb' ),
	        'bg-grey-light' => __( 'Grey', 'cmb' ),
	    ),
	    'default' => 'bg-blue-dark',
	));

	$cmb_process->add_field( array(
		'name' => 'Step 5 Icon',
		'id' => CMB_PREFIX . 'process_step_5_icon',
		'type' => 'file',
	) );

	$cmb_process->add_field( array(
		'name' => 'Step 5 Title',
		'id' => CMB_PREFIX . 'process_step_5_title',
		'type' => 'text',
	) );

	$cmb_process->add_field( array(
		'name' => 'Step 5 Content',
		'id' => CMB_PREFIX . 'process_step_5_content',
		'type' => 'textarea_small',
	) );

	$cmb_process->add_field(array(
	    'name' => 'Step 5 Color',
	    'id' => CMB_PREFIX . 'process_step_5_color',
	    'type' => 'select',
	    'options' => array(
	        'bg-blue-dark' => __( 'Blue - Dark', 'cmb' ),
	        'bg-blue-medium-dark' => __( 'Blue - Medium Dark', 'cmb' ),
	        'bg-blue-medium' => __( 'Blue - Medium', 'cmb' ),
	        'bg-blue-light' => __( 'Blue - Light', 'cmb' ),
	        'bg-green' => __( 'Green', 'cmb' ),
	        'bg-grey-light' => __( 'Grey', 'cmb' ),
	    ),
	    'default' => 'bg-blue-dark',
	));

	$cmb_process->add_field( array(
		'name' => 'Step 6 Icon',
		'id' => CMB_PREFIX . 'process_step_6_icon',
		'type' => 'file',
	) );

	$cmb_process->add_field( array(
		'name' => 'Step 6 Title',
		'id' => CMB_PREFIX . 'process_step_6_title',
		'type' => 'text',
	) );

	$cmb_process->add_field( array(
		'name' => 'Step 6 Content',
		'id' => CMB_PREFIX . 'process_step_6_content',
		'type' => 'textarea_small',
	) );

	$cmb_process->add_field(array(
	    'name' => 'Step 6 Color',
	    'id' => CMB_PREFIX . 'process_step_6_color',
	    'type' => 'select',
	    'options' => array(
	        'bg-blue-dark' => __( 'Blue - Dark', 'cmb' ),
	        'bg-blue-medium-dark' => __( 'Blue - Medium Dark', 'cmb' ),
	        'bg-blue-medium' => __( 'Blue - Medium', 'cmb' ),
	        'bg-blue-light' => __( 'Blue - Light', 'cmb' ),
	        'bg-green' => __( 'Green', 'cmb' ),
	        'bg-grey-light' => __( 'Grey', 'cmb' ),
	    ),
	    'default' => 'bg-blue-dark',
	));

}



function get_cmb_value( $field ) {
    return get_post_meta( get_the_ID(), CMB_PREFIX . $field, 1 );
}



function show_cmb_value( $field ) {
    print get_cmb_value( $field );
}



function has_cmb_value( $field ) {
	return ( !empty( get_cmb_value( $field ) ) ? true : false );
}


?>
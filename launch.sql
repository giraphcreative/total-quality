

SET @wp_url_old = 'http://totalquality.com', @wp_url_new = 'http://totalqualityconsulting.com';

UPDATE tq_options SET option_value = replace( option_value, @wp_url_old, @wp_url_new ) 
	WHERE option_value LIKE CONCAT( '%', @wp_url_old, '%' );

UPDATE tq_posts SET guid = replace( guid, @wp_url_old, @wp_url_new );

UPDATE tq_posts SET post_content = replace( post_content, @wp_url_old, @wp_url_new );

UPDATE tq_postmeta SET meta_value = replace( meta_value, @wp_url_old, '' ) WHERE `meta_key` IN( '_p_showcase_photo', '_p_showcase_button_icon', '_p_third_1_icon', '_p_third_2_icon', '_p_third_3_icon', '_p_page_icon', '_p_process_step_1_icon', '_p_process_step_2_icon', '_p_process_step_3_icon', '_p_process_step_4_icon', '_p_process_step_5_icon' );


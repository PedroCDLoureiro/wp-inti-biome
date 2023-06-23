<?php

	//page Contact
	if(get_page_by_title('Contact') == NULL) {
		 wp_insert_post( array(
		    'post_title' => 'Contact',
		    'post_type'     => 'page',
		    'post_name'  => 'contact',
		    'comment_status' => 'closed',
		    'ping_status' => 'closed',
		    'post_status' => 'publish',
		    'post_author' => 1,
		    'menu_order' => 0
		));
	}
?>
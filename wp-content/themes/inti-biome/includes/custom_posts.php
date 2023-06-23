<?php
	
	//////////////////////////////////////////////////
	############## parceiros
	//////////////////////////////////////////////////

	add_action( 'init', 'parceiros' );
	function parceiros() {
		$labels = array(
			'name' 			=> __( 'LP Parceiros' ),
			'singular_name' => __( 'LP Parceiros' ),		
		);

		$post = array(
			'labels' 			=> $labels,
			'supports'	 		=> array('title'),
			'capability_type'	=> 'post',
			'public' 			=> true,
			'has_archive' 		=> false,		
		);

		register_post_type( 'parceiros', $post);
	}
?>
<?php
	
	//////////////////////////////////////////////////
	############## slider
	//////////////////////////////////////////////////

	add_action( 'init', 'slider' );
	function slider() {
		$labels = array(
			'name' 			=> __( 'Slider' ),
			'singular_name' => __( 'Slider' ),		
		);

		$post = array(
			'labels' 			=> $labels,
			'supports'	 		=> array('title','thumbnail'),
			'capability_type'	=> 'post',
			'public' 			=> true,
			'has_archive' 		=> false,		
		);

		register_post_type( 'slider', $post);
	}
	//////////////////////////////////////////////////
	############## sobre
	//////////////////////////////////////////////////

	add_action( 'init', 'sobre' );
	function sobre() {
		$labels = array(
			'name' 			=> __( 'Sobre nós' ),
			'singular_name' => __( 'Sobre nós' ),		
		);

		$post = array(
			'labels' 			=> $labels,
			'supports'	 		=> array('title', 'editor','thumbnail'),
			'capability_type'	=> 'post',
			'public' 			=> true,
			'has_archive' 		=> false,		
		);

		register_post_type( 'sobre', $post);
	}

	//////////////////////////////////////////////////
	############## post_blog
	//////////////////////////////////////////////////

	add_action( 'init', 'post_blog' );
	function post_blog() {
		$labels = array(
			'name' 			=> __( 'Blog' ),
			'singular_name' => __( 'Blog' ),		
		);

		$post = array(
			'labels' 			=> $labels,
			'taxonomies'		=> array('categoria'),
			'supports'	 		=> array('title', 'editor','thumbnail'),
			'capability_type'	=> 'post',
			'public' 			=> true,
			'has_archive' 		=> false,		
		);

		register_post_type( 'post-blog', $post);
	}
?>
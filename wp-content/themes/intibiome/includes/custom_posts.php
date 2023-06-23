<?php
	
	//////////////////////////////////////////////////
	############## banner
	//////////////////////////////////////////////////

	add_action( 'init', 'banner' );
	function banner() {
		$labels = array(
			'name' 			=> __( 'Banner' ),
			'singular_name' => __( 'Banner' ),		
		);

		$post = array(
			'labels' 			=> $labels,
			'supports'	 		=> array('title', 'thumbnail'),
			'capability_type'	=> 'post',
			'public' 			=> true,
			'has_archive' 		=> false,		
		);

		register_post_type( 'banner', $post);
	}
	
	//////////////////////////////////////////////////
	############## about-us
	//////////////////////////////////////////////////

	add_action( 'init', 'aboutus' );
	function aboutus() {
		$labels = array(
			'name' 			=> __( 'About us' ),
			'singular_name' => __( 'About us' ),		
		);

		$post = array(
			'labels' 			=> $labels,
			'supports'	 		=> array('title'),
			'capability_type'	=> 'post',
			'public' 			=> true,
			'has_archive' 		=> false,		
		);

		register_post_type( 'aboutus', $post);
	}
	
	//////////////////////////////////////////////////
	############## products
	//////////////////////////////////////////////////

	add_action( 'init', 'products' );
	function products() {
		$labels = array(
			'name' 			=> __( 'Products' ),
			'singular_name' => __( 'Products' ),		
		);

		$post = array(
			'labels' 			=> $labels,
			'supports'	 		=> array('title', 'editor','thumbnail'),
			'capability_type'	=> 'post',
			'public' 			=> true,
			'has_archive' 		=> false,		
		);

		register_post_type( 'products', $post);
	}
	
	//////////////////////////////////////////////////
	############## intimate
	//////////////////////////////////////////////////

	add_action( 'init', 'intimate' );
	function intimate() {
		$labels = array(
			'name' 			=> __( 'Banner Intimate' ),
			'singular_name' => __( 'Banner Intimate' ),		
		);

		$post = array(
			'labels' 			=> $labels,
			'supports'	 		=> array('title', 'thumbnail'),
			'capability_type'	=> 'post',
			'public' 			=> true,
			'has_archive' 		=> false,		
		);

		register_post_type( 'intimate', $post);
	}

	//////////////////////////////////////////////////
	############## discoveries
	//////////////////////////////////////////////////

	add_action( 'init', 'discoveries' );
	function discoveries() {
		$labels = array(
			'name' 			=> __( 'Discoveries' ),
			'singular_name' => __( 'Discoveries' ),		
		);

		$post = array(
			'labels' 			=> $labels,
			'supports'	 		=> array('title', 'thumbnail', 'editor'),
			'capability_type'	=> 'post',
			'public' 			=> true,
			'has_archive' 		=> false,		
		);

		register_post_type( 'discoveries', $post);
	}

?>
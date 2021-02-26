<section id="banner">	
	<article>
		<?php  
			$args = array(
				'post_type'				 => 'slider',
				'posts_per_page'         => 4,
			);
		
			$my_query = new WP_Query( $args );
		
			while($my_query->have_posts()) : $my_query->the_post(); 
		?>
			<div class="item">
				<figure style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></figure>
			</div>
		<?php endwhile; ?>
	</article>
</section>
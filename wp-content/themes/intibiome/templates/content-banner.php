<section id="banner">	
	<article>
		<?php  
			$args = array(
				'post_type'				 => 'banner',
				'posts_per_page'         => 1,
			);
		
			$my_query = new WP_Query( $args );
		
			while($my_query->have_posts()) : $my_query->the_post(); 
		?>
			<div class="item">
				<figure>
					<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>" class="img-responsive">
				</figure>
			</div>
			<div class="item-mobile">
				<figure>
					<img src="<?php the_field('mobile_image'); ?>" alt="<?php the_title();?>" class="img-responsive">
				</figure>
			</div>
		<?php endwhile; ?>
	</article>
</section>
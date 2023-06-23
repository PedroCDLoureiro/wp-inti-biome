<?php global $info; ?>
<section id="about-us">
	<article>
		<div class="container">
			<?php  
				$args = array(
					'post_type'				 => 'aboutus',
					'posts_per_page'         => 1,
				);
			
				$my_query = new WP_Query( $args );
				
				while($my_query->have_posts()) : $my_query->the_post(); 
				$first_text = get_field('first_text');
				$second_text = get_field('second_text');
				$image = get_field('image');
			?>
			<div class="row">
				<div class="col-md-6 offset-md-3 col-12 titulo">
					<h2>we’re here to help</h2>
				</div>
				<div class="col-md-6 offset-md-3 col-12 text">
					<?php echo $first_text; ?>
				</div>
				<div class="col-12 imagem">
					<figure>
						<img src="<?php echo $image; ?>" class="img-responsive">
					</figure>
				</div>
				<div class="col-md-6 offset-md-3 col-12 titulo">
					<h2>whatever your age. whatever your lifestyle. whatever your interests.</h2>
				</div>
				<div class="col-md-6 offset-md-3 col-12 text">
					<?php echo $second_text; ?>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</article>
</section>
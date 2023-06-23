<section id="products">	
	<article>
		<div class="texto">
			<h2>our products</h2>
		</div>
		<div class="container slider-products">
			<?php  
				$args = array(
					'post_type'				 => 'products',
					'posts_per_page'         => -1,
				);
			
				$my_query = new WP_Query( $args );
			
				while($my_query->have_posts()) : $my_query->the_post();
				$nome_produto = get_the_title();
				$descricao = get_the_content();
				$thumb_produto = get_the_post_thumbnail_url();
				$url_produto = get_permalink();
			?>
			<div class="col-md-4 col-12 item">
				<a href="<?php echo $url_produto;?>" target="_blank">
					<figure>
						<img src="<?php echo $thumb_produto; ?>" alt="<?php echo $nome_produto; ?>">
					</figure>
					<div class="text">
						<?php echo $descricao; ?>
					</div>
					<div class="nome">
						<?php echo $nome_produto; ?>
					</div>
				</a>
			</div>
			<?php endwhile; ?>
		</div>
	</article>
</section>
<section id="blog">	
	<article>
		<div class="container">
			<h2 class="text-center title">Blog</h2>
		</div>
		<div class="container conteudo">
			<div class="row blog-wrapper">
				<?php  
					$args = array(
						'post_type'				 => 'post-blog',
						'posts_per_page'         => 1,
					);
				
					$my_query = new WP_Query( $args );
				
					while($my_query->have_posts()) : $my_query->the_post();
					$term = get_the_terms($post, 'categoria'); 
				?>
					<div class="col-md-6 col-sm-12 col-12 item item-1">
						<a href="<?php the_permalink( ); ?>">
							<div class="texto" style="background-image: linear-gradient(<?php echo get_css_config()['--overlaycolor']; ?>, <?php echo get_css_config()['--overlaycolor']; ?>), url('<?php the_post_thumbnail_url( ); ?>');">
								<h4><?php echo $term[0]->name; ?></h4>
								<p><?php echo get_the_date( ); ?></p>
								<h2><?php the_title( ); ?></h2>
								<p><?php echo conteudo(80); ?></p>
							</div>
						</a>
					</div>
				<?php endwhile; ?>
				<?php  
					$args = array(
						'post_type'				 => 'post-blog',
						'posts_per_page'         => 2,
						'offset'                 => 1,
					);
				
					$my_query = new WP_Query( $args );
				
					while($my_query->have_posts()) : $my_query->the_post(); 
					$term = get_the_terms($post, 'categoria');
				?>
					<div class="col-md-3 col-sm-6 col-12 item item-2">
						<a href="<?php the_permalink( ); ?>">
							<div class="texto">
								<h4><?php echo $term[0]->name;?></h4>
								<div class="titulo">
									<h3><?php the_title( ); ?></h3>
									<p class="data"><?php echo get_the_date( ); ?></p>
								</div>
								<p><?php echo conteudo(80); ?></p>
							</div>
						</a>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
		<div class="container text-center">
			<a class="primary-button" href="<?php echo WP_URL ?>/blog">Veja mais</a>
		</div>
	</article>
</section>
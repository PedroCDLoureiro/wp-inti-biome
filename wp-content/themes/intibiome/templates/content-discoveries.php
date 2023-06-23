<section id="discoveries">	
	<article>
        <div class="container">
            <div class="texto">
                <h2>keep up to date with our discoveries</h2>
            </div>
            <div class="slider-discoveries">
                <?php  
                    $args = array(
                        'post_type'				 => 'discoveries',
                        'posts_per_page'         => -1,
                    );
                
                    $my_query = new WP_Query( $args );
                
                    while($my_query->have_posts()) : $my_query->the_post();
                    $descricao = get_the_content();
                    $thumb_post = get_the_post_thumbnail_url();
                    $url_post = get_permalink();
                ?>
                <div class="col-md-4 col-12 item">
                    <a href="<?php echo $url_post;?>" target="_blank">
                        <figure>
                            <img src="<?php echo $thumb_post; ?>" alt="<?php echo $nome_post; ?>">
                        </figure>
                        <div class="text">
                            <?php echo $descricao; ?>
                        </div>
                    </a>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="col-md-4 offset-md-4 col-12 botao">
                <a href="#" class="primary-button">see more</a>
            </div>
        </div>
	</article>
</section>
<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
	<meta charset="utf-8">
	<?php the_css_config(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo WP_TEMPLATE ?>/style.css">
	<link rel="shortcut icon" type="image/png" href="<?php echo WP_TEMPLATE ?>/image/favicon.png">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="<?php echo get_css_config()['--primarycolor'] ?>">
	<meta name="msapplication-navbutton-color" content="<?php echo get_css_config()['--primarycolor'] ?>">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="<?php echo get_css_config()['--primarycolor'] ?>">
	<title>intibiome</title>
</head>
<body>
<div class="body-wrapper">
<?php global $info; ?>
<script>var info = <?php echo json_encode($info); ?>;</script>
<?php if (is_home()): ?>
	<h1 style="display: none !important;">
		<?php echo WP_NAME; ?>
	</h1>
<?php endif ?>
<header>
	<div class="container">
		<div class="row row-topo">
			<div class="col-6 offset-3">
				<div class="logo">
					<a href="<?php echo WP_URL ?>/">
						<img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/logo.png">
					</a>
				</div>
			</div>
			<div class="col-3 pesquisa">
				<i class="fal fa-search"></i>
			</div>
		</div>
	</div>
	<div class="div-menu">
		<div class="container">
			<nav id="menu-desktop">
				<ul>
					<li class="menu-down">
						<a href="#about">
							about us <i class="fal fa-angle-down"></i>
						</a>
						<div class="submenu">
							<div class="container">
								<ul>
									<li>
										<a href="#">brand philosophy</a>
									</li>
									<li>
										<a href="#">product techlonogy</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="menu-down">
						<a href="#">
							our products
							<i class="fal fa-angle-down"></i>
						</a>
						<div class="submenu">
							<div class="container">
								<ul>
									<li>
										<a href="#">all products</a>
									</li>
									<?php  
										$args = array(
											'post_type'				 => 'products',
											'posts_per_page'         => -1,
										);
									
										$my_query = new WP_Query( $args );
										
										while($my_query->have_posts()) : $my_query->the_post(); 
										$titulo = get_the_title();
										$url_post = get_post_permalink();
									?>
										<li>
											<a href="<?php echo $url_post;?>">
												<?php echo 'intibiome ' . $titulo; ?>
											</a>
										</li>
									<?php endwhile; ?>
								</ul>
							</div>
						</div>
					</li>
					<li class="menu-down">
						<a href="#">
							intimate health <i class="fal fa-angle-down"></i>
						</a>
						<div class="submenu">
							<div class="container">
								<ul>
									<li>
										<a href="#">article 1</a>
									</li>
									<li>
										<a href="#">article 2</a>
									</li>
									<li>
										<a href="#">article 3</a>
									</li>
									<li>
										<a href="#">faq</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<a href="<?php echo WP_URL ?>/contact">
							contact us
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<?php get_template_part('templates/content-menu-lateral'); ?>
</header>
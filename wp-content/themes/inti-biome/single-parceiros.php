<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
	<meta charset="utf-8">
	<?php the_css_config(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo WP_TEMPLATE ?>/style.css">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="<?php echo get_css_config()['--primarycolor'] ?>">
	<meta name="msapplication-navbutton-color" content="<?php echo get_css_config()['--primarycolor'] ?>">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="<?php echo get_css_config()['--primarycolor'] ?>">
	<title><?php echo wp_title('', true, 'right'); ?></title>
</head>
<body>
	<div class="body-wrapper">
		<?php 
			$cor_primaria = get_field('cor_principal');
			$cor_secundaria = get_field('cor_secundaria');
		?>
		<h1 style="display: none !important;">
			<?php echo wp_title('', true, 'right'); ?>
		</h1>
		<header style="background-color: <?php echo $cor_primaria;?>">
			<div class="header-wrapper" style="background-color: <?php echo $cor_primaria;?>">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-5 col-12 logo">
							<div class="row">
								<div class="col-6 logo-parceiro">
									<a href="<?php echo get_post_permalink(); ?>">
										<figure>
											<img class="img-responsive" src="<?php the_field('logo_parceiro');?>" style="width: 115px;">
										</figure>
									</a>
								</div>
								<div class="col-6 logo-conect">
									<a href="https://www.conectcar.com" target='_blank'>
										<figure>
											<img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/logo-conect.png" alt="Logo ConectCar" title="Logo ConectCar">
										</figure>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-8 col-md-7 col-6 div-menu">
							<nav id="menu-desktop">
								<ul>
									<li>
										<a href="<?php echo get_post_permalink(); ?>">
											Início
										</a>
									</li>
									<li>
										<a class="scroll-to" href="#vantagens">
											Vantagens
										</a>
									</li>
									<li>
										<a class="scroll-to" href="#planos">
											Planos
										</a>
									</li>
									<li>
										<a class="scroll-to" href="#beneficios">
											Benefícios
										</a>
									</li>
									<li>
										<a class="scroll-to" href="#perguntasfrequentes">
											Perguntas Frequentes
										</a>
									</li>
									<li>
										<a href="<?php the_field('link_minha_conta');?>">
											Minha Conta
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 conteudo">
				<div class="row">
					<div class="col-6 offset-1 titulos">
						<div class="titulo">
							<h2>
								<?php the_field('texto_principal'); ?>
							</h2>
						</div>
						<div class="texto">
							<h3>
								<?php the_field('texto_secundario'); ?>
							</h3>
						</div>
						<?php $botoes = get_field('botoes_banner');?>
						<?php if(get_field('botoes_banner')):?>
							<div class="row row-botoes">
								<?php foreach ($botoes as $botao) { ?>
									<div class="col-md-6 col-12 botao">
										<a href="<?php echo $botao["link_botao"]; ?>" class="primary-button">
											<figure>
												<img class="img-responsive" src="<?php echo $botao["icone_botao"];?>" alt="<?php echo $botao["texto_botao"]; ?>" title="<?php echo $botao["texto_botao"]; ?>">
											</figure>
											<?php echo $botao["texto_botao"]; ?>
										</a>
									</div>
								<?php }?>
							</div>
						<?php endif ?>
					</div>
					<div class="col-5 imagem">
						<figure>
							<img class="img-responsive" src="<?php the_field('imagem_principal');?>" alt="">
						</figure>
					</div>
				</div>
			</div>
			<div id="btn-mobile">
				<div class="btn-mobile-box">
					<div class="btn-mobile-inner"></div>
				</div>
			</div>
			<div id="menu-lateral">
				<div class="bg"></div>
				<div class="menu-lateral-inner" style="background-color: <?php echo $cor_secundaria;?>">
					<div class="row row-logos">
						<div class="col-6 logo-parceiro">
							<a href="<?php echo get_post_permalink(); ?>">
								<figure>
									<img class="img-responsive" src="<?php the_field('logo_parceiro');?>" style="width: 115px;">
								</figure>
							</a>
						</div>
						<div class="col-6 logo-conect">
							<a href="https://www.conectcar.com" target='_blank'>
								<figure>
									<img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/logo-conect.png" alt="Logo ConectCar" title="Logo ConectCar">
								</figure>
							</a>
						</div>
					</div>
					<nav id="menu-mobile">
						<ul style="margin: 0 !important;">
							<li>
								<a href="<?php echo get_post_permalink(); ?>">
									Início
								</a>
							</li>
							<li>
								<a class="scroll-to" href="#vantagens">
									Vantagens
								</a>
							</li>
							<li>
								<a class="scroll-to" href="#planos">
									Planos
								</a>
							</li>
							<li>
								<a class="scroll-to" href="#beneficios">
									Benefícios
								</a>
							</li>
							<li>
								<a class="scroll-to" href="#perguntasfrequentes">
									Perguntas Frequentes
								</a>
							</li>
							<li>
								<a href="<?php the_field('link_minha_conta');?>">
									<b>Minha Conta</b>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<?php while (have_posts()) : the_post(); ?>
			<?php if(get_field('vantagens')):?>
				<section id="vantagens">
					<article class="single">
						<div class="container">
							<?php $vantagens = get_field('vantagens');?>
							<?php if(get_field('vantagens')):?>
								<div class="titulo">
									<h2>Tudo que a tag <span>ConectCar oferece a você.</span></h2>
								</div>
								<div class="row row-vantagens">
									<?php foreach ($vantagens as $vantagem) { ?>
										<div class="col-md-3 col-sm-6 col-12 vantagem">
											<div class="imagem-vantagem">
												<figure>
													<img class="img-responsive" src="<?php echo $vantagem["icone_vantagem"];?>" alt="<?php echo $vantagem["titulo_vantagem"]; ?>" title="<?php echo $vantagem["titulo_vantagem"]; ?>">
												</figure>
											</div>
											<div class="titulo-vantagem">
												<h3 style="color: <?php echo $cor_secundaria;?>"><?php echo $vantagem["titulo_vantagem"]; ?></h3>
											</div>
											<div class="descricao-vantagem">
												<h4>
													<?php echo $vantagem["texto_vantagem"] ?>
												</h4>
											</div>
										</div>
									<?php }?>
								</div>
							<?php endif ?>
							<?php if(get_field('link_botao_quero_minha_tag')):?>
								<div class="div-botao">
									<a href="<?php the_field('link_botao_quero_minha_tag'); ?>" class="secondary-button" style="background-color: <?php echo $cor_secundaria;?>; border: 1px solid <?php echo $cor_secundaria;?>;">
										QUERO MINHA TAG
									</a>
								</div>
							<?php endif ?>
						</div>
					</article>
				</section>
			<?php endif ?>
			<section id="planos" style="background-color: <?php echo $cor_secundaria;?>">
				<article class="single">
					<div class="container">
						<div class="titulo">
							<h2>Escolha <span>seu plano</span></h2>
						</div>
						<div class="titulo subtitulo">
							<h3><?php the_field('texto_escolha_seu_plano');?></h3>
						</div>
						<?php if(get_field('botoes_banner')):?>
							<div class="row row-botoes">
								<?php foreach ($botoes as $botao) { ?>
									<div class="col-lg-3 col-md-6 col-12 botao">
										<a href="<?php echo $botao["link_botao"]; ?>" class="primary-button">
											<figure>
												<img class="img-responsive" src="<?php echo $botao["icone_botao"];?>"  alt="<?php echo $botao["texto_botao"]; ?>" alt="<?php echo $botao["texto_botao"]; ?>">
											</figure>
											<?php echo $botao["texto_botao"] ?>
										</a>
									</div>
								<?php }?>
							</div>
						<?php endif ?>
						<?php if(get_field('tipo_de_pagina')=='planos'):?>
							<?php $planos = get_field('planos_escolha_seu_plano');?>
							<?php if(get_field('planos_escolha_seu_plano')):?>
								<div class="row row-planos">
									<?php foreach ($planos as $plano) { ?>
										<div class="col-lg-3 col-md-6 col-12 plano">
											<?php if($plano["selo_gratis"]==true):?>
												<div class="div-selo">
													<figure>
														<img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/selo_gratis.png" alt="Selo 12 meses grátis" title="Selo 12 meses grátis">
													</figure>
												</div>
											<?php endif ?>
											<div class="conteudo">
												<div class="titulo-plano">
													<h3><?php echo $plano["titulo_plano"] ?></h3>
												</div>
												<div class="valores-plano">
													<p class="valor-plano"><?php echo $plano["valor_plano"] ?></p>
													<p class="mensalidade"><?php echo $plano["observacao_mensalidade"] ?></p>
												</div>
												<div class="descricao-plano">
													<?php echo $plano["texto_plano"] ?>
												</div>
												<div class="botao-plano">
													<a href="<?php echo $plano["link_botao_plano"]; ?>" class="secondary-button" style="background-color: <?php echo $cor_secundaria;?>; border: 1px solid <?php echo $cor_secundaria;?>;">
														<?php echo $plano["texto_botao_plano"];?>
													</a>
												</div>
											</div>
										</div>
									<?php }?>
								</div>
							<?php endif ?>
						<?php else :?>
							<div class="div-perfil">
								<div class="titulo">
									<h3>Qual o <span>seu perfil?</span></h3>
								</div>
								<?php $perfis = get_fi/eld('perfis_escolha_seu_plano');?>
								<?php if(get_field('perfis_escolha_seu_plano')):?>
									<div class="row row-perfis">
										<?php foreach ($perfis as $perfil) { ?>
											<div class="col-lg-6 col-12 perfil">
												<div class="conteudo">
													<div class="titulo-perfil">
														<h3><?php echo $perfil["titulo_perfil"] ?></h3>
													</div>
													<div class="subtitulo-perfil">
														<?php echo $perfil["subtitulo_perfil"] ?>
													</div>
													<div class="descricao-perfil">
														<h4>
															<?php echo $perfil["texto_perfil"] ?>
														</h4>
													</div>
													<?php $botoes_perfil = $perfil["botoes_perfil"];?>
													<div class="div-botoes">
														<div class="row">
															<?php foreach ($botoes_perfil as $botao) { ?>
																<div class="botao-perfil">
																	<a href="<?php echo $botao["link_botao_perfil"]; ?>" class="secondary-button" style="background-color: <?php echo $cor_secundaria;?>; border: 1px solid <?php echo $cor_secundaria;?>;">
																		<?php echo $botao["texto_botao_perfil"];?>
																	</a>
																</div>
															<?php }?>
														</div>
													</div>
												</div>
											</div>
										<?php }?>
									</div>
								<?php endif ?>
							</div>
						<?php endif ?>
					</div>
				</article>
			</section>
			<section id="beneficios">
				<article class="single">
					<div class="container">
						<?php $beneficios = get_field('beneficios');?>
						<?php if(get_field('beneficios')):?>
							<div class="titulo">
								<h2><span>Benefícios</span> além da tag</h2>
							</div>
							<div class="row row-beneficios">
								<?php foreach ($beneficios as $beneficio) { ?>
									<div class="col-lg-3 col-md-6 col-12 beneficio">
										<div class="conteudo">
											<div class="imagem-beneficio">
												<figure>
													<img class="img-responsive" src="<?php echo $beneficio["icone_beneficio"];?>" alt="<?php echo $beneficio["texto_beneficio"] ?>" title="<?php echo $beneficio["texto_beneficio"] ?>">
												</figure>
											</div>
											<div class="descricao-beneficio">
												<h4>
													<?php echo $beneficio["texto_beneficio"] ?>
												</h4>
											</div>
										</div>
									</div>
								<?php }?>
							</div>
						<?php endif ?>
						<?php if(get_field('link_botao_quero_minha_tag')):?>
							<div class="div-botao">
								<a href="<?php the_field('link_botao_quero_minha_tag'); ?>" class="secondary-button" style="background-color: <?php echo $cor_secundaria;?>; border: 1px solid <?php echo $cor_secundaria;?>;">
									QUERO MINHA TAG
								</a>
							</div>
						<?php endif ?>
					</div>
				</article>
			</section>
			<section id="perguntasfrequentes">
				<article class="single">
					<div class="container">
						<?php 
							$perguntasfrequentes = get_field('perguntas_frequentes');
							$i = 1;
							?>
						<?php if(get_field('perguntas_frequentes')):?>
							<div class="titulo">
								<h2 style="color: <?php echo $cor_secundaria; ?>;"><span>Perguntas</span> frequentes</h2>
							</div>
							<div class="row row-perguntasfrequentes">
								<?php foreach ($perguntasfrequentes as $pergunta) { ?>
									<div class="col-md-8 col-sm-10 col-12 pergunta">
										<button class="accordion" data-pergunta="<?php echo $i;?>">
											<h3>
												<?php echo $pergunta['pergunta'];?>
											</h3>
										</button>
										<div class="panel resposta-<?php echo $i;?>">
											<p>
												<?php echo $pergunta['resposta'];?>
											</p>
										</div>
									</div>
									<?php $i++;?>
								<?php }?>
							</div>
						<?php endif ?>
					</div>
				</article>
			</section>
			<section id="duvidas">
				<article class="single">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-12 div-adesivos">
								<figure>
									<img class="img-responsive" src="<?php echo WP_TEMPLATE; ?>/image/adesivo-conect.png" alt="Adesivos ConectCar" title="Adesivos ConectCar">
								</figure>
							</div>
							<div class="col-md-6 col-12 div-duvidas">
								<h2>Dúvidas?</h2>
								<h3>A Central de Relacionamento da ConectCar pode te ajudar.</h3>
								<h3>Capitais e regiões metropolitanas | 4020 2227<br>
								Demais localidades  |  0800 030 2227</h3>
							</div>
						</div>
						<div class="col-md-6 offset-md-6 col-12">
							<div class="row row-botoes">
								<div class="col-lg-5 col-sm-6 col-12 botao">
									<a href="https://api.whatsapp.com/send?phone=55<?php the_field('whatsapp_conectcar'); ?>" class="primary-button" target="_blank">
										<figure>
											<img class="img-responsive" src="<?php echo WP_TEMPLATE;?>/image/icone_whatsapp.png"  alt="">
										</figure>
										WhatsApp
									</a>
								</div>
								<div class="col-lg-5 col-sm-6 col-12 botao">
									<a href="mailto:<?php the_field('e-mail_conectcar'); ?>" class="primary-button">
										<figure>
											<img class="img-responsive" src="<?php echo WP_TEMPLATE;?>/image/icone_email.png"  alt="">
										</figure>
										E-mail
									</a>
								</div>
							</div>
						</div>
					</div>
				</article>
			</section>
			<section id="facilidades">
				<article class="single">
					<div class="container">
						<div class="row">
						<div class="col-lg-6 col-12 logo">
							<div class="row row-logos">
								<div class="col-6 logo-parceiro">
									<figure>
										<img class="img-responsive" src="<?php the_field('logo_parceiro');?>" style="width: 115px;">
									</figure>
								</div>
								<div class="col-6 logo-conect">
									<a href="https://www.conectcar.com" target='_blank'>
										<figure>
											<img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/logo-conect.png" alt="Logo ConectCar" title="Logo ConectCar">
										</figure>
									</a>
								</div>
							</div>
						</div>
							<div class="col-lg-6 col-12 div-facilidades">
								<div class="texto">
									<h2><?php the_field('texto_facilidades'); ?></h2>
								</div>
								<?php if(get_field('botoes_banner')):?>
									<div class="row row-botoes">
										<?php foreach ($botoes as $botao) { ?>
											<div class="col-sm-6 col-12 botao">
												<a href="<?php echo $botao["link_botao"]; ?>" class="primary-button">
													<figure>
														<img class="img-responsive" src="<?php echo $botao["icone_botao"];?>"  alt="<?php echo $botao["texto_botao"]; ?>" alt="<?php echo $botao["texto_botao"]; ?>">
													</figure>
													<?php echo $botao["texto_botao"] ?>
												</a>
											</div>
										<?php }?>
									</div>
								<?php endif ?>
							</div>
						</div>
					</div>
				</article>
			</section>
		<?php endwhile; ?>
	</div>
	<footer style="margin: 0 !important;">
		<div class="container">
			<div class="row itens-footer">
				<div class="col-12 titulo">
					<h2><span>Baixe nosso app:</span> seu ConectCar no celular</h2>
				</div>
				<div class="col-12 logos-lojas">
					<a href="<?php the_field('link_google_play');?>" target='_blank'>
						<img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/selo-google-play.png" alt="Aplicativo Google Play" title="Aplicativo Google Play">
					</a>
					<a href="<?php the_field('link_app_store');?>" target='_blank'>
						<img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/selo-app-store.png" alt="Aplicativo App Store" title="Aplicativo App Store">
					</a>
				</div>
				<div class="col-12 texto">
					<h3>
						<?php the_field('texto_footer');?>
					</h3>
				</div>
			</div>
		</div>
	</footer>
	<div class="script">
		<script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/bower_components/jquery/dist/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo WP_TEMPLATE; ?>/script.min.js"></script>
	</div>
</body>
</html>
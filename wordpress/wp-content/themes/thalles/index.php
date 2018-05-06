
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">

	<title>Thalles Roberto ADV</title>
	<meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Luka Cvetinovic for Codrops" />

	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php bloginfo('template_url'); ?>/img/favicons/manifest.json">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/fonts/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/cardio.css">
</head>

<body>
	<div class="preloader">
		<img src="<?php bloginfo('template_url'); ?>/img/loader.gif" alt="Lendo...">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php bloginfo('template_url'); ?>/#"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Thalles Roberto"></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="<?php bloginfo('template_url'); ?>/#intro">Inicio</a></li>
					<li><a href="<?php bloginfo('template_url'); ?>/#services">Serviços</a></li>
					<li><a href="<?php bloginfo('template_url'); ?>/#team">Sobre</a></li>
					<li><a href="<?php bloginfo('template_url'); ?>/#pricing">Fale comigo</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<?php
		$args = array(
			'post_type'=>'configuracoes'
		);
		$query1 = new WP_Query( $args );
		
		while ( $query1->have_posts() ):
		$query1->the_post();
		
	?>
	<header id="intro" style="background: url('<?php the_field("imagem_do_banner"); ?>'); background-size: cover; background-attachment: fixed;">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">

							<h1 class="white typed"><?php  the_field( "texto_do_banner" ); ?></h1>
							<span class="typed-cursor">|</span>

						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<?php
		endwhile;
		wp_reset_postdata();
	?>
	<section>
	<?php
		$args = array(
			'post_type'=>'configuracoes'
		);
		$query1 = new WP_Query( $args );
		
		while ( $query1->have_posts() ):
		$query1->the_post();
		
	?>
	<div class="cut cut-top"></div>
	<div class="container">
		<div class="row intro-tables">
		<?php
			$img1 = get_field("plano_de_fundo_container1");
			$img2 = get_field("plano_de_fundo_container2");
		?>
			<div class="col-md-4" id='container1' style="background: url('<?php echo $img1['url']; ?>'); background-size: cover; opacity: 1.4px;">
				<div class="intro-table intro-table-first">
					<h5 class="white heading"><?php the_field("titulo_conteiner-01") ?></h5>
					<div class="owl-carousel owl-schedule bottom">
						<div class="item">
							<div class="schedule-row row">
								<div class="col-xs-12">
									<h5 class="regular white"><?php the_field("slide-1") ?></h5>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="schedule-row row">
								<div class="col-xs-12">
									<h5 class="regular white"><?php the_field("slide-2") ?></h5>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="schedule-row row">
								<div class="col-xs-12">
									<h5 class="regular white"><?php the_field("slide-3") ?></h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
			</div>			
			<div class="col-md-4" style="background: url('<?php echo $img2['url'] ?>'); background-size: cover;">
				<div class="intro-table intro-table-third" style="color: black;">
					<h5 class="white heading"><?php the_field("titulo_container-02") ?></h5>
					<div class="owl-testimonials bottom">
						<div class="item">
							<h4 class="white heading content"><?php the_field("slide-1-2") ?></h4>
							<h5 class="white heading light author">Thalles Roberto</h5>
						</div>
						<div class="item">
							<h4 class="white heading content"><?php the_field("slide-2-2") ?></h4>
							<h5 class="white heading light author">Thalles Roberto</h5>
						</div>
						<div class="item">
							<h4 class="white heading content"><?php the_field("slide-3-2") ?></h4>
							<h5 class="white heading light author">Thalles Roberto</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
$icone1 = get_field("icone-1");
$icone2 = get_field("icone-2");
$icone3 = get_field("icone-3");
?>

	<section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Serviços</h2>
				<h4 class="light muted">Algumas Áreas de atuação, para saber mais sobre os serviços entre em contato</h4>
			</div>
			<div class="row services">
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="<?php echo $icone1['url'] ?>" alt="" class="icon">
						</div>
						<h4 class="heading"><?php the_field("titulo-1") ?></h4>
						<p class="description"><?php the_field("descricao-1") ?></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="<?php echo $icone2['url'] ?>" alt="" class="icon">
						</div>
						<h4 class="heading"><?php the_field("titulo-2") ?></h4>
						<p class="description"><?php the_field("descricao-2") ?></p>
						
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="<?php echo $icone3['url'] ?>" alt="" class="icon">
						</div>
						<h4 class="heading"><?php the_field("titulo-3") ?></h4>
						<p class="description"><?php the_field("descricao-3") ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="cut cut-bottom"></div>
	</section>
	<?php
		$papel_parede_perfil = get_field("papel_de_parede_perfil");	
		$foto_perfil = get_field("foto_de_perfil");
	?>


	<section id="team" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">Quem sou</h2>
				<h4 class="light muted">Sou Thalles Facundo</h4>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="team text-center">
						<div class="cover" style="background:url('<?php echo $papel_parede_perfil['url'] ?>'); background-size:cover;">
							<div class="overlay text-center">
								<h3 class="white">Entre em Contato pelo facebook</h3>
								<h5 class="light light-white"></h5>
							</div>
						</div>
						<img src="<?php echo $foto_perfil['url'] ?>" alt="Thalles" class="avatar">
						<div class="title">
							<h4><?php the_field("nome-quemsou") ?></h4>
							<h5 class="muted regular"><?php the_field("legenda") ?></h5>
						</div>
						<button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Facebook</button>
					</div>
				</div>
				<?php
					$textoPortifolio = get_field("conteudo_do_portifolio");

					if($textoPortifolio != "")
					{
						$display = "block";
					}
					else{
						$display = "none";
					}
				?>
				<style>
							.portifolio{
								margin-right: 14px;
								margin-left: 14px;
								margin-bottom: 15px;
								text-align: justify;
								font-family: arial;
							}
							.titulo-portifolio{
								margin-top: 30px;
							}
						</style>
				<div class="col-md-8" style='display: <?=$display?>'>
					<div class="team text-center">
						
						<br>
						<div class="titulo-portifolio">
							<h4><?php the_field("titulo_do_portifolio") ?></h4>
						</div>
						
						<div class="portifolio">
						<?php the_field("conteudo_do_portifolio"); ?> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
		$planoFundoFaleComigo = get_field('plano_de_fundo_falecomigo');

	?>
	<section id="pricing" class="section"  style="	background: url('<?php echo $planoFundoFaleComigo['url']; ?>') no-repeat center center; background-size: cover; background-attachment: fixed;">
	<!-- background: #00a8ff url('../img/advogado.jpg') no-repeat center center; -->

		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top white">Fale comigo</h2>
				<h4 class="light white">Mande um Email</h4>
			</div>
			<div class="row no-margin">
				<div class="col-md-7 no-padding col-md-offset-5 pricings text-center">
					<div class="pricing">
						<div class="box-main active" data-img="<?php echo $planoFundoFaleComigo['url']; ?>">
							<h4 class="white"><?php the_field("nome_falecomigo") ?></h4>
							<h5 class="white regular light"><?php the_field("email") ?></h5>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Mande um email</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second active">
							<ul class="white-list text-left">
								<li>Telefone: <?php the_field("telefone") ?></li>
								<li>Celular: <?php the_field("celular") ?></li>
								<li>Endereço:</li>
								<li>- <?php the_field("endereco-1")?>, <?php the_field("numero");?> <br>
								<?php the_field("complemento")?>, <?php the_field("cidade/estado");?> </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
</div>
<section class="section section-padded blue-bg">
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="owl-twitter owl-carousel owl-theme" style="opacity: 1; display: block;">
				<div class="owl-wrapper-outer">
				<div class="owl-wrapper" style="width: 4320px; left: 0px; display: block; transform: translate3d(0px, 0px, 0px); transition: all 200ms ease;">
					<div class="owl-item" style="width: 720px;">
						<div class="item text-center">
							<i class="icon fa fa-facebook"></i>
							<h4 class="white light">Não esqueça de seguir no Facebook</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</section>

	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="<?php bloginfo('template_url'); ?>/#" class="close-link"><i class="icon_close_alt2"></i></a>
				<form action="" class="popup-form">
					<input type="text" class="form-control form-white" placeholder="Nome completo">
					<input type="text" class="form-control form-white" placeholder="Email">
					<div class="form-group">
						<label for="comment">Mensagem:</label>
						<textarea class="form-control form-white" rows="5" id="comment"></textarea>
					</div>
					<button type="submit" class="btn btn-submit">Enviar</button>
				</form>
			</div>
		</div>
	</div>
	<?php
		$planodefundofooter = get_field('plano_de_fundo_horario');
	?>
	<footer  style="background:url('<?php echo $planodefundofooter['url'] ?>'); background-repeat: no-repeat; background-size: cover;">
		<div class="container" >
			<div class="row">

				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Aberto Durante <span class="open-blink"></span></h3>
                    
					<div class="row opening-hours">
						<div class="col-sm-6 text-center-mobile">
							<h5 class="regular white">Seg - Sex</h5>
							<h3 class="regular white"><?php the_field('chegada/saida_seg _ate_ sex'); ?></h3>
						</div>
						<div class="col-sm-6 text-center-mobile">
							<h5 class="regular white">Sab - Dom</h5>
							<h3 class="regular white"><?php the_field('chegada/saida_sab_ate_dom'); ?></h3>
						</div>
					</div> 
					<?php
						endwhile;
						wp_reset_postdata();
					?>
				</div>
			</div>
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>&copy; Thalles Roberto <!-- <a href="<?php bloginfo('template_url'); ?>/http://www.phir.co/">PHIr</a> exclusively for <a href="<?php bloginfo('template_url'); ?>/http://tympanus.net/codrops/"> -->ADV</a></p>
				</div>
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><a href="<?php bloginfo('template_url'); ?>/http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
						<li><a href="<?php bloginfo('template_url'); ?>/https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="<?php bloginfo('template_url'); ?>/#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.1.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/typewriter.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.onepagenav.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
	<script>
		console.log("Esse site foi feito em wordpress pelo JOÃO PAULO/ fone: 85 988070162");

	</script>
	
</html>
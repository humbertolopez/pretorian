<!DOCTYPE html>
<html>
<head>
	<title>
		<?php
			if(is_home())
				{echo bloginfo('name'); echo "—"; echo bloginfo('description');}
			elseif(is_category())
				{echo wp_title(" — ",false,right); echo bloginfo('name'); echo " "; echo bloginfo('description');}
		?>
	</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no"/>
	<!-- encabezado wordpress -->
	<?php wp_head(); ?>
	<!-- fin encabezado wordpress -->	
	<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css' media="all">
	<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css" media="all">
</head>
<body>
	<header id="head">
		<div class="wrapper">
			<div id="logo">
				<a href="<?php bloginfo('url') ?>/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-pretorian.svg"></a>
			</div>
			<ul id="menu">
				<li>
					<a href="#">Servicios</a>
					<ul class="sub-menu">
						<li><a href="<?php bloginfo('url') ?>/category/consulting">Consultoría en seguridad</a></li>
						<li><a href="<?php bloginfo('url') ?>/category/servicios-seguridad-integral/">Guardias de seguridad</a></li>
						<li><a href="<?php bloginfo('url') ?>/category/tecnologia/">Tecnologías en seguridad</a></li>
					</ul>
				</li>
				<li><a href="<?php bloginfo('url') ?>/category/personal">Personal</a></li>
				<li><a href="<?php bloginfo('url') ?>/category/manuales">Manuales</a></li>
				<li><a href="<?php bloginfo('url') ?>/contacto">Contacto</a></li>
			</ul>
			<ul id="menu-sub-buttons">
				<li class="english-button"><strong>English</strong></li>
				<li class="menu-sub-buttons-skew"><strong>Cotiza</strong> 3848.8458 / 3848.8459</li>
			</ul>
		</div>
	</header>
	<!-- fin de header -->
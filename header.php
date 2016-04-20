<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css">
</head>
<body>
	<header id="head">		
		<div id="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo-pretorian.svg">
		</div>
		<ul id="menu">
			<li>Servicios</li>
			<li>Personal</li>
			<li>Manuales</li>
			<li>Contacto</li>
		</ul>
		<ul id="menu-sub-buttons">
			<li>English</li>
			<li class="menu-sub-buttons-skew">Cotiza 3848.8458 / 3848.8459</li>
		</ul>
	</header>
	<section id="portada">
		<img class="portada-img" src="<?php echo get_template_directory_uri(); ?>/img/home/index-portada.jpg">
		<ul id="servicios-portada">
			<?php
				$homeargs = new WP_Query(array(
					'category_name' => 'servicios-en-portada'
					));
				if($homeargs->have_posts()) : while($homeargs->have_posts()) : $homeargs->the_post();
			?>
				<li>
					<?php the_post_thumbnail(); ?>
					<p><?php the_title(); ?></p>
				</li>
			<?php
				endwhile; endif;
				wp_reset_query();
			?>
		</ul>
	</section>
	<section id="contacto-rapido" class="block">
		
	</section>
	<?php
		$homeargs = new WP_Query(array(
			'category_name' => 'general'
			));
		if($homeargs->have_posts()) : while($homeargs->have_posts()) : $homeargs->the_post();
	?>	
	<section id="content">
		<?php
			if(in_category('highlight')) {
				?>
					<h3 class="highlight"><?php the_title(); ?></h3>
				<?php
			} else {
				?>
					<h3><?php the_title(); ?></h3>
				<?php
			}			
		?>
	</section>
	<?php
		endwhile; endif;
		wp_reset_query();
	?>
	<section id="servicios-section" class="block">
		<h1>Nuestros servicios se ajustan a tus necesidades</h1>
		<ul class="block">
			<?php
				$homeargs = new WP_Query(array(
					'category_name' => 'servicios'
					));
				if($homeargs->have_posts()) : while($homeargs->have_posts()) : $homeargs->the_post();
			?>			
				<li>
					<div class="rotating-ring block">						
						<?php the_post_thumbnail('full'); ?>
					</div>
					<h4><?php the_title(); ?></h4>
					<p><?php the_content(); ?></p>
				</li>
			<?php
				endwhile; endif;
				wp_reset_query();
			?>
		</ul>
		<div id="cotizacion-button" class="block">
			<p>Solicita tu cotización</p>
		</div>
	</section>
	<!-- footer -->
	<footer class="block">
		<ul id="menu-footer">
			<li>Servicios</li>
			<li>Personal</li>
			<li>Manuales</li>
			<li>Contacto</li>
		</ul>
		<ul id="contacto-info">
			<li><strong>Llámanos</strong> 3848.8458 / 3848.8459</li>
			<li><strong>Escríbenos</strong> info@grupopretorian.com.mx</li>
			<li><strong>Visítanos</strong> Eulogio Parra No. 3149 Col. Monraz C.P. 44670, Garibaldi No. 1699 Col. Ladrón de Guevara, C.P.44600, Guadalajara, Jal., México</li>
			<li>Agradecemos al World Treat Center por facilitarnos sus instalaciones en la sesión fotográfica <strong>www.wtcgdl.com.mx</strong></li>
		</ul>
	</footer>
</body>
</html>
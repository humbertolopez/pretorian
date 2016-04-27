<?php get_header(); ?>
<!-- inicia index -->
<!-- portada -->
<section id="portada" class="block">
	<img class="portada-img" src="<?php echo get_template_directory_uri(); ?>/img/home/index-portada.jpg">
	<div class="llamada">
		<h2>Brindando seguridad y confianza</h2>
		<h1>desde 1998</h1>
	</div>
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
<!-- fin portada -->
<!-- seccion de contacto rapido -->
<?php get_template_part('contacto-rapido'); ?>
<!--  fin seccion de contacto rapido -->
<section id="content" class="home-content">
	<h3>Tenemos comunicación permanente con las policías federales, la fiscalía general del estado y las policías municipales</h3>
	<ul id="listado-logos-home">
		<li><img src="<?php echo get_template_directory_uri(); ?>/img/home/jalisco.png"></li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/img/home/policia-municipal.png"></li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/img/home/policia-federal.png"></li>		
	</ul>
	<h3>Somos miembros de:</h3>
	<ul id="listado-logos">
		<li><img src="<?php echo get_template_directory_uri(); ?>/img/consulting/logos/camara-de-comercio.png"></li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/img/consulting/logos/asis.png"></li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/img/consulting/logos/alas.png"></li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/img/consulting/logos/fepasep.png"></li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/img/consulting/logos/cnsp.png"></li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/img/consulting/logos/basc.png"></li>
	</ul>
	<h3>Autorizados por la dirección general de seguridad privada de la secretaría de gobernación y el consejo estatal de seguridad pública del estado de Jalisco</h3>
</section>
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
<!-- fin de index -->
<?php get_footer(); ?>
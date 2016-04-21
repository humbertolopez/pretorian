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
<section id="contacto-rapido" class="block">
	<div class="contacto-rapido-wrapper">
		<div>
			<p class="atencion-clientes-button">Atención a clientes</p>
		</div>
		<div>
			<h3>Cotiza llenando el formulario</h3>
			<p>Nos pondremos en contacto contigo para brindarte los servicios que mejor se ajusten a tus necesidades.</p>
		</div>
	</div>
</section>
<!--  fin seccion de contacto rapido -->
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
<!-- fin de index -->
<?php get_footer(); ?>
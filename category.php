<!-- portada -->
<?php get_header(); ?>
<section id="portada" class="block">
	<?php if(is_category('servicios-seguridad-integral')) {
		?>
			<img class="portada-img" src="<?php echo get_template_directory_uri(); ?>/img/servicios-seguridad-integral/header-seguridad-integral.jpg">
			<div class="llamada-<?php echo get_category(get_query_var('cat'))->slug; ?>">
				<h2>En servicios de</h2>
				<h1>seguridad integral</h1>
				<h2>brindamos la mayor cobertura</h2>
			</div>
		<?php
		} else {

		}
	?>
</section>
<!-- fin portada -->
<!-- seccion de contacto rapido -->
<?php get_template_part('contacto-rapido'); ?>
<!--  fin seccion de contacto rapido -->
<!-- cuerpo de categoria -->
	<?php if(is_category('servicios-seguridad-integral')) {
		?>
			<!-- contenido de la categoria seguridad -->
			<section id="<?php echo get_category(get_query_var('cat'))->slug; ?>">
				<ul id="listado-seguridad" class="block">
					<?php
						$categoriaactual = get_query_var('cat');
						wp_list_categories('title_li=&show_count=0&child_of='.$categoriaactual);
					?>
				</ul>
				<ul class="items-seguridad block">
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<li class="block">
							<?php the_post_thumbnail('full'); ?>
							<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>
							<p class="cotiza-mejor-servicio block">Cotiza el mejor servicio</p>
						</li>			
					<?php endwhile; endif; ?>
				</ul>
			</section>
			<!-- fin contenido de la categoria seguridad -->
		<?php
	} else if (in_category('tecnologia')) {
		?>
			<!-- contenido de la categoria sistemas electronicos -->
			<section id="<?php echo get_category(get_query_var('cat'))->slug; ?>-sistemas" class="block">
				<h1>Instalación y monitoreo de equipos y sistemas electrónicos de seguridad</h1>
				<h3>Nuestro personal está en constante capacitación en sistemas de seguridad para brindarte siempre un servicio profesional</h3>
				<ul id="listado-sistemas" class="block">
					<?php
						$sistemaselectronicos = new WP_Query(array('category_name' => 'sistemas-electronicos'));
						if($sistemaselectronicos->have_posts()) : while($sistemaselectronicos->have_posts()) : $sistemaselectronicos->the_post();
					?>
						<li class="lanza-pop-up">
							<div class="pop-up-icon">
								<?php the_post_thumbnail('full'); ?>
								<h3><?php the_title(); ?></h3>
							</div>
							<div class="tecnologia-pop-up">
								<img src="<?php echo get_template_directory_uri(); ?>/img/close.svg">
								<h4><?php the_title(); ?></h4>
								<?php the_content(); ?>
							</div>
						</li>
					<?php wp_reset_query(); endwhile; endif; ?>
				</ul>
			</section>
			<!-- fin contenido de la categoria sistemas electronicos -->
			<!-- contenido categoria nuevas tecnologias -->
			<section id="<?php echo get_category(get_query_var('cat'))->slug; ?>-nuevas" class="block">
				<h1>En alarmas Pretorian estamos siempre en la búsqueda</h1>
				<h3>de nuevas tecnologías en el tema de seguridad</h3>
				<ul id="listado-nuevas-tecnologias" class="block">
					<?php
						$nuevastecnologias = new WP_Query(array('category_name' => 'nuevas-tecnologias','posts_per_page' => '-1'));
						if($nuevastecnologias->have_posts()) : while($nuevastecnologias->have_posts()) : $nuevastecnologias->the_post();
					?>
						<li class="lanza-pop-up">
							<div class="pop-up-icon">
								<?php the_post_thumbnail(); ?>
								<h3><?php the_title(); ?></h3>								
							</div>
							<div class="tecnologia-pop-up">
								<img src="<?php echo get_template_directory_uri(); ?>/img/close.svg">
								<h4><?php the_title(); ?></h4>
								<?php the_content(); ?>
							</div>
						</li>
					<?php wp_reset_query(); endwhile; endif; ?>					
				</ul>
			</section>
			<!-- fin contenido categoria nuevas tecnologias -->
			<!-- contenido equipos -->
			<section id="<?php echo get_category(get_query_var('cat'))->slug; ?>-equipo" class="block">
				<h4>Contamos con los mejores equipos del mercado</h4>
					<?php
						$equipostecnologias = new WP_Query(array('category_name' => 'equipo'));
						if($equipostecnologias->have_posts()) : while($equipostecnologias->have_posts()) : $equipostecnologias->the_post();					
					?>
					<?php the_content(); ?>
					<?php wp_reset_query(); endwhile; endif; ?>
			</section>
			<!-- contenido equipos -->
		<?php
		}
	?>
<!-- cuerpo de categoria -->
<?php get_footer(); ?>
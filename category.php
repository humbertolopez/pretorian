<!-- portada -->
<?php get_header(); ?>
<section id="portada" class="block">
	<?php if(is_category('servicios-seguridad-integral')) {
		?>
			<img class="portada-img" src="<?php echo get_template_directory_uri(); ?>/img/servicios-seguridad-integral/header-seguridad-integral.jpg">
			<div class="llamada-<?php echo get_category(get_query_var('cat'))->slug; ?>">
				<div class="llamada-servicios-seguridad-integral-wrapper">
					<h2>En servicios de</h2>
					<h1>seguridad integral</h1>
					<h2>brindamos la mayor cobertura</h2>
				</div>
			</div>
		<?php
		} else if(is_category('consulting')) {
			?>
				<img class="portada-img" src="<?php echo get_template_directory_uri(); ?>/img/consulting/portada-consulting.jpg">
				<div class="llamada-<?php echo get_category(get_query_var('cat'))->slug; ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/consulting/logo-pretorian-consulting.svg">
				</div>
			<?php
		} else if(is_category('personal')) {
			?>
				<img class="portada-img" src="<?php echo get_template_directory_uri(); ?>/img/personal/personal-header.jpg">
				<div class="llamada-<?php echo get_category(get_query_var('cat'))->slug; ?>">
					<div class="llamada-tecnologia-wrapper">
						<h2>Personal confiable,</h2>
						<h2>capacitado y certificado</h2>
						<h1>para cualquier situación</h1>
					</div>
				</div>
			<?php
		} else if(is_category('tecnologia')) {
			?>
				<img class="portada-img" src="<?php echo get_template_directory_uri(); ?>/img/tecnologia/header-tecnologia.jpg">
				<div class="llamada-<?php echo get_category(get_query_var('cat'))->slug; ?>">
					<div class="llamada-tecnologia-wrapper">
						<img src="<?php echo get_template_directory_uri(); ?>/img/tecnologia/alarmas-pretorian.svg">
					</div>
				</div>
			<?php
		} else if(is_category('manuales')) {
			?>
				<img class="portada-img" src="<?php echo get_template_directory_uri(); ?>/img/manuales/manuales-header.jpg">
				<div class="llamada-<?php echo get_category(get_query_var('cat'))->slug; ?>">
					<div class="llamada-manuales-wrapper">
						<h1>Manuales para</h1>
						<h2>su seguridad</h1>
						<h2>Descarga nuestro material</h2>
						<h2>para estar un paso adelante</h2>
					</div>
				</div>
			<?php
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
	} else if (is_category('tecnologia')) {
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
		} else if (is_category('consulting')) {
			?>
			<!-- inicio categoria consulting -->
			<section id="<?php echo get_category(get_query_var('cat'))->slug; ?>-titular" class="titular-consulting block">
				<h2>Nuestro personal se encuentra certificado internacionalmente</h2>
				<h3>Especialistas en asesoría de seguridad integral</h3>
			</section>
			<section id="<?php echo get_category(get_query_var('cat'))->slug; ?>-experiencia" class="block">
				<h2>Nuestro personal está altamente capacitado</h2>
				<h3>y cuenta con gran experiencia en la materia</h3>
				<ul>
					<?php
						$consultingexperiencia = new WP_Query(array('category_name' => 'experiencia'));
						if($consultingexperiencia->have_posts()) : while($consultingexperiencia->have_posts()) : $consultingexperiencia->the_post();
					?>
						<li>
							<?php the_post_thumbnail(); ?>
							<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>
						</li>
					<?php wp_reset_query(); endwhile; endif; ?>
				</ul>
				<div id="cotizacion-button" class="block">
					<p>Cotizar consultoría</p>
				</div>
				<div class="wrapper listado-logos block">
					<ul id="listado-logos">
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/consulting/logos/camara-de-comercio.png"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/consulting/logos/asis.png"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/consulting/logos/alas.png"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/consulting/logos/fepasep.png"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/consulting/logos/cnsp.png"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/consulting/logos/isds.png"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/consulting/logos/basc.png"></li>
					</ul>
				</div>
			</section>			
			<!-- fin categoria consulting -->
			<?php
		} else if (is_category('personal')) {
			?>
			<!-- sub header categoria personal -->
			<section id="<?php echo get_category(get_query_var('cat'))->slug; ?>-titular" class="block">
				<h2>Nos obligamos a la capacitación continua</h2>
				<h3>con cursos de inducción, seguridad en distintos niveles y entrenamiento especializado de acuerdo a las necesitades de nuestros clientes</h3>
			</section>
			<!-- fin sub header categoria personal -->
			<!-- contenido seccion personal -->
			<section id="<?php echo get_category(get_query_var('cat'))->slug; ?>-seleccion" class="block">
				<h2>Nuestro proceso de selección garantiza un alto nivel de exigencia con</h2>
				<ul>
					<?php
						$personalseleccion = new WP_Query(array('category_name' => 'seleccion'));
						if($personalseleccion->have_posts()) : while($personalseleccion->have_posts()) : $personalseleccion->the_post();
					?>
						<li>
							<?php the_post_thumbnail(); ?>
							<h3><?php the_title(); ?></h3>
						</li>
					<?php wp_reset_query(); endwhile; endif; ?>
				</ul>
				<h2>¿Te interesa integrarte a nuestro equipo?</h2>
				<h2>Llena nuestro formulario</h2>
				<h3>y nos pondremos en contacto contigo</h3>
			</section>
			<!-- fin contenido seccion personal -->
			<?php
		} else if (is_category('manuales')) {
			?>
				<section id="<?php echo get_category(get_query_var('cat'))->slug; ?>-descargas" class="block">
					<ul>
						<?php
							$manualesdescargas = new WP_Query(array('category_name' => 'manuales'));
							if($manualesdescargas->have_posts()) : while($manualesdescargas->have_posts()) : $manualesdescargas->the_post();
						?>
						<li>
							<?php the_post_thumbnail(); ?>
							<h3><?php the_title(); ?></h3>
						</li>
						<?php wp_reset_query(); endwhile; endif; ?>
					</ul>
				</section>
			<?php
		} else if (is_category('contacto')) {
			get_template_part('formulario-general');
		}
	?>	
<!-- cuerpo de categoria -->
<!-- formulario general -->
<?php get_template_part('formulario-general'); ?>
<!-- formulario general -->
<?php get_footer(); ?>
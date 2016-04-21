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
<!-- cuerpo de categoria -->
<section id="<?php echo get_category(get_query_var('cat'))->slug; ?>">
	<ul id="listado-seguridad" class="block">
		<?php
			$categoriaactual = get_query_var('cat');
			wp_list_categories('title_li=&show_count=0&child_of='.$categoriaactual);
		?>
	</ul>
	<?php
		if(have_posts()) : while(have_posts()) : the_post();
	?>
		<ul class="items-seguridad block">
			<li>
				<?php the_post_thumbnail('full'); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<p class="cotiza-mejor-servicio block">Cotiza el mejor servicio</p>
			</li>
		</ul>
	<?php endwhile; endif; ?>
</section>
<!-- cuerpo de categoria -->
<?php get_footer(); ?>
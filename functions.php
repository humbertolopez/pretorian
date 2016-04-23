<?php
	//agrega soporte para imagenes destacadas
	add_theme_support('post-thumbnails');
	//agrega el script para mantener la pagina en su lugar a pesar de llamar el pop up
	function wp_script_mantener() {
		wp_enqueue_script('mantener-link',get_template_directory_uri() . 'js/dontmove.js',array('jquery'),'',false);
	}
	add_action('wp_enqueue_script','wp_script_mantener');
?>
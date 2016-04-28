	<!-- footer -->
	<footer class="block">
		<div class="wrapper block">
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
		</div>
	</footer>
	<?php wp_footer(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script type="text/javascript">
		jQuery('.pop-up-icon').click(function(){
			jQuery(this).addClass('pop-up-icon-active'),
			jQuery(this).next().addClass('tecnologia-pop-up-active')
		});
		jQuery('.tecnologia-pop-up').children('img').click(function(){
			jQuery(this).parent().removeClass('tecnologia-pop-up-active'),
			jQuery(this).parent().parent().children('.pop-up-icon').removeClass('pop-up-icon-active')
		});	
	</script>
	<script type="text/javascript">
		jQuery(window).scroll(function(){
			var toppage = jQuery(this).scrollTop();
			if(toppage >= 500) {
				jQuery('#head').addClass('collapse')
			}
			if(toppage <= 500) {
				jQuery('#head').removeClass('collapse')
			}
		});
		jQuery('.menu-icon').click(function(){
			jQuery('#menu-sub-buttons').toggleClass('menu-visible'),
			jQuery('#menu').toggleClass('menu-visible')
		});
	</script>
</body>
</html>
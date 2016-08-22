<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage None Plate
 * @since None Plate 1.0
 */
?>

	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 center">
					<p>Todos os Direitos Reservados © <?php echo date('Y'); ?> - <?php bloginfo( 'name' ); ?></p>
					<p class="r2site">Site produzido pela <a href="http://r2agenciadigital.com.br/" target="_blank">R2 Agência Digital</a></p>
					<p class="r2logo">
						<a href="http://r2agenciadigital.com.br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-r2.svg" alt="" class="svg r2-logo"></a>
					</p>
				</div>
			</div>
		</div>
	</footer>



<!-- Footer Links Libraries -->
	<!-- Prefix Free -->
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/prefixfree/prefixfree.min.js'></script>

	<!-- Alertify -->
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/alertify/js/alertify.js'></script>

	<!-- Lightbox -->
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/lightbox/js/lightbox.min.js'></script>

	<!-- Lince Form -->
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/linceform/linceform.js'></script>

	<!-- Bootstrap -->
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/bootstrap/bootstrap.min.js'></script>

	<!--  Cycle 2  -->
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/cycle2/jquery.cycle2.min.js'></script>
	<!-- <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/cycle2/jquery.cycle2.carousel.min.js'></script> -->
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/cycle2/jquery.cycle2.swipe.min.js'></script>

	<!--  if IE 8  -->
	<script type='text/javascript' src='http://r2server.com.br/plugins/oldbrowsers/ifIE.js'></script>

	<!-- Main JS -->
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/app.js'></script>

<!-- Footer Tags -->
	<?php wp_footer(); ?>
    
</body>
</html>

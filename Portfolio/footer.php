<footer>
	
<div class="container">
	<div class="row">
		<div class="col-m-12 centered-pills">

				<?php

				$defaults = array (
					'container' => false,
					'theme_location' => 'footer-menu',
					'menu_class' => 'menu nav nav-pills'
					);

				wp_nav_menu( $defaults );

			?>
		</div>
	</div>
	<div class="row">
		<p class ="center">Copyright <?php echo date('Y') ?> </p>
</footer>

<?php wp_footer(); ?>
   
</body>
</html>				
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8" /> 
	<title><?php wp_title(); ?></title>

	<?php wp_head(); ?>
    </head>
<body>
<header>
<div class="container">
	<div class="header-title row">
		<div class="col-m-12">
			<h1>Thomas Yancy</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-m-12 centered-pills">

				<?php

				$defaults = array (
					'container' => false,
					'theme_location' => 'primary-menu',
					'menu_class' => 'menu nav nav-pills'
					);

				wp_nav_menu( $defaults );

			?>
</header>
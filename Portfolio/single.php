<?php
/*
	Template Name: Single
*/
?>
<?php get_header(); ?>

<div class="container">
	<div class="row" role="main">			
			
		<div class="col-md-8 col-md-offset-2">	


				<?php the_post(); ?>
					
					<p><?php the_content(); ?></p>

	</div>
			
		<div class="pager"></div>		
	</div>
</div>

<?php get_footer(); ?>
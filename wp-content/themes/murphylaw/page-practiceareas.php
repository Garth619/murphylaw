<?php 
	
	
	/* Template Name: Practice Areas Directory */
	
	
	get_header(); ?>


<?php get_template_part( 'banner', 'internal' );?>

<div class="main">
	
	<div class="container">
	
		<h1 class="page_title"><?php the_title();?></h1><!-- page_title -->
		
		<div class="practice_areas_directory">
			
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
			
			
		</div><!-- practice_areas_directory -->
		
		
	</div><!-- container -->
		
		
</div><!-- main -->



<?php get_footer(); ?>

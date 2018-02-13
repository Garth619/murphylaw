<?php get_header(); ?>


<?php get_template_part( 'banner', 'internal' );?>

<div class="main default_main">
	
	<?php get_sidebar('blog'); ?>
	
	<div class="page_container content">
		
		<h1 class="intro_header"><?php the_title();?></h1><!-- intro_header -->
		
		
		<?php get_template_part( 'loop', 'single' ); ?>

		
		
	</div><!-- page_container -->
	
	
	
</div><!-- main -->


<?php get_footer(); ?>>
<?php get_header(); ?>


<?php get_template_part( 'banner', 'internal' );?>

<div class="main default_main">
	
	<?php get_sidebar('blog'); ?>
	
	<div class="page_container content">
		
		<?php get_template_part( 'loop', 'index' );?>


</div><!-- page_container -->
	
	
	
</div><!-- main -->


<?php get_footer(); ?>

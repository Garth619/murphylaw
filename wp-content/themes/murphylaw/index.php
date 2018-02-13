<?php get_header(); ?>

<?php get_template_part( 'banner', 'internal' );?>

<div class="main default_main">
	
	<?php get_sidebar('blog'); ?>
	
	<div class="page_container content">
		
		<h1 class="blog_title">Blog</h1><!-- blog_title -->
		
		<?php get_template_part( 'loop', 'index' );?>


	</div><!-- page_container -->
	
</div><!-- main -->


<?php get_footer(); ?>

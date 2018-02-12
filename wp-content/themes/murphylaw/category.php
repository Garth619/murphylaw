<?php get_header(); ?>


<?php get_template_part( 'banner', 'internal' );?>
		

<div class="main default_main">
	
	<?php get_sidebar('blog'); ?>
	
	<div class="page_container content">
		
	
				<h1 class="blog_title"><?php
					printf( __( '%s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
				
				
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

				/*
				
				 * include a file called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>



	</div><!-- page_container -->
	
	
	
</div><!-- main -->


<?php get_footer(); ?>

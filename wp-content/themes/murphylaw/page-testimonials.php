<?php 
	
	
	/* Template Name: Testimonials */
	
	
	get_header(); ?>


<?php get_template_part( 'banner', 'internal' );?>

<div class="main">
	
	<div class="container">
	
		<h1 class="page_title"><?php the_title();?></h1><!-- page_title -->
		
		<div class="testimonials_page_wrapper">
			
			
			<?php if(get_field('testimonials_page')): ?>
			 
				<?php while(has_sub_field('testimonials_page')): ?>
			 
					<div class="single_testi">
				
				
						<div class="rating_wrapper">
					
						<span class="rating">
					
							<span class="bold_rating"><?php the_sub_field( 'review_rating' ); ?></span><!-- bold_rating -->
					
							/ 5</span><!-- rating -->
					
					</div><!-- rating_wrapper -->
				
					<span class="testi_type"><?php the_sub_field( 'review_type' ); ?></span><!-- testi_type -->
				
				
					<span class="testi_description"><?php the_sub_field( 'review_description' ); ?></span><!-- testi_description -->
				
				
					<span class="testi_name"><?php the_sub_field( 'review_name' ); ?></span><!-- testi_name -->
				
				
			</div><!-- single_testi -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
			
			
		</div><!-- testimonials_wrapper -->
		
	</div><!-- container -->
		
		
</div><!-- main -->



<?php get_footer(); ?>

<section id="section_four">
	
	<div class="sec_four_inner">
	
	<div class="prev_next_wrapper prev">
		
		<div class="flex_mobile">
		
		<div class="prev_next_square">
			
			
			
		</div><!-- prev_next_square -->
		
		<?php echo file_get_contents("wp-content/themes/murphylaw/images/new-arrow-left.svg"); ?>
		
		
		</div><!-- flex_mobile -->
		
	</div><!-- prev_next_wrapper -->
	

	
	<div class="sec_four_slideshow">
		
		
			<?php if(get_field('testimonials_page', 16)): ?>
		 
			<?php while(has_sub_field('testimonials_page',16)): ?>
		 
			
					<div class="sec_four_slide">
			
						<div class="ratings_wrapper">
				
							<span class="ratings_title">
				
								<span class="bold"><?php the_sub_field( 'review_rating' ); ?></span>
					
								/ 5
					
							</span><!-- ratings_title -->
				
							<span class="review_source"><?php the_sub_field( 'review_type' ); ?></span><!-- review_source -->
				
						</div><!-- ratings_wrapper -->
			
						<span class="slide_content"><?php the_sub_field( 'review_description' ); ?></span><!-- slide_content -->
			
			
						<span class="name"><?php the_sub_field( 'review_name' ); ?></span>
			
		</div><!-- sec_four_slide -->
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
		


	</div><!-- sec_four_slideshow -->
	
	
	
	
	<div class="prev_next_wrapper next">
		
		<div class="flex_mobile">
		
			<div class="prev_next_square">
			
			
			</div><!-- prev_next_square -->
		
			<?php echo file_get_contents("wp-content/themes/murphylaw/images/new-arrow-right.svg"); ?>
		
		</div><!-- flex_mobile -->
		
	</div><!-- prev_next_wrapper -->
	
		</div><!-- sec_four_inner -->
	
	
</section><!-- section_four -->
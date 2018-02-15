<section id="section_three">
	
	
	
	<?php if(get_field('case_results_grid')): ?>
	 
		<?php while(has_sub_field('case_results_grid')): ?>
	 
			
	    	<?php if( get_sub_field('content_or_image_box') == 'Content Box' ): ?>
	    	
	    	
	    				
	    				<div class="sec_three_box hover_box">
		
								<a class="<?php the_field( 'case_results_link' ); ?>" href="<?php bloginfo('url');?>/case-results">
		
								<div class="hover_inner">
			
									<div class="flex_center">
			
										<span class="amount"><?php the_sub_field( 'case_results_amount' ); ?></span><!-- amount -->
			
										<span class="case_type"><?php the_sub_field( 'case_results_type' ); ?></span><!-- case_type -->
			
										<?php echo file_get_contents("wp-content/themes/murphylaw/images/new-saints.svg"); ?>
			
								</div><!-- flex_center -->
			
							</div><!-- hover_inner -->
		
							<div class="hover_read_more">
			
								<span class="read_more_title">Read More</span><!-- read_more_title -->
			
								<div class="red_dots_wrapper">
				
									<span class="red_dots"></span>
									<span class="red_dots"></span>
									<span class="red_dots"></span>
				
							</div><!-- red_dots -->
			
						</div><!-- hover_read_more -->
		
						<div class="hover_excerpt">
			
							<span class=""><?php the_sub_field( 'case_results_description' ); ?></span>
			
			
						</div><!-- hover_excerpt -->
		
					</a>
		
				</div><!-- sec_three_box -->
	
					

					
				<?php endif; ?>
				
				
				<?php if( get_sub_field('content_or_image_box') == 'Image Box' ): ?>
	
					<div class="sec_three_box pic_box" >
		
						<div class="pic_box_inner" style="background: url(<?php the_sub_field( 'case_results_background_image' ); ?>) top center no-repeat;background-size:cover"></div><!-- pic_box_inner -->
		
		
					</div><!-- sec_three_box -->

					
				<?php endif; ?>
	    
			
		
		
		<?php endwhile; ?>
	 
	<?php endif; ?>
	
	
</section><!-- section_three -->

<div class="sec_three_view">
		
		<a href="<?php the_field( 'case_results_link' ); ?>">
			
			
			<span class="view">View More</span><!-- view -->
			
			
			<div class="red_dots_wrapper">
				
					<span class="red_dots"></span>
					<span class="red_dots"></span>
					<span class="red_dots"></span>
				
				</div><!-- red_dots -->
			
			
		</a>
		
	</div><!-- sec_three_view -->

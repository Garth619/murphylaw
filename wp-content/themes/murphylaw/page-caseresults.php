<?php 
	
	
	/* Template Name: Case Results */
	
	
	get_header(); ?>


<div class="main">
	
	<div class="container">
	
		<h1 class="page_title"><?php the_title();?></h1><!-- page_title -->
		
		<div class="case_results_page_wrapper">
			
			
			<?php if(get_field('case_results_page')): ?>
				 
					<?php while(has_sub_field('case_results_page')): ?>
				 
							
							<div class="single_case_results_page">
				
				
								<div class="cr_inner">
				
									<span class="cr_amount"><?php the_sub_field( 'case_result_amount' ); ?></span><!-- cr_amount -->
				
									<?php echo file_get_contents("wp-content/themes/murphylaw/images/new-saints.svg"); ?>
				
									<span class="cf_type"><?php the_sub_field( 'case_result_type' ); ?></span><!-- cf_type -->
				
				
									<span class="cr_description"><?php the_sub_field( 'case_results_description' ); ?></span><!-- cr_description -->
				
							</div><!-- cr_inner -->
				
				
						</div><!-- single_case_results_page -->
						
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
				

			
		</div><!-- case_results_wrapper -->
		
	</div><!-- container -->
		
		
</div><!-- main -->



<?php get_footer(); ?>

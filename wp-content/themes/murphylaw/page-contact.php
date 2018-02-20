<?php 
	
	
	/* Template Name: Contact */
	
	
	get_header(); ?>


<div class="main">
	
	
	
		<div class="contact_page_wrapper">
			
			<div class="contact_left">
				
				<div class="contact_left_inner">
			
					<h1 class="contact_header"><?php the_title();?></h1><!-- contact_header -->
					
					<span class="firm_title"><?php the_field( 'firm_title' ); ?></span><!-- firm_title -->
					
					<a class="contact_page_address" href="<?php the_field( 'address_link' ); ?>" target="_blank">
					
						<?php the_field( 'address' ); ?>
						
					</a><!-- contact_page_address -->
					
					<a class="contact_page_tel" href="tel:<?php the_field( 'phone' ); ?>"><?php the_field( 'phone' ); ?></a><!-- contact_page_tel -->
					
					<a class="contact_page_contact_button" href="<?php the_field( 'address_link' ); ?>" target="_blank"><?php the_field( 'get_directions_verbiage' ); ?></a><!-- contact_page_contact_button -->
					
					<?php the_field( 'iframe_map' ); ?>
			
			
			</div><!-- contact_left_inner -->
			
			
			</div><!-- contact_left -->
			
			
			<div class="contact_right">
				
				
				
			</div><!-- contact_right -->
			
		</div><!-- contact_page_wrapper -->
		
		
		
		
		
</div><!-- main -->



<?php get_footer(); ?>

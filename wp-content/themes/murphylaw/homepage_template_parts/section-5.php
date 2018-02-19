<section id="section_five">
	
	
	<div class="sec_five_intro_wrapper">
		
		<?php echo file_get_contents("wp-content/themes/murphylaw/images/new-louis.svg"); ?>
		
		
		
		<?php the_field( 'section_five_title' ); ?>
		
<!--
		<span class="sec_five_header">
		
			In The
			
			<span class="sec_five_lower_header">
			
				Community
			
			</span>
		
		</span>
-->
		
		<div class="sec_five_content">
			
			<p><?php the_field( 'section_five_intro' ); ?></p>
			
			<a class="read_more" href="<?php the_field( 'read_more_page_link' ); ?>"><?php the_field( 'read_more_verbiage' ); ?></a>
			
		</div><!-- sec_five_content -->
		
		
		
	</div><!-- intro_wrapper -->
	
	
	<div class="community_posts">
		
		
		<div class="comm_slideshow">
			
			
			<?php if(get_field('community_excerpt')): ?>
			 
				<?php while(has_sub_field('community_excerpt')): ?>
			 
					
					<div class="single_comm">
				
						<div class="comm_logo_wrapper">
					
							<?php $logo = get_sub_field( 'logo' ); ?>
		
							<?php if ( $logo ) { ?>
								
								<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
		
							<?php } ?>
					
						</div><!-- comm_logo_wrapper -->
				
						<div class="comm_content">
					
						<span class="comm_title"><?php the_sub_field( 'community_title' ); ?></span>
					
						<span class="comm_description"><?php the_sub_field( 'community_description' ); ?></span><!-- comm_content -->
					
					</div><!-- comm_content -->
				
				</div><!-- single_comm -->
					
					
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		
			
			<div class="comm_buttons">
				
				<span class="comm_prev">prev</span><!-- comm_prev -->
				
				<span class="comm_next">next</span><!-- comm_next -->
				
			</div><!-- comm_buttons -->
			
		</div><!-- comm_slideshow -->
		
		
	</div><!-- community_posts -->
	
	
	
	
</section><!-- section_five -->
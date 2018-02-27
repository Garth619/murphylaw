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
			
			<a class="read_more" href="<?php echo get_post_type_archive_link( 'community_cpt' ); ?>"><?php the_field( 'read_more_verbiage' ); ?></a>
			
		</div><!-- sec_five_content -->
		
		
		
	</div><!-- intro_wrapper -->
	
	
	<div class="community_posts">
		
		
		<div class="comm_slideshow">
			
			
			
			
			
			<?php $posts = get_field('community_posts');
			
			if( $posts ): ?>
			    
			    
			    
			    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			        <?php setup_postdata($post); ?>
			        
			        
			        <div class="single_comm">
				
						<div class="comm_logo_wrapper">
					
							<?php $logo = get_field( 'logo' ); ?>
		
							<?php if ( $logo ) { ?>
								
								<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
		
							<?php } ?>
					
						</div><!-- comm_logo_wrapper -->
				
						<div class="comm_content">
					
						<span class="comm_title"><?php the_title();?></span>
					
						<span class="comm_description"><?php the_content();?></span><!-- comm_content -->
					
					</div><!-- comm_content -->
				
				</div><!-- single_comm -->
			   
			   
			    <?php endforeach; ?>
			    
			    
			    
			    
			    
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>

			
		
			
			<div class="comm_buttons">
				
				<span class="comm_prev">prev</span><!-- comm_prev -->
				
				<span class="comm_next">next</span><!-- comm_next -->
				
			</div><!-- comm_buttons -->
			
		</div><!-- comm_slideshow -->
		
		
	</div><!-- community_posts -->
	
	
	
	
</section><!-- section_five -->
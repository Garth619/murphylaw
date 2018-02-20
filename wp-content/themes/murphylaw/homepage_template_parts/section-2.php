<section id="section_two">
	
	<div class="sec_two_inner">
		
		
		<div class="intro_wrapper">
			
			<img class="baton_rouge_svg" src="<?php bloginfo('template_directory');?>/images/icon-spear.svg"/>
			
			<div class="intro_inner_wrapper">
			
			<h1>
				
				<?php the_field( 'main_header' ); ?>
				
			</h1>
			
			<div class="intro_inner_content">
				
				<img class="baton_rouge_svg_mobile" src="<?php bloginfo('template_directory');?>/images/icon-spear.svg"/>
				
				<p><?php the_field( 'intro_content_sec_two' ); ?></p>
				
				<a class="download_button" href="<?php the_field( 'pdf_file' ); ?>" target="_blank"><?php the_field( 'download_pdf_verbiage' ); ?></a><!-- download_button -->
				
			</div><!-- intro_inner_content -->
			
			
			</div><!-- intro_inner_wrapper -->
			
			
			
		</div><!-- intro_wrapper -->
		
		
		<div class="sec_two_content content">
			
				
			<?php the_field( 'section_two_content' ); ?>
		
							
				
<!--
				<div class="video_wrapper">
					
					<div class="video_inner_wrapper">
						
						<div class="play_button">
										
							<div class="play_button_inner">
										
								<span class="tri"></span>
								
							</div>
							
							<span class="white_square"></span>
										
						</div>
					
						<div class="video_wistia_wrapper wistia_embed wistia_async_waichudc62 popover=true popoverContent=thumbnail">
						
						
						
						</div>
						
						
					
					</div>
					
					
					
					<span class="video_caption wistia_embed wistia_async_waichudc62 popover=true popoverContent=html">// Hear From Clients</span>
					
				</div>
-->
				
				
								
				
			

		</div><!-- sec_two_content -->
		
		<div id="sec_two_slide_fade" class="sec_two_slideshow">
			
			
			<?php if(get_field('about_logos',8)): ?>
			 
				<?php while(has_sub_field('about_logos',8)): ?>
			 
					<div class="sec_two_single_slide">
					
						<?php $logo = get_sub_field( 'logo' ); ?>
		
						<?php if ( $logo ) { ?>
			
							<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
		
						<?php } ?>
					
					</div><!-- sec_two_single_slide -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
				
				
		</div><!-- sec_two_slideshow -->
		
		
	</div><!-- sec_two_inner -->
	
	
</section><!-- section_two -->


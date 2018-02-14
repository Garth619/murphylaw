<?php 
	
	
	/* Template Name: Video Center */
	
	
	get_header(); ?>


<?php get_template_part( 'banner', 'internal' );?>

<div class="main">
	
	<div class="container">
	
		<h1 class="page_title"><?php the_title();?></h1><!-- page_title -->
		
		
		
		
		<div class="video_center_page_wrapper">
			
			
			<?php if(get_field('video')): ?>
			 
				<?php while(has_sub_field('video')): ?>
			 
					<div class="single_video">
			
						<div class="vc_play_overlay">
				
							<div class="play_button">
										
								<div class="play_button_inner">
										
									<span class="tri"></span><!-- tri -->
								
								</div><!-- play_button_inner -->
							
							<span class="white_square"></span><!-- white_square -->
										
					</div><!-- play_button -->

				
				</div><!-- vc_play_overlay -->
			
			
				<div class="single_video_thumbnail wistia_embed wistia_async_<?php the_sub_field( 'wisita_id' ); ?> popover=true popoverContent=thumbnail"></div><!-- single_video_thumbnail -->
				
				<div class="video_title wistia_embed wistia_async_waichudc62 popover=true popoverContent=html"><?php the_sub_field( 'video_title' ); ?></div><!-- video_title -->
			
			</div><!-- single_video -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			

			
			
		</div><!-- video_center_wrapper -->
		
				
	</div><!-- container -->
		
		
</div><!-- main -->



<?php get_footer(); ?>

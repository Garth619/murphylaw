<?php 
	
	
	/* Template Name: Meet the Team */
	
	
	get_header(); ?>


<?php get_template_part( 'banner', 'internal' );?>

<div class="main">
	
	<div class="container grey_container">
		
		<div class="meet_the_team_wrapper">
	
		<h1 class="page_title"><?php the_title();?></h1><!-- page_title -->
		
		<div class="att_inner_wrapper">
			
			<?php $posts = get_field('attorneys_meet');
			
			if( $posts ): ?>
			   
			    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			        <?php setup_postdata($post); ?>
			        
			        
			        
			        	<div class="single_att">
				
									<a href="<?php the_permalink();?>">
				
										<div class="att_image_wrapper">
					
											<?php $attorney_image = get_field( 'attorney_image' ); ?>
											
											<?php if ( $attorney_image ) : ?>
			
												<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
											
											<?php else : ?>
											
												<img src="<?php bloginfo('template_directory');?>/images/placeholder.png"/>
											
											<?php endif;?>
					
										<div class="view_profile">View Profile</div><!-- view -->
					
									</div><!-- att_image_wrapper -->
					
								<span class="att_name"><?php the_title();?></span><!-- att_name -->
					
								<span class="att_position"><?php the_field( 'position' ); ?></span><!-- att_position -->
				
								</a>
				
								</div><!-- single_att -->
			        
			        
			        
			    <?php endforeach; ?>
			   
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
			

			
		</div><!-- att_inner_wrapper -->
		
		
		</div><!-- meet_the_team_wrapper -->
		
		
		
		<div class="meet_the_team_wrapper">
	
		<span class="page_title"><?php the_field( 'staff_title' ); ?></span><!-- page_title -->
		
		<div class="att_inner_wrapper">
			
			<?php $posts = get_field('staff_meet');
			
			if( $posts ): ?>
			   
			    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			        <?php setup_postdata($post); ?>
			        
			        
			        
			        	<div class="single_att">
				
									<a href="<?php the_permalink();?>">
				
										<div class="att_image_wrapper">
					
											<?php $attorney_image = get_field( 'attorney_image' ); ?>
											
											<?php if ( $attorney_image ) : ?>
			
												<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
											
											<?php else : ?>
											
												<img src="<?php bloginfo('template_directory');?>/images/placeholder.png"/>
											
											<?php endif;?>
					
										<div class="view_profile">View Profile</div><!-- view -->
					
									</div><!-- att_image_wrapper -->
					
								<span class="att_name"><?php the_title();?></span><!-- att_name -->
					
								<span class="att_position"><?php the_field( 'position' ); ?></span><!-- att_position -->
				
								</a>
				
								</div><!-- single_att -->
			        
			        
			        
			    <?php endforeach; ?>
			   
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
						
			
		</div><!-- att_inner_wrapper -->
		
		
		</div><!-- meet_the_team_wrapper -->
		
		
	</div><!-- container -->
		
		
</div><!-- main -->



<?php get_footer(); ?>

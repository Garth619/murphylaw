<section id="section_one">
	
	<div class="sec_one_inner">
		
		<span class="large_header"><?php the_field( 'banner_title' ); ?></span><!-- large_header -->
		
		<a class="consultation_button" href="#scroll"><?php the_field( 'free_case_consultation_verbiage' ); ?></a><!-- consultation_button -->
		
		<div class="sec_one_sp_wrapper">
			
			<div class="sp_box_one">
				
				<?php echo file_get_contents("wp-content/themes/murphylaw/images/sword.svg"); ?>
				
				<span class="sp_header"><?php the_field( 'intro_header' ); ?></span><!-- sp_header -->
				
				<p><?php the_field( 'intro_content' ); ?></p>
				
			</div><!-- sp_box_one -->
			
			<div class="sp_box_two sp_box">
				
				<?php echo file_get_contents("wp-content/themes/murphylaw/images/sword.svg"); ?>
				
				<span class="sp_small_title"><?php the_field( 'intro_box_one_title' ); ?></span><!-- sp_small_title -->
				
				<div class="green_dots">
				
					<span class="green_dots"></span><!-- green_dots -->
					<span class="green_dots"></span><!-- green_dots -->
					<span class="green_dots"></span><!-- green_dots -->
				
				</div><!-- green_dots -->
				
			</div><!-- sp_box_two -->
			
			<div class="sp_box_three sp_box">
				
				<?php echo file_get_contents("wp-content/themes/murphylaw/images/shield.svg"); ?>
				
				<span class="sp_small_title"><?php the_field( 'intro_box_two_title' ); ?></span><!-- sp_small_title -->
				
				<div class="green_dots">
				
					<span class="green_dots"></span><!-- green_dots -->
					<span class="green_dots"></span><!-- green_dots -->
					<span class="green_dots"></span><!-- green_dots -->
				
				</div><!-- green_dots -->
				
			</div><!-- sp_box_three -->
			
		</div><!-- sec_one_sp_wrapper -->
		
	</div><!-- sec_one_inner -->
	
</section><!-- section_one -->
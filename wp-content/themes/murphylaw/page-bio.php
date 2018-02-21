<?php 
	
	
	/* Template Name: Bios */
	
	
	get_header(); ?>


<div class="main">
	
<div class="profile_top_wrapper">
	
	<div class="profile_inner">
		
		<div class="profile_header_wrapper">
	
			<h1 class="bio_header">
		
				<span class="upper_header"><?php the_field( 'first_name' ); ?></span><!-- upper_header -->
				<span class="lower_header"><?php the_field( 'last_name' ); ?></span><!-- lower_header -->
		
			</h1><!-- bio_header -->
		
			<span class="bio_position"><?php the_field( 'position' ); ?></span><!-- bio_position -->
		
		</div><!-- profile_header_wrapper -->
		
		<div class="profile_image_wrapper">
			
			
			<?php $attorney_image = get_field( 'attorney_image' ); ?>
			
			<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
			
		</div><!-- profile_image_wrapper -->
		
	
	</div><!-- profile_inner -->
	
	
</div><!-- profile_top_wrapper -->


<div class="profile_container content">
	
	
	<div class="profile_content">
		
		<?php get_template_part( 'loop', 'page' ); ?>
		
	</div><!-- profile_content -->
	
	<div class="profile_sidebar">
		
		
		<?php if ( get_field( 'vcf_upload' ) ) { ?>
	
		<div class="vcf_wrapper">
			
			<a href="<?php the_field( 'vcf_upload' ); ?>">
			
				<?php echo file_get_contents("wp-content/themes/murphylaw/images/vcf.svg"); ?>
			
				<span class="download_vcf">Download VCF</span><!-- downLoad_vcf -->
			
			</a>
			
		</div><!-- vcf_wrapper -->
		
		
		<?php } ?>
		
		<?php if(get_field('sidebar')): ?>
		 
			<?php while(has_sub_field('sidebar')): ?>
		 
				<span class="profile_sidebar_title"><?php the_sub_field( 'sidebar_title' ); ?></span>
				
					<?php if(get_sub_field('sidebar_bullet')): ?>
				
						<ul>
		 
						<?php while(has_sub_field('sidebar_bullet')): ?>
		 
						<li><?php the_sub_field( 'bullet_title' ); ?></li>
		    
						<?php endwhile; ?>
			
						</ul>
		 
					<?php endif; ?>
				
				<?php endwhile; ?>
		 
		<?php endif; ?>
	
		
	</div><!-- profile_sidebar -->
	
</div><!-- profile_container -->
		
				
</div><!-- main -->



<?php get_footer(); ?>

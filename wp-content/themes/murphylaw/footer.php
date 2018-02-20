<?php $footer_mobile_image_new = get_field( 'footer_mobile_image_new','option'); ?>

<img class="mobile_building_pic" src="<?php echo $footer_mobile_image_new['url']; ?>" alt="<?php echo $footer_mobile_image_new['alt']; ?>" />


<footer id="footer_section">
	
	<div id="scroll" class="footer_inner">
		
		<div class="footer_pic_wrapper">
			
			
			<?php $footer_image_desktop = get_field( 'footer_image_desktop','option'); ?>

			<img class="footer_pic" src="<?php echo $footer_image_desktop['url']; ?>" alt="<?php echo $footer_image_desktop['alt']; ?>" />

			
			<?php $footer_mobile_image = get_field( 'footer_mobile_image','option'); ?>

			<img class="footer_pic_mobile" src="<?php echo $footer_mobile_image['url']; ?>" alt="<?php echo $footer_mobile_image['alt']; ?>" />
		
		
		</div><!-- footer_pic_wrapper -->
		
		<div class="footer_form_wrapper">
			
			<span class="large_header">Contact</span><!-- large_header-->
			
			<?php gravity_form(1, false, false, false, '', true, 172); ?>
			
			<span class="required_title">*required</span><!-- required_title -->

		</div><!-- footer_form_wrapper -->
		
	</div><!-- footer_inner -->
	
	<div class="lower_footer">
			
			<div class="lower_logo">
				
				<img src="<?php bloginfo('template_directory');?>/images/murphy-law-logo.svg"/>
				
			</div><!-- lower_logo -->
			
			<div class="footer_address_wrapper">
				
				<span class="footer_title">Office</span>
				
				<a class="footer_address_link" href="<?php the_field( 'address_link',139); ?>" target="_blank">
<?php the_field( 'address',139); ?></a><!-- footer_address_link -->
				
				
<!-- 				2354 South Acadian Thruway<br/> Baton Rouge, LA 70808 -->
				
				<span class="footer_title">Call Us</span>
				
				<a class="footer_tel" href="tel:<?php the_field( 'phone',139); ?>"><?php the_field( 'phone',139); ?></a><!-- footer_tel -->
				
			</div><!-- footer_address_wrapper -->
			
			<div class="social_media_wrapper">
				
				<span class="footer_title">Follow Us</span>
				
				
				<?php if(get_field('social_media_links','option')): ?>
				 
					<?php while(has_sub_field('social_media_links','option')): ?>
				 
				 
							<a class="social_link" href="<?php the_sub_field( 'social_media_link' ); ?>" target="_blank"><?php the_sub_field( 'social_media_title' ); ?></a><!-- social_link -->
						
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
				
				
			</div><!-- social_media_wrapper -->
			
		</div><!-- lower_footer -->
		
		
			
		</div><!-- copyright_wrapper -->
					
	
</footer><!-- footer_section -->


		<div class="copyright_wrapper">
			
			<div class="copyright_inner">
			
				<ul>
					<li>&copy;<?php echo date("Y"); ?> <?php the_field( 'copyright','option'); ?></li>
					<li><a href="<?php the_field( 'disclaimer_link','option'); ?>"><?php the_field( 'disclaimer','option'); ?></a></li><br/>
					<li><a href="<?php the_field( 'privacy_policy_link','option'); ?>"><?php the_field( 'privacy_policy','option'); ?></a></li>
				</ul>
				
				<a href="//ilawyermarketing.com" target="_blank">
					<img class="ilwayer" src="<?php bloginfo('template_directory');?>/images/ilawyer-logo.svg"/>
				</a>
			
			</div><!-- copyright_innner -->
			
		</div>


 
<?php wp_footer();?>


<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>	

</body>
</html>

<footer id="footer_section">
	
	<div class="footer_inner">
		
		<div class="footer_pic_wrapper">
		
			<img class="footer_pic" src="<?php bloginfo('template_directory');?>/images/footer-image-desktop.jpg"/><!-- footer_pic -->
			
			<img class="footer_pic_mobile" src="<?php bloginfo('template_directory');?>/images/footer-image-mobile.jpg"/><!-- footer_pic -->
		
		</div><!-- footer_pic_wrapper -->
		
		<div class="footer_form_wrapper">
			
			<span class="large_header">Contact</span><!-- large_header-->
			
			<?php gravity_form(1, false, false, false, '', true, 12); ?>
			
			<span class="required_title">*required</span><!-- required_title -->

		</div><!-- footer_form_wrapper -->
		
		
	
	</div><!-- footer_inner -->
	
	<div class="lower_footer">
			
			<div class="lower_logo">
				
				<img src="<?php bloginfo('template_directory');?>/images/murphy-law-logo.svg"/>
				
			</div><!-- lower_logo -->
			
			<div class="footer_address_wrapper">
				
				<span class="footer_title">Office</span>
				
				<a class="footer_address_link" href="" target="_blank">2354 South Acadian Thruway Baton Rouge, LA 70808</a><!-- footer_address_link -->
				
				<span class="footer_title">Call Us</span>
				
				<a class="footer_tel" href="tel:(225) 928-8800">(225) 928-8800</a><!-- footer_tel -->
				
			</div><!-- footer_address_wrapper -->
			
			<div class="social_media_wrapper">
				
				<span class="footer_title">Follow Us</span>
				
				<a class="social_link" href="">Facebook</a><!-- social_link -->
				<a class="social_link" href="">google+</a><!-- social_link -->
				<a class="social_link" href="">Twitter</a><!-- social_link -->
				<a class="social_link" href="">Youtube</a><!-- social_link -->
				<a class="social_link" href="">LinkedIn</a><!-- social_link -->
				
			</div><!-- social_media_wrapper -->
			
		</div><!-- lower_footer -->
		
		
			
		</div><!-- copyright_wrapper -->
					
	
</footer><!-- footer_section -->


		<div class="copyright_wrapper">
			
			<div class="copyright_inner">
			
				<ul>
					<li>&copy;2018 Murphy Law Firm, LLC. All Rights Reserved.</li>
					<li><a href="">Disclaimer</a></li>
					<li><a href="">Privacy Policy</a></li>
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

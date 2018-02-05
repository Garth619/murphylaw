<footer id="footer_section">
	
	<div class="footer_inner">
		
		<div class="footer_pic_wrapper">
		
			<img class="footer_pic" src="<?php bloginfo('template_directory');?>/images/footer-image-desktop.jpg"/><!-- footer_pic -->
		
		</div><!-- footer_pic_wrapper -->
		
		<div class="footer_form_wrapper">
			
			<span class="large_header">Contact</span><!-- large_header-->
			
			<?php gravity_form(1, false, false, false, '', true, 12); ?>
			
			<span class="required_title">*required</span><!-- required_title -->

		</div><!-- footer_form_wrapper -->
	
	</div><!-- footer_inner -->
	
</footer><!-- footer_section -->


<?php wp_footer();?>


<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>	

</body>
</html>

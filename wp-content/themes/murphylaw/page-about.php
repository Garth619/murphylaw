<?php 
	
	
	/* Template Name: About */
	
	
	get_header(); ?>

<span id="about_flag" style="display: none"></span>

<div class="main">
	
<div class="profile_top_wrapper">
	
	<div class="profile_inner">
		
		<div class="profile_header_wrapper">
	
			<h1 class="bio_header">
		
				<span class="upper_header"><?php the_field( 'top_line' ); ?></span><!-- upper_header -->
				<span class="lower_header"><?php the_field( 'bottom_line' ); ?></span><!-- lower_header -->
		
			</h1><!-- bio_header -->
		
<!-- 			<span class="bio_position">Founder / Attorney</span> --><!-- bio_position -->
		
		</div><!-- profile_header_wrapper -->
		
		<div class="profile_image_wrapper">
			
			
			<?php $about_image = get_field( 'about_image' ); ?>
			
			<?php if ( $about_image ) { ?>
	
				<img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>" />

			<?php } ?>
			
		</div><!-- profile_image_wrapper -->
		
	
	</div><!-- profile_inner -->
	
	
</div><!-- profile_top_wrapper -->


<div class="profile_container content">
	
	
	<div class="profile_content">
		
		<?php get_template_part( 'loop', 'page' ) ?>
		
<!--
		<h2>Curabitur quis egestas purus, suspendisse sodales risus</h2>
		
		<p>Integer sed commodo lacus. Suspendisse sit amet egestas metus, vel fringilla eros. Suspendisse semper ante non metus suscipit, aliquam mattis lectus pretium. Praesent tellus lorem, semper sed viverra eu, gravida in elit. In interdum purus ac ornare porta. Etiam eros augue, pretium vel facilisis at, ultricies at eros. Etiam pellentesque, ipsum ut dapibus porttitor, ante velit consectetur sapien, at maximus urna purus sit amet felis. Curabitur et efficitur purus. Integer posuere augue vel leo tincidunt dictum. Mauris vel quam et arcu commodo fringilla. Fusce ultrices ac lacus quis tempor. Maecenas sagittis, nunc quis congue pharetra, mi velit bibendum quam, sit amet malesuada velit sapien vitae velit. Nam ut pretium mi.</p>
		
		<p>Pellentesque dignissim facilisis cursus. Nunc eget nunc neque. Nulla purus nibh, placerat id lectus quis, facilisis volutpat dui. Proin vel nibh vitae ligula commodo suscipit at eget massa. Aliquam bibendum nibh eu magna luctus, hendrerit tincidunt libero tristique. Etiam viverra eros eros, ac tempor felis vulputate a.</p>
		
		
		<p>Ut bibendum dui nec erat auctor, vel auctor lorem sodales. Morbi feugiat volutpat massa, non faucibus lectus maximus eu. Phasellus rhoncus vel nulla ultricies lacinia. Phasellus sem ante, rutrum efficitur tortor vel, convallis malesuada erat. Curabitur vitae lacus ornare, dapibus lacus et, lacinia orci. Vivamus interdum pulvinar ipsum non sollicitudin.
Maecenas placerat, lorem at volutpat viverra, libero enim commodo augue, eu sollicitudin ligula arcu in sem. Integer ullamcorper in augue sed sollicitudin.</p>


	<blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id quam at nisi venenatis</blockquote>

	<p>Nam mi tortor, scelerisque nec risus eget, elementum varius tortor. Suspendisse lorem sapien, sollicitudin a velit id, rutrum lobortis velit. Phasellus ut augue a quam fermentum tincidunt. Sed at vehicula tortor.</p>
	
	
	<div class="learn_more_play_wrapper">
		
		<div class="play_hack wistia_embed wistia_async_waichudc62 popover=true popoverContent=html">
			
			
		</div>
		
		<div class="about_play_button">
										
			<div class="about_play_button_inner">
										
				<span class="about_tri"></span>
								
			</div>
							
			<span class="about_gold_square"></span>
										
		</div>
	
		<div class="learn_play_title wistia_embed wistia_async_waichudc62 popover=true popoverContent=html">Learn about the firm</div>
		
	</div>
	
	
	<p>Donec dapibus lacus eget sapien molestie pellentesque. Maecenas placerat, lorem at volutpat viverra, libero enim commodo augue, eu sollicitudin ligula arcu in sem. Integer ullamcorper in augue sed sollicitudin. Mauris varius ante nibh, sed luctus est laoreet quis. Eget non blandit libero commodo non. Phasellus risus purus, interdum vel mollis non, sagittis viverra ante.</p>

<h2>Curabitur quis egestas purus, suspendisse sodales risus</h2>

<p>Phasellus et magna id ipsum placerat mollis nec sed nunc. Donec id urna ac mi commodo ullamcorper nec eu massa. Sed sed malesuada metus, eu malesuada elit. Nullam pretium, eros vel malesuada rhoncus, ligula orci consectetur lacus, ut efficitur metus diam sed ipsum. Sed sit amet mi malesuada, sodales ipsum vel, pretium metus. </p>
-->

		
	</div><!-- profile_content -->
	
		
</div><!-- profile_container -->
		
		
		<div id="about_slideshow" class="sec_two_slideshow">
			
			
			
			<?php if(get_field('about_logos')): ?>
			 
				<?php while(has_sub_field('about_logos')): ?>
			 
					<div class="sec_two_single_slide">
					
						<?php $logo = get_sub_field( 'logo' ); ?>
		
						<?php if ( $logo ) { ?>
			
							<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
		
						<?php } ?>
					
					</div><!-- sec_two_single_slide -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
			
				
				
				
				
			</div><!-- sec_two_slideshow -->
		
		
				
</div><!-- main -->



<?php get_footer(); ?>

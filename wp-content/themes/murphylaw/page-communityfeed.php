<?php /* Template Name: Community */ ?>


<?php get_header(); ?>

<?php get_template_part( 'banner', 'internal' );?>

<div class="main default_main">
	
	<?php get_sidebar('community'); ?>
	
	<div class="page_container content">
		
		<h1 class="blog_title">In the Community</h1><!-- blog_title -->
		
		<span class="community_feed_intro">The following are community organizations and events that Murphy Law Firm has a history of supporting and participating with:</span>
		
		<div class="communtiy_feed_wrapper">
			
			
			
			<?php 
			  $temp = $wp_query; 
			  $wp_query = null; 
			  $wp_query = new WP_Query(); 
			  $wp_query->query('showposts=1&post_type=community'.'&paged='.$paged); 
			
			  while ($wp_query->have_posts()) : $wp_query->the_post(); 
			?>
			
			  
			  
			  <div class="community_feed_single">
				
				<a class="" href="">
					
					
					<?php $community_logo = get_field( 'community_logo' ); ?>
					
					<img src="<?php echo $community_logo['url']; ?>" alt="<?php echo $community_logo['alt']; ?>"/>
					
					<h2 class="community_header"><?php the_title();?></h2><!-- community_header -->
					
					<span class="community_excerpt">Jack and Jill of America, Inc., is a membership organization of mothers with children ages 2 to 19, dedicated to nurturing future African American leaders by strengthening children through leadership development, volunteer service, philanthropic giving and civic duty.</span>
										
				</a>
				
			</div><!-- community_feed_single -->
			  
			
			
			<?php endwhile; ?>
			
			<nav>
			    <?php previous_posts_link('&laquo; Newer') ?>
			    <?php next_posts_link('Older &raquo;') ?>
			</nav>
			
			<?php 
			  $wp_query = null; 
			  $wp_query = $temp;  // Reset
			?>

			
			
			<div class="community_feed_single">
				
				<a class="" href="">
					
					<img src="<?php bloginfo('template_directory');?>/images/com-hospital.jpg"/>
					
					<h2 class="community_header">Community Header</h2><!-- community_header -->
					
					<span class="community_excerpt">Jack and Jill of America, Inc., is a membership organization of mothers with children ages 2 to 19, dedicated to nurturing future African American leaders by strengthening children through leadership development, volunteer service, philanthropic giving and civic duty.</span>
										
				</a>
				
			</div><!-- community_feed_single -->
			
			<div class="community_feed_single">
				
				<a class="" href="">
					
					<img src="<?php bloginfo('template_directory');?>/images/com-hospital.jpg"/>
					
					<h2 class="community_header">Community Header</h2><!-- community_header -->
					
					<span class="community_excerpt">Jack and Jill of America, Inc., is a membership organization of mothers with children ages 2 to 19, dedicated to nurturing future African American leaders by strengthening children through leadership development, volunteer service, philanthropic giving and civic duty.</span>
										
				</a>
				
			</div><!-- community_feed_single -->
			
			<div class="community_feed_single">
				
				<a class="" href="">
					
					<img src="<?php bloginfo('template_directory');?>/images/com-hospital.jpg"/>
					
					<h2 class="community_header">Community Header</h2><!-- community_header -->
					
					<span class="community_excerpt">Jack and Jill of America, Inc., is a membership organization of mothers with children ages 2 to 19, dedicated to nurturing future African American leaders by strengthening children through leadership development, volunteer service, philanthropic giving and civic duty.</span>
										
				</a>
				
			</div><!-- community_feed_single -->
			
			<div class="community_feed_single">
				
				<a class="" href="">
					
					<img src="<?php bloginfo('template_directory');?>/images/com-hospital.jpg"/>
					
					<h2 class="community_header">Community Header</h2><!-- community_header -->
					
					<span class="community_excerpt">Jack and Jill of America, Inc., is a membership organization of mothers with children ages 2 to 19, dedicated to nurturing future African American leaders by strengthening children through leadership development, volunteer service, philanthropic giving and civic duty.</span>
										
				</a>
				
			</div><!-- community_feed_single -->
			
			<div class="community_feed_single">
				
				<a class="" href="">
					
					<img src="<?php bloginfo('template_directory');?>/images/com-hospital.jpg"/>
					
					<h2 class="community_header">Community Header</h2><!-- community_header -->
					
					<span class="community_excerpt">Jack and Jill of America, Inc., is a membership organization of mothers with children ages 2 to 19, dedicated to nurturing future African American leaders by strengthening children through leadership development, volunteer service, philanthropic giving and civic duty.</span>
										
				</a>
				
			</div><!-- community_feed_single -->
			
		</div><!-- communtiy_feed_wrapper -->


	</div><!-- page_container -->
	
</div><!-- main -->


<?php get_footer(); ?>

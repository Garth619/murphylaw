
<?php get_header(); ?>

<?php get_template_part( 'banner', 'internal' );?>

<div class="main default_main">
	
	<?php get_sidebar('community'); ?>
	
	<div class="page_container content">
		
		<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			if(1 == $paged) { ?>

			<h1 class="blog_title">In the Community</h1><!-- blog_title -->
		
			<span class="community_feed_intro">The following are community organizations and events that Murphy Law Firm has a history of supporting and participating with:</span>
  
			
		<?php }?>
		
		
		<div class="communtiy_feed_wrapper">
			
			
		<?php if ( ! have_posts() ) : ?>
	
	
	<div id="post-0" class="post error404 not-found">
		
		<h2>Not Found</h2>
		
		<div class="entry-content">
			<p>Apologies, but no posts have been created</p>
			
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->


<?php endif; ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	
	<div class="community_feed_single">
	
		<?php $community_logo = get_field( 'community_logo' ); ?>
		
		<img src="<?php echo $community_logo['url']; ?>" alt="<?php echo $community_logo['alt']; ?>"/>
		
		<h2 class="community_header"><?php the_title();?></h2><!-- community_header -->
		
		<span class="community_excerpt"><?php the_content();?></span>
							
	
	</div><!-- community_feed_single -->
	
		
<?php endwhile; // end of loop ?>

<?php endif; ?>


<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	
	<div id="nav_below" class="navigation">
		
		<div class="nav_prev blog_nav"><?php next_posts_link( __( 'Prev' ) ); ?></div>
		
		<?php if(get_previous_posts_link()) { ?>
			
		<div class="nav_next blog_nav"><?php previous_posts_link( __( 'Next') ); ?></div>
		
		<?php } ?>
	
	</div><!-- #nav-below -->

<?php endif; ?>

	</div><!-- communtiy_feed_wrapper -->


	</div><!-- page_container -->
	
</div><!-- main -->


<?php get_footer(); ?>

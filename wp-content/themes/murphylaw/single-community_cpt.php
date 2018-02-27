<?php get_header(); ?>


<?php get_template_part( 'banner', 'internal' );?>

<div class="main default_main">
	
	<?php get_sidebar('community'); ?>
	
	<div class="page_container content">
		
		<a class="back_comm" href="<?php echo get_post_type_archive_link( 'community_cpt' ); ?>">< Back to the Community Page</a><!-- back_comm -->
			
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	
	<div class="community_feed_single">
	
		<?php $community_logo = get_field( 'community_logo' ); ?>
		
		<img src="<?php echo $community_logo['url']; ?>" alt="<?php echo $community_logo['alt']; ?>"/>
		
		<h2 class="community_header"><?php the_title();?></h2><!-- community_header -->
		
		<span class="community_excerpt"><?php the_content();?></span>
							
	
	</div><!-- community_feed_single -->
	
		
<?php endwhile; // end of loop ?>

<?php endif; ?>


		
	</div><!-- page_container -->
	
	
	
</div><!-- main -->


<?php get_footer(); ?>>
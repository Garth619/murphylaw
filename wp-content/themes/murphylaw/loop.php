
<?php if ( ! have_posts() ) : ?>
	
	
	<div id="post-0" class="post error404 not-found">
		
		<h2>Not Found</h2>
		
		<div class="entry-content">
			<p>Apologies, but no posts have been created</p>
			
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->


<?php endif; ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="post_wrapper">
		
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		
		<div class="meta">Posted on <span class="date"><?php $pfx_date = get_the_date(); echo $pfx_date ?></span> in <?php echo get_the_category_list();?></div><!-- post_title -->
		
		
		<div class="blog_content">
		
			<?php echo wp_trim_words( get_the_content(), 89, '...' );?>
		
		</div><!-- blog_content -->
		
		<a class="blog_read_more" href="<?php the_permalink();?>">Read More</a><!-- blog_read_more -->
		
		<?php edit_post_link( __( 'Edit'), '', '' ); ?>
		
		
		
	</div><!-- post_wrapper -->
	

		
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


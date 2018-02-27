<div class="sidebar blog">
	
	<div class="sidebar_blog_inner">
		
		
	
		<span class="comm_recent_posts">Recent Posts</span><!-- comm_recent_posts -->
		
		<ul class="comm_list">
			
			
			<?php $mymain_query = new WP_Query( array( 'post_type' => array ( 'community_cpt'),'posts_per_page' => '10', 'order' => 'DSC' ) ); while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
         
         
      	
      	<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
      	
      
      
      <?php endwhile; ?>
     <?php wp_reset_postdata(); // reset the query ?>

		
		</ul>
	
	</div><!-- sidebar_blog_inner -->
			
	
</div><!-- sidebar -->



			
			
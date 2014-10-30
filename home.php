<?php get_header(); ?>




 <div id="content">
    
        <div id="inner-content">

                <?php
				query_posts( 'p=50' );
				
				// set $more to 0 in order to only get the first part of the post
				global $more;
				$more = 0;
				
				// the Loop
				while (have_posts()) : the_post();
				?>

				<h1 class="page-header"><?php the_title(); ?></h1>

                <div class="top-para">
				<span class="edit"><?php edit_post_link(); ?></span>
					<?php the_content(); ?>
                </div>

				<?php endwhile; wp_reset_postdata(); ?>
				
				


                <div id="three-col-container">
				
				<?php
				//$first_query = new WP_Query('pagename=&page_id=41&showposts=1');
				$first_query = new WP_Query('cat=10&posts_per_page=1');
				while($first_query->have_posts()) : $first_query->the_post();
				?>				
				<div class="three-col-section">
				<span class="edit"><?php edit_post_link(); ?></span>
				<a href="/menus/" title="<?php the_permalink(); ?>">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/tabimg1.png" height="215" width="283" alt="">
				</a>
				<h2><?php the_title(); ?></h2>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/splitter-2.png" alt="">
				
				<p>
				<?php echo substr($post->post_content,0,220); ?>
				...<a href="/menus/" title="<?php the_title(); ?>">more</a>
				</p>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/sym1.png" alt="">
				</div>
				<?php endwhile; wp_reset_postdata(); ?>			
				
					
	                <div class="three-col-section">
						<?php
						$first_query = new WP_Query('pagename=&page_id=88&showposts=1');
						while($first_query->have_posts()) : $first_query->the_post();
						?>
						<span class="edit"><?php edit_post_link(); ?></span>	
                    	<a href="http://www.perkinreveller.co.uk/book-a-table/" title="<?php the_title(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/tabimg2.png" height="215" width="283" alt=""></a>	
                        <h2><?php the_title(); ?></h2>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/splitter-2.png" alt="">
                      <p>
					  <?php echo substr($post->post_content,0,220); ?>
					  ...<a href="http://www.perkinreveller.co.uk/book-a-table/" title="<?php the_title(); ?>">more</a>
					  </p>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/sym2.png" alt="">
						<?php endwhile; wp_reset_postdata(); ?>
	                </div>
					
					
					

	                <div class="three-col-section">
						<?php
						$first_query = new WP_Query('cat=4&posts_per_page=1');
						while($first_query->have_posts()) : $first_query->the_post();
						?>
						<span class="edit"><?php edit_post_link(); ?></span>
                    	<a href="<?php echo get_category_link('4'); ?>" title="<?php the_permalink(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/tabimg3.png" height="215" width="283" alt=""></a>
                        <h2><?php the_title(); ?></h2>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/splitter-2.png" alt="">
						<p>
						<?php echo substr($post->post_content,0,220); ?>
						...<a href="<?php echo get_category_link(4); ?>" title="<?php the_title(); ?>">more</a>
						</p>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/sym3.png" alt="">
						<?php endwhile; wp_reset_postdata(); ?>                        
	                </div>
				</div>
				
                <div class="clear"></div>
            
        </div>
    
    </div>







<?php get_footer(); ?>
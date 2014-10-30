<?php get_header(); ?>



<div id="content" class="<?php the_ID(); ?>"><div id="top-scrollpoint"></div>



<div id="inner-content">

	<div class="main-column">







				<?php while ( have_posts() ) : the_post(); ?>



					<?php get_template_part( 'content', 'pagefeed' ); ?>



					<?php #comments_template( '', true ); ?>



				<?php endwhile; // end of the loop. ?>





	</div><!--#main-column-->





            <div class="right-column">

				<?php get_sidebar(); ?>               

            </div>

            

            <div class="clear"></div>





</div>    







<?php get_footer(); ?>
<div id="top-scrollpoint"></div>

<?php get_header(); ?>



<div id="content" class="page-<?php the_ID(); ?>">

<div id="inner-content">

	<div class="main-column">

		<?php 

		global $wp_query;

		$page_object = $wp_query->get_queried_object();

		$my_page_id  = $wp_query->get_queried_object_id(); 

		if($my_page_id !== 2): 

		?>

		<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'pagefeed' ); ?>

		<?php endwhile; wp_reset_postdata();// end of the loop. ?>

		<?php else: ?>

		

		<?php



		if($my_page_id == 2){

			$slider = "Gallery";
		}

		


		global $post;

		$meteor_posttemp = $post;

		$meteor_options  = get_option( 'meteorslides_options' );

		$meteor_nav      = $meteor_options['slideshow_navigation'];

		$meteor_count    = 1;

		$meteor_loop     = new WP_Query( array(



		'post_type'      => 'slide',

		'slideshow'      => $slider,

		'posts_per_page' => $meteor_options['slideshow_quantity']

		)); 

		// Loop which loads the slideshow

		while ( $meteor_loop->have_posts() ) : $meteor_loop->the_post(); 

		$meteor_shim = wp_get_attachment_image_src( get_post_thumbnail_id(), 'featured-slide');

		$images[] = $meteor_shim[0];

		endwhile;

		wp_reset_postdata();

		?>		

		<!--

		<ul class="gallery-thumbs">

		<?php foreach($images as $key=>$image): ?>		

		<li>

		<a href="<?php echo $image; ?>" onclick="return false;" class="gal-links">

		<img src="<?php echo $image; ?>" width="160" height="120" class="imsrc" id="imsrc"/>

		</a>

		</li>

		<?php endforeach; ?>

		</ul>

		-->	

		<?php get_template_part( 'content', 'pagefeed' ); ?>

		<!--

		<ul class="gallery-thumbs">

		</ul>

		-->



		

		<?php endif; ?>

	</div><!--#main-column-->





	<div class="right-column">

		<?php get_sidebar(); ?>      

	</div>

<div class="clear"></div>

</div>    

<!--

<script type="text/javascript">

$('#gallery').before('').cycle({ 

    fx:     'scrollHorz', 

    speed:  'slow', 

    timeout: 3000, 

    pager:  '.gallery-thumbs',

	pagerAnchorBuilder: function(idx, slide) { 

        return '<li><a href="#" onclick="return false;" class="gal-links"><img src="' + slide.src + '" width="110" height="90" /></a></li>'; 

    } 	

});

</script>

-->

<?php get_footer(); ?>
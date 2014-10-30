<?php

/**

 * The template for displaying Category Archive pages.

 *

 * @package WordPress

 * @subpackage Twenty_Eleven

 * @since Twenty Eleven 1.0

 */



get_header(); 



global $wp_query;

$page_object = $wp_query->get_queried_object();

$my_page_id  = $wp_query->get_queried_object_id();





switch($my_page_id){

	case 11:

	$slider = "Gallery";

	break;	

	

	case 4:

	$slider = "News";

	break;

	

	case 5:

	$slider = "About";

	break;	

	

	case 6:

	$slider = "Restaurant";

	break;	

	

	case 7:

	$slider = "Bar";

	break;	

	

	case 10://41

	$slider = "menu-page";

	break;	

	

	case 88:

	$slider = "Book";

	break;

	

	default;

	$slider = "Home";

	break;

}



?>

<?php if($my_page_id == 11){ ?>

<script type="text/javascript">

$(document).ready(function(){

$('#gallery').before('').cycle({ 

fx:     'scrollHorz', 

speed:  'slow', 

timeout: 3000, 

pager:  '.gallery-thumbs',

pagerAnchorBuilder: function(idx, slide) {

return '<li><a href="#" onclick="return false;" class="gal-links"><img src="' + slide.src + '" width="90" height="70" /></a></li>';

/*

return '<li><a href="#" onclick="return false;" class="gal-links"><img src="http://s388488555.websitehome.co.uk/perkin-reveller/timthumb.php?src='+slide.src+ '&w=90&h70&z=2&zc=1" /></a></li>';

*/ 

} 	

});

});

</script>	

<?php } ?>

<div id="content" class="page-<?php the_ID(); ?>">



<div id="inner-content">

  <div class="main-column <?php echo $slider; ?>">

    <?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

<?php

/* Include the Post-Format-specific template for the content.

* If you want to overload this in a child theme then include a file

* called content-___.php (where ___ is the Post Format name) and that will be used instead.

*/

get_template_part( 'content', 'pagefeed' );

?>

<?php //the_post_thumbnail('medium');

//the_post_thumbnail( array ('527','346') );

?>

<?php 

//the_post_thumbnail( array (width,height) );

//the_post_thumbnail( array ('527','346') );

?>



<!--<p><?php //echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>-->

    

    <?php endwhile;  wp_reset_postdata(); ?>

    <?php else : ?>

    <div  class="post-item">

      <h1 class="entry-title">

        <?php _e( 'Nothing Found', 'twentyeleven' ); ?>

      </h1>

      <div class="entry-content">

        <p>

          <?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?>

        </p>

        <?php get_search_form(); ?>

      </div>

      <!-- .entry-content --> 

    </div>

    <?php endif; ?>

  </div>

  <!-- #main-column -->

  

  <div class="right-column">

    <?php get_sidebar(); ?>

  </div>

  <div class="clear"></div>

</div>

<?php get_footer(); ?>
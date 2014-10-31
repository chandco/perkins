<?php

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!--[if IE 6]>

<html id="ie6" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 7]>

<html id="ie7" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8]>

<html id="ie8" <?php language_attributes(); ?>>

<![endif]-->

<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->

<html <?php language_attributes(); ?>>

<!--<![endif]-->

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="viewport" content="width=device-width" />

<title>

<?php

	/*

	 * Print the <title> tag based on what is being viewed.

	 */

	global $page, $paged;



	wp_title( '|', true, 'right' );



	// Add the blog name.

	bloginfo( 'name' );



	// Add the blog description for the home/front page.

	$site_description = get_bloginfo( 'description', 'display' );

	if ( $site_description && ( is_home() || is_front_page() ) )

		echo " | $site_description";



	// Add a page number if necessary:

	if ( $paged >= 2 || $page >= 2 )

		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );



	?>

</title>


<link href="//cloud.webtype.com/css/178901ec-e394-472d-b3bf-0117dfb742dc.css" rel="stylesheet" type="text/css" />

<link rel="profile" href="http://gmpg.org/xfn/11" />



<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/css/perkin.css" />

<style>



/* hide the carousel while jquery loads */

.cs-hidden {

display:none;

position:absolute;

top:-500px;

left:-500px;

}



</style>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<!--[if lt IE 9]>

<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>

<![endif]-->

<?php

/* We add some JavaScript to pages with the comment form

* to support sites with threaded comments (when in use).

*/

if ( is_singular() && get_option( 'thread_comments' ) )

wp_enqueue_script( 'comment-reply' );



/* Always have wp_head() just before the closing </head>

* tag of your theme, or you will break many plugins, which

* generally use this hook to add elements to <head> such

* as styles, scripts, and meta tags.

*/

wp_head();

?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.jcarousellite.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.easing.1.3.js"></script>



<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.cycle.all.latest.js"></script>

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/slider-calls.js"></script>

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/backtotop.js"></script>



<?php

/* We add some JavaScript to pages with the comment form

* to support sites with threaded comments (when in use).

*/

if ( is_singular() && get_option( 'thread_comments' ) )

wp_enqueue_script( 'comment-reply' );



/* Always have wp_head() just before the closing </head>

* tag of your theme, or you will break many plugins, which

* generally use this hook to add elements to <head> such

* as styles, scripts, and meta tags.

*/

wp_head();

?>



<script type="text/javascript" src="../../image.php"></script>







</head>



<body>



<div id="top-scrollpoint"></div>

<!-- Page Wrapper -->

<div id="page-wrapper">

<div id="header"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">

<object data="<?php echo bloginfo('stylesheet_directory'); ?>/images/perkin-reveller-logo.svg" type="image/svg+xml" id='perkin-logo'>
  <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/perkin-reveller-logo.png" />
</object>

</a> </div>



<!--#header-->

<?php

global $wp_query;

$page_object = $wp_query->get_queried_object();

$my_page_id  = $wp_query->get_queried_object_id();



if($my_page_id == 10){

$menu_style = "

<style>

.main-column table{ position: relative; left: 20px;}

.main-column h3 { position: relative; left: 20px; width: 500px; text-align:center; border-bottom: 1px #000 solid; color: #ee3124;}

.main-column table tr td:nth-child(2){ width: 50px; border-left: 1px dotted #000; text-align: right; }

.main-column table tr td:nth-child(1){ width: 450px;}

.main-column table tr{width: 500px; margin-bottom: 15px;} 

</style>

";

echo $menu_style;

}



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

	$slider = "Menu";

	$var = "Tom";

	break;	

	

	case 88:

	$slider = "Book";

	break;

	

	default;

	$slider = "Home";

	break;

}



//if(get_post_type( $post->ID ) == "gallery"){$slider = "Gallery";}

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



//$images[] = $meteor_shim[0];



$data[] = array(

'images'=> $meteor_shim[0],

'title' => $post->post_title,

'link'	=> get_post_meta($post->ID, "slide_url_value", $single = true)

);

endwhile;

wp_reset_postdata();

//echo "<pre>";

//print_r($data);

//echo "</pre>";

?>

<?php 

//if(get_post_type( $post->ID ) == "gallery"){

if($my_page_id == 11){	

?>

<div class="inner-wrapper">



 <a href="" id="gallery-prev" class="gallery-pager-btn"></a> <a href="" id="gallery-next" class="gallery-pager-btn"></a>

  <div id="gallery">

    <?php foreach($data as $key=>$value): ?>

    <!--

	<img src="./image.php?width=1280&height=798&cropratio=1:1&image=<?php echo $value; ?>" alt="" class="gallery-image">

	-->

	<img src="<?php echo esc_url( home_url( '/' ) ); ?>timthumb.php?src=<?php echo $value['images']; ?>&w=1280&h=798&zc=1" alt="" class="gallery-image">

    <?php endforeach; ?>

  </div>

</div>

</div>

<?php } ?>

<script type="text/javascript">

$('#gallery').before('').cycle({ 

    fx:     'scrollHorz', 

    speed:  'slow', 

    timeout: 3000, 

    pager:  '.gallery-thumbs',

	pagerAnchorBuilder: function(idx, slide) { 

        return '<li><a href="#" onclick="return false;" class="gal-links"><img src="' + slide.src + '" width="90" height="70" /></a></li>'; 

    } 	

});

</script>

<div id="bannerWrapper">

<?php if($my_page_id !== 11){ ?>

<div class="inner-wrapper">

 <div id="placeholder" style="height: 307px; background: url('http://www.perkinreveller.co.uk/images/dummy-slider.jpg'); background-position: -1px 0px;" >

 <div id="slideshow-wrapper" class="cs-hidden">

    <div id="slideshow-container"> 



      <script type="text/javascript">

var a=document.getElementById('slideshow-wrapper');

a.style.height=a.offsetWidth+'px';

</script>



      <div class="strapline-container">

        <h2 class="strapline"><span>The Perkin Spirit</span></h2>

        <!--<h2 class="strapline line-two"><span>OF GOOD FOOD...</span></h2>-->

      </div>

      <a href="#" onclick="return false;" id="prev-btn" class="pager-btn prev"></a> <a href="#" onclick="return false;" id="next-btn" class="pager-btn next"></a>

      <div id="overlay-container"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/overlay-left.png" id="overlay-left" alt=""> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/overlay-right.png" id="overlay-right" alt=""> </div>

      <div id="slides">

        <ul class="anyslide">

          <?php 

		  $cs_hack = false;

		  foreach($data as $key=>$value): ?>

          <!--

		  <li><img src="./image.php?width=640&height=308&cropratio=2:1&image=<?php echo $value; ?>" alt="" class="gallery-image" border="0"> </li>

		  -->

          <?php

		  

				if ($cs_hack)

				{ 

					echo "<li class='cs-hidden'>";

				} else {

					echo "<li>";

				}

				$cs_hack = true; // from now on everything in the loop will apply hidden class

		 ?>

		  <?php $link = (!empty($value['link']))? $value['link'] : "javascript:void();"; ?>

		  <a href="<?php echo $link; ?>" title="<?php echo $value['title']; ?>" >

		  <img src="<?php echo esc_url( home_url( '/' ) ); ?>timthumb.php?src=<?php echo $value['images']; ?>&w=640&h=308&zc=1" alt="" class="gallery-image" border="0"> 

		  <span style="display:none;"><?php echo $value['title']; ?></span>

		  </a>

		  </li>

          <?php endforeach; ?>

        </ul>

      </div>

    </div>



  </div>

  </div>

</div>

<?php } ?>

<script type="text/javascript">



$(function() {

	$("#slides").jCarouselLite({

		auto: 5000,

		btnNext: ".next",

		btnPrev: ".prev",

		visible: 3,

		speed: 1000,

		//easing: "fadeOut",

		afterEnd: function(li) {

			if (start=true) {

				foo = $(li[1]).find("span").html();

				$("h2.strapline").hide().fadeIn(900).html("<span>"+foo+"</span>");

			}

		}

	});

	$("li.cs-hidden").removeClass('cs-hidden');

	$("div.cs-hidden").removeClass('cs-hidden');

});

</script> 

<script type="text/javascript">

var a=document.getElementById('slideshow-wrapper');

a.style.height=a.offsetWidth+'px';

</script>

	

<div id="menu-container">

<?php 

$menu = array( 

'theme_location'	=> 'primary',

'container_class'	=> false,

'menu_class'		=> '',

'menu_id'			=> 'menu',

'link_before'		=> '<span>',

'link_after'		=> '</span>',

'depth'				=> 0,

'show_home'			=> true,

//'before'			=> '',

//'after'			=> '' 

);

wp_nav_menu($menu); 

?>

</div>

<?php 

//echo get_post_type($post->ID);

//dynamic_sidebar('top-feature');  

//if ( function_exists( 'meteor_slideshow' ) ) { 

//meteor_slideshow("Cool","")  
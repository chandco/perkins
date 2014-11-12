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

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/css/perkin.css" />

<style>



/* hide the carousel while jquery loads */

#slideshow-wrapper.cs-hidden {

display:none;
position:absolute;

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

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" data-cfasync="false"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.form.min.js" data-cfasync="false"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.jcarousellite.min.js" data-cfasync="false"></script>

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.easing.1.3.js" data-cfasync="false"></script>



<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.cycle.all.latest.js" data-cfasync="false"></script>

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/slider-calls.js" data-cfasync="false"></script>

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/backtotop.js" data-cfasync="false"></script>



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


?>










</head>



<body <?php body_class($cat); ?>>



<div id="top-scrollpoint"></div>

<!-- Page Wrapper -->

<div id="page-wrapper">

<header id='main-header'>
<div id="header"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">

<?php include( get_stylesheet_directory() . "/images/perkin-reveller-logo.svg" ); ?>

</a> </div>

<!--#header-->

<?php

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





<div id="carousel">
	
		<a href="#" id="prev-btn" class="pager-btn prev"><i class="fa fa-caret-left"></i></a> <a href="#" id="next-btn" class="pager-btn next"><i class="fa fa-caret-right"></i></a>
		<ul id='carousel-slides' class="anyslide">
						<?php 
						$cs_hack = false;
						foreach($data as $key=>$value): ?>

							<li>
								<?php $link = ( !empty( $value['link'] ) ) ? $value['link'] : "javascript:void();"; ?>

								<a href="<?php echo $link; ?>" title="<?php echo $value['title']; ?>" >

								<img src="<?php echo esc_url( home_url( '/' ) ); ?>timthumb.php?src=<?php echo $value['images']; ?>&w=1600&h=800&zc=1" alt="" class="gallery-image" border="0"> 

								<span style="display:none;"><?php echo $value['title']; ?></span>

								</a>

							</li>

						<?php endforeach; ?>

					</ul>

				

				
</div>

</header>

<div id="menu-container" class='closed'>

<button id='navigation-dropdown' title='expand navigation menu'><i class='fa fa-bars'></i> Navigation</button>
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
<div class="clear" ></div>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN     	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<head>
<title>
<?php 

if (function_exists('is_tag') && is_tag()) {
single_tag_title('Tag Archive for &quot;'); echo '&quot; - ';
} elseif (is_archive()) {
wp_title(''); echo ' Archive - ';
} elseif (is_search()) {
echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';
} elseif (!(is_404()) && (is_single()) || (is_page())) {
wp_title(''); echo ' - ';
} elseif (is_404()) {
echo 'Not Found - ';
}
if (is_home()) {
bloginfo('name'); echo ' - '; bloginfo('description');
} else {
bloginfo('name');
}
if ($paged > 1) {
echo ' - page '. $paged;
} 

?>
<?php wp_title('|',true,'right').bloginfo('name');?>
</title>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

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
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php //bloginfo('template_directory'); ?>../js/cufon-yui.js" type="text/javascript"></script>
<script src="<?php //bloginfo('template_directory'); ?>../js/Saa_Series_D_D_400.font.js" type="text/javascript"></script>
<script src="<?php //bloginfo('template_directory'); ?>../js/Light_Roman_Std_300.font.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php //bloginfo('template_directory'); ?>../js/cufon-calls.js"></script>
<script type="text/javascript" src="<?php //bloginfo('template_directory'); ?>../js/jquery.cycle.all.latest.js"></script>
<script type="text/javascript" src="<?php //bloginfo('template_directory'); ?>../js/slider-calls.js"></script>
<script type="text/javascript" src="<?php //bloginfo('template_directory'); ?>../js/backtotop.js"></script>
</head>



<?php



// This theme uses wp_nav_menu() in one location.

require_once("library/gallery.php");

$path = "http://www.perkinreveller.co.uk/wp-content/themes/twentyeleven";

function home_page_menu_args( $args ) {



$args['show_home'] = true;



return $args;



}


add_filter('show_admin_bar', '__return_false');

add_filter( 'wp_page_menu_args', 'home_page_menu_args' );



register_nav_menus( array(

	//'primary' => __( 'Primary Navigation', 'perkins' ),

	'primary' => __( 'primary', 'perkins' ),

) );



function number_of_responses() {

	printf(_n('One Response to %2$s', '%1$s Response to %2$s', get_comments_number()), get_comments_number(), get_the_title()

	);

}


function remove_background_colours() {


remove_theme_support( 'custom-background' ) ;

}
add_action( 'after_setup_theme', 'remove_background_colours', 11 ); 



if (function_exists('register_sidebar')) {

	global $path;

	register_sidebar(array(

		'name' => 'Widget Area',

		'id' => 'widget-area',

		'before_widget' => '<div class="sidebar-section">',

		'after_widget' => '</div>',

		'befoer_title' => '<h3 class="saa">',

		'after_title' => '</h3><img src="'.$path.'/images/formsplitter.jpg" height="42" width="324" alt="">'

	));

}



if (function_exists('register_sidebar')) {

	register_sidebar(array(

		'name' => 'Bottom Area',

		'id' => 'bottom-area',

		'before_widget' => '<div>',

		'after_widget' => '</div>',

		'befoer_title' => '<h3>',

		'after_title' => '</h3>'

	));

}



if (function_exists('register_sidebar')) {

	register_sidebar(array(

		'name' => 'Cart Area',

		'id' => 'cart-area',

		'before_widget' => '<div>',

		'after_widget' => '</div>',

		'befoer_title' => '<h3>',

		'after_title' => '</h3>'

	));

}



if (function_exists('register_sidebar')) {

	register_sidebar(array(

		'name' => 'Top Feature',

		'id' => 'top-feature',

		'before_widget' => '<div id="top_content">',

		'after_widget' => '</div>',

		'befoer_title' => '<h3>',

		'after_title' => '</h3>'

	));

}



if (function_exists('register_sidebar')) {

	register_sidebar(array(

		'name' => 'Bottom Feature',

		'id' => 'bottom-feature',

		'before_widget' => '<div>',

		'after_widget' => '</div>',

		'befoer_title' => '<h3>',

		'after_title' => '</h3>'

	));

}





/**
 * Add intermediate image sizes to media gallery modal dialog
 */

 

function image_sizes_attachment_fields_to_edit( $form_fields, $post ) {

  if ( !is_array( $imagedata = wp_get_attachment_metadata( $post->ID ) ) )

    return $form_fields;

 

  if ( is_array($imagedata['sizes']) ) :

    foreach ( $imagedata['sizes'] as $size => $val ) :

      if ( $size != 'thumbnail' && $size != 'medium' && $size != 'large' ) :

        $css_id = "image-size-{$size}-{$post->ID}";

        $html .= '<div class="image-size-item"><input type="radio" name="attachments['.$post->ID.'][image-size]" id="'.$css_id.'" value="'.$size.'" />';

        $html .= '<label for="'.$css_id.'">'.$size.'</label>';

        $html .= ' <label for="'.$css_id.'" class="help">'.sprintf( __("(%d&nbsp;&times;&nbsp;%d)"), $val['width'], $val['height'] ). '</label>';

        $html .= '</div>';

      endif;      

    endforeach;

  endif;

 

  $form_fields['image-size']['html'] .= $html;

  return $form_fields;

}



add_filter( 'attachment_fields_to_edit', 'image_sizes_attachment_fields_to_edit', 100, 2 );



if(extension_loaded("zlib") && (ini_get("output_handler") != "ob_gzhandler"))

    add_action('wp', create_function('', '@ob_end_clean();@ini_set("zlib.output_compression", 1);'));



function perkin_enqueue_scripts() {
	

	wp_enqueue_script( 'jquery-ajax-form', get_stylesheet_directory_uri() . "/js/jquery.form.min.js", array('jquery'), 1, false );
	wp_enqueue_script( 'magnific-popup', get_stylesheet_directory_uri() . "/js/magnific-popup.js", array('jquery'), 1, true );
	wp_enqueue_script( 'perkin-main', get_stylesheet_directory_uri() . "/js/main-dist.js", array('jquery', 'magnific-popup'), 1, true );
}

add_action("wp_enqueue_scripts","perkin_enqueue_scripts");
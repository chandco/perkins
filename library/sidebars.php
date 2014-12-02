<?php

function cf_register_sidebars() {


	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __( 'Main Sidebar', 'perkin-sidebar' ),
		'description' => __( 'The main (primary) sidebar.', 'perkins' ),
		'before_widget' => '<div id="%1$s" class="sidebar-section %2$s">',
		'after_widget' => '<div style="clear: both;"></div></div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

add_action("widgets_init","cf_register_sidebars");

?>
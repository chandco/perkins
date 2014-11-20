<?php

function show_perkin_menus() {
	
	

	// hard coded bad mmkay
	$args = array(
		'post_parent' => 394,
		'order' => 'ASC',
		'orderby' => 'menu_order',
		'post_type' => 'page',
		'posts_per_page'   => -1,
		);

	$menus = get_posts($args);
	
	$output = "<ul class='perkin-menu-list'>";

	foreach ($menus as $menu) {
		$output .= "<li><a href='" . get_permalink($menu->ID) . "'>" . $menu->post_title . "</a></li>";
	}
	$output .= "</ul>";

	return $output;
}

add_shortcode("perkinmenus","show_perkin_menus");
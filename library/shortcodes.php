<?php

function show_perkin_menus() {
	
	global $wpdb;
	$id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = 'menus'");


	$args = array(
		'post_parent' => $id,
		'order' => 'ASC',
		'orderby' => 'menu_order',
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
<?php

add_action('wp_enqueue_scripts', function() {
	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css', [], false);
	wp_enqueue_script('script.js', get_stylesheet_directory_uri() . '/script.js', [], false);
	wp_enqueue_script('slide.js', get_stylesheet_directory_uri() . '/slide.js', [], false, true);
});

add_action('after_setup_theme', function() {
	register_nav_menu('primary', '主导航');
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(1024, 1024);
	add_image_size('fhd', 1920, 1200, true);
	add_image_size('hvga', 480, 320, true);
});

add_filter('nav_menu_link_attributes', function($attrs, $item) {
	
	$attrs['class'] = $attrs['class'] ?: [];
	
	$attrs['class'][] = 'menu-link';
	
	if(array_intersect(['current-menu-item', 'current-page-ancestor', 'current-post-ancestor'], $item->classes ?: [])) {
		$attrs['class'][] = 'set_active';
	}
	
	$attrs['class'] = implode(' ', $attrs['class']);
	
	$attrs['role'] = 'button';
	
	return $attrs;
	
}, 10, 2);

add_filter('nav_menu_css_class', function($classes, $item) {
	
	if(in_array('menu-item-has-children', $classes)) {
		$classes[] = 'has-dropdown';
	}
	
	return $classes;
	
}, 10, 2);

show_admin_bar( false );

add_action('wp', function() {
	$coming_soon_page = get_posts(array('name'=>'coming-soon', 'post_type'=>'page'));
	if($coming_soon_page && !is_page('coming-soon') && !is_admin() && !current_user_can('administrator')) {
	    header('Location: ' . get_permalink($coming_soon_page[0]->ID)); exit;
	}
});

class Kinder_Walker_Nav_Menu extends Walker_Nav_Menu {
	public function start_lvl(&$output, $depth = 0, $args = array())
	{
		parent::start_lvl($output, $depth, $args);
		$output = str_replace('sub-menu', 'sub-menu nav-dropdown menu', $output);
	}
}

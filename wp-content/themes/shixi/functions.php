<?php

add_action('wp_enqueue_scripts', function() {
	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css', [], '2018-01-07');
	wp_enqueue_script('script.js', get_stylesheet_directory_uri() . '/script.js', [], '2018-01-01');
	wp_enqueue_script('slide.js', get_stylesheet_directory_uri() . '/slide.js', [], '2018-01-01', true);
});

add_action('after_setup_theme', function() {
	register_nav_menu('top', '顶部导航');
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(1024, 1024);
	add_image_size('fhd', 1920, 1200, true);
	add_image_size('hvga', 480, 320, true);
});

show_admin_bar( false );

add_action('wp', function() {
	$coming_soon_page = get_posts(array('name'=>'coming-soon', 'post_type'=>'page'));
	if($coming_soon_page && !is_page('coming-soon') && !is_admin() && !current_user_can('administrator')) {
	    header('Location: ' . get_permalink($coming_soon_page[0]->ID)); exit;
	}
});

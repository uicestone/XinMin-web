<?php

add_action('wp_enqueue_scripts', function() {
	wp_register_style('style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('style');
	wp_enqueue_style('ionicons', get_stylesheet_directory_uri() . '/css/ionicons.min.css', [], '2.0.0');
	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css', [], '4.5.0');
	wp_enqueue_script('modernizr', get_stylesheet_directory_uri() . '/js/modernizr.js', [], '2.8.3');
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_stylesheet_directory_uri() . '/js/jquery.js', [], false, true);
	wp_enqueue_script('jquery.nicescroll.min', get_stylesheet_directory_uri() . '/js/jquery.nicescroll.min.js', [], false, true);
	wp_enqueue_script('menu.responsive', get_stylesheet_directory_uri() . '/js/menu.responsive.js', [], false, true);
	wp_enqueue_script('scroll.menu', get_stylesheet_directory_uri() . '/js/scroll.menu.js', [], false, true);
	wp_enqueue_script('parallax.materialize', get_stylesheet_directory_uri() . '/js/parallax.materialize.js', [], false, true);
	wp_enqueue_script('video.lightning', get_stylesheet_directory_uri() . '/js/video.lightning.js', [], false, true);
	wp_enqueue_script('isotope-docs.min', get_stylesheet_directory_uri() . '/js/isotope-docs.min.js', [], false, true);
	wp_enqueue_script('jquery.bxslider.min', get_stylesheet_directory_uri() . '/js/jquery.bxslider.min.js', [], false, true);
	wp_enqueue_script('jquery.flexslider-min', get_stylesheet_directory_uri() . '/js/jquery.flexslider-min.js', [], false, true);
	wp_enqueue_script('waypoints.min', get_stylesheet_directory_uri() . '/js/waypoints.min.js', [], false, true);
	wp_enqueue_script('counter.plugin', get_stylesheet_directory_uri() . '/js/counter.plugin.js', [], false, true);
	wp_enqueue_script('slick.min', get_stylesheet_directory_uri() . '/js/slick.min.js', [], false, true);
	wp_enqueue_script('smk-accordion', get_stylesheet_directory_uri() . '/js/smk-accordion.js', [], false, true);
	wp_enqueue_script('imagelightbox.min', get_stylesheet_directory_uri() . '/js/imagelightbox.min.js', [], false, true);
	wp_enqueue_script('light_box_img', get_stylesheet_directory_uri() . '/js/light_box_img.js', [], false, true);
	wp_enqueue_script('uikit.min', get_stylesheet_directory_uri() . '/js/uikit.min.js', [], false, true);
	wp_enqueue_script('sticky.menu', get_stylesheet_directory_uri() . '/js/sticky.menu.js', [], false, true);
	wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/custom.js', [], false, true);
	wp_enqueue_script('jquery.themepunch.tools.min', get_stylesheet_directory_uri() . '/js/slider/jquery.themepunch.tools.min.js', [], false, true);
	wp_enqueue_script('jquery.themepunch.revolution.min', get_stylesheet_directory_uri() . '/js/slider/jquery.themepunch.revolution.min.js', [], false, true);
	wp_enqueue_script('revolution.extension.actions.min', get_stylesheet_directory_uri() . '/js/slider/revolution.extension.actions.min.js', [], false, true);
	wp_enqueue_script('revolution.extension.carousel.min', get_stylesheet_directory_uri() . '/js/slider/revolution.extension.carousel.min.js', [], false, true);
	wp_enqueue_script('revolution.extension.kenburn.min', get_stylesheet_directory_uri() . '/js/slider/revolution.extension.kenburn.min.js', [], false, true);
	wp_enqueue_script('revolution.extension.layeranimation.min', get_stylesheet_directory_uri() . '/js/slider/revolution.extension.layeranimation.min.js', [], false, true);
	wp_enqueue_script('revolution.extension.migration.min', get_stylesheet_directory_uri() . '/js/slider/revolution.extension.migration.min.js', [], false, true);
	wp_enqueue_script('revolution.extension.navigation.min', get_stylesheet_directory_uri() . '/js/slider/revolution.extension.navigation.min.js', [], false, true);
	wp_enqueue_script('revolution.extension.parallax.min', get_stylesheet_directory_uri() . '/js/slider/revolution.extension.parallax.min.js', [], false, true);
	wp_enqueue_script('revolution.extension.slideanims.min', get_stylesheet_directory_uri() . '/js/slider/revolution.extension.slideanims.min.js', [], false, true);
	wp_enqueue_script('revolution.extension.video.min', get_stylesheet_directory_uri() . '/js/slider/revolution.extension.video.min.js', [], false, true);
	wp_enqueue_script('custom_slider', get_stylesheet_directory_uri() . '/js/slider/custom_slider.js', [], false, true);
});

add_action('after_setup_theme', function() {
	register_nav_menu('primary', '主导航');
	add_theme_support('post-thumbnails');
	add_image_size('intro', 390, 394, true);
	add_image_size('banner', 1920, 1200, true);
	add_image_size('home-news', 519, 347, true);
	add_image_size('home-gallery', 370, 250, true);
});

add_filter('nav_menu_link_attributes', function($attrs, $item) {
	
	$attrs['class'] = $attrs['class'] ?: [];
	
	$attrs['class'][] = 'menu-link';
	
	if(array_intersect(['current-menu-item', 'current-page-ancestor', 'current-post-ancestor'], $item->classes)) {
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

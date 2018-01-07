<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php bloginfo('sitename');?></title>
	<script type="text/javascript">
        var slideimages = <?=json_encode(array_map(function ($post) { return get_the_post_thumbnail_url($post->ID, 'fhd'); }, get_posts(['category_name' => '头图'])))?>;
	</script>
	<?php wp_head();?>
</head>
<body onLoad="MM_preloadImages('<?=get_stylesheet_directory_uri()?>/images/tindex_03.jpg','<?=get_stylesheet_directory_uri()?>/images/tindex_05.jpg','<?=get_stylesheet_directory_uri()?>/images/tindex_07.jpg','<?=get_stylesheet_directory_uri()?>/images/tindex_09.jpg','<?=get_stylesheet_directory_uri()?>/images/tindex_21.jpg','<?=get_stylesheet_directory_uri()?>/images/tindex_23.jpg','<?=get_stylesheet_directory_uri()?>/images/tindex_25.jpg','<?=get_stylesheet_directory_uri()?>/images/tindex_27.jpg','<?=get_stylesheet_directory_uri()?>/images/tindex_31.jpg')">
<table width="100%" height="100%" align="center" cellspacing="0" cellpadding="0">
	<tr>
		<td align="center" valign="top">
            <?php if (!is_home()): ?>
            <?php wp_nav_menu(['theme_location' => 'top']); ?>
            <?php endif; ?>

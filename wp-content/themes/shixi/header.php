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
		<td align="center" valign="middle">
            <?php if (is_home()): ?>
			<table width="998" border="0" cellspacing="0" cellpadding="0" align="center">
				<tr>
					<td width="632" rowspan="2">
						<div align="left">
							<img src="<?=get_stylesheet_directory_uri()?>/images/index_01.png"
								 style="width:92px; margin: 10px; float: left;">
							<h1 style="float: left; line-height: 65px; font-size: 38px; margin-left: 15px; color: #f6ae32; font-family: KaiTi;"><?php bloginfo('sitename'); ?></h1>
						</div>
					</td>
					<td height="62" colspan="8" align="right" valign="middle">
						<font color="#333333" style="font-size:12px; "><?=date('Y年m月d日')?> </font>
					</td>
				</tr>
			</table>
            <?php else: ?>
            <?php wp_nav_menu(['theme_location' => 'top']); ?>
            <?php endif; ?>

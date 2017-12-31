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
            <?php if (is_home()): ?>
			<table width="998" border="0" cellspacing="0" cellpadding="0" align="center" style="position: absolute;left: 50%;margin-left:-499px">
				<tr>
					<td width="632" rowspan="2">
						<div align="left">
							<img src="<?=get_stylesheet_directory_uri()?>/images/index_01.png"
								 style="width:92px;margin:10px;float:left;margin-left:184px">
						</div>
					</td>
					<td height="62" colspan="8" align="right" valign="middle">
						<font color="#333333" style="font-size:12px; "><?=date('Y年m月d日', time() + get_option('gmt_offset') * HOUR_IN_SECONDS)?> </font>
                        <form>
                            <input type="text" name="s" style="height:20px">
                            <input type="submit" value="搜索">
                        </form>
					</td>
				</tr>
			</table>
            <?php else: ?>
            <?php wp_nav_menu(['theme_location' => 'top']); ?>
            <?php endif; ?>

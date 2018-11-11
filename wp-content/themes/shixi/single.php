<?php the_post(); get_header(); ?>

<table cellpadding="0" cellspacing="0" width="998" align="center">
	<tbody>
	<tr>
		<td>
			<img src="<?=get_stylesheet_directory_uri()?>/images/banner2.jpg?ver=2018-01-01"
				 name="slide" border="0" width="998" height="234" style="object-fit: cover; float: left;
                    z-index: 1; padding: 0px; margin: 0px; filter: progid:DXImageTransform.Microsoft.Pixelate(MaxSquare=15,Duration=1)"
				 onclick="alert(this.src)">
		</td>
	</tr>
	</tbody>
</table>
<table cellpadding="0" cellspacing="0" width="998" height="1" align="center">
	<tbody>
	<tr>
		<td bgcolor="#333333"></td>
	</tr>
	</tbody>
</table>
<table cellpadding="0" cellspacing="0" width="998" height="6" align="center">
	<tbody>
	<tr>
		<td bgcolor="#b4e4ec"></td>
	</tr>
	</tbody>
</table>


<table cellpadding="0" cellspacing="0" width="998" align="center">
	<tbody>
	<tr>
		<td width="255" align="left" valign="top" height="1" bgcolor="#b4e4ec">
			<table width="250" cellpadding="1" cellspacing="1" height="100%" bgcolor="#b4e4ec">
				<tbody>
				<tr>
					<td valign="top" bgcolor="#b4e4ec">
						<table border="0" cellspacing="0" cellpadding="0">
							<tbody>
							<tr>
								<td width="250" height="39" align="center"
									style="font-size:16px; font-family:'黑体'; color:#fff; word-spacing:5px;"
									background="<?=get_stylesheet_directory_uri()?>/images/b1.jpg?ver=2018-01-01"> <?=get_category($cat)->name?>
								</td>
							</tr>
							</tbody>
						</table>

						<table width="250" bgcolor="#b4e4ec" cellpadding="0" cellspacing="0">

							<tbody>
							<tr>
								<td height="30" valign="middle"
									style="font-size:14px; font-family:'微软雅黑'; display:inline; padding-top:10px; ">
									<ul class="cat-items">
										<?php wp_list_categories(['child_of' => get_ancestors(get_the_category()[0]->term_id, 'category')[0], 'hide_empty' => false, 'title_li' => false, 'show_option_none' => '']); ?>
									</ul>
								</td>
							</tr>

							</tbody>
						</table>
					</td>
				</tr>
				</tbody>
			</table>


		</td>
		<td width="743" align="right" valign="top">

			<table cellpadding="0" cellspacing="0">
				<tbody>
				<tr>
					<td height="6"></td>
				</tr>
				</tbody>
			</table>

			<table width="740" bgcolor="#b4e4ec" cellpadding="1" cellspacing="1">
				<tbody>
				<tr>
					<td align="left" height="25" bgcolor="#FFFFFF" style="font-size:14px; ">&nbsp;&nbsp; 您现在的位置：<a
							href="<?=site_url()?>">首页</a> &gt;&gt;
						<?=the_category(' >> ')?>
					</td>
				</tr>
				</tbody>
			</table>

			<table cellpadding="0" cellspacing="0">
				<tbody>
				<tr>
					<td height="6"></td>
				</tr>
				</tbody>
			</table>


			<table width="740" bgcolor="#b4e4ec" cellpadding="1" cellspacing="1">
				<tbody><tr>
					<td bgcolor="#FFFFFF" valign="top" style="padding:6px;" height="500">


						<div style="font-size:24px; font-weight:bold; text-align:center; margin-bottom: 10px; padding: 8px 15px"><?php the_title(); ?></div>
						<div style="height:18px; font-size:14px; text-align:right; padding-right:20px;">发布时间：<?php the_date(); ?></div>

						<div class="content" style="text-align:left;word-break:break-all;font-size:14px; width:720px; overflow-x:scroll;">
                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'aligncenter']); ?>
							<?php the_content(); ?>
						</div>
					</td>
				</tr>
				</tbody>
			</table>

		</td>
	</tr>
	</tbody>
</table>
<?php get_footer(); ?>

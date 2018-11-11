<?php

$category_parents = get_category_parents($cat, true, ' >> ');
$child_cats = get_term_children($cat, 'category');
$parent_cat_id = wp_get_term_taxonomy_parent_id($cat, 'category');

get_header(); ?>

<table cellpadding="0" cellspacing="0" width="998" align="center">
    <tbody>
    <tr>
        <td>
            <img src="<?=get_stylesheet_directory_uri()?>/images/banner-201811.jpg"
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
                                        <?php wp_list_categories(['child_of' => $child_cats ? $cat : $parent_cat_id, 'hide_empty' => false, 'title_li' => false, 'show_option_none' => '', 'orderby' => 'ID']); ?>
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

			<?php if (is_string($category_parents)): ?>
            <table width="740" bgcolor="#b4e4ec" cellpadding="1" cellspacing="1">
                <tbody>
                <tr>
                    <td align="left" height="25" bgcolor="#FFFFFF" style="font-size:14px; ">&nbsp;&nbsp; 您现在的位置：
                        <a href="<?=site_url()?>">首页</a> &gt;&gt;
                        <?=substr($category_parents, 0, -4)?>
                    </td>
                </tr>
                </tbody>
            </table>
			<?php endif; ?>

            <table cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td height="6"></td>
                </tr>
                </tbody>
            </table>


            <table width="740" bgcolor="#b4e4ec" cellpadding="1" cellspacing="1" style="table-layout: fixed">
                <tbody>
                <tr>
                    <td bgcolor="#FFFFFF" align="center" width="470" style="font-size:14px">标题</td>
                    <td bgcolor="#FFFFFF" align="center" width="150" style="font-size:14px">栏目</td>
                    <td height="30" bgcolor="#FFFFFF" align="center" width="120" style="font-size:14px">日期</td>
                </tr>

                <?php $post_count = 0; while (have_posts()): the_post(); $post_count++ ?>
                <tr>
                    <td bgcolor="#FFFFFF" align="left" style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap;"> &nbsp; <img src="<?=get_stylesheet_directory_uri()?>/images/d1.gif"> <a
                                href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></td>
                    <td bgcolor="#FFFFFF" align="center"><?php the_category(', '); ?></td>
                    <td height="30" bgcolor="#FFFFFF" align="center"><?=get_the_date()?></td>
                </tr>
                <?php endwhile; ?>

                <?php for ($i = get_query_var('posts_per_page') - $post_count; $i > 0; $i--): ?>
                <tr>
                    <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                    <td bgcolor="#FFFFFF" align="center">&nbsp;</td>
                    <td height="30" bgcolor="#FFFFFF" align="center">&nbsp;</td>
                </tr>
                <?php endfor; ?>

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
                <tbody>
                <tr>
                    <td height="30" bgcolor="#FFFFFF" align="center" style="font-size:14px ">
                        <?=paginate_links()?>
                    </td>
                </tr>

                </tbody>
            </table>


        </td>
    </tr>
    </tbody>
</table>
<?php get_footer(); ?>

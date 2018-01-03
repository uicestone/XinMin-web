<?php get_header(); ?>

<table cellpadding="0" cellspacing="0" width="998" align="center">
    <tr>
        <td>
            <img src="<?=get_stylesheet_directory_uri()?>/images/banner.jpg?ver=2018-01-01" name="slide" border="0"
                 width="998" style="float: left;
        z-index: 1; padding: 0px; margin: 0px; filter: progid:DXImageTransform.Microsoft.Pixelate(MaxSquare=150,Duration=1)"
                 onClick="if (this.src=='<?=get_stylesheet_directory_uri()?>/images/4.jpg'){window.open('regopen.html')}">
        </td>
    </tr>
</table>

<table cellpadding="0" cellspacing="0" width="998" height="6" align="center">
    <tr>
        <td></td>
    </tr>
</table>

<table width="998" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr>
        <td>
            <table width="998" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td valign="top">
                        <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><a href="" target="_blank"><img
                                                src="<?=get_stylesheet_directory_uri()?>/images/web1-01.jpg?ver=2018-01-01"
                                                width="288" height="33" border="0"></a></td>
                            </tr>
                            <tr>
                                <td width="288" height="315" background="<?=get_stylesheet_directory_uri()?>/images/web1-06.jpg?ver=2018-01-01" align="center"
                                    valign="top">

                                    <table width="280" height="250" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td height="9"></td>
                                        </tr>
                                        <tr>
                                            <td width="280" height="240" style="vertical-align: top; overflow-y:hidden; line-height:2.0">
                                                <?php foreach (get_posts(['category_name' => '新闻']) as $post):?>
                                                <div style="line-height:1.5; width:275px; height:25px;">
                                                    &nbsp;<img src="<?=get_stylesheet_directory_uri()?>/images/d1.gif">
                                                    <a href="<?=get_the_permalink($post->ID)?>"
                                                       title="<?=get_the_title($post->ID)?>"
                                                       style="font-size:12px;"><?=get_the_title($post->ID)?></a></div>
                                                <?php endforeach;?>
                                            </td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                        </table>
                    </td>
                    <td width="7" height="271"></td>
                    <td>
                        <table cellpadding="0" cellspacing="0" border="0">
                            <tr align="center" style="line-height:24px;">
                                <td width="8" height="116"></td>
                                <td width="100">
                                    <a style="font-size:12px;" href=""
                                       target="_blank">
                                        <img src="<?=get_stylesheet_directory_uri()?>/images/tp08.jpg?ver=2018-01-01"
                                             width="60" border="0" style="margin-bottom:5px;"><br>
                                        校园公示
                                    </a>
                                </td>
                                <td width="100">
                                    <a style="font-size:12px;" href="../appfile/schoolbased/mine.html"
                                       target="_blank">
                                        <img src="<?=get_stylesheet_directory_uri()?>/images/tp04.jpg?ver=2018-01-01"
                                             width="60" border="0" style="margin-bottom:5px;"><br>
                                        校内通知
                                    </a>
                                </td>
                                <td width="100">
                                    <a style="font-size:12px;" href=""
                                       target="_blank">
                                        <img src="<?=get_stylesheet_directory_uri()?>/images/tp05.jpg?ver=2018-01-01"
                                             width="60" border="0" style="margin-bottom:5px;"><br>
                                        考勤管理
                                    </a>
                                </td>
                                <td width="100">
                                    <a style="font-size:12px;" href="#" target="_blank"
                                       onclick="return false;">
                                        <img src="<?=get_stylesheet_directory_uri()?>/images/tp06.jpg?ver=2018-01-01"
                                             width="60" border="0" style="margin-bottom:5px;"><br>
                                        车辆使用
                                    </a>
                                </td>
                                <td width="100">
                                    <a style="font-size:12px;" href=""
                                       target="_blank" onclick="alert('请先登录');return false;">
                                        <img src="<?=get_stylesheet_directory_uri()?>/images/tp07.jpg?ver=2018-01-01"
                                             width="60" border="0" style="margin-bottom:5px;"><br>
                                        场馆预约
                                    </a>
                                </td>
                                <td width="100">
                                    <a style="font-size:12px;" href=""
                                       target="_blank" onclick="alert('请先登录');return false;">
                                        <img src="<?=get_stylesheet_directory_uri()?>/images/tp03.jpg?ver=2018-01-01"
                                             width="60" border="0" style="margin-bottom:5px;"><br>
                                        资产管理
                                    </a>
                                </td>


                                <td width="100">
                                    <a style="font-size:12px;" href=""
                                       target="_blank" onclick="alert('请先登录');return false;">
                                        <img src="<?=get_stylesheet_directory_uri()?>/images/tp02.jpg?ver=2018-01-01"
                                             width="60" border="0" style="margin-bottom:5px;"><br>
                                        设备报修
                                    </a>
                                </td>

                            </tr>

                        </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="703" height="6"></td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td><a target="_blank" class="home-link" href="<?=site_url('category/学校简介')?>"
                                                   onMouseOut="MM_swapImgRestore()"
                                                   onMouseOver="MM_swapImage('Image9','','<?=get_stylesheet_directory_uri()?>/images/web2-08.jpg',1)"><img
                                                            src="<?=get_stylesheet_directory_uri()?>/images/web1-08.jpg?ver=2018-01-01"
                                                            name="Image9" width="230" height="110"
                                                            border="0"><span class="text">学校简介</span></a></td>
                                            <td width="6" height="110"></td>
                                            <td><a target="_blank" class="home-link" href="<?=site_url('category/德育天地')?>"
                                                   onMouseOut="MM_swapImgRestore()"
                                                   onMouseOver="MM_swapImage('Image18','','<?=get_stylesheet_directory_uri()?>/images/web2-22.jpg',1)"><img
                                                            src="<?=get_stylesheet_directory_uri()?>/images/web1-22.jpg?ver=2018-01-01"
                                                            name="Image18" width="230" height="110"
                                                            border="0"><span class="text">德育天地</span></a></td>
                                            <td width="7" height="110"></td>
                                            <td><a target="_blank" class="home-link" href="<?=site_url('category/教育纵横')?>"
                                                   onMouseOut="MM_swapImgRestore()"
                                                   onMouseOver="MM_swapImage('Image10','','<?=get_stylesheet_directory_uri()?>/images/web2-10.jpg',1)"><img
                                                            src="<?=get_stylesheet_directory_uri()?>/images/web1-10.jpg?ver=2018-01-01"
                                                            name="Image10" width="230" height="110"
                                                            border="0"><span class="text">教育纵横</span></a></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td width="703" height="6"></td>
                            </tr>
                            <tr>
                                <td>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td><a target="_blank" class="home-link" href="<?=site_url('category/教师发展')?>"
                                                   onMouseOut="MM_swapImgRestore()"
                                                   onMouseOver="MM_swapImage('Image14','','<?=get_stylesheet_directory_uri()?>/images/web2-18.jpg',1)"><img
                                                            src="<?=get_stylesheet_directory_uri()?>/images/web1-18.jpg?ver=2018-01-01"
                                                            name="Image14" width="230" height="110"
                                                            border="0"><span class="text">教师发展</span></a></td>
                                            <td width="6" height="110"></td>
                                            <td><a target="_blank" class="home-link" href="<?=site_url('category/新民党建')?>"
                                                   onMouseOut="MM_swapImgRestore()"
                                                   onMouseOver="MM_swapImage('Image19','','<?=get_stylesheet_directory_uri()?>/images/web2-24.jpg',1)"><img
                                                            src="<?=get_stylesheet_directory_uri()?>/images/web1-24.jpg?ver=2018-01-01"
                                                            name="Image19" width="230" height="110"
                                                            border="0"><span class="text">新民党建</span></a></td>
                                            <td width="7" height="110"></td>
                                            <td><a target="_blank" class="home-link" href="<?=site_url('category/教工之家')?>"
                                                   onMouseOut="MM_swapImgRestore()"
                                                   onMouseOver="MM_swapImage('Image17','','<?=get_stylesheet_directory_uri()?>/images/web2-20.jpg',1)"><img
                                                            src="<?=get_stylesheet_directory_uri()?>/images/web1-20.jpg?ver=2018-01-01"
                                                            name="Image17" width="230" height="110"
                                                            border="0"><span class="text">教工之家</span></a></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<?php get_footer(); ?>

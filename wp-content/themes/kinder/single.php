<?php get_header(); the_post(); ?>
<main id="main" class="page_content page_blog">
		<div class="container">
			<div class="row">
<!-- blog single -->
<div class="col-md-9 col-lg-9">
<div class="blog_single_content flw">
	<div class="box_img_top">
		<?php the_post_thumbnail(); ?>
	</div>
	<div class="name_">
		<a href="<?php the_permalink(); ?>" class="btn_name"><?php the_title(); ?></a>
	</div>
	<ul class="list_if">
		<li>发布于 <a href="#"><?php the_date('Y年m月d日'); ?></a></li>
	</ul>
	<div class="content_view flw">
		<div class="txt">
			<?php the_content(); ?>
		</div>
		<!-- <ul class="tag_">
			<li><a href="#">Awesome</a></li>
			<li><a href="#">Cute</a></li>
			<li><a href="#" class="atv">Kidkat</a></li>
			<li><a href="#">Kids</a></li>
		</ul> -->
		<!-- <div class="social_if">
			<ul class="left_l">
				<li><span class="ion-android-hangout"></span>05 comments</li>
				<li><span class="ion-android-favorite-outline"></span>124 Likes</li>
			</ul>
			<ul class="right_r">
				<li><a href="#" class="ion-android-favorite-outline"></a></li>
				<li><a href="#" class="ion-social-facebook"></a></li>
				<li><a href="#" class="ion-social-twitter"></a></li>
			</ul>
		</div> -->
		<div class="box_admin">
			<div class="ava_ad">
				<a href="#">
					<img src="<?=get_stylesheet_directory_uri()?>/images/upload/ad_ava.png" alt="img avatar">
				</a>
			</div>
			<div class="infor">
				<a href="#" class="name_ad">作者</a>
				<span class="fea_">教师</span>
				<span class="sumary_">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. </span>
			</div>
		</div>
		<div class="related_post">
			<ul class="nav_ related_l">
				<li><span>Posted by <a href="#">Admin</a> on <a href="#">Web Design</a></span></li>
				<li><h4>上一篇文章</h4></li>
				<li><a href="#" class="btn_link">上一篇</a></li>
			</ul>
			<ul class="nav_ related_r">
				<li><span>Posted by <a href="#">Admin</a> on <a href="#">Web Design</a></span></li>
				<li><h4>下一篇文章</h4></li>
				<li><a href="#" class="btn_link">下一篇</a></li>
			</ul>
		</div>
		<!-- <div class="box_comments">
			<h3 class="cmt_tt">(05) Comments</h3>
			<div class="comments_ do_post_">
				<div class="user_ava">
					<a href="#">
						<img src="<?=get_stylesheet_directory_uri()?>/images/upload/user_ava.png" alt="avatar user">
					</a>
				</div>
				<div class="box_content_cmt">
					<div class="box_bb_">
						<a href="#" class="username_">Mohamad Ahsan</a>
						<span class="date_">Au 25,  2015 - 08:00 pm</span>
						<p class="content_cmt">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</p>
						<a href="#" class="btn_reply">REPLY</a>
					</div>
				</div>
			</div>
			<div class="comments_ do_reply_">
				<div class="user_ava">
					<a href="#">
						<img src="<?=get_stylesheet_directory_uri()?>/images/upload/user_ava.png" alt="avatar user">
					</a>
				</div>
				<div class="box_content_cmt">
					<div class="box_bb_">
						<a href="#" class="username_">Mohamad Ahsan</a>
						<span class="date_">Au 25,  2015 - 08:00 pm</span>
						<p class="content_cmt">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</p>
						<a href="#" class="btn_reply">REPLY</a>
					</div>
				</div>
			</div>
			<div class="comments_ do_post_">
				<div class="user_ava">
					<a href="#">
						<img src="<?=get_stylesheet_directory_uri()?>/images/upload/user_ava.png" alt="avatar user">
					</a>
				</div>
				<div class="box_content_cmt">
					<div class="box_bb_">
						<a href="#" class="username_">Mohamad Ahsan</a>
						<span class="date_">Au 25,  2015 - 08:00 pm</span>
						<p class="content_cmt">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</p>
						<a href="#" class="btn_reply">REPLY</a>
					</div>
				</div>
			</div>
			<a href="#" class="more_cmts">VIEW MORE (<span>02</span>)</a>
		</div> -->
		<!-- <div class="levae_cmt">
			<h3 class="tt_">Leave a Comment</h3>
			<form action="#" class="form_lv">
				<div class="req">
					<input type="text" placeholder="Name" required>
				</div>
				<div class="req reqs">
					<input type="text" placeholder="E-mail" required>
				</div>
				<textarea placeholder="Comment"></textarea>
				<input type="submit" value="POST YOUR COMMENT">
			</form>
		</div> -->
	</div>
</div>
</div>
<!-- end blog single -->
<!-- blog sidebar -->
<div class="col-md-3 col-lg-3">
	<div class="sidebar flw">
		<form action="#" class="search_">
			<input type="text" placeholder="Search" required>
			<button type="submit" class="ion-android-search"></button>
		</form>
		<div class="title_">
			<h3>Categories</h3>
		</div>
		<ul class="cate_">
			<li><a href="#">Frontend Development</a><span>05</span></li>
			<li><a href="#">JavaScript</a><span>03</span></li>
			<li><a href="#">Programming Patterns</a><span>06</span></li>
			<li><a href="#">System Administration</a><span>05</span></li>
			<li><a href="#">WordPress</a><span>02</span></li>
		</ul>
		<div class="title_">
			<h3>Tab Widget Style</h3>
		</div>
		<div class="new_post">
			<ul class="tabs_menu">
		        <li class="tab_current">
		        	<a href="#recent_post">Recent Post</a>
		        	<span></span>
	        	</li>
		        <li>
		        	<a href="#popular_post">Popular Post</a>
		        	<span></span>
	        	</li>
		    </ul>
		    <div class="tab">
		        <div id="recent_post" class="tab_block tab_content">
		            <div class="item_post_">
		            	<div class="box_img">
		            		<a href="#">
		            			<img src="<?=get_stylesheet_directory_uri()?>/images/upload/p1.png" alt="img post">
		            		</a>
		            	</div>
		            	<dl class="suma_">
		            		<dt>
		            			<span class="date">July 27, 2014</span>
		            			<span class="cmt">3</span>
		            		</dt>
							<dd>
								<a href="#" class="btn_link">30 Photographic Works of Impressive Old Age</a>
							</dd>
		            	</dl>
		            </div>
		            <div class="item_post_">
		            	<div class="box_img">
		            		<a href="#">
		            			<img src="<?=get_stylesheet_directory_uri()?>/images/upload/p2.png" alt="img post">
		            		</a>
		            	</div>
		            	<dl class="suma_">
		            		<dt>
		            			<span class="date">July 27, 2014</span>
		            			<span class="cmt">3</span>
		            		</dt>
							<dd>
								<a href="#" class="btn_link">30 Photographic Works of Impressive Old Age</a>
							</dd>
		            	</dl>
		            </div>
		            <div class="item_post_">
		            	<div class="box_img">
		            		<a href="#">
		            			<img src="<?=get_stylesheet_directory_uri()?>/images/upload/p3.png" alt="img post">
		            		</a>
		            	</div>
		            	<dl class="suma_">
		            		<dt>
		            			<span class="date">July 27, 2014</span>
		            			<span class="cmt">3</span>
		            		</dt>
							<dd>
								<a href="#" class="btn_link">30 Photographic Works of Impressive Old Age</a>
							</dd>
		            	</dl>
		            </div>
		        </div>
		        <div id="popular_post" class="tab_content">
		            <div class="item_post_">
		            	<div class="box_img">
		            		<a href="#">
		            			<img src="<?=get_stylesheet_directory_uri()?>/images/upload/p2.png" alt="img post">
		            		</a>
		            	</div>
		            	<dl class="suma_">
		            		<dt>
		            			<span class="date">June 27, 2016</span>
		            			<span class="cmt">23</span>
		            		</dt>
							<dd>
								<a href="#" class="btn_link">30 Photographic Works of Impressive Old Age</a>
							</dd>
		            	</dl>
		            </div>
		            <div class="item_post_">
		            	<div class="box_img">
		            		<a href="#">
		            			<img src="<?=get_stylesheet_directory_uri()?>/images/upload/p1.png" alt="img post">
		            		</a>
		            	</div>
		            	<dl class="suma_">
		            		<dt>
		            			<span class="date">July 27, 2014</span>
		            			<span class="cmt">13</span>
		            		</dt>
							<dd>
								<a href="#" class="btn_link">30 Photographic Works of Impressive Old Age</a>
							</dd>
		            	</dl>
		            </div>
		            <div class="item_post_">
		            	<div class="box_img">
		            		<a href="#">
		            			<img src="<?=get_stylesheet_directory_uri()?>/images/upload/p3.png" alt="img post">
		            		</a>
		            	</div>
		            	<dl class="suma_">
		            		<dt>
		            			<span class="date">July 27, 2014</span>
		            			<span class="cmt">3</span>
		            		</dt>
							<dd>
								<a href="#" class="btn_link">30 Photographic Works of Impressive Old Age</a>
							</dd>
		            	</dl>
		            </div>
		        </div>
		    </div>
		</div>
		<div class="title_">
			<h3>Archives</h3>
		</div>
		<ul class="archives_">
			<li><a href="#">March 2016</a><span>9</span></li>
			<li><a href="#">February 2016</a><span>14</span></li>
			<li><a href="#">January 2016</a><span>15</span></li>
			<li><a href="#">December 2016</a><span>23</span></li>
			<li><a href="#">November 2016</a><span>34</span></li>
			<li><a href="#">March 2015</a><span>9</span></li>
			<li><a href="#">February 2015</a><span>14</span></li>
			<li><a href="#">January 2015</a><span>15</span></li>
			<li><a href="#">December 2012</a><span>23</span></li>
		</ul>
		<div class="title_">
			<h3>Social Widget</h3>
		</div>
		<ul class="social_">
			<li><a href="#" class="ion-social-facebook"></a></li>
			<li><a href="#" class="ion-social-twitter"></a></li>
			<li><a href="#" class="fa fa-pinterest-p"></a></li>
			<li><a href="#" class="ion-social-googleplus-outline"></a></li>
			<li><a href="#" class="ion-social-tumblr"></a></li>
			<li><a href="#" class="ion-social-dribbble-outline"></a></li>
		</ul>
		<div class="title_">
			<h3>Tags Widget</h3>
		</div>
		<ul class="tag_">
			<li><a href="#">Awsome</a></li>
			<li><a href="#">Fonts</a></li>
			<li><a href="#">Web Design</a></li>
			<li><a href="#">Mobile</a></li>
			<li><a href="#">iOS</a></li>
			<li><a href="#">Flat</a></li>
			<li><a href="#">Photo Manip</a></li>
			<li><a href="#" class="themforest">Themforest</a></li>
			<li><a href="#">Facebook</a></li>
			<li><a href="#">Portfolio</a></li>
			<li><a href="#">Classic</a></li>
			<li><a href="#">Corporate</a></li>
			<li><a href="#">Stunning</a></li>
		</ul>
	</div>
</div>
<!-- end blog sidebar -->
			</div>
		</div>
</main>

<?php get_footer(); ?>
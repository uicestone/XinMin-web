<!-- blog sidebar -->
<div class="col-md-3 col-lg-3">
	<div class="sidebar flw">
		<form action="#" class="search_">
			<input type="text" placeholder="搜索" required>
			<button type="submit" class="ion-android-search"></button>
		</form>
		<div class="title_">
			<h3>分类</h3>
		</div>
		<ul class="cate_">
			<?php wp_list_categories(['title_li'=>'']); ?>
		</ul>
		<div class="new_post">
			<ul class="tabs_menu">
				<li class="tab_current">
					<a href="#recent_post">最新文章</a>
					<span></span>
				</li>
				<li>
					<a href="#popular_post">热门内容</a>
					<span></span>
				</li>
			</ul>
			<div class="tab">
				<div id="recent_post" class="tab_block tab_content">
					<?php foreach(get_posts() as $post): ?>
					<div class="item_post_">
						<div class="box_img">
							<a href="<?=get_the_permalink($post)?>">
								<?=get_the_post_thumbnail($post, 'thumbnail')?>
							</a>
						</div>
						<dl class="suma_">
							<dt>
								<span class="date"><?=get_the_date('Y-m-d', $post->ID)?></span>
								<!-- <span class="cmt">3</span> -->
							</dt>
							<dd>
								<a href="<?=get_the_permalink($post)?>" class="btn_link"><?=get_the_title($post)?></a>
							</dd>
						</dl>
					</div>
					<?php endforeach; ?>
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
		<!-- <div class="title_">
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
		</ul> -->
		<!-- <div class="title_">
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
		</ul> -->
	</div>
</div>
<!-- end blog sidebar -->

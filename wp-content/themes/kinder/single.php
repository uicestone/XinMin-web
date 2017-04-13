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
		<div class="box_admin" style="height:2px;padding:0;margin-top:40px">
			<!-- <div class="ava_ad">
				<a href="#">
					<img src="<?=get_stylesheet_directory_uri()?>/images/upload/ad_ava.png" alt="img avatar">
				</a>
			</div>
			<div class="infor">
				<a href="#" class="name_ad">作者</a>
				<span class="fea_">教师</span>
				<span class="sumary_">教师介绍</span>
			</div> -->
		</div>
		<div class="related_post">
			<?php $previous = get_previous_post(true); if($previous): ?>
			<ul class="nav_ related_l">
				<li><h4><?=get_the_title($previous)?></h4></li>
				<li><a href="<?=get_the_permalink($previous)?>" class="btn_link">上一篇</a></li>
			</ul>
			<?php endif; ?>
			<?php $next = get_next_post(true); if($next): ?>
			<ul class="nav_ related_r">
				<li><h4><?=get_the_title($next)?></h4></li>
				<li><a href="<?=get_the_permalink($next)?>" class="btn_link">下一篇</a></li>
			</ul>
			<?php endif; ?>
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
<?php get_sidebar(); ?>
			</div>
		</div>
</main>

<?php get_footer(); ?>
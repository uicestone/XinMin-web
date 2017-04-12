<footer class="ht_footer flw">
	<div class="footer_ flw">
		<div class="container">
			<div class="box_register flw">
				<span>明天就来试听我们的公开课程！</span>
				<a href="#" class="btn_reg">立即报名</a>
			</div>
			<div class="footer_main flw">
				<div class="row">
					<div class="col-md-3 col-lg-3">
						<div class="ft_col">
							<a href="#" class="lg_bottom"><img src="<?=get_stylesheet_directory_uri()?>/images/logo.png" width="100px" alt="Image Logo"></a>
							<div class="des_">
								<img src="<?=get_stylesheet_directory_uri()?>/images/campus.jpg" alt="Image Des">
							</div>
							<ul class="info flw">
								<li>宝山区月浦四村1号</li>
								<li>021-56649303</li>
								<li><a href="mailto:info@xmes.sh.cn">info@xmes.sh.cn</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-lg-3">
						<div class="ft_col">
							<h3>相关链接</h3>
							<ul class="uselink flw">
								<li><a href="#">关于我们</a></li>
								<li><a href="#">办学课程</a></li>
								<li><a href="#">新闻资讯</a></li>
								<li><a href="#">教工风采</a></li>
								<li><a href="#">联系我们</a></li>
								<li><a href="#">隐私政策</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-lg-3">
						<div class="ft_col">
							<h3>最新动态</h3>
							<?php foreach(get_posts('category_name=新闻') as $post): ?>
							<dl class="tw">
								<dt><p><?=get_the_title($post)?></p></dt>
								<dd><a href="<?=get_the_permalink($post)?>">查看新闻详情</a></dd>
								<dt><span><?=get_the_date('Y-m-d', $post->ID)?></span></dt>
								<dd>&#160;</dd>
							</dl>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="col-md-3 col-lg-3">
						<div class="ft_col">
							<h3>新闻订阅</h3>
							<p class="letter flw">欢迎关注我校公众号，获取最新资讯</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- social footer -->
		<div class="box_social flw">
			<ul class="footer_social">
				<li><a href="#" class="fa fa-wechat"></a></li>
			</ul>
		</div>
	</div>
	<div class="copyright flw">
		版权所有 © 2016 上海市宝山区新民实验学校
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

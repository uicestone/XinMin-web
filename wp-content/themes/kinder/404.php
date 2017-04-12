<?php get_header(); ?>
<main id="main" class="page_content page_404 flw">
<!-- 404 page -->
<div class="page_404 flw">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<div class="oops">
					<h3>噢！</h3>
					<h4>抱歉，没有找到那个页面</h4>
					<p>您可能点击了错误的链接或者老的地址？不妨回到首页看看，或者使用搜索功能</p>
					<a href="<?=site_url()?>" class="btn">返回首页</a>
				</div>
			</div>
			<div class="col-md-6 col-lg-6">
				<div class="box_img">
					<img src="<?=get_stylesheet_directory_uri()?>/images/laugh.jpg" alt="img 404">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end 404 page -->
</main>
<?php get_footer(); ?>
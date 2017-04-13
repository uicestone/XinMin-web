<?php get_header(); ?>

<div class="page-loader">
	<div class="loader">
		<span class="dot dot_1"></span>
		<span class="dot dot_2"></span>
		<span class="dot dot_3"></span>
		<span class="dot dot_4"></span>
	</div>
</div>

<main id="main" class="page_content">
<!-- main slider ver. 4-->
<div class="main_sl flw">
	<div class="box_sliders">
		<div
			id="rev_slider_wrapper"
			class="rev_slider_wrapper fullwidthbanner-container"
			data-alias="classicslider1"
			style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
			<div
				id="rev_slider"
				class="rev_slider fullwidthabanner"
				style="display:none;" data-version="5.0.7">
				<ul>
                    <?php foreach (get_posts('category_name=头图&order=asc') as $index => $post): ?>
					<li data-index="rs-<?=$index?>" class="add_">
                        <?=get_the_post_thumbnail($post, 'banner', ['alt'=>'img',
							'data-bgposition'=>'center center',
							'data-bgfit'=>'cover',
							'data-bgrepeat'=>'no-repeat',
							'class'=>'rev-slidebg',
							'data-no-retina'=>''])?>
						<div
							class="tp-caption tp-resizeme rs-parallaxlevel-3 title_main_2"
							id="slide-17-layer-1"
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
							data-y="['top','top','top','top']" data-voffset="['335','300','255','125']"
							data-fontsize="['55','55','45','36']"
							data-fontweight="['700','700','700','700']"
							data-lineheight="['84','84','84','84']"
							data-width="none"
							data-height="none"
							data-whitespace="nowrap"
							data-transform_idle="o:1;"
							
							data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
							data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
							data-mask_in="x:0px;y:0px;"
							data-mask_out="x:inherit;y:inherit;"
							data-start="1000"
							data-splitin="chars"
							data-splitout="none"
							data-responsive_offset="on"
							
							data-elementdelay="0.05"
							
							style="z-index: 5; white-space: nowrap;"><?=get_the_title($post)?>
						</div>
						<div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0 tit_btn_3"
							 id="slide-16-layer-4"
							 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
							 data-y="['top','top','top','top']" data-voffset="['596','450','400','250']"
							 data-width="['200','200','200','200']"
							 data-height="['50','45','40','40']"
							 data-lineheight="['47','38','30','30']"
							 data-fontsize="['16','16','16','16']"
							 data-whitespace="nowrap"
							 data-transform_idle="o:1;"
							 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
							 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
							 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
							 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
							 data-start="1500"
							 data-splitin="none"
							 data-splitout="none"
							 data-responsive_offset="on"
							 style="z-index: 6; white-space: nowrap;">
						</div>
						<div
							class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-2 welcome_"
							id="slide-17-layer-4"
							data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
							data-y="['top','top','top','top']" data-voffset="['278','230','150','50']"
							data-fontsize="['36','28','24','18']"
							data-width="none"
							data-height="none"
							data-whitespace="nowrap"
							data-transform_idle="o:1;"
							
							data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
							data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
							data-mask_in="x:0px;y:[100%];"
							data-mask_out="x:inherit;y:inherit;"
							data-start="1500"
							data-splitin="none"
							data-splitout="none"
							data-responsive_offset="on"
							style="z-index: 7; white-space: nowrap;">
							<i class="ion-android-star-outline big_3"></i>
							<i class="ion-android-star-outline big_2"></i>
							<i class="ion-android-star big_1"></i>
							<?=get_the_subtitle($post)?>
							<i class="ion-android-star big_1"></i>
							<i class="ion-android-star-outline big_2"></i>
							<i class="ion-android-star-outline big_3"></i>
						</div>
					</li>
                    <?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- end main slider ver. 4-->
<!-- section item -->

<div class="_section_item flw">
	<div class="container">
		<div class="row">
			<div class="box_shadow flw">
				<?php $posts = get_posts('category_name=介绍&order=asc'); ?>
				<?php foreach($posts as $index => $post): ?>
				<div class="col-md-4 col-lg-4 nopadding"
					data-wow-delay=".2s" data-wow-duration=".7s" style="visibility: visible; animation-duration: 0.7s; animation-delay: <?=0.2*$index?>s; animation-name: fadeInUpSmall;">
					<div class="_box_item<?php if($index===0){ ?> bd_radi_l<?php } ?><?php if($index===count($posts)-1){ ?> bd_radi_r<?php } ?>" style="background-image:url('<?=get_the_post_thumbnail_url($post, 'intro')?>')">
						<span class="icon-<?=$index+1?> kinder_icon"></span>
						<div class="medal_">
							<span><?=get_the_title($post)?>：</span>
							<h3><?=get_the_subtitle($post)?></h3>
							<p></p>
						</div>
						<a href="<?=get_the_permalink($post)?>" class="btn_read">详情</a>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>	
</div>

<!-- end section item -->
<!-- section featured -->
<div class="_section_featured flw">
	<div class="container">
		<div class="row">
			<div class="col-sm-1">
				<span class="_fl ion-bug"></span>
			</div>
			<div class="col-md-3">
				<div class="_it_feat">
					<h3><span>保持</span> 创新意识</h3>
					<p></p>
				</div>
			</div>
			<div class="col-sm-1">
				<span class="_fl ion-easel"></span>
			</div>
			<div class="col-md-3">
				<div class="_it_feat">
					<h3>在学习中<span>成长</span></h3>
					<p></p>
				</div>
			</div>
			<div class="col-sm-1">
				<span class="_fl ion-android-hand"></span>
			</div>
			<div class="col-md-3">
				<div class="_it_feat">
					<h3>学科与特长兼顾</h3>
					<p></p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- end section featured -->
<!-- section classes -->
<div class="_section_classes flw">
	<div class="container">
		<div class="class_title">
			<h3>学科和特长</h3>
			<h4>• 孩子的成长，我们的职业 •</h4>
		</div>
		<div class="row">
			<?php foreach(get_posts('category_name=学科') as $post): ?>
			<div class="col-md-4 col-lg-4">
				<div class="classes_it">
					<div class="box_img">
						<a href="<?=get_the_permalink($post)?>">
							<?=get_the_post_thumbnail($post, 'post-thumbnail')?>
						</a>
						<div class="wave"></div>
					</div>
					<div class="box_suma">
						<a href="#" class="name_ flw"><?=get_the_title($post)?></a>
						<div class="rate_ flw">
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
						</div>
						<div class="sumary_ flw">
							<?=wpautop($post->post_content)?>
						</div>
						<a href="#" class="btn_apply">预约试听</a>
						<a class="more_" href="#">
							<span></span>
							<span></span>
							<span></span>
						</a>
						<div class="popup_">
							<a href="<?=get_the_permalink($post)?>" class="btn_popup">详情</a>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<a href="<?=site_url()?>/category/%E5%AD%A6%E7%A7%91/" class="all_classes">查看我们的所有课程</a>
	</div>
</div>
<!-- end section classes -->
<!-- _section_teacher -->
<div class="_section_teacher flw">
	<div class="box_parallax flw">
		<div class="parallax">
			<!--<img src="--><?//=get_stylesheet_directory_uri()?><!--/images/upload/slide2.jpg" alt="background feauted">-->
		</div>
	</div>
	<div class="box_teacher flw">
		<div class="container">
			<div class="teacher_title flw">
				<h2>教师和管理团队</h2>
				<h3>• 事无巨细, 和蔼可亲, 恰如其分 •</h3>
				<p></p>
			</div>
			<div class="row">
				<?php foreach (get_posts('category_name=教师&order=asc&posts_per_page=-1') as $index => $post): ?>
				<div class="col-md-3 col-lg-3">
					<div class="box_item">
						<!--<ul class="social_">
							<li><a href="#" class="fa fa-pinterest-p"></a></li>
							<li><a href="#" class="fa fa-google-plus"></a></li>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-facebook"></a></li>
						</ul>-->
						<div class="box_img hvr_icon_push">
							<?=get_the_post_thumbnail($post, [225, 300])?>
						</div>
						<div class="teacher_info">
							<a href="<?=get_the_permalink($post)?>"><?=get_the_title($post)?></a>
							<span></span>
							<p><?=get_the_subtitle($post)?></p>
						</div>
					</div>
				</div>
				<?php if ($index % 4 === 3): ?>
			</div>
			<div class="row">
				<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
<!-- end _section_teacher -->
<!-- section counter -->
<div class="_section_counter flw">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-lg-3">
				<div class="item_counter">
					<span class="counter one">547</span>
					<span class="or_ smile"></span>
					<p>校园占地（亩）</p>
				</div>
			</div>
			<div class="col-md-3 col-lg-3">
				<div class="item_counter">
					<span class="counter two">72</span>
					<span class="bl_ smile"></span>
					<p>教师团队</p>
				</div>
			</div>
			<div class="col-md-3 col-lg-3">
				<div class="item_counter">
					<span class="counter three">1341</span>
					<span class="ort_ smile"></span>
					<p>在校学生</p>
				</div>
			</div>
			<div class="col-md-3 col-lg-3">
				<div class="item_counter">
					<span class="counter four">5687</span>
					<span class="orr_ smile"></span>
					<p>全年课程</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end section counter -->
<!-- section event -->
<div class="_section_event flw">
	<div class="box_parallax flw">
		<div class="parallax"><img src="<?=get_stylesheet_directory_uri()?>/images/upload/slide4.jpg" alt="background feauted"></div>
	</div>
	<!--	-->
	<div class="box_event flw">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-4">
					<div class="event_title">
						<h3>新闻和活动</h3>
						<h4>• 每天和孩子一起成长 •</h4>
						<p>了解我们的最新动态，并参与到其中！</p>
					</div>
				</div>
				<div class="col-md-8 col-lg-8 sss">
					<div class="event_cs">
						<?php foreach(get_posts('category_name=新闻') as $post): ?>
						<div class="event_item">
							<div class="box_img">
								<?=get_the_post_thumbnail($post, 'home-news')?>
								<div class="shape"></div>
							</div>
							<div class="event_content">
								<h3><a href="<?=get_the_permalink($post)?>"><?=get_the_title($post)?></a></h3>
								<dl>
									<dt><?=get_the_date('Y年m月d日', $post)?></dt>
								</dl>
								<p><?=get_the_subtitle($post)?></p>
								<a href="<?=get_the_permalink($post)?>">全文</a>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end section event -->
<!-- section glery -->
<div class="_section_gallery flw">
	<div class="container">
		<div class="gallery_title">
			<h3>精彩时刻</h3>
			<h4>• 孩子们的画廊 •</h4>
			<p></p>
		</div>
		<div data-js-module="filtering-demo">
			<div class="gallery_nav filter-button-group button-group js-radio-button-group">
			<button class="button is-checked" data-filter="*">全部</button>
			<button class="button" data-filter=".class">课堂</button>
			<button class="button" data-filter=".nature">自然</button>
			<button class="button" data-filter=".sports">运动</button>
			<button class="button" data-filter=".art">艺术</button>
			<button class="button" data-filter=".tech">科技</button>
			<button class="button" data-filter=".daily">日常</button>
	 	</div>
		<div class="gallery_content grid flw">
			<?php foreach(get_posts('category_name=活动&posts_per_page=24') as $index => $post): ?>
			<div class="element-item <?=wp_get_post_tags($post->ID)[0]->slug?>">
				<div class="gallery_item">
					<a href="<?=get_the_post_thumbnail_url($post)?>" data-imagelightbox="light_box_img">
						<?=get_the_post_thumbnail($post, 'home-gallery')?>
					</a>
					<ul class="child_hv">
						<li><a href="<?=get_the_post_thumbnail_url($post)?>" class="ion-android-search" data-imagelightbox="light_box_img"></a></li>
						<li><a href="<?=get_the_post_thumbnail_url($post)?>" class="btn_cl" data-imagelightbox="light_box_img"><?=get_the_title($post)?></a></li>
						<li><b><?=wp_get_post_tags($post->ID)[0]->name?></b></li>
					</ul>
				</div>
			</div>
			<?php if($index === 0): ?>
			<div class="gutter-sizer"></div>
			<?php endif; ?>
			<?php endforeach; ?>
		 </div>
		</div>
	</div>
</div>
<!-- end section glery -->
<!-- section question -->
<div class="_section_question flw">
	<div class="container">
		<div class="q_title flw">
			<span class="ion-chatbubble-working"></span>
			<h3>对我们有任何疑问？</h3>
			<p>如果您对我校招生、课程、师资等有任何疑问，欢迎随时致电我们咨询</p>
			<a href="#" class="qas">电话：021-56649303</a>
		</div>
	</div>
</div>
<!-- end section question -->
</main>
<?php get_footer(); ?>

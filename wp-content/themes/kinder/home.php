<?php get_header(); ?>
<main id="main" class="page_content">
<!-- main slider ver. 4-->
<div class="main_sl flw">
	<div class="box_sliders">
		<div
			id="rev_slider_4_1_wrapper"
			class="rev_slider_wrapper fullwidthbanner-container"
			data-alias="classicslider1"
			style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
			<div
				id="rev_slider_4_1"
				class="rev_slider fullwidthabanner"
				style="display:none;" data-version="5.0.7">
				<ul>
                    <?php foreach (get_posts('category_name=头图&order=asc') as $index => $post): ?>
					<li
						data-index="rs-<?=$index?>"
						data-transition="zoomout"
						data-slotamount="default"
						data-easein="Power4.easeInOut"
						data-easeout="Power4.easeInOut"
						data-masterspeed="2000"
						data-rotate="0"
						data-fstransition="fade"
						data-fsmasterspeed="1500"
						data-fsslotamount="7"
						data-saveperformance="on"
						class="add_">
                        <?=get_the_post_thumbnail($post, [1920, 1200], ['alt'=>'img',
							'data-bgposition'=>'center center',
							'data-bgfit'=>'cover',
							'data-bgrepeat'=>'no-repeat',
							'class'=>'rev-slidebg',
							'data-no-retina'=>''])?>
						<div
							class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-3 title_main_2"
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
				<div class="col-md-4 col-lg-4 nopadding">
					<div class="_box_item _box_item_one bd_radi_l">
						<span class="icon-1 kinder_icon"></span>
						<div class="medal_">
							<span>学制：</span>
							<h3>九年一贯制学校</h3>
							<p></p>
						</div>
						<a href="#" class="btn_read">详情</a>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 nopadding"
				data-wow-delay=".2s" data-wow-duration=".7s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.2s; animation-name: fadeInUpSmall;" >
					<div class="_box_item _box_item_two">
						<span class="icon-2 kinder_icon"></span>
						<div class="medal_">
							<span>生源：</span>
							<h3>地区区块招生</h3>
							<p></p>
						</div>
						<a href="#" class="btn_read">详情</a>
					</div>
				</div>
				<div class="col-md-4 col-lg-4 nopadding wow fadeInUpSmall animated"
				data-wow-delay=".4s" data-wow-duration=".7s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.4s; animation-name: fadeInUpSmall;" >
					<div class="_box_item _box_item_three bd_radi_r">
						<span class="icon-3 kinder_icon"></span>
						<div class="medal_">
							<span>教师：</span>
							<h3>专业可靠的教师团队</h3>
							<p></p>
						</div>
						<a href="#" class="btn_read">详情</a>
					</div>
				</div>
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
			<div class="col-md-4 col-lg-4">
				<div class="classes_it">
					<div class="box_img">
						<a href="#"><img src="<?=get_stylesheet_directory_uri()?>/images/upload/babe1.png" alt="Image babe"></a>
						<div class="wave"></div>
					</div>
					<div class="box_suma">
						<a href="#" class="name_ flw">小学奥数特训</a>
						<div class="rate_ flw">
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
						</div>
						<div class="sumary_ flw">
							<p></p>
						</div>
						<a href="#" class="btn_apply">预约试听</a>
						<a class="more_" href="#">
							<span></span>
							<span></span>
							<span></span>
						</a>
						<div class="popup_">
							<a href="#" class="btn_popup">详情</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4">
				<div class="classes_it">
					<div class="box_img">
						<a href="#"><img src="<?=get_stylesheet_directory_uri()?>/images/upload/babe2.png" alt="Image babe"></a>
						<div class="wave"></div>
					</div>
					<div class="box_suma">
						<a href="#" class="name_ flw">初中英语强化</a>
						<div class="rate_ flw">
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
						</div>
						<div class="sumary_ flw">
							<p></p>
						</div>
						<a href="#" class="btn_apply">预约试听</a>
						<a class="more_" href="#">
							<span></span>
							<span></span>
							<span></span>
						</a>
						<div class="popup_">
							<a href="#" class="btn_popup">详情</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4">
				<div class="classes_it">
					<div class="box_img">
						<a href="#"><img src="<?=get_stylesheet_directory_uri()?>/images/upload/babe3.png" alt="Image babe"></a>
						<div class="wave"></div>
					</div>
					<div class="box_suma">
						<a href="#" class="name_ flw">中考冲刺加油</a>
						<div class="rate_ flw">
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
							<span class="ion-ios-heart"></span>
						</div>
						<div class="sumary_ flw">
							<p></p>
						</div>
						<a href="#" class="btn_apply">预约试听</a>
						<a class="more_" href="#">
							<span></span>
							<span></span>
							<span></span>
						</a>
						<div class="popup_">
							<a href="#" class="btn_popup">详情</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a href="#" class="all_classes">查看我们的所有课程</a>
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
						<div class="event_item">
							<div class="box_img">
								<img src="<?=get_stylesheet_directory_uri()?>/images/upload/babe1_2.png" alt="">
								<div class="shape"></div>
							</div>
							<div class="event_content">
								<h3><a href="#">校运动会举行</a></h3>
								<dl>
									<dt>2016年12月20日</dt>
								</dl>
								<p>一年一度的运动盛典又拉开帷幕了，这场游戏，从来没有输赢，只有快乐</p>
								<a href="#">全文</a>
							</div>
						</div>
						<div class="event_item">
							<div class="box_img">
								<img src="<?=get_stylesheet_directory_uri()?>/images/upload/event.png" alt="">
								<div class="shape"></div>
							</div>
							<div class="event_content">
								<h3><a href="#">宝山区新民实验学校成立</a></h3>
								<dl>
									<dt>2016年12月1日</dt>
								</dl>
								<p>宝钢三中和月浦实验小学合并，九年一贯制实验中学崭新挂牌</p>
								<a href="#">全文</a>
							</div>
						</div>
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
			<button class="button is-checked" data-filter="*">All</button>
			<button class="button" data-filter=".wildlife, .toy, .charty">charty</button>
			<button class="button" data-filter=".nature, .video, children">nature</button>
			<button class="button" data-filter=".wildlife, .toy">wildlife</button>
			<button class="button" data-filter=".video, .children">video</button>
			<button class="button" data-filter=".toy, .nature">toy</button>
			<button class="button" data-filter=".children">children</button>
	 	</div>
		<div class="gallery_content grid flw">
			<div class="element-item video">
				<div class="gallery_item">
					<a href="<?=get_stylesheet_directory_uri()?>/images/upload/child1.png" data-imagelightbox="light_box_img">
						<img src="<?=get_stylesheet_directory_uri()?>/images/upload/child1.png" alt="image event">
					</a>
					<ul class="child_hv">
						<li><a href="<?=get_stylesheet_directory_uri()?>/images/upload/child1.png" class="ion-android-search" data-imagelightbox="light_box_img"></a></li>
						<li><a href="<?=get_stylesheet_directory_uri()?>/images/upload/child1.png" class="btn_cl" data-imagelightbox="light_box_img">Children Funny</a></li>
						<li><b>CHARTY, NATURE</b></li>
					</ul>
				</div>
			</div>
			<div class="gutter-sizer"></div>
			<div class="element-item toy">
				<div class="gallery_item">
					<a href="<?=get_stylesheet_directory_uri()?>/images/upload/child2.png" data-imagelightbox="light_box_img">
						<img src="<?=get_stylesheet_directory_uri()?>/images/upload/child2.png" alt="image event">
					</a>
					<ul class="child_hv">
						<li><a href="<?=get_stylesheet_directory_uri()?>/images/upload/child2.png" class="ion-android-search" data-imagelightbox="light_box_img"></a></li>
						<li><a href="<?=get_stylesheet_directory_uri()?>/images/upload/child2.png" class="btn_cl" data-imagelightbox="light_box_img">Children Funny</a></li>
						<li><b>CHARTY, NATURE</b></li>
					</ul>
				</div>
			</div>
			<div class="element-item video chrty">
				<div class="gallery_item">
					<a href="<?=get_stylesheet_directory_uri()?>/images/upload/child3.png" data-imagelightbox="light_box_img">
						<img src="<?=get_stylesheet_directory_uri()?>/images/upload/child3.png" alt="image event">
					</a>
					<ul class="child_hv">
						<li><a href="<?=get_stylesheet_directory_uri()?>/images/upload/child3.png" class="ion-android-search" data-imagelightbox="light_box_img"></a></li>
						<li><a href="<?=get_stylesheet_directory_uri()?>/images/upload/child3.png" class="btn_cl" data-imagelightbox="light_box_img">Children Funny</a></li>
						<li><b>CHARTY, NATURE</b></li>
					</ul>
				</div>
			</div>
			<div class="element-item children video">
				<div class="gallery_item">
					<a href="<?=get_stylesheet_directory_uri()?>/images/upload/child4.png" data-imagelightbox="light_box_img">
						<img src="<?=get_stylesheet_directory_uri()?>/images/upload/child4.png" alt="image event">
					</a>
					<ul class="child_hv">
						<li><a href="<?=get_stylesheet_directory_uri()?>/images/upload/child4.png" class="ion-android-search" data-imagelightbox="light_box_img"></a></li>
						<li><a href="<?=get_stylesheet_directory_uri()?>/images/upload/child4.png" class="btn_cl" data-imagelightbox="light_box_img">Children Funny</a></li>
						<li><b>CHARTY, NATURE</b></li>
					</ul>
				</div>
			</div>
			<div class="element-item nature toy">
				<div class="gallery_item">
					<a href="<?=get_stylesheet_directory_uri()?>/images/upload/child5.png" data-imagelightbox="light_box_img">
						<img src="<?=get_stylesheet_directory_uri()?>/images/upload/child5.png" alt="image event">
					</a>
					<ul class="child_hv">
						<li><a href="<?=get_stylesheet_directory_uri()?>/images/upload/child5.png" class="ion-android-search" data-imagelightbox="light_box_img"></a></li>
						<li><a href="<?=get_stylesheet_directory_uri()?>/images/upload/child5.png" class="btn_cl" data-imagelightbox="light_box_img">Children Funny</a></li>
						<li><b>CHARTY, NATURE</b></li>
					</ul>
				</div>
			</div>
			<div class="element-item wildlife children">
				<div class="gallery_item">
					<a href="<?=get_stylesheet_directory_uri()?>/images/upload/child6.png" data-imagelightbox="light_box_img">
						<img src="<?=get_stylesheet_directory_uri()?>/images/upload/child6.png" alt="image event">
					</a>
					<ul class="child_hv">
						<li><a href="<?=get_stylesheet_directory_uri()?>/images/upload/child6.png" class="ion-android-search" data-imagelightbox="light_box_img"></a></li>
						<li><a href="<?=get_stylesheet_directory_uri()?>/images/upload/child6.png" class="btn_cl" data-imagelightbox="light_box_img">Children Funny</a></li>
						<li><b>CHARTY, NATURE</b></li>
					</ul>
				</div>
			</div>
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
			<a href="#" class="qas">电话：</a>
		</div>
	</div>
</div>
<!-- end section question -->
</main>
<?php get_footer(); ?>

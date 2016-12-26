<?php get_header(); ?>
<main id="main" class="page_content page_gallery flw">
<!-- galery -->
<div class="_section_gallery flw">
	<div class="container">
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
			<div class="element-item children video">
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
			<div class="element-item charty toy">
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
			<div class="element-item children">
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
			<div class="element-item nature">
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
			<div class="element-item wildlife">
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
			<div class="element-item video charty">
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
			<div class="element-item toy">
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
			<div class="element-item wildlife">
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
			<div class="element-item video children">
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
			<div class="element-item charty">
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
			<div class="element-item nature">
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
			<div class="element-item children wildlife">
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
<div class="container">
	<div class="view_bot flw">
		<ul class="navigation">
			<li><a href="#" class="ion-android-arrow-back"></a></li>
			<li><a href="#">01</a></li>
			<li><a href="#" class="natv">02</a></li>
			<li><a href="#">...</a></li>
			<li><a href="#">98</a></li>
			<li><a href="#">99</a></li>
			<li><a href="#" class="ion-android-arrow-forward"></a></li>
		</ul>
		<ul class="view_style">
			<li>View style:</li>
			<li><a href="#" class="ion-ios-list-outline"></a></li>
			<li><a href="#" class="ion-grid atv"></a></li>
		</ul>
	</div>
</div>
<!-- end galery -->
</main>

<?php get_footer(); ?>
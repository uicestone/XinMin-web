<?php get_header(); ?>
<main id="main" class="page_content page_blog">
		<div class="container">
			<div class="row">
<!-- mainview blog -->
<div class="col-md-9 col-lg-9">
	<div class="blog_mainview flw">
		<?php while(have_posts()): the_post(); ?>
		<div class="post_">
			<div class="box_ box_img">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
			</div>
			<div class="name_">
				<a href="<?php the_permalink(); ?>" class="btn_name">
					<?php the_title(); ?>
				</a>
			</div>
			<ul class="list_if">
				<!-- <li><a href="#">Creative and Design</a></li> -->
				<!-- <li>24 Comments</li> -->
				<li><?php the_date(); ?></li>
				<!-- <li>124 Likes</li> -->
			</ul>
			<div class="das"></div>
			<div class="sum_">
				<?php the_content(); ?>
			</div>
			<a href="<?php the_permalink(); ?>" class="btn_rm">查看全文</a>
		</div>
		<?php endwhile; ?>
		<div class="navigation">
		<?=paginate_links([
			'base' => str_replace( 99999, '%#%', esc_url( get_pagenum_link( 99999 ) ) ),
			'format'=>'/%n%/page/%#%',
			'prev_text'=>'«',
			'next_text'=>'»',
			'type'=>'list',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		])?>
		</div>
	</div>
</div>
<!-- end mainview blog -->
<?php get_sidebar(); ?>
			</div>
		</div>
</main>

<?php get_footer(); ?>
<?php get_header(); ?>

<main id="main" class="page_content page_cms flw">
<!-- coming soon page -->
	<div class="comingsoon flw">
		<div class="container">
			<a href="/" class="lg">
				<img src="<?=get_stylesheet_directory_uri()?>/images/logo.png" alt="Logo Image">
			</a>
			<div class="title_">
				<h3>网站即将上线</h3>
			</div>
			<div class="box_cd">
				<ul id="countdown">
					<li>
						<span class="days">00</span>
						<p class="timeRefDays">天</p>
					</li>
					<li>
						<span class="hours">00</span>
						<p class="timeRefHours">小时</p>
					</li>
					<li>
						<span class="minutes">00</span>
						<p class="timeRefMinutes">分钟</p>
					</li>
					<li>
						<span class="seconds">00</span>
						<p class="timeRefSeconds">秒</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
<!-- end coming soon page -->
</main>
<!-- JS files -->
<script src="<?=get_stylesheet_directory_uri()?>/js/jquery.js"></script>
<!-- smooth scroll -->
<script src="<?=get_stylesheet_directory_uri()?>/js/jquery.nicescroll.min.js"></script>
<!-- coundown -->
<script src="<?=get_stylesheet_directory_uri()?>/js/countdown.js"></script>
<!-- custom -->
<script>
	// smooth scroll
	$("html").niceScroll({
		zindex: "99999",
		scrollspeed: 70,
		mousescrollstep: 50,
		cursorwidth: "6px",
		cursorborder: "0",
		cursorcolor: "#d2d2d2",
		cursorborderradius: "0px",
	});
</script>
<script>
	$("#countdown").countdown({
		date: '<?=date('d M Y H:i:s', strtotime(the_subtitle('', '', false)))?>',
		format: "on"
	},
	
	function() {
		// callback function
	});
</script>
</body>
</html>
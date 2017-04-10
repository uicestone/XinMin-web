<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">
<head>
	<!-- Basic need -->
	<title><?php bloginfo('sitename'); ?></title>
	<meta charset="UTF-8">
	<meta name="description" content="Kinder">
	<meta name="keywords" content="Kinder universell">
	<meta name="author" content="tnthao">
	<link rel="profile" href="#profile">
	<link rel="shortcut icon" href="<?=get_stylesheet_directory_uri()?>/images/favicon.ico">
	
	<!-- Mobile specific meta -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="format-detection" content="telephone-no">
	
	<?php wp_head(); ?>
</head>

<body>


<!-- BEGIN | Header -->
<header id="ht_header" class="flw">
	<!-- top -->
	<div class="top_section flw">
		<div class="container">
			<div class="row">
				<div class="top_box flw">
					<ul class="top_list">
						<li class="spc"><span class="ion-ios-telephone"></span> 学校电话：</li>
						<li class="spc"><span class="ion-android-mail"></span> 电子邮件：<a href="mailto:"></a></li>
						<li>
							<form action="#">
								<button type='submit'></button>
								<input type="text" placeholder="搜索…" required>
							</form>
						</li>
					</ul>
					<ul class="top_social">
						<li><a href="#" class="fa fa-wechat"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- end top -->
	
	<!-- top menu -->
	<div class="box_mn uk-panel uk-panel-box uk-panel-box-primary" data-uk-sticky="{top:-200, animation: 'uk-animation-slide-top'}">
		<div class="top_menu flw">
			<div class="container">
				<a href="index.html" class="lg" title="Kinder">
					<img src="<?=get_stylesheet_directory_uri()?>/images/logo.png" alt="Logo Image">
				</a>
				<a href="#" class="appoint">招生咨询</a>
				<!-- menu -->
				<nav class="nav is-fixed">
					<div class="nav-toggle">
						<div class="icon-menu"> <span class="line line-1"></span> <span class="line line-2"></span> <span class="line line-3"></span> </div>
					</div>
					<?php wp_nav_menu(['theme_location'=>'primary', 'container_class'=>'nav-container', 'menu_class'=>'nav-menu menu', 'walker'=>new Kinder_Walker_Nav_Menu()]); ?>
				</nav>
				<!-- end menu -->
			</div>
		</div>
	</div>
	<!-- end top menu -->
</header>
<!-- END | Header -->

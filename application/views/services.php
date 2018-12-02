<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Open Data Challenge Tashkent 2018 TATU NF TEAM</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Trip Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="/assets/css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="/assets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="/assets/js/jquery-1.11.1.min.js"></script>
<script src="/assets/js/bootstrap.js"></script>
<!-- parallax -->
	<script src="/assets/js/SmoothScroll.min.js"></script>
	<script src="/assets/js/jarallax.js"></script>
	<!-- //parallax -->
</head>
<body>
	<!-- banner -->
	<div class="banner about-bg">
		<div class="top-banner about-top-banner">
			<div class="container">
				<div class="top-banner-left">
				<ul>
				<li> TATU NF TEAM</li>
				
			</ul>
				</div>
				<div class="top-banner-right">
					<ul>
						<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a class="facebook" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a class="facebook" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a class="facebook" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header">
			<div class="container">
				<div class="logo">
					<h1>
					<a href="homepage"><?php echo lang('smart_city');?></a>
					</h1>
				</div>
				<div class="top-nav">
					<nav class="navbar navbar-default">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
							</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
							<li class="current"><a href="<?php echo site_url('homepage');?>"><?php echo lang('menu_home');?></a></li>
							<li class="current"><a href="<?php echo site_url('about');?>"><?php echo lang('menu_about');?></a></li>
							<li class="current"><a href="<?php echo site_url('services');?>"><?php echo lang('menu_services');?></a></li>
							<li class="current"><a href="<?php echo site_url('contact');?>"><?php echo lang('menu_contact');?></a></li>
							<li><?php echo anchor($this->lang->switch_uri('ru'),'<img width="30" src="/assets/images/ru-flag.png">') ;?></li>
					  	<li><?php echo anchor($this->lang->switch_uri('uz'),'<img width="30"  src="/assets/images/uz-flag.png">');?></li> 
							</ul>	
						</div>	
					</nav>		
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- a-about -->
	<div class="a-grid">
		<div class="container">
			<div class="w3l-about-heading">
				<h2><?php echo lang('menu_services'); ?></h2>
				</div>
				<div class="about-grids">
				<div class="col-md-3 about-grid">
					<div class="about-grid-info effect-1">
					<a href="<?php echo site_url('search');?>" target="_blank"><h4><?php echo lang('smart_search');?></h4></a>
					</div>
				</div>
				<div class="col-md-3 about-grid">
					<div class="about-grid-info about-grid-info1 effect-1">
					<a href="https://t.me/TashkentCityAssistantBot"><h4><?php echo lang('smart_bot');?></h4></a>
					</div>
				</div>
				<div class="col-md-3 about-grid">
					<div class="about-grid-info about-grid-info2 effect-1">
					<a href="<?php echo site_url('#');?>" class="chat_title_link"><h4><?php echo lang('smart_chat');?></h4></a>
					</div>
				</div>
				<div class="col-md-3 about-grid">
					<div class="about-grid-info about-grid-info3 effect-1">
					<a href="<?php echo site_url('temperature');?>"><h4><?php echo lang('temperature');?></h4></a>
					
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //a-about -->
	<!-- different -->
	<div class="jarallax more-offer">
		<div class="container">
			<div class="w3-different-heading">
				</div>
			<div class="w3agile-different-info">
				</div>
		</div>
	</div>
	<script type="text/javascript">
        /* init Jarallax */
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })
    </script>
	<!-- //different -->
	
	<!-- //team -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-4 footer-grid">
					<div class="footer-grid-heading">
					<h4><?php echo lang('address');?></h4>
					</div>
					<div class="footer-grid-info">
						<p>
							<span><?php echo lang('inha');?></span>
						</p>
						<p class="phone">Phone : +1 123 456 789
							<span>Email : <a href="mailto:example@email.com">mail@example.com</a></span>
						</p>
					</div>
				</div>
				<div class="col-md-4 footer-grid">
					<div class="footer-grid-heading">
					<h4><?php echo lang('pages');?></h4>
					</div>
					<div class="footer-grid-info">
						<ul>
						<li class="current"><a href="<?php echo site_url('homepage');?>"><?php echo lang('menu_home');?></a></li>
							<li class="current"><a href="<?php echo site_url('about');?>"><?php echo lang('menu_about');?></a></li>
							<li class="current"><a href="<?php echo site_url('services');?>"><?php echo lang('menu_services');?></a></li>
						<li class="current"><a href="<?php echo site_url('contact');?>"><?php echo lang('menu_contact');?></a></li>
						
						</ul>
					</div>
				</div>
				<div class="col-md-4 footer-grid">
					<div class="footer-grid-heading">
					<h4><?php echo lang('follow');?></h4>
					</div>
					<div class="social">
						<ul>
						<li><a href="http://facebook.com"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://twitter.com"><i class="fa fa-twitter"></i></a></li>
						
						<li><a href="http://vk.com"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
			<div class="copyright">
				<p><?php echo lang('copyright');?></a> </p>
			</div>
		</div>
	</div>
	<!-- //footer -->
</body>	
</html>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>My Trip a Travel Category Flat Bootstrap responsive Website Template | Contact :: w3layouts</title>
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
					<a href="homepage">Smart City</a>
					</h1>
				</div>
				<div class="top-nav">
					<nav class="navbar navbar-default">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
							</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
							<li><a href="homepage"><?php echo lang('menu_home'); ?></a></li>
							<li><a href="about"><?php echo lang('menu_about'); ?></a></li>
							<li><a href="services"><?php echo lang('menu_services'); ?></li>
							<li><a href="codes"><?php echo lang('menu_codes'); ?></a></li>	
							<li><a href="gallery"><?php echo lang('menu_gallery'); ?></a></li>
							<li><a href="contact"><?php echo lang('menu_feedback'); ?></a></li>
								<div class="clearfix"> </div>
							</ul>	
						</div>	
					</nav>		
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="w3l-contact-heading">
				<h2><?php echo lang('menu_feedback'); ?></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porta efficitur ante quis volutpat.</p>
			</div>
			<div class="agile-contact-form">
				<div class="col-md-6 contact-form-left">
					<div class="contact-form-top">
						<h3><?php echo lang('contact_us_title');?></h3>
						<p>Pellentesque eget mi nec est tincidunt accumsan. Proin fermentum dignissim justo, vel euismod justo sodales vel. In non condimentum mauris. Maecenas condimentum interdum lacus, ac varius nisl dignissim ac. Vestibulum euismod est risus, quis convallis nisi tincidunt eget. Sed ultricies congue lacus at fringilla.</p>
					</div>
					<div class="contact-address">
						<ul>
							<li><i class="fa fa-phone" aria-hidden="true"></i> <span>+1 234 567 8901</span></li>
							<li><i class="fa fa-phone fa-envelope" aria-hidden="true"></i> <span><a href="mailto:example@email.com">mail@example.com</a></span></li>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i></i> <span>Inha University of Tashkent.</span></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 contact-form-right">
					<div class="contact-form-top">
						<h3><?php echo lang('feedback_heading');?></h3>
					</div>
					<div class="contact-form-grid">
					<?php if ($this->session->flashdata('message')) echo $this->session->flashdata('message');?>
<?php if (validation_errors() != '') echo "<div class='alert alert-danger'>" . validation_errors() . "</div>"; ?>
					<form method="post">
					<div class="form-group">
						<label for="from"><?php echo lang('feedback_name'); ?></label>
						<input type="text" name="from" id="from" placeholder="<?php echo lang('feedback_placeholder_name'); ?>" value="<?php echo set_value('from'); ?>" class="form-control" />
					</div>
					<div class="form-group">
						<label for="email"><?php echo lang('feedback_email'); ?></label>
						<input type="email" name="email" id="email" placeholder="<?php echo lang('feedback_placeholder_email'); ?>" value="<?php echo set_value('email'); ?>" class="form-control" />
					</div>
					<div class="form-group">
						<label for="title"><?php echo lang('feedback_theme'); ?></label>
						<input type="text" name="title" id="title" placeholder="<?php echo lang('feedback_placeholder_theme'); ?>" value="<?php echo set_value('title'); ?>" class="form-control" />
					</div>
					<div class="form-group">
						<label for="text"><?php echo lang('feedback_text'); ?></label>
						<textarea name="text" id="text" cols="40" rows="8" placeholder="<?php echo lang('feedback_placeholder_text'); ?>" class="form-control"><?php echo set_value('text'); ?></textarea>
					</div>
					<div class="form-group">
						<label for="captcha" ><?php echo lang('feedback_protection'); ?></label>
						<img src="/captcha/?<?php echo time();?>" /><br />
						<input type="text" name="captcha" id="captcha" class="form-control" placeholder="<?php echo lang('feedback_placeholder_protection'); ?>" />
					</div>
						<input type="submit" name="send" class="btn btn-success" value="<?php echo lang('feedback_send'); ?>" />
				</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3agile-map">
				<h3>Find us here</h3>
				<iframe src="https://www.google.com/maps/place/Университет+Инха/@41.338525,69.33453,15z/data=!4m5!3m4!1s0x0:0x3772abeffc72e7b8!8m2!3d41.338525!4d69.33453" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Address</h4>
					</div>
					<div class="footer-grid-info">
						<p>Eiusmod Tempor inc
							<span>Inha University of Tashkent.</span>
						</p>
						<p class="phone">Phone : +1 123 456 789
							<span>Email : <a href="mailto:example@email.com">mail@example.com</a></span>
						</p>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Navigation</h4>
					</div>
					<div class="footer-grid-info">
						<ul>
						<li><a href="homepage"><?php echo lang('menu_home'); ?></a></li>
						<li><a href="about"><?php echo lang('menu_about'); ?></a></li>
						<li><a href="services"><?php echo lang('menu_services'); ?></li>
						<li><a href="codes"><?php echo lang('menu_codes'); ?></a></li>	
						<li><a href="gallery"><?php echo lang('menu_gallery'); ?></a></li>
						<li><a href="contact"><?php echo lang('menu_feedback'); ?></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Follow</h4>
					</div>
					<div class="social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Newsletter</h4>
					</div>
					<div class="footer-grid-info">
						<form action="#" method="post">
							<input type="email" id="mc4wp_email" name="EMAIL" placeholder="Enter your email here" required="">
							<input type="submit" value="Subscribe">
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="copyright">
				<p><?php echo lang('copyright'); ?></p>
			</div>
		</div>
	</div>
	<!-- //footer -->
</body>	
</html>
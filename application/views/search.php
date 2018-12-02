<!DOCTYPE HTML>
<html>
<head>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="icon" type="image/x-icon" href="/assets/images/ico.png" />
<!-- bootstrap-css -->
<link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="/assets/css/style.css" type="text/css" media="all" />
<!--// css -->
<link rel="stylesheet" href="/assets/css/ken-burns.css">
<!-- font-awesome icons -->
<link href="/assets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="/assets/js/jquery-1.11.1.min.js"></script>
<script src="/assets/js/bootstrap.js"></script>
<meta charset="utf-8">

<style>
body{background:url(/assets/search/images/pageBg2.png) repeat; color:#d4dae0;}
h1{font:normal 20px/20px Georgia, "Times New Roman", Times, serif;  text-align:center; padding-top:20px;}
p{text-align:center; padding:20px; border-bottom:#bbb dotted 3px; font:normal 13px/16px Georgia, "Times New Roman", Times, serif}
a{;color:#999;} a:hover{color:#666;} form{ margin:0 auto;}
/*  Скопируйте код ниже в ваш файл стилей (CSS файл)  */

#search-block-form{
	width:248px;
	height:28px;
	border-radius:15px;
	border:none;
	background:url(/assets/search/images/searchBgDark.png) left top repeat-x;
	box-shadow:0px 1px 2px rgba(255,255,255,0.2);
	}
#search-block-form input{
	padding:0;
	margin:0;
	display:block;
	border:none;
	outline:none;
	background:none;
	width:100%;
	height:100%;
	}
#search-block-form .form-actions{
	width:28px;
	height:28px;
	float:left;
	background:url(/assets/search/images/searchIconDark.png) 12px 9px no-repeat;
	}
#search-block-form .form-actions input:hover{
	cursor:pointer;
	}
#search-block-form .form-actions input{
	overflow:hidden;
	text-indent:-9999px;
	}
#search-block-form .form-item{
	width:210px;
	padding:0px 5px;
	float:right;
	height:28px;
	}
#search-block-form .form-item input{
	font:13px/16px "Trebuchet MS", Arial, Helvetica, sans-serif;
	color:#93979c;
	height:auto !important;
	padding:6px 0;
	}
.placeholder{color:#606368 !important;}

/* Конец */
</style>
<!-- Если в вашем шаблоне уже подключается jquery, то дополнительно подключать его не нужно, но обязательно вставьте вторую строчку (где подключается jquery.placeholder.min.js) -->
<script src="/assets/search/jquery-1.7.2.min.js"></script>
<script src="/assets/search/jquery.placeholder.min.js"></script>
<script>
/*  Скопируйте код ниже в ваш js файл. (JavaScript). */

$(document).ready(function(e) {
	$("input[placeholder]").placeholder();
	$("#search-block-form .form-item input").focus(function(){
		$("#search-block-form").addClass("focus-active");
			})
	.blur(function(){
		$("#search-block-form").removeClass("focus-active");
	});
});

/* Конец */
</script>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="top-banner">
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
							<li class="current"><a href="<?php echo site_url('codes');?>"><?php echo lang('menu_rooms');?></a></li>
							<li class="current"><a href="<?php echo site_url('gallery');?>"><?php echo lang('menu_gallery');?></a></li>
							<li class="current"><a href="<?php echo site_url('contact');?>"><?php echo lang('menu_contact');?></a></li>
							<li><?php echo anchor($this->lang->switch_uri('ru'),'<img width="30" src="/assets/images/ru-flag.png">') ;?></li>
					  	<li><?php echo anchor($this->lang->switch_uri('uz'),'<img width="30"  src="/assets/images/uz-flag.png">');?></li> 
								<div class="clearfix"> </div>
							</ul>	
						</div>	
					</nav>		
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	</div>
<!-- Сам код формы (вставляется непосредственно в страницу) -->
<div class="row">
<div class="container">
<div class="col-md-12"><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><h1>
<?php echo lang('search_sistem');?></h1>

<form action="" method="post" id="search-block-form">
      <div class="form-item">
        <input type="text" name="q" value="" size="15" maxlength="128" placeholder="<?php echo lang('search_find');?>">
      </div>
      <div class="form-actions">
        <input type="submit" id="edit-submit" name="op" value="Поиск" class="form-submit">
	
      </div>
		
	  
      </div>
	 
	  
		
		
</form>
</div>
</div>
</div>
<!-- Конец -->
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
							<li class="current"><a href="<?php echo site_url('codes');?>"><?php echo lang('menu_rooms');?></a></li>
							<li class="current"><a href="<?php echo site_url('gallery');?>"><?php echo lang('menu_gallery');?></a></li>
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
				<p>© 2018 Open Data . All Rights Reserved | Design by <a href="#"> TATU NF TEAM</a> </p>
			</div>
		</div>
	</div>
</body>
</html>

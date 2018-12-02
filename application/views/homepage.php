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
</head>
<style>
      ul.carousel {
        display: flex;
        width: 720px;
        margin: 20px auto;
        padding: 0;
        justify-content: center;
        overflow: auto;
      }

      /* MOBILE */
      @media screen and (max-width: 700px) {
        ul.carousel {
          width: 100%;
          justify-content: flex-start;
        }

          ul.carousel li:first-child {
            padding-left: 0;
          }

          ul.carousel li:last-child {
            padding-right: 0;
          }
      }

        ul.carousel li {
          list-style: none;
          margin: 0;
          padding: 0 10px;
          display: inline-block;
        }
          ul.carousel li a {
            display: inline-block;
            text-align: center;
            margin: 0;
            padding: 0;
            color: #999;
            text-decoration: none;
          }
            ul.carousel li a.current {
              color: blue;
              text-decoration: underline;
            }
            ul.carousel li a img {
              width: 124px;
              height: 80px;
            }
            ul.carousel li a small {
              display: block;
            }
    </style>
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
	<!-- //banner -->
	<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
            <!-- Wrapper for Slides -->
            <div class="carousel-inner" role="listbox">
                <!-- First Slide -->
                <div class="item active">
					<div class="slider">
						<div class="carousel-caption kb_caption slider-grid">
							<h3>Smart Chat</h3>
							<p>Smart chat for you</p>
						</div>
					</div>
                </div>

                <!-- Second Slide -->
                <div class="item">
					<div class="slider slider1">
						<div class="carousel-caption kb_caption kb_caption_right slider-grid">
							<h3>Smart Idea's</h3>
							<p>Smart idea's for smart technologies.</p>
						</div>
					</div>
                </div>

                <!-- Third Slide -->
                <div class="item">
					<div class="slider slider2">
						<div class="carousel-caption kb_caption kb_caption_center slider-grid">
						   <h3><?php echo lang('smart_city');?></h3>
							<p>Smart City and smart technologies</p>
						</div>
					</div>
                </div>

            </div>
            <!-- Navigation Buttons -->
            <!-- Left Button -->
            <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
                <span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <!-- Right Button -->
            <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div> 
	<!-- about -->
	<div class="about">
		<div class="container">
			<div class="w3l-about-heading">
				<h2><?php echo lang('smart_uslugi');?></h2>
				
			</div>
			<div class="about-grids">
				<div class="col-md-3 about-grid">
					<div class="about-grid-info effect-1">
					<a href="<?php echo site_url('#');?>"><h4><?php echo lang('smart_idea');?></h4></a>
					</div>
				</div>
				<div class="col-md-3 about-grid">
					<div class="about-grid-info about-grid-info1 effect-1">
					<a href="<?php echo site_url('#');?>"><h4><?php echo lang('smart_bot');?></h4></a>
					</div>
				</div>
				<div class="col-md-3 about-grid">
					<div class="about-grid-info about-grid-info2 effect-1">
					<a href="<?php echo site_url('#');?>"><h4><?php echo lang('smart_chat');?></h4></a>
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
	<!-- //about -->
	<!-- offer -->
	<div class="offer">
		<div class="container">
			<div class="wthree-offer-grid">
				<h4>Today Best offers</h4>
				<p>Sed vitae purus ut libero malesuada molestie imperdiet a nibh. Etiam consectetur odio a massa vulputate porttitor. Quisque nibh orci, vestibulum sed gravida vel, eleifend nec libero. </p>
				<div class="click-button">
					<a href="single">Click Here</a>
				</div>
			</div>
		</div>
	</div>
	<!-- //offer -->
	<!-- news -->
	<div class="news">
		<div class="container">
			<div class="news-heading">
				<h3><?php echo lang('new_events');?></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porta efficitur ante quis volutpat.</p>
			</div>
			<div class="news-grids">
				<div class="col-md-4 news-grid">
					<div class="agile-news-grid-info">
						<div class="news-grid-info-img">
							<a href="single"><img src="/assets/images/n1.jpg" alt="" /></a>
						</div>
						<div class="news-grid-info-bottom">
							<div class="date-grid">
								<div class="admin">
									<a href="#"><i class="fa fa-user" aria-hidden="true"></i> Admin</a>
								</div>
								<div class="time">
									<p><i class="fa fa-calendar" aria-hidden="true"></i> May 09,2016</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="news-grid-info-bottom-text">
								<a href="single">Quisque gravida, nunc eu interdum porta</a>
								<p>Aliquam erat volutpat. Duis vulputate tempus laoreet. Integer viverra eleifend neque, eget dictum lectus. Quisque eu tempor dolor.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 news-grid">
					<div class="agile-news-grid-info">
						<div class="news-grid-info-img">
							<a href="single"><img src="/assets/images/n2.jpg" alt="" /></a>
						</div>
						<div class="news-grid-info-bottom">
							<div class="date-grid">
								<div class="admin">
									<a href="#"><i class="fa fa-user" aria-hidden="true"></i> Admin</a>
								</div>
								<div class="time">
									<p><i class="fa fa-calendar" aria-hidden="true"></i> May 09,2016</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="news-grid-info-bottom-text">
								<a href="single">Quisque gravida, nunc eu interdum porta</a>
								<p>Aliquam erat volutpat. Duis vulputate tempus laoreet. Integer viverra eleifend neque, eget dictum lectus. Quisque eu tempor dolor.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 news-grid">
					<div class="agile-news-grid-info">
						<div class="news-grid-info-img">
							<a href="single"><img src="/assets/images/n3.jpg" alt="" /></a>
						</div>
						<div class="news-grid-info-bottom">
							<div class="date-grid">
								<div class="admin">
									<a href="#"><i class="fa fa-user" aria-hidden="true"></i> Admin</a>
								</div>
								<div class="time">
									<p><i class="fa fa-calendar" aria-hidden="true"></i> May 09,2016</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="news-grid-info-bottom-text">
								<a href="single">Quisque gravida, nunc eu interdum porta</a>
								<p>Aliquam erat volutpat. Duis vulputate tempus laoreet. Integer viverra eleifend neque, eget dictum lectus. Quisque eu tempor dolor.</p>
							
							</div>
							</br>	</br>
						</div>
						
					</div>
					
				</div>
				<div class="news">
				
		<div class="container">
			<div class="news-heading">
			
				<div class="news-heading"><h3><?php echo lang('panorama_city');?></h3>
					</br>
				<div class="clearfix">
				

<div id="vrview"></div>

<ul class="carousel">
<?php foreach($panoramas as $pano):?>
<?php
$thumbnail_name = str_replace(".jpg","_thumbnail.jpg",$pano->path);
$preview_name = str_replace(".jpg","_thumbnail.jpg",$pano->path);
?>
  
  <li>
	<a href="#image<?php echo $pano->id;?>">
	  <img src="/assets/panoramas/<?php echo $thumbnail_name;?>">
	  <small><?php echo $pano->title;?></small>
	</a>
  </li>
<?php endforeach;?>
  
</ul>
				 </div> </div>
			</div></div></div></div>
		
		</div>
		
	</div>
	
	<!-- //news -->
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
							<span>Inha University of Tashkent.</span>
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
						<li><a href="homepage"><?php echo lang('menu_home'); ?></a></li>
						<li><a href="about"><?php echo lang('menu_about'); ?></a></li>
						<li><a href="services"><?php echo lang('menu_services'); ?></li>
						<li><a href="codes"><?php echo lang('menu_codes'); ?></a></li>	
						<li><a href="gallery"><?php echo lang('menu_gallery'); ?></a></li>
						<li><a href="contact"><?php echo lang('menu_feedback'); ?></a></li>
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
	<?php $this->load->view('chat');?>
	<!-- //footer -->
	<script src="/assets/js/SmoothScroll.min.js"></script>
	<script src="/assets/build/vrview.js"></script>
    <!--<script src="/assets/photos.js"></script>-->
    <script>
    var vrView;

    // All the scenes for the experience
    var scenes = {
      <?php foreach($panoramas as $pano):
      $thumbnail_name = str_replace(".jpg","_thumbnail.jpg",$pano->path);
      $preview_name = str_replace(".jpg","_thumbnail.jpg",$pano->path);
      printf("image%s: {
          image: '/assets/panoramas/%s',
          preview: '/assets/panoramas/%s',
      },
      ", $pano->id, $pano->path, $preview_name);
      endforeach;?>
    };

    function onLoad() {
      vrView = new VRView.Player('#vrview', {
        width: '100%',
        height: 480,
        image: '/images/blank.png',
        is_stereo: false,
        is_autopan_off: true
      });

      vrView.on('ready', onVRViewReady);
      vrView.on('modechange', onModeChange);
      vrView.on('error', onVRViewError);
    }

    function loadScene(id) {
      console.log('loadScene', id);

      // Set the image
      vrView.setContent({
        image: scenes[id].image,
        preview: scenes[id].preview,
        is_autopan_off: true
      });

      // Unhighlight carousel items
      var carouselLinks = document.querySelectorAll('ul.carousel li a');
      for (var i = 0; i < carouselLinks.length; i++) {
        carouselLinks[i].classList.remove('current');
      }

      // Highlight current carousel item
      document.querySelector('ul.carousel li a[href="#' + id + '"]')
          .classList.add('current');
    }

    function onVRViewReady(e) {
      console.log('onVRViewReady');

      // Create the carousel links
      var carouselItems = document.querySelectorAll('ul.carousel li a');
      for (var i = 0; i < carouselItems.length; i++) {
        var item = carouselItems[i];
        item.disabled = false;

        item.addEventListener('click', function(event) {
          event.preventDefault();
          loadScene(event.target.parentNode.getAttribute('href').substring(1));
        });
      }

      loadScene('image<?php echo $panoramas[0]->id;?>');
    }

    function onModeChange(e) {
      console.log('onModeChange', e.mode);
    }

    function onVRViewError(e) {
      console.log('Error! %s', e.message);
    }

    window.addEventListener('load', onLoad);
    </script>
</body>	
</html>
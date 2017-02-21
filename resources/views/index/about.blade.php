<!DOCTYPE html>
<html lang="en">
<head>
<title>About</title>

<base href="/public/home/">
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- //js --> 
<!-- web fonts -->
<link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //web fonts -->
</head>
<body>


	<!-- header -->
	@include('layouts.header')
	<!-- //header -->
	<div class="banner about-bnr">
		<div class="container">
		</div>
	</div>
	<!-- about -->
	<div class="about">
		<div class="container">
			<h3 class="w3ls-title1">关于 <span>我们</span></h3>
			<div class="about-agileinfo w3layouts">
				<div class="col-md-8 about-wthree-grids grid-top">
					<h4>  {{$firm->f_name	}}</h4>
					<div>
						<?php echo html_entity_decode($firm->f_nickname) ?>
					</div>
				</div>
				<div class="col-md-4 about-wthree-grids">
					<div class="offic-time">
						<div class="time-top">
							<h4>联系我们</h4>
						</div>
						<div class="time-bottom">
							<p>电话：{{$firm->f_tel}}</p>
							<p>手机：{{$firm->f_phone}}</p>
							<p>联系人：{{$firm->f_contact}}</p>
							<p>邮箱：{{$firm->f_email}}</p>
							<p>网址：{{$firm->f_url}}</p>
							<p>地址：{{$firm->f_address}}</p>
						</div>
					</div>
					<div class="testi">
						<div  id="top" class="callbacks_container">
							<ul class="rslides" id="slider5">
								<li>
									<div class="testi-slider">
										<h4>企业宗旨</h4>
										<p class="w3-agilesub"> 传千载文化，造百年经典，不求量而求精，试看后人来评定。</p>
									</div>
								</li>
								</ul>
						</div>
					</div>
				</div>	
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- about-slid -->

	<!-- //about-slid -->
	<!-- about-team -->
	<div class="about-team"> 
		<div class="container">
			<h3 class="w3ls-title1">公 司 <span>荣誉</span></h3>
			<div class="team-agileitsinfo">
				<div class="col-md-3 about-team-grids">
					<img src="images/img8.jpg" alt=""/>
					<div class="team-w3lstext">
						<h4><span>公司,</span>荣誉</h4>
<p> 多年来，廊坊陶然居家具有限公司领先于行业标准的典藏家具受到资深收藏者的追捧</p>
					</div>
					<div class="social-icons caption"> 
						<ul>
							<li><a href="#" class="fa fa-facebook facebook"> </a></li>
							<li><a href="#" class="fa fa-twitter twitter"> </a></li>
							<li><a href="#" class="fa fa-google-plus googleplus"> </a></li> 
						</ul>
						<div class="clearfix"> </div>  
					</div>
				</div>
				<div class=" col-md-3 about-team-grids">
					<img src="images/img8.jpg" alt=""/>
					<div class="team-w3lstext">
						<h4><span>公司,</span>荣誉</h4>
						<p> 多年来，廊坊陶然居家具有限公司领先于行业标准的典藏家具受到资深收藏者的追捧</p></div>
					<div class="social-icons caption"> 
						<ul>
							<li><a href="#" class="fa fa-facebook facebook"> </a></li>
							<li><a href="#" class="fa fa-twitter twitter"> </a></li>
							<li><a href="#" class="fa fa-google-plus googleplus"> </a></li> 
						</ul>
						<div class="clearfix"> </div>  
					</div>
				</div>
				<div class="col-md-3 about-team-grids">
					<img src="images/img10.jpg" alt=""/>
					<div class="team-w3lstext">
						<h4><span>公司,</span>荣誉</h4>
						<p> 多年来，廊坊陶然居家具有限公司领先于行业标准的典藏家具受到资深收藏者的追捧</p></div>
					<div class="social-icons caption"> 
						<ul>
							<li><a href="#" class="fa fa-facebook facebook"> </a></li>
							<li><a href="#" class="fa fa-twitter twitter"> </a></li>
							<li><a href="#" class="fa fa-google-plus googleplus"> </a></li> 
						</ul>
						<div class="clearfix"> </div>  
					</div>
				</div>
				<div class="col-md-3 about-team-grids">
					<img src="images/img10.jpg" alt=""/>
					<div class="team-w3lstext">
						<h4><span>公司,</span>荣誉</h4>
						<p> 多年来，廊坊陶然居家具有限公司领先于行业标准的典藏家具受到资深收藏者的追捧</p></div>
					<div class="social-icons caption"> 
						<ul>
							<li><a href="#" class="fa fa-facebook facebook"> </a></li>
							<li><a href="#" class="fa fa-twitter twitter"> </a></li>
							<li><a href="#" class="fa fa-google-plus googleplus"> </a></li> 
						</ul>
						<div class="clearfix"> </div>  
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about-team -->
	<!-- about-services -->

	<!-- //about-services -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<h3 class="w3ltitle">GET IN <span>TOUCH</span></h3>
			<div class="footer-agileinfo">
				<div class="col-md-6 footer-left">
					<h5><a href="#">Ready to hire me?</a></h5>
					<div class="w3ls-more">
						<a href="contact.html" class="effect6">Get in touch</a>
					</div>
				</div>
				<div class="col-md-6 footer-right">
					<div class="address w3-agileits">
						<div class="col-xs-2 contact-grdl">
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 contact-grdr">
							<p>+111 222 3333 111</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address w3-agileits">
						<div class="col-xs-2 contact-grdl">
							<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 contact-grdr">
							<p>345 Spruce Street, London.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address w3-agileits">
						<div class="col-xs-2 contact-grdl">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 contact-grdr">
							<p><a href="mailto:example@mail.com">mail@example.com</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

		<!-- copy-right -->
		@include('layouts.footer')
		<!-- //copy-right -->

	</div>
	<!-- //footer --> 
	<!-- start-smooth-scrolling-->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>
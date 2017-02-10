<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>

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

	<div class="banner about-bnr w3-agileits">
		<div class="container">
		</div>
	</div>
	<!-- contact -->
	<div class="contact">
		<div class="container">
			<h2 class="w3ls-title1">联系 <span>我们</span></h2>
			<div class="contact-agileitsinfo">
				<div class="col-md-8 contact-grids">
					<h5>传千载文化，造百年经典。不求量而求精，试看后人来评定。</h5>
					<p>传千载文化，造百年经典。不求量而求精，试看后人来评定。传千载文化，造百年经典。不求量而求精，试看后人来评定。传千载文化，造百年经典。不求量而求精，试看后人来评定。传千载文化，造百年经典。不求量而求精，试看后人来评定。 </p>
					<div class="contact-w3form">
						<h3 class="w3ls-title1">输入您的信息</h3>
						<form action="#" method="post"> 
							<textarea name="Message" placeholder="输入留言" required=""></textarea>
							<input type="text" name="Name" placeholder="您的名称" required=""/>
							<input type="text" name="Email" placeholder="您的邮箱" required=""/>
							<input type="submit" value="发送给我们">
						</form>
					</div>
				</div>
				<div class="col-md-4 contact-grids">
					<div class="cnt-address">
						<h3 class="w3ls-title1">地址</h3>
						<h4>河北省廊坊市</h4>
						<p>123 T. Globel Place,
							<span>CG 09-123</span>
							London, Ba. 4567
						</p>
						<h4>电话</h4>
						<p>Telephone: 17839195312
							<span>FAX: +1 011 222 8887</span>
							E-mail: <a href="mailto:info@example.com">mail@example.com</a>
						</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<!-- //contact -->
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
					<div class="address">
						<div class="col-xs-2 contact-grdl">
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 contact-grdr">
							<p>+111 222 3333 111</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address">
						<div class="col-xs-2 contact-grdl">
							<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 contact-grdr">
							<p>345 Spruce Street, London.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address">
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
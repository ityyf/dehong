<!DOCTYPE html>
<html lang="en">
<head>
	<title>Icons</title>
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
	<link rel="stylesheet" href="css/lightbox.css">
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
<!-- gallery -->
<div class="gallery-top">
	<!-- container -->
	<div class="container">
		<h2 class="w3ls-title1">产品<span>中心</span></h2>
		<section id="new">
			<!--<h3 class="page-header page-header icon-subheading">30 New Icons </h3>-->
			<div class="row fontawesome-icon-list">
				@foreach($category as $val)
				<div class="icon-box col-md-3 col-sm-4"><a class="agile-icon" href="{{url('home/details',['c_id'=>$val->c_id])}}"><i class="fa fa-home" aria-hidden="true"></i>{{$val->c_name}}</a></div>
				@endforeach
								
			</div>
		</section>
		<div class="gallery-grids-top">
			<div class="gallery-grids">
				<!-- 大图 -->
				<div class="col-md-6 gallery-grid-top">
					<div class="gallery-grid-top-img">
						<a class="example-image-link" href="{{url('home/codes')}}" data-title=""><img class="example-image" src="images/img8.jpg" alt=""/></a>
					</div>
				</div>
				<div class="col-md-6 gallery-right">
					<div class="gallery-right-grid">
						<div class="col-md-6 gallery-grid-img">
							<a class="example-image-link" href="images/img6.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/img6.jpg" alt=""/></a>
						</div>
						<div class="col-md-6 gallery-grid-img">
							<a class="example-image-link" href="images/img8.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/img8.jpg" alt=""/></a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="gallery-right-grid gallery-right-top-grid">
						<div class="col-md-6 gallery-grid-img">
							<a class="example-image-link" href="images/img2.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/img2.jpg" alt=""/></a>
						</div>
						<div class="col-md-6 gallery-grid-img">
							<a class="example-image-link" href="images/img4.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/img4.jpg" alt=""/></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="gallery-grids gallery-grids-middle">
				<div class="col-md-4 gallery-grid middle-gallery-grid" style="border:1px solid bla">
					<a class="example-image-link" href="images/img1.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/img1.jpg" alt=""/></a>
				</div>
				<div class="col-md-4 gallery-grid middle-gallery-grid">
					<a class="example-image-link" href="images/img2.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/img2.jpg" alt=""/></a>
				</div>
				<div class="col-md-4 gallery-grid middle-gallery-grid">
					<a class="example-image-link" href="images/img3.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/img3.jpg" alt=""/></a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="gallery-grids">
				<div class="col-md-3 gallery-grid">
					<a class="example-image-link" href="images/img1.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/img1.jpg" alt=""/></a>
				</div>
				<div class="col-md-3 gallery-grid">
					<a class="example-image-link" href="images/img2.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/img2.jpg" alt=""/></a>
				</div>
				<div class="col-md-3 gallery-grid">
					<a class="example-image-link" href="images/img3.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/img3.jpg" alt=""/></a>
				</div>
				<div class="col-md-3 gallery-grid">
					<a class="example-image-link" href="images/img3.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/img3.jpg" alt=""/></a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<script src="js/lightbox-plus-jquery.min.js"></script>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- //container -->
</div>
<!-- //gallery -->
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
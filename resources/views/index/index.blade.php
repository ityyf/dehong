<!DOCTYPE html>
<html lang="en">
<head>
<title>德宏古典家居</title>

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
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
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
	<!-- banner -->
	<div class="banner"> 
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="banner-img1">
							<div class="banner-w3text">
								<h3> 古典 中国风</h3>
								<p> 德宏 红木典范  &nbsp;&nbsp;&nbsp;质坚, 纹美, 色艳, 味香, 性润.</p>
								<a href="#" class="effect6" data-toggle="modal" data-target="#myModal"><span>了解更多</span></a>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-img2">
							<div class="banner-w3text">
								<h3> 古典 中国风</h3>
								<p> 德宏 红木典范  &nbsp;&nbsp;&nbsp;质坚, 纹美, 色艳, 味香, 性润.</p>
								<a href="#" class="effect6" data-toggle="modal" data-target="#myModal"><span>了解更多</span></a>
							</div>
						</div>
					</li>
				</ul> 
			</div>
		</section> 
		<!-- FlexSlider -->
		<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
			$(window).load(function(){
			  $('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
				  $('body').removeClass('loading');
				}
			  });
			});
		</script>
		<!-- //FlexSlider -->
	</div>
	<!-- banner -->
	<!-- modal -->
	<div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body">
					<img src="images/img18.jpg" alt=""> 
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate. </p>
				</div> 
			</div>
		</div>
	</div>
	<!-- //modal -->  
	<!-- banner-bottom -->
	<div class="w3-agile-text">
		<div class="container"> 
			<h2><span> 企业宗旨：</span> </h2>
			<p>传千载文化，造百年经典。不求量而求精，试看后人来评定。</p>
		</div>
	</div>
	<!-- //banner-bottom -->
	<!-- features -->
	<div class="features">
		<div class="container">
			<div class="col-md-4 feature-grids">
				<h3 class="w3ltitle">公司<span>简 介</span></h3>
				<p>  红木家具-廊坊陶然居红木家具有限公司所产红木家具，器型雍容典雅、结构严谨考究、做工精致细腻，受到古典家具收藏爱好者的一致好评，陶然居也成为央视热播品牌。陶然居董事长叶双陶，欢迎新老客户光临惠顾！。" </p>
				<p> 廊坊陶然居家具有限公司创建于1990年，坐落在南赵扶镇东侧，占地面积40亩，现有员工260多人。企业产品多以明清两代古典式家具为主，种类多样，主要包括椅凳、桌案、床榻、橱柜、杂项等5大类40余种，均为纯手工制作，做工上乘、质量优良，主要销往广州、北京、上海等国内各大城市和港澳台等地区，并出口美国、德国、新加坡、澳大利亚等国家，该企业已成为红木家具业的一面旗帜。 </p>
				<div class="w3ls-more">
					<a href="#" class="effect6" data-toggle="modal" data-target="#myModal"><span>阅读 更多</span></a>
				</div>
			</div>
			<div class="col-md-4 feature-grids">
				<img src="images/3.jpg" alt=""/>
			</div>
			<div class="col-md-4 feature-grids">
				<h3 class="w3ltitle">红木家居 用材五德</h3>
				<div class="w3ls-pince">
					<div class="pince-left">
						<h5>01</h5>
					</div>
					<div class="pince-right">
						<h4>质坚</h4>
						<p>即：材质要坚硬、沉重、细密、耐腐，这样才能世代相传。</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3ls-pince">
					<div class="pince-left">
						<h5>02</h5>
					</div>
					<div class="pince-right">
						<h4>纹美</h4>
						<p>即：木材纹理千变万化，美如图画。传世家具的材质的纹理当然就要美轮美奂。</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3ls-pince">
					<div class="pince-left">
						<h5>03</h5>
					</div>
					<div class="pince-right">
						<h4>色艳 </h4>
						<p>即：材色高贵艳丽、姚黄魏紫。如黄花梨色彩丰富，由金黄、赭黄、褐赤到紫黑诸色。</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3ls-more">
					<a href="#" class="effect6" data-toggle="modal" data-target="#myModal"><span>阅读 更多</span></a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //features -->
	<!-- projects -->
	<div class="projects">
		<div class="container">
			<div class="col-md-3 project-right w3layouts">
				<h3 class="w3ltitle">产品<span> 展示</span></h3>
				<p> 公司产品展示.</p>
			</div>
			<div class="col-md-9 project-left">
				<!-- flex-slider -->
				<div class="work-bottom">
					<div class="nbs-flexisel-container"><div class="nbs-flexisel-inner">
						<ul id="flexiselDemo1" class="nbs-flexisel-ul" style="left: -285px; display: block;">																																		
							<li class="nbs-flexisel-item" style="width: 285px;">
								<div class="project-grids">
									<img src="images/img1.jpg" alt="">
									<div class="team-bottom">
									</div>
								</div>
							</li>
							<li class="nbs-flexisel-item" style="width: 285px;">
								<div class="project-grids">
									<img src="images/img2.jpg" alt="">
									<div class="team-bottom">
									</div>
								</div>
							</li>
							<li class="nbs-flexisel-item" style="width: 285px;">
								<div class="project-grids">
									<img src="images/img3.jpg" alt="">
									<div class="team-bottom">
									</div>
								</div>
							</li>
							<li class="nbs-flexisel-item" style="width: 285px;">
								<div class="project-grids">
									<img src="images/img4.jpg" alt="">
									<div class="team-bottom">
									</div>
								</div>
							</li>
							<li class="nbs-flexisel-item" style="width: 285px;">
								<div class="project-grids">
									<img src="images/img5.jpg" alt="">
									<div class="team-bottom">
									</div>
								</div>
							</li>
							<li class="nbs-flexisel-item" style="width: 285px;">
								<div class="project-grids">
									<img src="images/img6.jpg" alt="">
									<div class="team-bottom">
									</div>
								</div>
							</li>
						</ul>
						<div class="nbs-flexisel-nav-left" style="top: 138px;"></div><div class="nbs-flexisel-nav-right" style="top: 138px;"></div></div></div>
							<script type="text/javascript">
								$(window).load(function() {
									$("#flexiselDemo1").flexisel({
										visibleItems: 4,
										animationSpeed: 1000,
										autoPlay: true,
										autoPlaySpeed: 3000,    		
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
										responsiveBreakpoints: { 
											portrait: { 
												changePoint:480,
												visibleItems: 2
											}, 
											landscape: { 
												changePoint:640,
												visibleItems: 3
											},
											tablet: { 
												changePoint:768,
												visibleItems: 3
											}
										}
									});
									
								});
							</script>
							<script type="text/javascript" src="js/jquery.flexisel.js"></script>				
						<!-- //flex-slider -->	
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //projects -->
	<!-- services -->
	<div class="services">
		<div class="container">
			<h3 class="w3ltitle"> OUR SERVICES</h3>
			<div class="services-agileinfo">
				<div class="servc-icon">
					<a href="#" class="agile-shape"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
					<p class="serw3-agiletext">Specialist</p>
					</a>
				</div>
				<div class="servc-icon">
					<a href="#" class="agile-shape"><span class="glyphicon glyphicon-check" aria-hidden="true"></span>
					<p class="serw3-agiletext"> Bonorum </p>
					</a>
				</div>
				<div class="servc-icon">
					<a href="#" class="agile-shape"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					<p class="serw3-agiletext">Specialist</p>
					</a>
				</div>
				<div class="servc-icon">
					<a href="#" class="agile-shape"><span class="glyphicon glyphicon-lamp" aria-hidden="true"></span>
					<p class="serw3-agiletext"> Bonorum </p>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
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
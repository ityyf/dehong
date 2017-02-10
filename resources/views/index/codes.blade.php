<!DOCTYPE html>
<html lang="en">
<head>
<title>Short Codes</title>
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


	<!--放大镜-->
	<link href="css/base.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.jqzoom.js"></script>
	<script type="text/javascript" src="js/base.js"></script>
	<!--放大镜结束-->

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
	<!-- short codes -->
	<div class="codes">
		<div class="container">
			<div class="grid_3 grid_5 ">
				<h3 class="w3ls-hdg">产品分类</h3>
				<div class="col-md-6">
					<p>产品简介或者全称.</p>
					<!--产品大图展示-->
					<div style=" margin-left: 5%">
						<div id="preview" class="spec-preview"> <span class="jqzoom"><img jqimg="images/b1.jpg" src="images/s1.jpg" /></span> </div>
						<!--缩图开始-->
						<div class="spec-scroll"> <a class="prev">&lt;</a> <a class="next">&gt;</a>
							<div class="items">
								<ul>
									<li><img alt="佳能" bimg="images/b1.jpg" src="images/s1.jpg" onmousemove="preview(this);"></li>
									<li><img alt="佳能" bimg="images/b2.jpg" src="images/s2.jpg" onmousemove="preview(this);"></li>
									<li><img alt="佳能" bimg="images/b3.jpg" src="images/s3.jpg" onmousemove="preview(this);"></li>
									<li><img alt="佳能" bimg="images/b1.jpg" src="images/s1.jpg" onmousemove="preview(this);"></li>
									<li><img alt="佳能" bimg="images/b3.jpg" src="images/s3.jpg" onmousemove="preview(this);"></li>
									<li><img alt="佳能" bimg="images/b1.jpg" src="images/s1.jpg" onmousemove="preview(this);"></li>
									<li><img alt="佳能" bimg="images/b2.jpg" src="images/s2.jpg" onmousemove="preview(this);"></li>
									<li><img alt="佳能" bimg="images/b1.jpg" src="images/s1.jpg" onmousemove="preview(this);"></li>
									<li><img alt="佳能" bimg="images/b2.jpg" src="images/s2.jpg" onmousemove="preview(this);"></li>
									<li><img alt="佳能" bimg="images/b2.jpg" src="images/s2.jpg" onmousemove="preview(this);"></li>
									<li><img alt="佳能" bimg="images/b1.jpg" src="images/s1.jpg" onmousemove="preview(this);"></li>
									<li><img alt="佳能" bimg="images/b2.jpg" src="images/s2.jpg" onmousemove="preview(this);"></li>
								</ul>
							</div>

						</div>
						<!--缩图结束-->
					</div>
					<!--产品参数结束-->
					<div style="clear:both;height:10px;"></div>
					<div class="m" id="comment">
					</div>
				</div>
				<div class="col-md-6">
					<h3>产品全称<code>优惠信息（如果没有的话，显示hot）</code> </h3>
					<div class="list-group list-group-alternate">
						<a href="#" class="list-group-item"><span class="badge">哇18呀4ui2贺年卡维罗尼卡的力挽狂澜你快乐你</span> <i class="ti ti-email"></i>产品信息:</a>
						<a href="#" class="list-group-item"><span class="badge badge-primary">5021</span> <i class="ti ti-eye"></i>产品销量: </a>
						<a href="#" class="list-group-item" style="line-height: 30px"><span class="badge badge-danger" style="font-size: 28px;line-height: 28px">$300000</span> <i class="ti ti-headphone-alt"></i>产品预估价格:</a>
						<a href="#" class="list-group-item"><span class="badge">20</span> <i class="ti ti-comments"></i>chanw </a>
						<a href="#" class="list-group-item"><span class="badge badge-warning">14</span> <i class="ti ti-bookmark"></i> Bookmarks </a> 
						<a href="#" class="list-group-item"><span class="badge ">30</span> <i class="ti ti-bell"></i> Notifications </a>
						<a href="#" class="list-group-item"><span class="badge ">30</span> <i class="ti ti-bell"></i> Notifications </a>
						<a href="#" class="list-group-item"><span class="badge ">30</span> <i class="ti ti-bell"></i> Notifications </a>
						<a href="#" class="list-group-item"><span class="badge ">30</span> <i class="ti ti-bell"></i> Notifications </a>
						<a href="#" class="list-group-item"><span class="badge ">30</span> <i class="ti ti-bell"></i> Notifications </a>
						<div class="w3ls-more" style="margin-left: 15%">
							<a href="contact.html" class="effect6">点击预定</a>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="grid_3 grid_5 ">
				<h3 class="w3ls-hdg">介绍</h3>
				<div class="bs-example bs-example-tabs w3" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">商品扩展信息</a></li>
						<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">商品资讯</a></li>
						<li role="presentation" class="dropdown">
							<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">扩展 <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
								<li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">地图API</a></li>
								<li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">求胡麻差</a></li>
							</ul>
						</li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                         <p>廊坊陶然居家具有限公司创建于1990年，坐落在南赵扶镇东侧，占地面积40亩，现有员工260多人。企业产品多以明清两代古典式家具为主，种类多样，主要包括椅凳、桌案、床榻、橱柜、杂项等5大类40余种，均为纯手工制作，做工上乘、质量优良，主要销往广州、北京、上海等国内各大城市和港澳台等地区，并出口美国、德国、新加坡、澳大利亚等国家，该企业已成为红木家具业的一面旗帜。 </p>
						</div>
						<div role="tabpanel" class="tab-pane fade w3" id="profile" aria-labelledby="profile-tab">
							<p>廊坊陶然居家具有限公司创建于1990年，坐落在南赵扶镇东侧，占地面积40亩，现有员工260多人。企业产品多以明清两代古典式家具为主，种类多样，主要包括椅凳、桌案、床榻、橱柜、杂项等5大类40余种，均为纯手工制作，做工上乘、质量优良，主要销往广州、北京、上海等国内各大城市和港澳台等地区，并出口美国、德国、新加坡、澳大利亚等国家，该企业已成为红木家具业的一面旗帜。 </p>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">
							<p>廊坊陶然居家具有限公司创建于1990年，坐落在南赵扶镇东侧，占地面积40亩，现有员工260多人。企业产品多以明清两代古典式家具为主，种类多样，主要包括椅凳、桌案、床榻、橱柜、杂项等5大类40余种，均为纯手工制作，做工上乘、质量优良，主要销往广州、北京、上海等国内各大城市和港澳台等地区，并出口美国、德国、新加坡、澳大利亚等国家，该企业已成为红木家具业的一面旗帜。 </p>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab">
							<p>廊坊陶然居家具有限公司创建于1990年，坐落在南赵扶镇东侧，占地面积40亩，现有员工260多人。企业产品多以明清两代古典式家具为主，种类多样，主要包括椅凳、桌案、床榻、橱柜、杂项等5大类40余种，均为纯手工制作，做工上乘、质量优良，主要销往广州、北京、上海等国内各大城市和港澳台等地区，并出口美国、德国、新加坡、澳大利亚等国家，该企业已成为红木家具业的一面旗帜。 </p>
						</div>
					</div>
				</div>
			</div>
			<!--<div class="grid_3 grid_5 w3">-->
				<!--<h3 class="w3ls-hdg">Wells</h3>-->
				<!--<div class="well w3l">-->
					<!--There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration-->
				<!--</div>-->
				<!--<div class="well w3l">-->
					<!--It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here-->
				<!--</div>-->
				<!--<div class="well w3l">-->
					<!--Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic-->
				<!--</div>-->
			<!--</div> -->

		</div> 
	</div>  
	<!-- //short-codes -->  	
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
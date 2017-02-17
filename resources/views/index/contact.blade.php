<!DOCTYPE html>
<html lang="en">
<head>
<title>德宏家居</title>

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
					<h5>{{$contact_info->f_name}}</h5>
					<p>{{$contact_info->f_nickname}}</p>
					<div class="contact-w3form">
						<h3 class="w3ls-title1">输入您的信息</h3>
							<textarea name="m_desc" placeholder="输入留言" required=""></textarea>
							<input type="text" name="commenter" placeholder="您的名称" required=""/>
							<input type="text" name="m_phone" placeholder="您的手机号" pattern="^1\d{10}$" required/>
							<input type="submit" id="sub" value="发送给我们">
					</div>
				</div>
				<div class="col-md-4 contact-grids">
					<div class="cnt-address">
						<h3 class="w3ls-title1">联系方式</h3>
						<p>电话：{{$contact_info->f_tel}}</p>
						<p>手机：{{$contact_info->f_phone}}</p>
						<p>联系人：{{$contact_info->f_contact}}</p>
						<p>邮箱：{{$contact_info->f_email}}</p>
						<p>网址：{{$contact_info->f_url}}</p>
						<p>地址：{{$contact_info->f_address}}</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<style type="text/css">
		body, html{width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
		#allmap{height:30%;width:30%;}
/*
		#r-result{width:100%; font-size:14px;}
*/
		.blue {
			color: #d9eef7;
			border: solid 1px #0076a3;
			background: #0095cd;
			background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
			background: -moz-linear-gradient(top, #00adee, #0078a5);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00adee', endColorstr='#0078a5');
		}
		.blue:hover {
			background: #007ead;
			background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
			background: -moz-linear-gradient(top, #0095cc, #00678e);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0095cc', endColorstr='#00678e');
		}
		.blue:active {
			color: #80bed6;
			background: -webkit-gradient(linear, left top, left bottom, from(#0078a5), to(#00adee));
			background: -moz-linear-gradient(top, #0078a5, #00adee);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0078a5', endColorstr='#00adee');
		}
		.city{
			color: #555555;
			vertical-align: middle;
			background-color: #ffffff;
			border: 1px solid #cccccc;
			border-radius: 4px;
			-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
			box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
			-webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
			transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
		}
		.city:focus{
			border-color: #66afe9;
			outline: 0;
			-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
			box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
		}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=iBZFcvzaliixSzY2VU67bZujHHOHqhiP"></script>
	<div id="allmap"></div>
	<div id="r-result">
		<input id="cityName" name="cityname" type="text" style="width:100px; margin-right:10px;" class="city" placeholder="请输入所在城市名称"/>
		<input type="button" value="查询" class="blue" onclick="theLocation()" />
		<div id="driving_way">
			<select>
				<option value="0">最少时间</option>
				<option value="1">最短距离</option>
				<option value="2">避开高速</option>
			</select>
			<input type="button" id="result" value="查询"/>
		</div>
		<div id="r-result" width="30%" height="30%"></div>
	</div>
	<script type="text/javascript">
		//定位出发地点
		var map = new BMap.Map("allmap");
		var point = new BMap.Point(116.729120,38.702442);
		map.centerAndZoom(point,11);
		//缩放地图
		//116.331398 39.897445
		setTimeout(function(){
			map.setZoom(14);
		}, 2000);  //2秒后放大到14级
		map.enableScrollWheelZoom(true);
		//文字标签覆盖物
		var marker = new BMap.Marker(point);  // 创建标注
		map.addOverlay(marker);              // 将标注添加到地图中
		marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画

		var label = new BMap.Label("德宏家居有限公司",{offset:new BMap.Size(20,-10)});
		marker.setLabel(label);
		function theLocation(){
			var city = document.getElementById("cityName").value;
			if(city != ""){
				map.centerAndZoom(city,11);      // 用城市名设置地图中心点
			}
		}
		//三种驾车策略：最少时间，最短距离，避开高速
		var routePolicy = [BMAP_DRIVING_POLICY_LEAST_TIME,BMAP_DRIVING_POLICY_LEAST_DISTANCE,BMAP_DRIVING_POLICY_AVOID_HIGHWAYS];
		$("#result").click(function() {
			//出发位置
			var start = $("input[name='cityname']").val()
			var end = "北赵扶村";
			map.clearOverlays();
			var i = $("#driving_way select").val();
			search(start, end, routePolicy[i]);
			function search(start, end, route) {
				var driving = new BMap.DrivingRoute(map, {
					renderOptions: {map: map, autoViewport: true},
					policy: route
				});
				driving.search(start, end);
				var driving = new BMap.DrivingRoute(map, {renderOptions: {map: map, panel: "r-result", autoViewport: true}});
				driving.search(start, end);
			}
		});
	</script>
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
	<script>
		$(function () {
			$('#sub').click(function(){
				var m_desc = 	$("textarea[name='m_desc']").val();
				var commenter = $("input[name='commenter']").val();
				var m_phone = $("input[name='m_phone']").val();
				$.ajax({
					type:"get",
					data:{
						m_desc:m_desc,
						commenter:commenter,
						m_phone:m_phone
					},
					url:"/index.php/home/message_add",
					success:function (data) {
						if(data == 1)
						{
							alert('留言成功');
						}
					}
				})

			})
		})

	</script>
</body>
</html>
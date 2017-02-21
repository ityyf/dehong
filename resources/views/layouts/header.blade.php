	

	<!-- header -->
	<div class="header">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header navbar-left">
					<h1><a href="{{url('home/index')}}">德宏古典家居 <span>专注古典家居300年</span></a></h1>
				</div>
				<!-- navigation --> 
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="header-right">
					<div class="agileits-topnav">
						<ul>
							<li><span class="glyphicon glyphicon-earphone"></span> +010 112 3345</li>
							<li><a class="email-link" href="mailto:example@mail.com"> <span class="glyphicon glyphicon-envelope"></span> 102126578@qq.com</a></li>
							<li class="social-icons"> 
								<ul>
									<li><a href="#" class="fa fa-facebook icon icon-border facebook"> </a></li>
									<li><a href="#" class="fa fa-twitter icon icon-border twitter"> </a></li>
									<li><a href="#" class="fa fa-google-plus icon icon-border googleplus"> </a></li> 
								</ul>
								<div class="clearfix"> </div> 
							</li>
						</ul>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">					
						<ul class="nav navbar-nav navbar-left">
							<!--class="active"-->
							<li class="active" ><a href="{{url('home/index')}}" class="link link--yaku"><span>徳</span><span>宏</span><span>首</span><span>页</span></a></li>
							<li><a href="{{url('home/about')}}" class="link link--yaku"><span>公</span><span>司</span><span>简</span><span>介</span></a></li>
							<li>
								

								<li><a href="{{url('home/icons',['c_id'=>'null'])}}" class="link link--yaku"><span>产</span><span>品</span><span>展</span><span>示</span><span></span></a></li>
								
							</li>
							<li><a href="{{url('home/news')}}" class="link link--yaku"><span>新</span><span>闻</span><span>中</span><span>心</span></a></li>
							<li><a href="{{url('home/contact')}}" class="link link--yaku"><span>联</span><span>系</span><span>我</span><span>们</span></a></li>
						</ul>		
						<div class="clearfix"> </div>
					</div><!-- //navigation -->
				</div>
				<div class="clearfix"></div>
			</div>	
		</nav>		
	</div>	
	<!-- //header -->

	<div class="banner"> 
		@yield('content')
	</div>
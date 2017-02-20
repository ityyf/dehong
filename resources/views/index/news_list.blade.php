<!DOCTYPE html>
<html lang="en">
<head>
    <title> 德宏家具</title>
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

<!--<div class="banner about-bnr">-->
    <!--<div class="container">-->
    <!--</div>-->
<!--</div>-->
<!-- about -->
<style>      
.pages{text-align:center;border-top:1px solid #d3d3d3;margin-top:10px; padding-top:10px}
.pages a{display:inline-block;margin:4px;padding:4px 8px;background:#f9f9f9;border:1px solid #d9d9d9}
.pages a.cur{cursor:default;background:#d3d3d3;color:#434343}
.pages a.cur:hover{text-decoration:none}
</style>
<div class="about">
    <div class="container">
        <h3 class="w3ls-title1">关于 <span>{{$data->n_title}}</span></h3>
        <div class="about-agileinfo w3layouts">
            <div class="col-md-8 about-wthree-grids grid-top">
                <h4>  {{$data->n_title}}</h4>
                <p class="top">
                    <?php
                      
                    //自定义的长文章字符串，可以包含 html 代码，若字符串中有手动分页符 {nextpage} 则优先按手动分页符进行分页    
                    $n_content=html_entity_decode($data->n_content);
                    $ipage = isset($_GET["ipage"])? intval($_GET["ipage"]):1;
                    $CP = new App\libraries\cutpage($n_content);    
                    $page = $CP->cut_str();  
                    // var_dump($CP->pagenav());die;
                    echo $page[$ipage-1];   
                    echo '<div class="pages">'.$CP->pagenav($data->n_id).'</div>'; 
                        
                        ?>

                </p>
            </div>
            <div class="col-md-4 about-wthree-grids" style="margin-bottom: 20px;">
                <div class="offic-time" >
                    <div class="time-top">
                        <h4>文章信息</h4>
                    </div>
                    <div class="time-bottom">
                        <h5>作者：{{$data->n_author}} </h5>
                        <h5>浏览次数：{{$data->access}}</h5>
                        <h5>发布日期：{{date('Y-m-d',$data->n_addtime)}}</h5>
                    </div>
                </div>
                <div class="testi">
                    
                    <!--//End-slider-script -->
                    <script src="js/responsiveslides.min.js"></script>
                    <script>
                        // You can also use "$(window).load(function() {"
                        $(function () {
                            // Slideshow 5
                            $("#slider5").responsiveSlides({
                                auto: true,
                                pager: false,
                                nav: true,
                                speed: 500,
                                namespace: "callbacks",
                                before: function () {
                                    $('.events').append("<li>before event fired.</li>");
                                },
                                after: function () {
                                    $('.events').append("<li>after event fired.</li>");
                                }
                            });

                        });
                    </script>
                    <div  id="top" class="callbacks_container">
                        <ul class="rslides" id="slider5">
                            <li>
                                <div class="testi-slider">
                                    <h4 style="font-size: 30px;">企业宗旨：</h4>
                                    <p style="font-size: 25px;">传千载文化，造百年经典。不求量而求精，试看后人来评定。</p>
                                    <div class="testi-subscript">
                                        <span class="w3-agilesub"> </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix" style="padding-top: 50px;">  
            <!-- 一键分享 -->
            <div class="jiathis_style_32x32" style="float: right;">
                <a class="jiathis_button_qzone"></a>
                <a class="jiathis_button_tsina"></a>
                <a class="jiathis_button_weixin"></a>
                <a class="jiathis_button_renren"></a>
                <a class="jiathis_button_tqq"></a>
                <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
            </div>
            <script type="text/javascript" src="http://v3.jiathis.com/code_mini/jia.js" charset="utf-8"></script>
            <!-- JiaThis Button END -->
         
    <div class="ujian-hook"></div>
    <script type="text/javascript" src="http://v1.ujian.cc/code/ujian.js"></script>
<!-- UJian Button END -->

    <div class="ujian-hook"></div>
    <script type="text/javascript" src="http://v1.ujian.cc/code/ujian.js"></script>
<!-- UJian Button END -->
<!-- JiaThis Button END -->
            <!-- JiaThis Button END -->
            </div>
        </div>
    </div>

    <div class="pager" style="text-align:center;font-size: 20px;">
        <a href="{{url('home/getPrevArticleId',['n_id'=>$data->n_id])}}" class='page'>上一篇</a>
        <a href="{{url('home/getNextArticleId',['n_id'=>$data->n_id])}}" class='page'>下一篇</a>
    </div>

</div>
<!-- //about -->
<!-- about-slid -->

<!-- //about-slid -->
<!-- about-team -->
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
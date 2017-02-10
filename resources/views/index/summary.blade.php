<!DOCTYPE html>
<html lang="en">
<head>
    <title> summary</title>
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
<div class="about">
    <div class="container">
        <h3 class="w3ls-title1">关于 <span>红木家具</span></h3>
        <div class="about-agileinfo w3layouts">
            <div class="col-md-8 about-wthree-grids grid-top">
                <h4>  红木家具</h4>
                <p class="top">红木是我国高端、名贵家具用材的统称。红木为热带地区所产，豆科，紫檀属（pterocarpus）的植物。最初是指红色的硬木，品种较多；在上世纪八十年代后，人们对红木的需求日益增加，行业亟待规范，国家根据密度等指标对红木进行了规范，把红木规范为：二科、五属、八类、三十三种。红木因生长缓慢、材质坚硬、生长期都在几百年以上，原产于我国南部的很多红木，早在明、清时期就被砍伐的所剩无几，如今的红木，大多是产于东南亚、非洲，我国广东、云南有培育栽培和引种栽培。当然黄花梨、缅甸花梨、鸡翅木等木材的颜色不会呈红色。木材花纹美观，材质坚硬，耐久，为贵重家具及工艺美术品等用材。红木为热带地区豆科檀属木材，主要产于印度， 我国广东、 云南及南洋群岛也有出产，是常见的名贵硬木。"红木"是江浙及北方流行的名称，广东一带俗称"酸枝木"。 </p>
                <img src="images/img1.jpg" alt="">
                <p>  该企业生产的古典家具产品，主要以越南、柬埔寨、印度、马达加斯加等地进口的紫檀、花梨、酸枝等名贵红木为原料。公司拥有大批能工巧匠，始终坚持把每一件家具作为艺术品来设计，生产工艺精湛，生产制作以明清宫廷图谱为基础，继承了原汁原味的明清宫廷技法，图案雕刻工艺纯熟，在家具的整个制作过程中不使用油漆、腻子、钉子和任何防腐剂，全部以精密巧妙的榫卯结合部件，真正做到了没有一根钉子，但牢固无比；没有任何防腐剂，但百年不朽；没有任何涂料，但光艳夺目，有着深厚的文化内涵和丰蕴的中国民族特色，独特的形神气质和精湛的工艺技术代表了京做的最高水平。
                    多年来，廊坊陶然居家具有限公司领先于行业标准的典藏家具受到资深收藏者的追捧，赢得了各界名人的认同。该公司曾获得廊坊市消费者协会“廊坊市第十届消费者信得过单位”、廊坊市工商行政管理局“廊坊市知名商标企业”、 廊坊市民营企业家协会会员单位、大城县古典家具协会理事长单位、大城县古典家具协会“真品红木家具放心店”等荣誉称号。
                </p>
            </div>
            <div class="col-md-4 about-wthree-grids">
                <div class="offic-time">
                    <div class="time-top">
                        <h4>Working Hours :</h4>
                    </div>
                    <div class="time-bottom">
                        <h5>Mon-Fri:10am-9pm </h5>
                        <h5>Sat-Sun:By Special Appointment</h5>
                        <p>Dignissimos at vero eos et accusamus et iusto odio ducimus qui accusamus et. </p>
                    </div>
                </div>
                <div class="testi">
                    <h3 class="w3ls-title1">Testimo<span>nial</span></h3>
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
                                    <h4>" I AM VERY PLEASED.</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu magna dolor, quisque semper.</p>
                                    <div class="testi-subscript">
                                        <p><a href="#">John Doe,</a>Adipiscing</p>
                                        <span class="w3-agilesub"> </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="testi-slider">
                                    <h4>" I AM LOREM IPSUM.</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu magna dolor, quisque semper.</p>
                                    <div class="testi-subscript">
                                        <p><a href="#">elit semper,</a>Dolor Elit</p>
                                        <span class="w3-agilesub"> </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="testi-slider">
                                    <h4>" CONSECTETUR PIMAGNA.</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu magna dolor, quisque semper.</p>
                                    <div class="testi-subscript">
                                        <p><a href="#">Amet Doe,</a>Suspendisse</p>
                                        <span class="w3-agilesub"> </span>
                                    </div>
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
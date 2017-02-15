<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 企业文化 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="/public/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/public/admin/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/public/js/global.js"></script>
    <script type="text/javascript" src="/public/admin/js/jquery.mousewheel-3.0.2.pack.js"></script>
    <script type="text/javascript" src="/public/admin/js/jquery.fancybox-1.3.1.js"></script>
    <script type="text/javascript" src="/public/admin/js/pngobject.js"></script>
    {{--<link rel="stylesheet" href="/584/style/style.css" type="text/css" />--}}
    <link rel="stylesheet" href="/public/admin/style/jquery.fancybox-1.3.1.css" type="text/css" />
    <link href="/public/video/video-js.css" rel="stylesheet" type="text/css">
    <link type="text/css" href="/public/admin/css/lanrenzhijia.css" rel="stylesheet" />
    <script type="text/javascript" src="/public/admin/js/lanrenzhijia.js"></script>
    <!-- video.js must be in the <head> for older IEs to work. -->
    <script src="/public/video/video.js"></script>

    <!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
    <script>
        videojs.options.flash.swf = "video-js.swf";
    </script>
</head>
<body>
<div id="dcWrap">
    @include('Admin.admin_public.main')
    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>门店管理</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="turn_add" class="actionBtn add">添加轮播展示图</a>轮播图列表<span id="inner" style="font-size: 18px"></span></h3>
            <div id="zSlider">
                <div id="picshow">
                    <div id="picshow_img">

                        <ul>
                            @foreach($info as $a)
                            <li><a href="" target="_blank"><img src="{{$a->a_url}}"></a></li>
                            @endforeach
                        </ul>

                    </div>
                    <div id="picshow_tx">
                        <ul>
                            @foreach($info as $b)
                            <li>
                                <h3 style="color: deeppink">图片简介 : {{$b->a_desc}}<span style="float: right"><a href="turn_img_first?a_id={{$b->a_id}}"  style="color: #00a0e9"><button class="btn">放到第一张</button></a> | <a href="turn_img_del?a_id={{$b->a_id}}" style="color: red"><button class="btn">删除</button></a></span></h3>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div id="select_btn">
                    <ul>
                        @foreach($info as $c)
                        <li><a href="" target="_blank"><img src="{{$c->a_url}}"><span class="select_text">产品轮播图<span class="select_date">{{$b->a_desc}}</span></a></li>
                        @endforeach
                     </ul>
                </div>
            </div>
            <button  style="cursor:pointer;"></button>
        </div>
    </div>
    <div class="clear"></div>
    <div id="dcFooter">
        <div id="footer">
            <div class="line"></div>
            <ul>
                版权所有 1501phpA组，并保留所有权利。
            </ul>
        </div>
    </div><!-- dcFooter 结束 -->
    <div class="clear"></div> </div>
</body>

</html>
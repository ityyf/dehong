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
    <!-- video.js must be in the <head> for older IEs to work. -->
    <script src="/public/video/video.js"></script>

    <!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
    <script>
        videojs.options.flash.swf = "video-js.swf";
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
             *   Examples - images
             */

            $("a#example1").fancybox({
                'titleShow'		: false
            });

            $("a#example2").fancybox({
                'titleShow'		: false,
                'transitionIn'	: 'elastic',
                'transitionOut'	: 'elastic'
            });

            $("a#example3").fancybox({
                'titleShow'		: false,
                'transitionIn'	: 'none',
                'transitionOut'	: 'none'
            });

            $("a#example4").fancybox();

            $("a#example5").fancybox({
                'titlePosition'	: 'inside'
            });

            $("a#example6").fancybox({
                'titlePosition'	: 'over'
            });

            $("a[rel=example_group]").fancybox({
                'transitionIn'		: 'none',
                'transitionOut'		: 'none',
                'titlePosition' 	: 'over',
                'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
                    return '<span id="fancybox-title-over">德宏门店图片 ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
                }
            });

            /*
             *   Examples - various
             */

            $("#various1").fancybox({
                'titlePosition'		: 'inside',
                'transitionIn'		: 'none',
                'transitionOut'		: 'none'
            });

            $("#various2").fancybox();

            $("#various3").fancybox({
                'width'				: '75%',
                'height'			: '75%',
                'autoScale'			: false,
                'transitionIn'		: 'none',
                'transitionOut'		: 'none',
                'type'				: 'iframe'
            });

            $("#various4").fancybox({
                'padding'			: 0,
                'autoScale'			: false,
                'transitionIn'		: 'none',
                'transitionOut'		: 'none'
            });
        });
    </script>
</head>
<body>
<div id="dcWrap">
    @include('Admin.admin_public.main')
    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>门店管理</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="firm_add" class="actionBtn add">添加门店</a>门店列表<span id="inner" style="font-size: 18px"></span></h3>
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <th width="120" align="left">企业名称<br>(点击查看企业简介)</th>
                    <th align="left">企业logo<br>(点击查看大图)</th>
                    <th align="left">企业电话</th>
                    <th width="60" align="center">手机号</th>
                    <th width="60" align="center">联系人</th>
                    <th width="60" align="center">企业邮箱</th>
                    <th width="60" align="center">企业网址</th>
                    <th width="60" align="center">企业地址</th>
                    <th width="80" align="center">企业视频<br>(点击查看大图)</th>
                    <th width="80" align="center">列表操作</th>
                </tr>
                @foreach($info as $firm)
                <tr>
                    <th width="120" align="left"><a href="firm_lists?f_id={{$firm->f_id}}">{{$firm->f_name}}</a></th>
                    <th align="left"><a href="{{ $firm-> f_logo}}" rel="example_group"><img  src="{{$firm->f_logo}}" rel="example_group"   style="width: 80px;height: 60px" alt=""></a></th>
                    <th align="left">{{$firm->f_tel}}</th>
                    <th width="60" align="center">{{$firm->f_phone}}</th>
                    <th width="60" align="center">{{$firm->f_contact}}</th>
                    <th width="60" align="center">{{$firm->f_email}}</th>
                    <th width="60" align="center">{{$firm->f_url}}</th>
                    <th width="60" align="center">{{$firm->f_address}}</th>
                    <th width="80" align="center">
                        {{--<video src="{{$firm->f_video}}" style="width: 300px;height: 300px" alt=""/>--}}
                        <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="300" height="200"
                               poster="{{$firm->f_logo}}"
                               data-setup="{}">
                            <source src="{{$firm->f_video}}" type='video/mp4' />
                        </video>



                    </th>
                    <th width="80" align="center"><a href="firm_update?f_id={{$firm->f_id}}">修改</a></th>
                </tr>
                    @endforeach
            </table>
            <button  style="cursor:pointer;"></button>
        </div>

    </div>
    <div class="clear"></div>
    <div id="dcFooter">
        <div id="footer">
            <div class="line"></div>
            <ul>
                版权所有 1501phpA6组，并保留所有权利。
            </ul>
        </div>
    </div><!-- dcFooter 结束 -->
    <div class="clear"></div> </div>
</body>
<script>
     $(".store_del").click(function () {
         var s_id = $(this).attr('s_id');
         var _this = $(this);
//         alert(s_id);
         $.ajax({
             type: "POST",
             url: "store_del",
             data: "s_id="+s_id,
             success: function(msg){
                 if(msg==1){
                    $('#inner').html('<font color="green">删除门店成功</font>');
                     $("#inner").fadeIn("slow");
                     $("#inner").fadeOut("6000");
                     _this.parents('tr').remove();
                 }else{
                     $('#inner').show('<font color="red">删除门店失败</font>');
                     $("#inner").fadeIn("slow");
                     $("#inner").fadeOut("6000");
                 }
             }
         })
         {{--store_del?s_id={{ $post->s_id }}--}}
     })
</script>

</html>
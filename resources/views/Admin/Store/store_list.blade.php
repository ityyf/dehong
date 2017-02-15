
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 文章分类 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="/public/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/public/admin/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/public/js/global.js"></script>
    <script type="text/javascript" src="/public/admin/js/jquery.mousewheel-3.0.2.pack.js"></script>
    <script type="text/javascript" src="/public/admin/js/jquery.fancybox-1.3.1.js"></script>
    <script type="text/javascript" src="/public/admin/js/pngobject.js"></script>
    {{--<link rel="stylesheet" href="/584/style/style.css" type="text/css" />--}}
    <link rel="stylesheet" href="/public/admin/style/jquery.fancybox-1.3.1.css" type="text/css" />
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
            <h3><a href="store_add" class="actionBtn add">添加门店</a>门店列表<span id="inner" style="font-size: 18px"></span></h3>
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <th width="120" align="left">店面名称</th>
                    <th align="left">店面电话</th>
                    <th align="left">店面简介</th>
                    <th width="60" align="center">门店地址</th>
                    <th width="80" align="center">门店图片<span style="font-size: 4px">(点击查看大图)</span></th>
                    <th width="80" align="center">列表操作</th>
                </tr>
                @foreach ($store as $post)
                <tr>
                    <td align="left"> <a href="article.php?cat_id=1">{{ $post->s_name }}</a></td>
                    <td>{{ $post->s_tel}}</td>
                    <td>{{ $post->s_desc }}</td>
                    <td align="center">{{ $post->s_address }}</td>
                    <td align="center" class=""><a rel="example_group" href="{{ $post-> s_img}}" title=""><img src="{{ $post-> s_img}}" style="width: 40PX;height: 40PX" alt="门店图片"></a></td>
                    <td align="center"><a class="store_del" style="cursor:pointer" s_id="{{ $post->s_id }}" >删除</a></td>
                </tr>
                @endforeach
            </table>
            <button  style="cursor:pointer;">{{ $store->links() }}</button>
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
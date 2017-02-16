<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 新闻列表 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="/public/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/global.js"></script>
    <script type="text/javascript" src="/public/js/jquery.autotextarea.js"></script>
    

</head>
<body>
<div id="dcWrap">
    @include('Admin.admin_public.main')
    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>新闻详情</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="{{url('admin/news_add')}}" class="actionBtn add">添加新闻</a>新闻详情</h3>
          
            <div id="n_title">
                <p style="text-align:center;line-height:80px ;font-size: 40px;font-family: 楷体;font-weight: bold;">{{$data->n_title}}</p>
                <p style="text-align:center;font-size: 24px;font-family: 楷体;">作者：{{$data->n_author}} 添加时间：{{date('Y-m-d',$data->n_addtime)}} 浏览量：{{$data->access}}</p>
                
            </div>
            <div id="n_content" style="text-align:center;">
                <?php echo html_entity_decode($data->n_content) ?>
            </div>
            <div class="clear"></div>
            <div class="pager" style="text-align:center;font-size: 20px;">
                <a href="{{url('admin/getPrevArticleId',['n_id'=>$data->n_id])}}" class='page'>上一篇</a>
                <a href="{{url('admin/getNextArticleId',['n_id'=>$data->n_id])}}" class='page'>下一篇</a>
            </div>           
        </div>
    </div>
    <div class="clear"></div>
    <div id="dcFooter">
        <div id="footer">
            <div class="line"></div>
            <ul>
                版权所有，并保留所有权利。            </ul>
        </div>
    </div><!-- dcFooter 结束 -->
    <div class="clear"></div> </div>
<script type="text/javascript">

    onload = function()
    {
        document.forms['action'].reset();
    }

    function douAction()
    {
        var frm = document.forms['action'];

        frm.elements['new_cat_id'].style.display = frm.elements['action'].value == 'category_move' ? '' : 'none';
    }

</script>
</body>
</html>
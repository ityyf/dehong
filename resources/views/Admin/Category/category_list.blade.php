<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 分类列表 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="/public/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/global.js"></script>
    <script type="text/javascript" src="/public/js/jquery.autotextarea.js"></script>
    <script language="javascript" type="text/javascript" src="/public/js/WdatePicker.js"></script>
</head>
<body>
<div id="dcWrap">
    @include('Admin.admin_public.main')
    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>分类列表</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="category_add" class="actionBtn">添加分类</a>分类列表</h3>
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <th width="30" align="center">编号</th>
                        <th align="center">分类名称</th>
                    <th align="center">类型</th>
                    <th align="center">操作</th>
                </tr>
                @foreach($cate_list as $k=>$v)
                    <tr>
                        <td align="center">{{$v->c_id}}</td>
                        <td align="center">{{$v->c_name}}</td>
                        <td align="center">
                            @if($v->c_type == 1)
                                产品分类
                                @else
                                新闻分类
                             @endif
                        </td>
                        <td align="center">
                            <a href="category_edit?id={{$v->c_id}}">编辑</a> |
                            <a href="javascript:void(0)" class="del" val="{{$v->c_id}}">删除</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div id="dcFooter">
        <div id="footer">
            <div class="line"></div>
            <ul>
                版权所有 1501phpA7组，并保留所有权利。            </ul>
        </div>
    </div><!-- dcFooter 结束 -->
    <div class="clear"></div> </div>
<script type="text/javascript">
    $('.del').click(function(){
        if(confirm("是否确认删除"))
        {
            var id = $(this).attr('val');
            var _this = $(this);
            $.ajax({
                type: "GET",
                url: "category_del",
                data: {'id':id},
                success: function(msg){
                    console.log(msg);
                    if(msg == 1)
                    {
                        _this.parent().parent().remove();
                    }
                    else
                    {
                        alert('分类下有产品不能删除！！！\r\n请先移除 :)');
                    }
                }
            });
        }
    })
</script>
</body>
</html>
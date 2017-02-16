
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 权限管理 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="/public/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/global.js"></script>
</head>
<body>
<div id="dcWrap">
    @include('Admin.admin_public.main')
    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>权限管理</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="power_add" class="actionBtn add">添加权限</a>权限列表</h3>
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <th width="120" align="left">权限名称</th>
                    <th align="left">控制器名称</th>
                    <th align="left">方法名称</th>
                    <th width="" align="center">操作</th>
                </tr>
                @foreach($power as $key=>$val)
                    <tr id="{{$val->p_id}}">
                        <td align="left"> <a href="article.php?cat_id=1">{{$val->p_name}}</a></td>
                        <td>{{$val->p_controller}}</td>
                        <td>{{$val->p_action}}</td>
                        <td align="center" > <a href="power_update/?id={{$val->p_id}}">编辑</a> | <a href="javascript:void(0)" class="del">删除</a></td>
                    </tr>
                @endforeach
            </table>
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
</html>
<script>
    $(function () {
        $(".del").click(function () {
            var p_id = $(this).parents("tr").attr("id");
            mythis = $(this);
            $.ajax({
                type:"get",
                data:{
                    id:p_id
                },
                url:"power_del",
                success:function (data) {
                    if(data == 1)
                    {
                        mythis.parents("tr").remove();
                    }
                }
            })


        })
    })
</script>
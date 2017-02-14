<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 角色添加 </title>
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
        <div id="urHere">DouPHP 管理中心<b>></b><strong>角色编辑</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="{{url('admin/role_list')}}" class="actionBtn">角色列表</a>角色编辑</h3>
            <form action="{{url('admin/role_update',['r_id'=>$data->r_id])}}" method="post" enctype="multipart/form-data">
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                    <tr>
                        <td width="90" align="right">角色名称</td>
                        <td>
                            <input type="text" name="r_name" value="{{$data->r_name}}" size="80" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right" valign="top">角色描述</td>
                        <td>
                            
                            <textarea id="content" name="r_desc" style="width:490px;height:300px;" class="textArea">{{$data->r_desc}}</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input class="btn" type="submit" value="提交" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div class="clear"></div>
    <div id="dcFooter">
        <div id="footer">
            <div class="line"></div>
            <ul>
                版权所有，并保留所有权利。              </ul>
        </div>
    </div><!-- dcFooter 结束 -->
    <div class="clear"></div> </div>
<!--<script type="text/javascript">

    onload = function()
    {
        document.forms['action'].reset();
    }

    function douAction()
    {
        var frm = document.forms['action'];

        frm.elements['new_cat_id'].style.display = frm.elements['action'].value == 'category_move' ? '' : 'none';
    }

</script>-->
</body>
</html>
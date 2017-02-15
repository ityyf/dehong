<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 分类添加 </title>
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
        <div id="urHere">DouPHP 管理中心<b>></b><strong>添加分类</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="category_list" class="actionBtn">分类列表</a>添加分类</h3>
            <form action="category_add_exec" method="post">
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                    <tr>
                        <td width="80" align="right">分类名称</td>
                        <td>
                            <input type="text" name="c_name" value="" size="40" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">类型</td>
                        <td>
                            <select name="c_type">
                                <option value="0">无</option>
                                <option value="1"> 产品分类</option>
                                <option value="2"> 新闻分类</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input  class="btn" type="submit" value="提交" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>    </div>
    <div id="dcFooter">
        <div id="footer">
            <div class="line"></div>
            <ul>
                版权所有 1501phpA7组，并保留所有权利。            </ul>
        </div>
    </div><!-- dcFooter 结束 -->
    <div class="clear"></div> </div>
<script type="text/javascript">

</script>
</body>
</html>
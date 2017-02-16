<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 留言列表 </title>
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
        <div id="urHere">DouPHP 管理中心<b>></b><strong>留言列表</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3>留言列表</h3>
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <th  align="center">姓名</th>
                    <th align="center">手机号</th>
                    <th align="center" width="60%">留言内容</th>
                </tr>
                @foreach($message as $k=>$v)
                    <tr>
                        <td align="center">{{$v->commenter}}</td>
                        <td align="center">{{$v->m_phone}}</td>
                        <td align="center">{{$v->m_desc}}</td>
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
</body>
</html>
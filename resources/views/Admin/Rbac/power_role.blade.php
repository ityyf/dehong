<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 设置权限 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="/public/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/global.js"></script>
    <script type="text/javascript" src="/public/js/jquery.validate.min.js"></script>
</head>
<body>
<div id="dcWrap">
    @include('Admin.admin_public.main')
    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>设置权限</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="power_list" class="actionBtn">权限列表</a>设置权限</h3>
            <form action="empowerment" method="post">
                <table>
                    <tr>
                        <td>角色：</td>
                        <td>
                            <select name="r_id">
                                @foreach($role as $key=>$val)
                                    <option value="{{$val->r_id}}">{{$val->r_name}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                </table>
            <br><br><br>
                <table  width="360">
                    <tr>
                        <td>权限：</td>
                        <td>
                            @foreach($power as $key=>$val)
                                    <input type="checkbox" name="p_id[]" value="{{$val->p_id}}">{{$val->p_name}}&nbsp;
                            @endforeach
                        </td>
                    </tr>
                </table>
                <br><br><br>
                <input  class="btn" type="submit" value="提交"/>
            </form>
        </div>
    </div>
    <div class="clear"></div>
    <div id="dcFooter">
        <div id="footer">
            <div class="line"></div>
            <ul>
                版权所有 © 2013-2015 漳州豆壳网络科技有限公司，并保留所有权利。
            </ul>
        </div>
    </div><!-- dcFooter 结束 -->
    <div class="clear"></div> </div>
</body>
</html>

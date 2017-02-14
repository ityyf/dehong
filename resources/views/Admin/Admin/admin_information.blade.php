
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 管理员管理 </title>
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
        <div id="urHere">DouPHP 管理中心<b>></b><strong>管理员管理</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="javascript:void(0)" onclick="javascript :history.back(-1);" class="actionBtn add">管理员列表</a>管理员详细信息</h3>
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                @foreach($information as $key=>$val)
                <tr>
                    <td>管理员名称：</td>
                    <td>{{$val->admin_name}}</td>
                </tr>
                <tr>
                    <td>性别：</td>
                    <td>
                        @if($val->sex == 1)
                            男
                            @else
                            女
                            @endif
                    </td>
                </tr>
                <tr>
                    <td>年龄：</td>
                    <td>{{$val->age}}</td>
                </tr>
                 <tr>
                     <td>账号：</td>
                     <td>{{$val->account}}</td>
                 </tr>
                    <tr>
                        <td>邮箱地址：</td>
                        <td>{{$val->email}}</td>
                    </tr>
                    <tr>
                        <td>手机号码：</td>
                        <td>{{$val->phone}}</td>
                    </tr>
                    <tr>
                        <td>创建时间：</td>
                        <td>{{$val->addtime}}</td>
                    </tr>
                    <tr>
                        <td>登录时间：</td>
                        <td>{{$val->login_time}}</td>
                    </tr>
                    <tr>
                        <td>上次登录时间：</td>
                        <td>{{$val->last_time}}</td>
                    </tr>
                    <tr>
                        <td>登陆IP地址：</td>
                        <td>{{$val->login_ip}}</td>
                    </tr>
                    <tr>
                        <td>家庭住址：</td>
                        <td>{{$val->address}}</td>
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
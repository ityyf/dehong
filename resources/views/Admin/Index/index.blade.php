<?php
use Symfony\Component\HttpFoundation\Session\Session;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心</title>
    <meta name="Copyright" content="Douco Design." />
    <link href="/public/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/global.js"></script>
</head>
<body>
<div id="dcWrap">
   @include('Admin.admin_public.main')
    <div id="dcMain"> <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心</div>  <div id="index" class="mainBox" style="padding-top:18px;height:auto!important;height:550px;min-height:550px;">
            <div id="douApi"></div>
            <div class="indexBox">
                <div class="boxTitle">权限快速管理</div>
                <ul class="ipage">

                    <a href="power_add">添加权限</a>

                    <a href="power_list" class="child1">权限列表</a>

                    <a href="power_role" class="child1">分配权限</a>

                    <a href="admin_role" class="child1">分配角色</a>
                    <div class="clear"></div>
                </ul>
            </div>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="indexBoxTwo">
                <tr>
                    <td valign="top" class="pl">
                        <div class="indexBox">
                            <div class="boxTitle">管理员  登录记录</div>
                            <ul>
                                <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
                                    <tr>
                                        <th width="45%">IP地址</th>
                                        <th width="55%">操作时间</th>
                                    </tr>
                                    @foreach($loginRecord as $key=>$val)
                                    <tr>
                                        <td align="center">{{$val->login_ip}}</td>
                                        <td align="center">{{$val->login_time}}</td>
                                    </tr>
                                        @endforeach
                                </table>
                            </ul>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="indexBox">
                <div class="boxTitle">服务器信息</div>
                <ul>
                    <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
                        <tr>
                            <td width="120" valign="top">PHP 版本：</td>
                            <td valign="top">{{$systemInfo['php_version']}}</td>
                            <td width="100" valign="top">MySQL 版本：</td>
                            <td valign="top">{{$systemInfo['mysql_version']}}</td>
                            <td width="100" valign="top">服务器操作系统：</td>
                            <td valign="top">{{$systemInfo['system']}}({{$systemInfo['host']}})</td>
                        </tr>
                        <tr>
                            <td valign="top">文件上传限制：</td>
                            <td valign="top">{{$systemInfo['max_files_length']}}</td>
                            <td valign="top">GD 库支持：</td>
                            <td valign="top">{{$systemInfo['gd_info']}}</td>
                            <td valign="top">Web 服务器：</td>
                            <td valign="top">{{$systemInfo['server_software']}}</td>
                        </tr>
                    </table>
                </ul>
            </div>
            <div class="indexBox">
                <div class="boxTitle">系统开发</div>
                <ul>
                    <table width="100%" border="0" cellspacing="0" cellpadding="7" class="tableBasic">
                        <tr>
                            <td width="120"> 德宏家居官网： </td>
                            <td><a href="http://www.dehongjiaju.cn" target="_blank">http://www.dehongjiaju.cn</a></td>
                        </tr>
                        <tr>
                            <td> 开发团队： </td>
                            <td>Nice Team</td>
                        </tr>
                        <tr>
                            <td> 开发者： </td>
                            <td>叶一锋，王少雄，刘威，张煜</td>
                        </tr>
                    </table>
                </ul>
            </div>

        </div>
    </div>
    <div class="clear"></div>
    <div id="dcFooter">
        <div id="footer">
            <div class="line"></div>
            <ul>
                版权所有 © 2013-2015 漳州豆壳网络科技有限公 司，并保留所有权利。
            </ul>
        </div>
    </div><!-- dcFooter 结束 -->
    <div class="clear"></div> </div>
</body>
</html>
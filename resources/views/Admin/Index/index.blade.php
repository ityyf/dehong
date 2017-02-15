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
{{--<div id="dcWrap"> <div id="dcHead">
        <div id="head">
            <div class="logo"><a href="index.html"><img src="/public/images/dclogo.gif" alt="logo"></a></div>
            <div class="nav">
                <ul>
                    <li class="M"><a href="JavaScript:void(0);" class="topAdd">新建</a>
                        <div class="drop mTopad"><a href="product.php?rec=add">商品</a> <a href="article.php?rec=add">文章</a> <a href="nav.php?rec=add">自定义导航</a> <a href="show.html">首页幻灯</a> <a href="page.php?rec=add">单页面</a> <a href="manager.php?rec=add">管理员</a> <a href="link.html"></a> </div>
                    </li>
                    <li><a href="../index.php" target="_blank">查看站点</a></li>
                    <li><a href="index.php?rec=clear_cache">清除缓存</a></li>
                    <li><a href="http://help.douco.com" target="_blank">帮助</a></li>
                    <li class="noRight"><a href="module.html">DouPHP+</a></li>
                </ul>
                <ul class="navRight">
                    <li class="M noLeft"><a href="JavaScript:void(0);">您好，{{$name}}</a>
                        <div class="drop mUser">
                            <a href="manager.php?rec=edit&id=1">编辑我的个人资料</a>
                            <a href="manager.php?rec=cloud_account">设置云账户</a>
                        </div>
                    </li>
                    <li class="noRight"><a href="login_out">退出</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- dcHead 结束 --> <div id="dcLeft"><div id="menu">
            <ul class="top">
                <li><a href="index"><i class="home"></i><em>管理首页</em></a></li>
            </ul>
            <ul>
               <!-- <li><a href="system.html"><i class="system"></i><em>系统设置</em></a></li>-->
                <li><a href="nav_show"><i class="nav"></i><em>房东管理</em></a></li>
                <li><a href="slide_show"><i class="show"></i><em>会员管理</em></a></li>
             <!--   <li><a href="page.html"><i class="page"></i><em>单页面管理</em></a></li>-->
            </ul>
          <!--  <ul>
                <li><a href="product_category.html"><i class="productCat"></i><em>商品分类</em></a></li>
                <li><a href="product.html"><i class="product"></i><em>商品列表</em></a></li>
            </ul>-->
            <ul>
                <li><a href="classify_list"><i class="articleCat"></i><em>房屋分类</em></a></li>
                <li><a href="article_list"><i class="article"></i><em>房屋列表</em></a></li>
            </ul>
            <ul class="bot">
                <li><a href="backup_list"><i class="backup"></i><em>数据备份</em></a></li>
                <li><a href="gather_list"><i class="backup"></i><em>回收站</em></a></li>
               <!-- <li><a href="mobile.html"><i class="mobile"></i><em>手机版</em></a></li>
                <li><a href="theme.html"><i class="theme"></i><em>设置模板</em></a></li>
                <li><a href="manager.html"><i class="manager"></i><em>网站管理员</em></a></li>
                <li><a href="manager.php?rec=manager_log"><i class="managerLog"></i><em>操作记录</em></a></li>-->
            </ul>
        </div></div>--}}
<div id="dcWrap">
   @include('Admin.admin_public.main')
    <div id="dcMain"> <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心</div>  <div id="index" class="mainBox" style="padding-top:18px;height:auto!important;height:550px;min-height:550px;">
            <div id="douApi"></div>
            <div class="indexBox">
                <div class="boxTitle">权限快速管理</div>
                <ul class="ipage">

                    <a href="page.php?rec=edit&id=1">添加权限</a>

                    <a href="page.php?rec=edit&id=2" class="child1">权限列表</a>

                    <a href="page.php?rec=edit&id=3" class="child1">分配权限</a>

                    <a href="page.php?rec=edit&id=4" class="child1">分配角色</a>
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
                版权所有 © 2013-2015 漳州豆壳网络科技有限公司，并保留所有权利。
            </ul>
        </div>
    </div><!-- dcFooter 结束 -->
    <div class="clear"></div> </div>
</body>
</html>
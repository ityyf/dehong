<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 权限编辑 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="/public/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/global.js"></script>
    <script type="text/javascript" src="/public/js/jquery.validate.min.js"></script>
</head>
<body>
<div id="dcWrap">
    <div id="dcHead">
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
                <!--                <li><a href="system.html"><i class="system"></i><em>系统设置</em></a></li>
                -->                <li><a href="nav_show"><i class="nav"></i><em>商户管理</em></a></li>
                <li><a href="slide_show"><i class="show"></i><em>会员管理</em></a></li>
            </ul>
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
        </div></div>
    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>权限编辑</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="power_list" class="actionBtn">权限列表</a>权限编辑</h3>
            <form action="power_save" method="post" id="myform">
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                    <tr>
                        <td width="80" align="right">权限名称</td>
                        <td>
                            <input type="text" name="p_name" value="{{$updateData[0]->p_name}}" size="40" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td width="80" align="right">控制器名称</td>
                        <td>
                            <input type="text" name="p_controller" value="{{$updateData[0]->p_controller}}" size="40" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td width="80" align="right">方法名称</td>
                        <td>
                            <input type="text" name="p_action" value="{{$updateData[0]->p_action}}" size="40" class="inpMain" />
                        </td>
                    </tr>
                    <input type="hidden" name="id" value="{{$updateData[0]->p_id}}">
                    <tr>
                        <td></td>
                        <td>
                            <input  class="btn" type="submit" value="确定修改"/>
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
                版权所有 © 2013-2015 漳州豆壳网络科技有限公司，并保留所有权利。
            </ul>
        </div>
    </div><!-- dcFooter 结束 -->
    <div class="clear"></div> </div>
</body>
</html>
<script type="text/javascript">
    $(function(){
        var validate = $("#myform").validate({
            debug: true, //调试模式取消submit的默认提交功能
            //errorClass: "label.error", //默认为错误的样式类为：error
            focusInvalid: false, //当为false时，验证无效时，没有焦点响应
            onkeyup: false,
            submitHandler: function(form){   //表单提交句柄,为一回调函数，带一个参数：form
                form.submit();   //提交表单
            },
            rules:{
                p_name:{
                    required:true
                },
                p_controller:{
                    required:true
                },
                p_action:{
                    required:true
                },


            },
            messages:{
                p_name:{
                    required:"<span style='color: red'>请输入权限名称</span>"
                },
                p_controller:{
                    required:"<span style='color: red'>请输入控制器名称</span>"
                },
                p_action:{
                    required:"<span style='color: red'>请输入方法名称</span>"
                },

            }

        });

    });
</script>
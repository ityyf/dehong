<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 权限添加 </title>
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
        <div id="urHere">DouPHP 管理中心<b>></b><strong>权限添加</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="power_list" class="actionBtn">权限列表</a>权限添加</h3>
            <form action=" " method="post" id="myform">
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                    <tr>
                        <td width="80" align="right">权限名称</td>
                        <td>
                            <input type="text" name="p_name" value="" size="40" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td width="80" align="right">控制器名称</td>
                        <td>
                            <input type="text" name="p_controller" value="" size="40" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td width="80" align="right">方法名称</td>
                        <td>
                            <input type="text" name="p_action" value="" size="40" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input  class="btn" type="submit" value="提交"/>
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
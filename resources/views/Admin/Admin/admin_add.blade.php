<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 管理员添加 </title>
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
        <div id="urHere">DouPHP 管理中心<b>></b><strong>管理员添加</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="admin_list" class="actionBtn">管理员列表</a>管理员添加</h3>
            <form action=" " method="post" id="myform">
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                    <tr>
                        <td width="80" align="right">管理员名称</td>
                        <td>
                            <input type="text" name="admin_name" value="" size="40" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">密码：</td>
                        <td>
                            <input type="password" name="password" value="" size="40" class="inpMain" id="password"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">确认密码：</td>
                        <td>
                            <input type="password" name="r_password" value="" size="40" class="inpMain"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">性别：</td>
                        <td>
                            <input type="radio" name="sex" value="1" checked>男
                            <input type="radio" name="sex" value="2">女
                        </td>
                    </tr>
                    <tr>
                        <td align="right">年龄：</td>
                        <td>
                            <select name="age">
                                <?php for($i=18;$i<=60;$i++):?>
                                <option value="{{$i}}">{{$i}}</option>
                                <?php endfor;?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">邮箱地址：</td>
                        <td>
                            <input type="text" name="email" value="" size="40" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">手机号码：</td>
                        <td>
                            <input type="text" name="phone" value="" size="40" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">家庭住址：</td>
                        <td>
                            <input type="text" name="address" value="" size="40" class="inpMain">
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
                admin_name:{
                    required:true
                },
                password:{
                    required:true,
                    rangelength:[3,10]
                },
                r_password:{
                    equalTo:"#password"
                },
                email:{
                    required:true,
                    email:true
                },
                phone : {
                    required : true,
                    minlength : 11
                },
                address:{
                    required:true,
                },

            },
            messages:{
                admin_name:{
                    required:"<span style='color: red'>请输入管理员名称</span>"
                },
                password:{
                    required: "<span style='color: red'>请输入密码</span>",
                    rangelength: $.format("<span style='color: red'>密码最小长度:{0}, 最大长度:{1}。</span>")
                },
                r_password:{
                    equalTo:"<span style='color: red'>两次密码输入不一致</span>"
                },
                email:{
                    required:"<span style='color: red'>请输入邮箱地址</span>",
                    email:"<span style='color: red'>请输入正确的邮箱地址</span>"
                },
                phone : {
                    required : "<span style='color: red'>请输入手机号</span>",
                    minlength : "<span style='color: red'>确认手机不能小于11个字符</span>",
                },
                address:{
                    required:"<span style='color: red'>请输入家庭住址</span>"
                },

            }

        });

    });
</script>
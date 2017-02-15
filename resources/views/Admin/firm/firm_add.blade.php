<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 添加房屋 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="/public/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/global.js"></script>
    <script type="text/javascript" src="/public/js/jquery.autotextarea.js"></script>
    <script type="text/javascript" src="/public/admin/js/jquery.validate.js"></script>
    <script>
    $(function(){
    var validate = $("#myform").validate({
    debug: true, //调试模式取消submit的默认提交功能
    //errorClass: "label.error", //默认为错误的样式类为：error
    focusInvalid: false, //当为false时，验证无效时，没有焦点响应
    onkeyup: false,
    submitHandler: function(form){   //表单提交句柄,为一回调函数，带一个参数：form
//    alert("提交表单");
    form.submit();   //提交表单
    },

    rules:{
    s_name:{
    required:true
    },
    s_img:{
    required:true,
    },
    s_tel:{
    required:true,
        maxlength:11,
        minlength:11,
    },
    s_desc:{
        required:true,
        rangelength:[20,40],
    },
    s_address:{
            required:true,

    },
    },
    messages:{
    s_name:{
    required:"必填"
    },
    s_tel:{
    required:"必填",
    email:"电话格式不正确"
    },
    s_desc:{
    required: "不能为空",
    rangelength: $.format("密码最小长度:{0}, 最大长度:{1}。")
    },
    s_address:{
       required: "不能为空",
       rangelength: $.format("市，区(县)，街道(乡镇)详细格式")
    },
    s_img:{
    equalTo:"不能为空"
    }
    }

    });

    });
    </script>
</head>
<body>
<div id="dcWrap">
    @include('Admin.admin_public.main')
    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>新增门店</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="firm_list" class="actionBtn">门店列表</a>新增门店</h3>
            <form id="myform" action="firm_adds" method="post" enctype="multipart/form-data" >
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                    <tr>
                        <td width="90" align="right">企业名称:</td>
                        <td>
                            <input type="text" name="f_name" id="s_name" value="" size="80" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right" valign="top">企业描述</td>
                        <td>
                            <!-- KindEditor -->
                            <link rel="stylesheet" href="/public/js/kindeditor/themes/default/default.css" />
                            <link rel="stylesheet" href="/public/js/kindeditor/plugins/code/prettify.css" />
                            <script charset="utf-8" src="/public/js/kindeditor/kindeditor.js"></script>
                            <script charset="utf-8" src="/public/js/kindeditor/lang/zh_CN.js"></script>
                            <script charset="utf-8" src="/public/js/kindeditor/plugins/code/prettify.js"></script>
                            <script>
                                KindEditor.ready(function(K) {
                                    var editor1 = K.create('textarea[name="f_nickname"]', {
                                        /*    cssPath : '../plugins/code/prettify.css',*/
                                        uploadJson : '../php/upload_json.php',
                                        fileManagerJson : '../php/file_manager_json.php',
                                        allowFileManager : true,
                                        afterCreate : function() {
                                            var self = this;
                                            K.ctrl(document, 13, function() {
                                                self.sync();
                                                K('form[name=example]')[0].submit();
                                            });
                                            K.ctrl(self.edit.doc, 13, function() {
                                                self.sync();
                                                K('form[name=example]')[0].submit();
                                            });
                                        }
                                    });
                                    prettyPrint();
                                });
                            </script>
                            <!-- /KindEditor -->
                            <textarea id="f_nickname" name="f_nickname" style="width:780px;height:200px;" class="textArea"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">企业LOGO</td>
                        <td>
                            <input type="file" id="f_img" name="f_img" size="38" class="inpFlie" />
                            <img src="/public/images/icon_no.png"></td>
                    </tr>
                    <tr>
                        <td align="right">企业电话:</td>
                        <td>
                            <input type="text" id="f_tel" name="f_tel" value="" size="80" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">企业手机:</td>
                        <td>
                            <input type="text" id="f_phone" name="f_phone" value="" size="80" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">联系人:</td>
                        <td>
                            <input type="text" id="f_contact" name="f_contact" value="" size="80" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">企业邮箱:</td>
                        <td>
                            <input type="text" id="f_email" name="f_email" value="" size="80" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">企业网址:</td>
                        <td>
                            <input type="text" id="f_url" name="f_url" value="" size="80" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">企业地址:</td>
                        <td>
                            <input type="text" id="f_address" name="f_address" value="" size="80" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">企业视频:</td>
                        <td>
                            <input type="file" id="f_video" name="f_video" value="" size="80" class="inpMain" />
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                            <input  class="btn" type="submit" value="提交" />
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
                版权所有 1501phpA6组，并保留所有权利。
            </ul>
        </div>
    </div>
    <!-- dcFooter 结束 -->
    <div class="clear"></div> </div>
</body>
</html>
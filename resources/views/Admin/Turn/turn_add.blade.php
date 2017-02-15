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
    <script type="text/javascript" src="/public/admin/js/jquery.validate.js"></script
</head>
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
                turn_img:{
                    required:true
                },
                turn_order:{
                    required:true,
                },
                turn_desc:{
                    required:true,
                },
            },
            messages:{
                turn_img:{
                    required:"必填"
                },
                turn_order:{
                    required:"必填",
                },
                turn_desc:{
                    required: "不能为空",
                },
            }

        });

    });
</script>
<body>
<div id="dcWrap">
    @include('Admin.admin_public.main')
    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>新增门店</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="turn_list" class="actionBtn">轮播图列表</a>新增轮播图</h3>
            <form id="myform" action="turn_adds" method="post" enctype="multipart/form-data" >
               <table style="text-align: center" width="50%">
                   <tr>
                       <td>选择上传轮播图片：</td>
                       <td style="text-align: left"><input type="file" name="turn_img" /><input type="hidden" value="3" name="turn_order" class="inpFlie"></td>
                   </tr>
                   <tr>
                       <td>图片描述:</td>
                       <td style="text-align: left"><textarea  name="turn_desc" id="" style="width:300px;height:200px;" cols="30" rows="10" class="textArea"></textarea>  </td>
                   </tr>
                   <tr>
                       <td></td>
                       <td><input type="hidden" name="turn_type" value="3"></td>
                   </tr>
                   <tr style="margin-top: 40px">
                       <td colspan="2"> <button class="btn" type="submit">提交</button></td>
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
    </div><!-- dcFooter 结束 -->
    <div class="clear"></div> </div>
<!--<script type="text/javascript">

    onload = function()
    {
        document.forms['action'].reset();
    }

    function douAction()
    {
        var frm = document.forms['action'];
        frm.elements['new_cat_id'].style.display = frm.elements['action'].value == 'category_move' ? '' : 'none';
    }

</script>-->
</body>
</html>
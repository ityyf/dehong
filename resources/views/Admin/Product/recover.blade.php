<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 回收站 </title>
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
        <div id="urHere">DouPHP 管理中心<b>></b><strong>回收站</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3>回收站</h3>
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <th width="30" align="center">编号</th>
                    <th align="left">产品名称</th>
                    <th align="center">货号</th>
                    <th align="center">价格</th>
                    <th align="center">操作</th>
                </tr>
                @foreach($recover_list as $k=>$v)
                <tr>
                    <td align="center">{{$v->p_id}}</td>
                    <td>{{$v->p_name}}</td>
                    <td align="center">{{$v->p_sn}}</td>
                    <td align="center">{{$v->price}}元</td>
                    <td align="center">
                        <a href="restore?id={{$v->p_id}}">还原</a> |
                        <a href="javascript:void(0)" class="del" val="{{$v->p_id}}">彻底删除</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div id="dcFooter">
        <div id="footer">
            <div class="line"></div>
            <ul>
                版权所有 1501phpA6组，并保留所有权利。            </ul>
        </div>
    </div><!-- dcFooter 结束 -->
    <div class="clear"></div> </div>
<script type="text/javascript">


    $('.del').click(function(){
        if(confirm("是否确认删除"))
        {
            var id = $(this).attr('val');
            var _this = $(this);
            $.ajax({
                type: "GET",
                url: "destory",
                data: {'id':id},
                success: function(msg){
                    _this.parent().parent().remove();
                }
            });
        }
    })

</script>
</body>
</html>
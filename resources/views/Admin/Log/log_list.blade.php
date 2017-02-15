
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 操作日志列表 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="/public/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/global.js"></script>
</head>
<body>
<style type="text/css">
    ul { list-style:none;}
    #pagelist {width:600px; margin:30px auto; padding:6px 0px; height:20px;}
    #pagelist ul li { float:left; border:1px solid #5d9cdf; height:20px; line-height:20px; margin:0px 2px;}
    #pagelist ul li a, .pageinfo { display:block; padding:0px 6px; background:#e6f2fe;}
</style>
<div id="dcWrap">
    @include('Admin.admin_public.main')
    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong></strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3>操作日志列表</h3>
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <th align="left"><input type="checkbox" name="checkAll" class="checkAll"></th>
                    <th width="120" align="left">操作内容</th>
                    <th align="left">操作时间</th>
                    <th align="left">操作IP</th>
                </tr>
                @foreach($logArray as $key=>$val)
                    <tr>
                        <td><input type="checkbox" name="ids" value="{{$val->log_id}}"></td>
                        <td>{{$val->admin_id}}执行{{$val->log_value}}</td>
                        <td>{{$val->log_addtime}}</td>
                        <td>{{$val->log_ip}}</td>
                    </tr>
                @endforeach
            </table>
            <input type="button" id="del_model" class="btn" value="删除">
            <div id="pagelist">{!! $logArray->links() !!}</div>
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
    <div class="clear"></div></div>
</body>
</html>
<script>
    $(function () {
        //全选反选
        $(".checkAll").click(function(){
            if(this.checked)
            {
                $("input[name='ids']").each(function(){
                    this.checked = true;
                })
            }
            else
            {
                $("input[name='ids']").each(function(){
                    this.checked = false;
                })
            }
        })
        $("#del_model").click(function() {
        // 判断是否至少选择一项
            var checkedNum = $("input[name='ids']:checked").length;
            if(checkedNum == 0) {
                alert("请选择至少一项！");
                return;
            }
        // 批量选择
            if(confirm("确定要删除所选项目？")) {
                var checkedList = new Array();
                $("input[name='ids']:checked").each(function() {
                    checkedList.push($(this).val());
                });
                $.ajax({
                    type: "get",
                    url: "deletemore",
                    data: {'delitems':checkedList},
                    success: function(result) {
                        if(result == 1)
                        {

                            $("[name ='ids']:checkbox").attr("checked", false);
                            window.location.reload();
                        }
                    }
                });
            }
        });
    });
</script>
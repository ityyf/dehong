<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 订单列表 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="/public/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/global.js"></script>
    <script type="text/javascript" src="/public/js/jquery.autotextarea.js"></script>
    <script language="javascript" type="text/javascript" src="/public/js/WdatePicker.js"></script>
</head>
<style type="text/css">
    ul { list-style:none;}
    #pagelist {width:600px; margin:30px auto; padding:6px 0px; height:20px;}
    #pagelist ul li { float:left; border:1px solid #5d9cdf; height:20px; line-height:20px; margin:0px 2px;}
    #pagelist ul li a, .pageinfo { display:block; padding:0px 6px; background:#e6f2fe;}
</style>
<body>
<div id="dcWrap">
    @include('Admin.admin_public.main')
    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>订单列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3>订单列表</h3>
            <div class="filter">
                <form action="order_list" method="get">
                    <input name="name" type="text" class="inpMain"  size="20" placeholder="产品名称" />
                    <input name="addtime" type="text" class="inpMain" onClick="WdatePicker()" size="10" placeholder="开始时间"  />
                    <input name="oldtime" type="text" class="inpMain" onClick="WdatePicker()"  size="10" placeholder="结束时间" />
                    <input  class="btnGray" type="submit" value="筛选" />
                </form>
            </div>
            <div id="list">
                <form name="action" method="post" action="article.php?rec=action">
                    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                        <tr>
                            <th width="22" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
                            <th align="center">编号</th>
                            <th align="center" >产品名称</th>
                            <th align="center">价格</th>
                            <th align="center">数量</th>
                            <th align="center">简介</th>
                            <th width="50" align="center">是否上架</th>
                            <th width="50" align="center">是否新品</th>
                            <th width="50" align="center">是否热销</th>
                            <th align="center">添加日期</th>
                            <th align="center">操作</th>
                        </tr>
                        @foreach($product_list as $key=>$val)
                            <tr>
                                <td align="center"><input type="checkbox" name="checkbox" value="{{$val->p_id}}" /></td>
                                <td align="center">{{$val->p_sn}}</td>
                                <td align="center">{{$val->p_name}}</a></td>
                                <td align="center">{{$val->price}}元</td>
                                <td align="center">{{$val->num}}</td>
                                <td align="center"><span title="{{$val->p_desc}}">{{mb_substr($val->p_desc,0,15,'utf-8')}}...</span></td>
                                <td align="center" class="change" key="is_sell" val="{{$val->is_sell}}" v="{{$val->p_id}}">
                                    <a href="javascript:void(0)">
                                        @if($val->is_sell == 0)
                                            <span style="color:red">否</span>
                                        @else
                                            <span style="color:blue">是</span>
                                        @endif
                                    </a>
                                </td>
                                <td align="center" class="change" key="is_new" val="{{$val->is_new}}" v="{{$val->p_id}}">
                                    <a href="javascript:void(0)">
                                        @if($val->is_new == 0)
                                            <span style="color:red">否</span>
                                        @else
                                            <span style="color:blue">是</span>
                                        @endif
                                    </a>
                                </td>
                                <td align="center" class="change" key="is_hot" val="{{$val->is_hot}}" v="{{$val->p_id}}">
                                    <a href="javascript:void(0)">
                                        @if($val->is_hot == 0)
                                            <span style="color:red">否</span>
                                        @else
                                            <span style="color:blue">是</span>
                                        @endif
                                    </a>
                                </td>
                                <td align="center">{{date('Y-m-d',$val->addtime)}}</td>
                                <td align="center">
                                    <a href="order_detail?id={{$val->p_id}}">详情</a> |
                                    <a href="order_del/{{$val->p_id}}">删除</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="action">
                        <input name="submit" class="btn" type="button" value="批量删除" />
                    </div>
                </form>
            </div>
            <div class="clear"></div>
            <div id="pagelist">{!! $product_list->links()!!}</div> </div>
    </div>
    <div class="clear"></div>
    <div id="dcFooter">
        <div id="footer">
            <div class="line"></div>
            <ul>
                版权所有 1501phpA6组，并保留所有权利。            </ul>
        </div>
    </div><!-- dcFooter 结束 -->
    <div class="clear"></div> </div>
<script type="text/javascript">
    onload = function()
    {
        document.forms['action'].reset();
    }
    $('.btn').click(function(){
        var ids="";
        $(":input[name='checkbox']:checked").each(function(){
            ids += $(this).val()+',';
        })
        $.ajax({
            type: "GET",
            url: "product_dels",
            data: {'ids':ids},
            success: function(msg){
                console.log(msg);
                if (msg != 0)
                {
                    $(":input[name='checkbox']:checked").parent().parent().remove();
                }
            }
        });
    })

    //即点击该
    $('.change').click(function(){
        var key = $(this).attr('key');
        var val = $(this).attr('val');
        var id = $(this).attr('v');
        $.ajax({
            type: "GET",
            url: "product_edit",
            data: {'key':key,'val':val,'p_id':id},
            success: function(msg){
                if(msg == 1)
                {
                    history.go(0);
                }

            }
        });
    })
</script>
</body>
</html>
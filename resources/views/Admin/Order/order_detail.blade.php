<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 订单详情 </title>
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
        <div id="urHere">DouPHP 管理中心<b>></b><strong>订单详情</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="order_list" class="actionBtn">订单列表</a>订单详情</h3>
            <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <td width="80" align="right">产品名称</td>
                    <td>
                        <span class="spanMain">{{$order_info->p_name}}</span>
                    </td>
                </tr>
                <tr>
                    <td align="right">货号</td>
                    <td>
                        <span class="spanMain">{{$order_info->p_sn}}</span>
                    </td>
                </tr>
                <tr>
                    <td align="right">价格</td>
                    <td>
                        <span class="spanMain">{{$order_info->price}}</span>
                    </td>
                </tr>
                <tr>
                    <td align="right">购买数量</td>
                    <td>
                        <span class="spanMain">{{$order_info->o_num}}</span>
                    </td>
                </tr>
                <tr>
                    <td align="right">总额</td>
                    <td>
                        <span class="spanMain">{{$order_info->o_num * $order_info->price}}</span>
                    </td>
                </tr>
                <tr>
                    <td align="right">预购价格</td>
                    <td>
                        <span class="spanMain">{{$order_info->o_price}}</span>
                    </td>
                </tr>
                <tr>
                    <td align="right">下单时间</td>
                    <td>
                        <span class="spanMain">{{date('Y-m-d',$order_info->addtime)}}</span>
                    </td>
                </tr>
                <tr>
                    <td align="right">客户名称</td>
                    <td>
                        <span class="spanMain">{{$order_info->username}}</span>
                    </td>
                </tr>
                <tr>
                    <td align="right">地址</td>
                    <td>
                        <span class="spanMain">{{$order_info->address}}</span>
                    </td>
                </tr>
                <tr>
                    <td align="right">联系电话</td>
                    <td>
                        <span class="spanMain">{{$order_info->telent}}</span>
                    </td>
                </tr>
                <tr>
                    <td align="right">手机号</td>
                    <td>
                        <span class="spanMain">{{$order_info->phone}}</span>
                    </td>
                </tr>
                <tr>
                    <td align="right">邮箱</td>
                    <td>
                        <span class="spanMain">{{$order_info->email}}</span>
                    </td>
                </tr>
                <tr>
                    <td align="right">备注</td>
                    <td>
                        <span class="spanMain">{{$order_info->remark}}</span>
                    </td>
                </tr>
            </table>
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
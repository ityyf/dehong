<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 产品编辑 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="/public/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/global.js"></script>
    <script type="text/javascript" src="/public/js/jquery.tab.js"></script>
    <script type="text/javascript" src="/public/js/jquery.autotextarea.js"></script>
    <script language="javascript" type="text/javascript" src="/public/js/WdatePicker.js"></script>
</head>
<body>
<div id="dcWrap">
    @include('Admin.admin_public.main')
    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>产品编辑</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="product_list" class="actionBtn">产品列表</a>产品编辑</h3>
            <script type="text/javascript">

                $(function(){ $(".idTabs").idTabs(); });

            </script>
            <div class="idTabs">
                <ul class="tab">
                    <li><a href="#basic">基本信息</a></li>
                    <li><a href="#detail">详情描述</a></li>
                    <li><a href="#other">其他信息</a></li>
                    <li><a href="#album">产品相册</a></li>
                </ul>
                <form action="product_save_exec" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="p_id" value="{{$product_info->p_id}}">
                    <div class="items">
                        <div id="basic">
                            <table width="100%" border="0" cellpadding="5" cellspacing="1" class="tableBasic">
                                <tr>
                                    <td width="80" height="35" align="right">产品名称</td>
                                    <td>
                                        <input type="text"  name="p_name" value="{{$product_info->p_name}}" size="20" class="inpMain" placeholder="产品名称" required/>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="80" height="35" align="right">产品货号</td>
                                    <td>
                                        <input type="text"  name="p_sn" value="{{$product_info->p_sn}}" size="20" class="inpMain" placeholder="产品货号"/>
                                        <span style="color:burlywood">如果您不输入商品货号，系统将自动生成一个唯一的货号。</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="35" align="right">产品分类</td>
                                    <td>
                                        <select name="c_id" required>
                                            <option value="">请您选择分类</option>
                                            @foreach($cate_list as $key=>$val)
                                                <option value="{{$val->c_id}}" title="{{$val->c_name}}">{{$val->c_name}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="80" height="35" align="right">产品价格</td>
                                    <td>
                                        <input type="text"  name="price" value="{{$product_info->price}}" size="5" class="inpMain" placeholder="产品价格" required/>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="35" align="right">库存量</td>
                                    <td>
                                        <input type="text" name="num" value="{{$product_info->num}}" size="5" class="inpMain" />
                                    </td>
                                </tr>
                                <tr>
                                    <td height="35" align="right">是否热销</td>
                                    <td>
                                        @if($product_info->is_hot == 1)
                                            <input type="radio" name="is_hot"  value="0">否
                                            <input type="radio" name="is_hot"  value="1" checked>是
                                        @else
                                            <input type="radio" name="is_hot"  value="0" checked>否
                                            <input type="radio" name="is_hot"  value="1" >是
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td height="35" align="right">是否新品</td>
                                    <td>
                                        @if($product_info->is_new == 1)
                                            <input type="radio" name="is_new"  value="0">否
                                            <input type="radio" name="is_new"  value="1" checked>是
                                        @else
                                            <input type="radio" name="is_new"  value="0" checked>否
                                            <input type="radio" name="is_new"  value="1" >是
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td height="35" align="right">产品图片</td>
                                    <td>
                                        <input type="file" name="p_img" size="38" class="inpFlie" />
                                        <span style="color:burlywood">不改不用添</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="35" align="right">产品简介</td>
                                    <td>
                                        <textarea name="p_desc" cols="60" rows="4"  class="textArea" required>{{$product_info->p_desc}}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <input class="btn" type="submit" value="提交" />
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div id="detail">
                            <table width="100%" border="0" cellpadding="5" cellspacing="1" class="tableBasic">
                                <tr>
                                    <td align="right" valign="top">产品详情</td>
                                    <td>
                                        <!--ueditor-->
                                        <script type="text/javascript" charset="utf-8" src="/public/js/ueditor/ueditor.config.js"></script>
                                        <script type="text/javascript" charset="utf-8" src="/public/js/ueditor/ueditor.all.min.js"> </script>
                                        <script type="text/javascript" charset="utf-8" src="/public/js/ueditor/lang/zh-cn/zh-cn.js"></script>
                                        <script>
                                            var ue = UE.getEditor('editor');
                                        </script>
                                        <!--endueditor-->
                                        <textarea id="editor" type="text/plain"  name="detail" style="width:780px;height:400px;" required>{{$product_info->detail}}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <input class="btn" type="submit" value="提交" />
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div id="other">
                            <table width="100%" border="0" cellpadding="5" cellspacing="1" class="tableBasic">
                                <tr>
                                    <td width="80" height="35" align="right">是否上架</td>
                                    <td>
                                        @if($product_info->is_sell == 1)
                                            <input type="radio" name="is_sell"  value="0">否
                                            <input type="radio" name="is_sell"  value="1" checked>是
                                        @else
                                            <input type="radio" name="is_sell"  value="0" checked>否
                                            <input type="radio" name="is_sell"  value="1" >是
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td width="80" height="35" align="right">是否优惠</td>
                                    <td>
                                        @if($product_info->is_offer == 1)
                                            <input type="radio" name="is_offer"  value="0">否
                                            <input type="radio" name="is_offer"  value="1" checked>是
                                        @else
                                            <input type="radio" name="is_offer"  value="0" checked>否
                                            <input type="radio" name="is_offer"  value="1" >是
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td height="35" align="right">优惠详情</td>
                                    <td>
                                        <textarea name="d_offer" cols="60" rows="4" class="textArea" required>{{$product_info->d_offer}}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="35" align="right">售前服务</td>
                                    <td>
                                        <script>
                                            var ue = UE.getEditor('promise');
                                        </script>
                                        <textarea id="promise" name="promise" style="width:800px;height:200px;" class="textArea" required>{{$product_info->promise}}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="35" align="right">售后服务</td>
                                    <td>
                                        <script>
                                            var ue = UE.getEditor('aftermarket');
                                        </script>
                                        <textarea id="aftermarket" name="aftermarket" style="width:800px;height:200px;" class="textArea" required>{{$product_info->aftermarket}}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <input class="btn" type="submit" value="提交" />
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div id="album">
                            <table width="100%" border="0" cellpadding="5" cellspacing="1" class="tableBasic">
                                <tr align="center">
                                    <td>
                                        图片描述 <input type="text" name="a_desc" style="color:burlywood" value="不改不用添" size="30" class="inpMain" required/>
                                        多文件上传 <input type="file" name="a_url[]" size="38" class="inpFlie" multiple />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="btn" type="submit" value="提交" />
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </form>
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

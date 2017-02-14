<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 添加新闻 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="/public/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/global.js"></script>
    <script type="text/javascript" src="/public/js/jquery.autotextarea.js"></script>

    <!-- 引入百度编辑器 -->
    <script src="ueditor/ueditor.config.js"></script>
    <script src="ueditor/ueditor.all.min.js"></script>
    <script src="ueditor/lang/zh-cn/zh-cn.js"></script>

    <script type="text/javascript" charset="utf-8" src="/public/admin/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/public/admin/ueditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/public/admin/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
<div id="dcWrap">
    @include('Admin.admin_public.main')
    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>添加新闻</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="{{url('admin/news_list')}}" class="actionBtn">新闻列表</a>添加新闻</h3>
            <form action="{{url('admin/news_update',['n_id'=>$news->n_id])}}" method="post" enctype="multipart/form-data">
                <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                    <tr>
                        <td width="90" align="right">新闻标题</td>
                        <td>
                            <input type="text" name="n_title" value="{{$news->n_title}}" size="80" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">新闻类型</td>
                        <td>
                            <select name="c_id">
                                @foreach($category as $val)
                                <option value="{{$val->c_id}}" @if($val->c_id==$news->c_id) selected @endif> {{$val->c_name}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align="right" valign="top">新闻内容</td>
                        <td>
                            <textarea id="n_content" name="n_content" type="text/plain" style="width:1024px;height:500px;">
                                <?php echo html_entity_decode($news->n_content) ?>
                            </textarea>
                        </td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td>
                            <!-- <input type="hidden" name="token" value="7e4a88fb" />
                            <input type="hidden" name="image" value="">
                            <input type="hidden" name="id" value=""> -->
                            <input class="btn" type="submit" value="提交" />
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
                版权所有 1501phpA6组，并保留所有权利。              </ul>
        </div>
    </div><!-- dcFooter 结束 -->
    <div class="clear"></div> </div>
<script type="text/javascript">
    var ue = UE.getEditor('n_content');

</script>
</body>
</html>
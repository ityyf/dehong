<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DouPHP 管理中心 - 新闻列表 </title>
    <meta name="Copyright" content="Douco Design." />
    <link href="/public/css/public.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/global.js"></script>
    <script type="text/javascript" src="/public/js/jquery.autotextarea.js"></script>
    <style type="text/css">
        /*a{text-decoration: none;}*/
    </style>
</head>
<body>
<div id="dcWrap">
    @include('Admin.admin_public.main')
    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>新闻列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="{{url('admin/news_add')}}" class="actionBtn add">添加新闻</a>新闻列表</h3>
          <!--   <div class="filter">
                <form action="article.php" method="post">
                    <select name="cat_id">
                        <option value="0" >—请选择分类—</option>
                        <option value="1"> 大户型</option>
                        <option value="2"> 中小户型</option>
                    </select>
                    <input name="keyword" type="text" class="inpMain" value="" size="20" />
                    <input name="submit" class="btnGray" type="submit" value="筛选" />
                </form>
    <span>
        <a class="btnGray" href="article.php?rec=sort">开始筛选</a>
        </span>
            </div> -->
            <div id="list">
                <form name="action" method="post" action="article.php?rec=action">
                    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                        <tr>
                            <th width="22" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
                            <th width="40" align="center">编号</th>
                            <th align="left">新闻标题</th>
                            <th width="80" align="center">添加人</th>
                            <th width="80" align="center">添加时间</th>
                            <th width="80" align="center">点击量</th>
                            <th width="80" align="center">操作</th>
                        </tr>
                        @foreach($data as $val)
                        <tr>
                            <td align="center"><input type="checkbox" name="checkbox[]" value="10" /></td>
                            <td align="center">{{$val->n_id}}</td>
                            <td>
                                <a href="{{url('admin/detail',['n_id'=>$val->n_id])}}">{{$val->n_title}}</a>

                            </td>
                            <td align="center">{{$val->n_author}}</td>
                            <td align="center">{{date('Y-m-d h:i:s',$val->n_addtime)}}</td>
                            <td align="center">{{$val->access}}</td>
                            <td align="center">
                                <a href="{{url('admin/news_edit',['n_id'=>$val->n_id])}}">编辑</a> | <a href="{{url('admin/news_delete',['n_id'=>$val->n_id])}}">删除</a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </table>
                    <!-- <div class="action">
                        <select name="action" onchange="douAction()">
                            <option value="0">请选择...</option>
                            <option value="del_all">删除</option>
                            <option value="category_move">移动分类至</option>
                        </select>
                        <select name="new_cat_id" style="display:none">
                            <option value="0">未分类</option>
                            <option value="1"> 公司动态</option>
                            <option value="2"> 行业新闻</option>
                        </select>
                        <input name="submit" class="btn" type="submit" value="执行" />
                    </div> -->
                </form>
            </div>
            <div class="clear"></div>
            <div class="pager">
                {{$data->render()}}
                
            </div>           
        </div>
    </div>
    <div class="clear"></div>
    <div id="dcFooter">
        <div id="footer">
            <div class="line"></div>
            <ul>
                版权所有，并保留所有权利。            </ul>
        </div>
    </div><!-- dcFooter 结束 -->
    <div class="clear"></div> </div>
<script type="text/javascript">

    onload = function()
    {
        document.forms['action'].reset();
    }

    function douAction()
    {
        var frm = document.forms['action'];

        frm.elements['new_cat_id'].style.display = frm.elements['action'].value == 'category_move' ? '' : 'none';
    }

</script>
</body>
</html>
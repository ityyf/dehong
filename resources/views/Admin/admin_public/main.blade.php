<div id="dcHead">
    <div id="head">
        <div class="logo"><a href="index.html"><img src="/public/images/dclogo.gif" alt="logo"></a></div>
        <div class="nav">
            <ul>
                <li class="M"><a href="JavaScript:void(0);" class="topAdd">新建</a>
                    <div class="drop mTopad"><a href="product.php?rec=add">商品</a> <a href="article.php?rec=add">文章</a> <a href="nav.php?rec=add">自定义导航</a> <a href="show.html">首页幻灯</a> <a href="page.php?rec=add">单页面</a> <a href="manager.php?rec=add">管理员</a> <a href="link.html"></a> </div>
                </li>
                <li><a href="../home/index" target="_blank">查看站点</a></li>
                <li><a href="index.php?rec=clear_cache">清除缓存</a></li>
                <li><a href="http://help.douco.com" target="_blank">帮助</a></li>
                <li class="noRight"><a href="module.html">DouPHP+</a></li>
            </ul>
            <ul class="navRight">
                <li class="M noLeft"><a href="JavaScript:void(0);">您好，{{$name}}</a>
                </li>
                <li class="noRight"><a href="login_out">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- dcHead 结束 --> <div id="dcLeft">
    <div id="menu">
        <ul class="top">
            <li><a href="index"><i class="home"></i><em>管理首页</em></a></li>
        </ul>
        <ul>
            <li><a href="product_add"><i class="nav"></i><em>产品添加</em></a></li>
            <li><a href="product_list"><i class="product"></i><em>产品列表</em></a></li>
        </ul>
         <ul>
              <li><a href="store_list"><i class="productCat"></i><em>门店管理</em></a></li>
              {{--<li><a href="product.html"><i class="product"></i><em>商品列表</em></a></li>--}}
          </ul>
        <ul>
            <li><a href="classify_list"><i class="articleCat"></i><em>房屋分类</em></a></li>
            <li><a href="{{url('admin/power_list')}}"><i class="article"></i><em>权限列表</em></a></li>
            <li><a href="{{url('admin/admin_list')}}"><i class="article"></i><em>管理员列表</em></a></li>
            <li><a href="{{url('admin/power_role')}}"><i class="theme"></i><em>设置权限</em></a></li>
            <li><a href="{{url('admin/news_list')}}"><i class="article"></i><em>新闻列表</em></a></li>
            <li><a href="{{url('admin/role_list')}}"><i class="article"></i><em>角色列表</em></a></li>
        </ul>
        <ul>
            <li><a href="firm_list"><i class="articleCat"></i><em>企业文化</em></a></li>
        </ul>
        <ul>
            <li><a href="turn_list"><i class="show"></i><em>轮播图管理</em></a></li>
            <li><a href="category_add"><i class="article"></i><em>分类添加</em></a></li>
            <li><a href="category_list"><i class="articleCat"></i><em>分类列表</em></a></li>
        </ul>
        <ul>
            <li><a href="order_list"><i class="articleCat"></i><em>订单列表</em></a></li>
        </ul>
        <ul class="bot">
            <li><a href="backup_list"><i class="backup"></i><em>数据备份</em></a></li>
            <li><a href="recover"><i class="backup"></i><em>回收站</em></a></li>
            <!-- <li><a href="mobile.html"><i class="mobile"></i><em>手机版</em></a></li>
             <li><a href="theme.html"><i class="theme"></i><em>设置模板</em></a></li>
             <li><a href="manager.html"><i class="manager"></i><em>网站管理员</em></a></li>
             <li><a href="manager.php?rec=manager_log"><i class="managerLog"></i><em>操作记录</em></a></li>-->
        </ul>
    </div>
</div>
<div id="dcHead">
    <div id="head">
        <div class="logo"><a href="index"><img src="/public/images/dclogo.gif" alt="logo"></a></div>
        <div class="nav">
            <ul>
                <li class="noRight"><a href="index">DouPHP+</a></li>
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
          </ul>
        <ul>
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
            <li><a href=""><i class="articleCat"></i><em>留言列表</em></a></li>

        </ul>
        <ul>
            <li><a href="order_list"><i class="articleCat"></i><em>订单列表</em></a></li>
        </ul>
        <ul class="bot">
            <li><a href="recover"><i class="backup"></i><em>回收站</em></a></li>
        </ul>
    </div>
</div>
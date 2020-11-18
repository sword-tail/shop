<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"D:\wamp64\www\thinkp5b2c\b2c\public/../application/admin\view\goods\add.htm";i:1604298960;s:66:"D:\wamp64\www\thinkp5b2c\b2c\application\admin\view\common\top.htm";i:1596607931;s:67:"D:\wamp64\www\thinkp5b2c\b2c\application\admin\view\common\left.htm";i:1602823761;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="/thinkp5b2c/b2c/public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="/thinkp5b2c/b2c/public/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="/thinkp5b2c/b2c/public/static/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="/thinkp5b2c/b2c/public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="/thinkp5b2c/b2c/public/static/admin/style/demo.css" rel="stylesheet">
    <link href="/thinkp5b2c/b2c/public/static/admin/style/typicons.css" rel="stylesheet">
    <link href="/thinkp5b2c/b2c/public/static/admin/style/animate.css" rel="stylesheet">
    <script src="/thinkp5b2c/b2c/public/static/plus/ueditor/ueditor.config.js"></script>
    <script src="/thinkp5b2c/b2c/public/static/plus/ueditor/ueditor.all.min.js"></script>
    <script src="/thinkp5b2c/b2c/public/static/plus/ueditor/lang/zh-cn/zh-cn.js"></script>
    <script src="../../../../public/static/plus/ueditor/ueditor.config.js"></script>
    <style type="text/css">
    .form-control-price{
        width: 150px;
        padding: 6px 12px;
        display: inline-block;
    }
    </style>
</head>
<body>
	<!-- 头部 -->
	<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="/thinkp5b2c/b2c/public/static/admin/images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/thinkp5b2c/b2c/public/static/admin/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>admin</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/logout.html">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/changePwd.html">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

	<!-- /头部 -->

	<div class="main-container container-fluid">
		<div class="page-container">
			            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input class="searchinput" type="text">
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <link rel="stylesheet" href="../../../../public/static/admin/style/beyond.css">
<div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-shopping-car"></i>
                <span class="menu-text">商品管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="#">
                        <span class="menu-text"> 商品列表 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('Goods/add'); ?>">
                        <span class="menu-text"> 添加商品 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('Brand/lst'); ?>">
                        <span class="menu-text"> 商品品牌 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('Category/lst'); ?>">
                        <span class="menu-text"> 商品分类 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('Type/lst'); ?>">
                        <span class="menu-text"> 商品类型 </span>
                        <i class="menu-expand"></i>
                    </a>
                </li><li>
                <a href="#">
                    <span class="menu-text"> 商品回收站 </span>
                    <i class="menu-expand"></i>
                </a>
            </li>

            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-shopping-car"></i>
                <span class="menu-text">促销管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="#">
                        <span class="menu-text">团购活动</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">积分商城</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">优惠券</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-shopping-car"></i>
                <span class="menu-text">订单管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="#">
                        <span class="menu-text">订单列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">订单查询</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-shopping-car"></i>
                <span class="menu-text">会员管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="#">
                        <span class="menu-text">会员列表</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('MemberLevel/lst'); ?>">
                        <span class="menu-text">会员级别</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">会员留言</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-shopping-car"></i>
                <span class="menu-text">系统设置</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Conf/confList'); ?>">
                        <span class="menu-text">配置项</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('Conf/lst'); ?>">
                        <span class="menu-text">配置管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">商店设置</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">会员注册项设置</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">支付方式设置</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-shopping-car"></i>
                <span class="menu-text">数据库管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="#">
                        <span class="menu-text">数据备份</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">数据表优化</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-shopping-car"></i>
                <span class="menu-text">短信管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="#">
                        <span class="menu-text">发送短信</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="menu-text">短信签名</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-shopping-car"></i>
                <span class="menu-text">文章模块</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('Cate/lst'); ?>">
                        <span class="menu-text">文章分类</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('Article/lst'); ?>">
                        <span class="menu-text">文章管理</span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>




    </ul>

    <!-- /Sidebar Menu -->
</div>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="<?php echo url('Index/index'); ?>">系统</a>
                    </li>
                                        <li>
                        <a href="<?php echo url('Type/lst'); ?>">商品类型管理</a>
                    </li>
                                        <li class="active">添加商品</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                <!-- 商品信息开始 -->
                <div class="widget-body">
                    <div class="widget-main ">
                        <div class="tabbable">
                            <ul class="nav nav-tabs tabs-flat" id="myTab11">
                                <li class="active">
                                    <a data-toggle="tab" href="#baseinfo">
                                        商品基本信息
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#goodsdes">
                                        描述信息
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#mbprice">
                                        会员价格信息
                                    </a>
                                </li>
<!--                                <li>-->
<!--                                    <a data-toggle="tab" href="#goodsattr">-->
<!--                                        商品属性-->
<!--                                    </a>-->
<!--                                </li>-->
                                <li>
                                    <a data-toggle="tab" href="#goodsphoto">
                                        商品相册
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content tabs-flat">
                                <div id="baseinfo" class="tab-pane in active">
                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">商品名称</label>
                                        <div class="col-sm-6">
                                            <input class="form-control"  placeholder="" name="goods_name" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">商品主图</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" style="border:none;box-shadow:none" name="og_thumb"  type="file">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">是否上架</label>
                                        <div class="col-sm-6">
                                            <div class="radio" style="float:left; padding-right:10px ">
                                                <label>
                                                    <input type="radio" name="on_sale" value="1" class="colored-blue" checked="checked">
                                                    <span class="text">是</span>
                                                </label>
                                            </div>
                                            <div class="radio" style="float:left; padding-right:10px">
                                                <label>
                                                    <input type="radio" name="on_sale"  value="0" class="colored-blue">
                                                    <span class="text">否</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">所属栏目</label>
                                        <div class="col-sm-6">
                                            <select name="category_id">
                                                <option value="">请选择</option>
                                                <?php if(is_array($categoryRes) || $categoryRes instanceof \think\Collection || $categoryRes instanceof \think\Paginator): $i = 0; $__LIST__ = $categoryRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                                                <option value="<?php echo $cate['id']; ?>"><?php echo str_repeat('-', $cate['level']*8)?><?php echo $cate['cate_name']; ?></option>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">所属品牌</label>
                                        <div class="col-sm-6">
                                            <select name="brand_id">
                                                <option value="">请选择</option>
                                                <?php if(is_array($brandRes) || $brandRes instanceof \think\Collection || $brandRes instanceof \think\Paginator): $i = 0; $__LIST__ = $brandRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$brand): $mod = ($i % 2 );++$i;?>
                                                <option value="<?php echo $brand['id']; ?>"><?php echo $brand['brand_name']; ?></option>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">市场价</label>
                                        <div class="col-sm-6">
                                            <input class="form-control"  placeholder="" name="market_price" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">本店价</label>
                                        <div class="col-sm-6">
                                            <input class="form-control"  placeholder="" name="shop_price" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">重量</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" style="width: 300px; display: inline-block" placeholder="" name="goods_weight" required="" type="text">
                                            <select name="weight_unit">
                                                <option value="kg">kg</option>
                                                <option value="g">g</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id="goodsdes" class="tab-pane">
                                    <textarea name="goods_des" id="goods_des"></textarea>
                                </div>
                                <div id="mbprice" class="tab-pane">
                                    <?php if(is_array($mlRes) || $mlRes instanceof \think\Collection || $mlRes instanceof \think\Paginator): $i = 0; $__LIST__ = $mlRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ml): $mod = ($i % 2 );++$i;?>
                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $ml['level_name']; ?></label>
                                        <div class="col-sm-6">
                                            <input class="form-control"   name="mp[<?php echo $ml['id']; ?>]"  type="text">
                                        </div>
                                    </div>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
<!--                                <div id="goodsattr" class="tab-pane">-->
<!--                                    <div class="form-group">-->
<!--                                        <label for="username" class="col-sm-2 control-label no-padding-right">商品类型</label>-->
<!--                                        <div class="col-sm-6">-->
<!--                                            <select name="type_id">-->
<!--                                                <option>请选择</option>-->
<!--                                                <?php if(is_array($typeRes) || $typeRes instanceof \think\Collection || $typeRes instanceof \think\Paginator): $i = 0; $__LIST__ = $typeRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?>-->
<!--                                                <option value="<?php echo $type['id']; ?>"><?php echo $type['type_name']; ?></option>-->
<!--                                                <?php endforeach; endif; else: echo "" ;endif; ?>-->
<!--                                            </select>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div id="attr_list">-->
<!--&lt;!&ndash;                                        <div class="form-group">&ndash;&gt;-->
<!--&lt;!&ndash;                                            <label for="username" class="col-sm-2 control-label no-padding-right">颜色</label>&ndash;&gt;-->
<!--&lt;!&ndash;                                            <div class="col-sm-6">&ndash;&gt;-->
<!--&lt;!&ndash;                                                <a href="#">[+]</a>&ndash;&gt;-->
<!--&lt;!&ndash;                                                <select>&ndash;&gt;-->
<!--&lt;!&ndash;                                                    <option>黑色</option>&ndash;&gt;-->
<!--&lt;!&ndash;                                                    <option>白色</option>&ndash;&gt;-->
<!--&lt;!&ndash;                                                </select>&ndash;&gt;-->
<!--&lt;!&ndash;                                                <input class="form-control-price" placeholder="价格" type="text">&ndash;&gt;-->
<!--&lt;!&ndash;                                            </div>&ndash;&gt;-->
<!--&lt;!&ndash;                                        </div>&ndash;&gt;-->
<!--&lt;!&ndash;                                        <div class="form-group">&ndash;&gt;-->
<!--&lt;!&ndash;                                            <label for="username" class="col-sm-2 control-label no-padding-right">材质</label>&ndash;&gt;-->
<!--&lt;!&ndash;                                            <div class="col-sm-6">&ndash;&gt;-->
<!--&lt;!&ndash;                                                <select>&ndash;&gt;-->
<!--&lt;!&ndash;                                                    <option>棉纶</option>&ndash;&gt;-->
<!--&lt;!&ndash;                                                    <option>亚麻</option>&ndash;&gt;-->
<!--&lt;!&ndash;                                                </select>&ndash;&gt;-->
<!--&lt;!&ndash;                                            </div>&ndash;&gt;-->
<!--&lt;!&ndash;                                        </div>&ndash;&gt;-->
<!--&lt;!&ndash;                                        <div class="form-group">&ndash;&gt;-->
<!--&lt;!&ndash;                                            <label for="username" class="col-sm-2 control-label no-padding-right">材质</label>&ndash;&gt;-->
<!--&lt;!&ndash;                                            <div class="col-sm-6">&ndash;&gt;-->
<!--&lt;!&ndash;                                                <input class="form-control-price"  type="text">&ndash;&gt;-->
<!--&lt;!&ndash;                                            </div>&ndash;&gt;-->
<!--&lt;!&ndash;                                        </div>&ndash;&gt;-->
<!--                                    </div>-->
<!--                                </div>-->
                                <div id="goodsphoto" class="tab-pane">
                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right"></label>
                                        <div class="col-sm-6">
                                            <a href="#" onclick="addrow(this)">[+]</a><input class="form-control" style="border:none;box-shadow:none; display:inline-block;width: 50%" name="goods_photo[]"  type="file">
                                        </div>
                                    </div>
                                    <div id="goods_photo"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 商品信息结束 -->
            </form>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>
	</div>

	    <!--Basic Scripts-->
    <script src="/thinkp5b2c/b2c/public/static/admin/style/jquery_002.js"></script>
    <script src="/thinkp5b2c/b2c/public/static/admin/style/bootstrap.js"></script>
    <script src="/thinkp5b2c/b2c/public/static/admin/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="/thinkp5b2c/b2c/public/static/admin/style/beyond.js"></script>
    <script type="text/javascript">
        var ue = UE.getEditor('goods_des' ,{ initialFrameHeight:300  , autoHeightEnabled: false});
    </script>
    <script type="text/javascript">
    $("select[name=type_id]").change(function () {
        var type_id=$(this).val();
        $.ajax({
            type:"POST",
            url:"<?php echo url('Attr/ajaxGetAttr'); ?>",
            data:{type_id:type_id},
            dataType:"json",
            success:function (data) {
                var html='';
                $(data).each(function(k,v){
                    if (v.attr_type==1){
                        //单选处理
                        html+="<div class='form-group'>";
                        html+="<label class='col-sm-2 control-label no-padding-right''>"+v.attr_name+"</label>";
                        var attrValuesArr=v.attr_values.split(",");
                        html+="<div class='col-sm-6'><a href='#' onclick='addrow(this)'>[+]</a>";
                        html+="<select>";
                        html+="<option>请选择</option>>";
                        for(var i=0;i<attrValuesArr.length;i++){
                            html+="<option value='"+attrValuesArr[i]+"'>"+attrValuesArr[i]+"</option>>";
                        }
                        html+="</select>";
                        html+="<input class='form-control-price' placeholder='价格' type='text'>";
                        html+="</div></div>";
                    }else{
                        //唯一处理
                        if(v.attr_values){
                            html+="<div class='form-group'>";
                            html+="<label class='col-sm-2 control-label no-padding-right''>"+v.attr_name+"</label>";
                            html+="<div class='col-sm-6'>";
                            var attrValuesArr=v.attr_values.split(",")
                            html+="<select>";
                            html+="<option>请选择</option>>";
                            for(var i=0;i<attrValuesArr.length;i++){
                                html+="<option value='"+attrValuesArr[i]+"'>"+attrValuesArr[i]+"</option>";
                            }
                            html+="</select>";
                            html+="</div></div>"
                        }else{
                            html+="<div class='form-group'>";
                            html+="<label class='col-sm-2 control-label no-padding-right''>"+v.attr_name+"</label>";
                            html+="<div class='col-sm-6'>";
                            html+="<input class='form-control-price type='text'/>"
                            html+="</div></div>"
                        }
                    }
                });
                $("#attr_list").html(html);
            }
        })
    });

    function addrow(o) {
        var div=$(o).parent().parent();
        if($(o).html() == '[+]'){
            var newdiv=div.clone();
            newdiv.find('a').html('[-]');
            div.after(newdiv);
        }else{
            div.remove();
        }
    }
    </script>


</body></html>
<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"D:\wamp64\www\thinkp5b2c\b2c\public/../application/admin\view\conf\conflist.htm";i:1601011282;s:66:"D:\wamp64\www\thinkp5b2c\b2c\application\admin\view\common\top.htm";i:1596607931;s:67:"D:\wamp64\www\thinkp5b2c\b2c\application\admin\view\common\left.htm";i:1602227507;}*/ ?>
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
                    <a href="#">
                        <span class="menu-text">会员等级</span>
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
                        <a href="<?php echo url('Conf/lst'); ?>">配置管理</a>
                    </li>
                                        <li class="active">配置列表</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">

<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
<!--            配置列表开始-->
            <div class="widget-body">
                <div class="widget-main">
                    <div class="tabbable">
                        <ul class="nav nav-tabs tabs-flat" id="myTab11">
                            <li class="active">
                                <a data-toggle="tab" href="#home11">
                                    店铺配置
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#profile11">
                                    商品配置
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content tabs-flat">
                            <div id="home11" class="tab-pane active">
                                <div id="horizontal-form">
                                <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                                    <?php foreach($ShopConfRes as $k => $conf) :?>
                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $conf['cname']; ?></label>
                                        <div class="col-sm-6">
                                            <?php switch($conf['form_type']): case "input": ?>
                                            <input class="form-control"  placeholder="" name="<?php echo $conf['ename']; ?>" value="<?php echo $conf['ename']; ?>">
                                            <?php break; case "textarea": ?>
                                            <textarea class="form-control" name="<?php echo $conf['ename']; ?>"><?php echo $conf['ename']; ?></textarea>
                                            <?php break; case "radio": ?>
                                            <div class="radio">
                                                <?php if($conf['valuesss']):
                                                    $arr = explode(',',$conf['valuesss']);
                                                    foreach($arr as $k1 => $v1):
                                                ?>
                                                <label>
                                                    <input <?php if($conf['value']==$v1){ echo 'checked="checked"'; }?> name="<?php echo $conf['ename']; ?>" class="colored=blue" type="radio" value="<?php echo $v1;?>">
                                                    <span class="text"><?php echo $v1;?></span>
                                                </label>
                                                <?php endforeach; endif; ?>
                                            </div>
                                            <?php break; case "checkbox": ?>
                                            <div class="checkbox">
                                                <?php if($conf['valuesss']):
                                                    $arr_valuesss = explode(',',$conf['valuesss']);
                                                    $arr_value = explode(',',$conf['value']);
                                                    foreach($arr_valuesss as $k1 => $v1):
                                                ?>
                                                <label>
                                                    <input <?php if(in_array($v1,$arr_value)){ echo 'checked="checked"'; }?> name="<?php echo $conf['ename']; ?>[]" class="colored=blue" type="checkbox" value="<?php echo $v1;?>">
                                                    <span class="text"><?php echo $v1;?></span>
                                                </label>
                                                <?php endforeach; endif; ?>
                                            </div>
                                            <?php break; case "select": ?>
                                                <select name="<?php echo $conf['ename']; ?>">
                                                    <option value="">请选择</option>
                                                    <?php if($conf['valuesss']):
                                                    $arr = explode(',',$conf['valuesss']);
                                                    foreach($arr as $k1 => $v1):
                                                    ?>
                                                    <option value="<?php echo $v1;?>" <?php if($conf['value']==$v1){ echo 'selected="selected"'; }?>><?php echo $v1;?></option>
                                                    <?php endforeach; endif; ?>
                                                </select>
                                            <?php break; case "file": ?>
                                            <input  name="<?php echo $conf['ename']; ?>" type="file">
                                            <?php if($conf['value']): ?>
                                                <img src="/thinkp5b2c/b2c/public/uploads/<?php echo $conf['value']; ?>" height="30">
                                            <?php else: ?>
                                                <p>暂无缩略图</p>
                                            <?php endif; break; endswitch; ?>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-default">保存信息</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="profile11" class="tab-pane">
                                <div class="form-horizontal">
                                    <?php foreach($GoodConfRes as $k => $confs) :?>
                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $conf['cname']; ?></label>
                                        <div class="col-sm-6">
                                            <?php switch($confs['form_type']): case "input": ?>
                                            <input class="form-control"  placeholder="" name="<?php echo $confs['ename']; ?>" value="<?php echo $conf['ename']; ?>">
                                            <?php break; case "textarea": ?>
                                            <textarea class="form-control" name="<?php echo $confs['ename']; ?>"><?php echo $conf['ename']; ?></textarea>
                                            <?php break; case "radio": ?>
                                            <div class="radio">
                                                <?php if($confs['valuesss']):
                                                    $arr = explode(',',$confs['valuesss']);
                                                    foreach($arr as $k1 => $v1):
                                                ?>
                                                <label>
                                                    <input <?php if($confs['value']==$v1){ echo 'checked="checked"'; }?> name="<?php echo $confs['ename']; ?>" class="colored=blue" type="radio" value="<?php echo $v1;?>">
                                                    <span class="text"><?php echo $v1;?></span>
                                                </label>
                                                <?php endforeach; endif; ?>
                                            </div>
                                            <?php break; case "checkbox": ?>
                                            <div class="checkbox">
                                                <?php if($confs['valuesss']):
                                                    $arr_valuesss = explode(',',$confs['valuesss']);
                                                    $arr_value = explode(',',$confs['value']);
                                                    foreach($arr_valuesss as $k1 => $v1):
                                                ?>
                                                <label>
                                                    <input <?php if(in_array($v1,$arr_value)){ echo 'checked="checked"'; }?> name="<?php echo $confs['ename']; ?>[]" class="colored=blue" type="checkbox" value="<?php echo $v1;?>">
                                                    <span class="text"><?php echo $v1;?></span>
                                                </label>
                                                <?php endforeach; endif; ?>
                                            </div>
                                            <?php break; case "select": ?>
                                            <select name="<?php echo $confs['ename']; ?>">
                                                <option value="">请选择</option>
                                                <?php if($confs['valuesss']):
                                                    $arr = explode(',',$confs['valuesss']);
                                                    foreach($arr as $k1 => $v1):
                                                ?>
                                                <option value="<?php echo $v1;?>" <?php if($confs['value']==$v1){ echo 'selected="selected"'; }?>><?php echo $v1;?></option>
                                                <?php endforeach; endif; ?>
                                            </select>
                                            <?php break; case "file": ?>
                                            <input  name="<?php echo $confs['ename']; ?>" type="file">
                                            <?php if($confs['value']): ?>
                                            <img src="/thinkp5b2c/b2c/public/uploads/<?php echo $confs['value']; ?>" height="30">
                                            <?php else: ?>
                                            <p>暂无缩略图</p>
                                            <?php endif; break; endswitch; ?>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-default">保存信息</button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--            配置列表结束-->
<!--            <div class="widget-body">-->
<!--                <div id="horizontal-form">-->
<!--                    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">-->
<!--                        <div class="form-group">-->
<!--                            <label for="username" class="col-sm-2 control-label no-padding-right">配置名称</label>-->
<!--                            <div class="col-sm-6">-->
<!--                                <input class="form-control"  placeholder="" name="cname" required="" type="text">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <div class="col-sm-offset-2 col-sm-10">-->
<!--                                <button type="submit" class="btn btn-default">保存信息</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
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
    


</body></html>
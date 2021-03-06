<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:85:"/Users/wuzhu/Desktop/WWW/wwwroot/pro/public/../application/index/view/index/menu.html";i:1558327738;s:74:"/Users/wuzhu/Desktop/WWW/wwwroot/pro/application/admin/view/base/head.html";i:1558411548;s:72:"/Users/wuzhu/Desktop/WWW/wwwroot/pro/application/admin/view/base/js.html";i:1558020052;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <title><?php echo config('site.name'); ?></title>
    <meta name="keywords" content="<?php echo config('site.keywords'); ?>">
    <meta name="description" content="<?php echo config('site.description'); ?>">
    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="/static/hplus/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/static/hplus/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/static/hplus/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/static/hplus/css/animate.css" rel="stylesheet">
    <link href="/static/hplus/css/style.css?v=4.1.0" rel="stylesheet">
    <style type="text/css">
        
        table th,td{

            text-align: center;

        }

    </style>
</head>
<style type="text/css">
    
.small_menu{

    margin-left: 24px;
    margin-top: 10px;
    cursor:pointer;

}

</style>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">

                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span><img alt="image" class="img-circle" src="/static/img/logo.png" style="width:70px;" /></span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                <span class="block m-t-xs"><strong class="font-bold"><?php echo config('site.name'); ?></strong></span>
                                <span class="block m-t-xs"><strong class="font-bold"><?php echo session('merchant.username'); ?></strong></span>
                                <span class="text-muted text-xs block">商户<b class="caret"></b></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><p class="small_menu" onclick="change_my_pwd();">修改登录密码</p></li>
                                <li><p class="small_menu" onclick="change_cash_pwd();">修改提现密码</p></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo url('admin/base/logout'); ?>">安全退出</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">H+
                        </div>
                    </li>
                    
                    <li>
                        <a class="J_menuItem" href="<?php echo url('admin/base/index'); ?>"> <span class="nav-label">首页</span></a>
                    </li>

                    <li>
                        <a class="J_menuItem" href="<?php echo url('admin/payorder/index'); ?>"> <span class="nav-label">订单管理</span></a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="<?php echo url('admin/moneyaccount/index'); ?>"> <span class="nav-label">收款维护</span></a>
                    </li>
                    <li>
                        <a class="J_menuItem" href="<?php echo url('admin/cash/index'); ?>"> <span class="nav-label">结算管理</span></a>
                    </li>

                    <li>
                        <a class="J_menuItem" href="https://www.showdoc.cc/paypay?page_id=2079238060404560"> <span class="nav-label">接入文档</span></a>
                    </li>

                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">

            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                </nav>
            </div>
            <div class="row content-tabs">
                <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
                </button>
                <nav class="page-tabs J_menuTabs">
                    <div class="page-tabs-content">
                        <a href="javascript:;" class="active J_menuTab" data-id="<?php echo url('admin/base/index'); ?>">首页</a>
                    </div>
                </nav>
                <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
                </button>
                <div class="btn-group roll-nav roll-right">
                    <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>

                    </button>
                    <ul role="menu" class="dropdown-menu dropdown-menu-right">
                        <li class="J_tabShowActive"><a>定位当前选项卡</a>
                        </li>
                        <li class="divider"></li>
                        <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                        </li>
                        <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                        </li>
                    </ul>
                </div>
                <a href="<?php echo url('admin/base/logout'); ?>" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i> 退出</a>
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe class="J_iframe" name="iframe0" width="100%" height="100%" src="<?php echo url('admin/base/index'); ?>" frameborder="0" data-id="<?php echo url('admin/base/index'); ?>" seamless></iframe>
            </div>

        </div>
        <!--右侧部分结束-->


    </div>

</body>

    <!-- 全局js -->
    <script src="/static/hplus/js/jquery.min.js?v=2.1.4"></script>
    <script src="/static/hplus/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/static/hplus/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/static/hplus/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="https://cdn.bootcss.com/layer/2.3/layer.js"></script>

    <!-- 自定义js -->
    <script src="/static/hplus/js/hplus.js?v=4.1.0"></script>
    <script type="text/javascript" src="/static/hplus/js/contabs.js"></script>

    <!-- 第三方插件 -->
    <script src="/static/hplus/js/plugins/pace/pace.min.js"></script>
    
    <script src="/static/hplus/js/plugins/iCheck/icheck.min.js"></script>

<script type="text/javascript">
    
    function change_my_pwd(){

        layer.prompt({title:'请输入新密码'},function(value){

            location.href = "<?php echo url('admin/base/change_my_pwd'); ?>?pwd=" + value;

        });

    }

    function change_cash_pwd(){

        layer.prompt({title:'请输入原提现密码(默认密码为123456)'},function(pwd_old){

            layer.prompt({title:'请输入新提现密码'},function(pwd){

                location.href = "<?php echo url('admin/base/change_cash_pwd'); ?>?pwd_old="+pwd_old+"&pwd=" + pwd;

            });

        });

    }

</script>

</html>

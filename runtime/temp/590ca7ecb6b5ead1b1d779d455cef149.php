<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"E:\wamp\phpStudy\PHPTutorial\WWW\game\public/../application/admin\view\index.html";i:1559227919;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<title>库存管理系统</title>
<meta name="keywords" content="">
<meta name="description" content="">
<!--[if lt IE 9]>
<meta http-equiv="refresh" content="0;ie.html"/>
<![endif]-->
<link href="__CSS__/bootstrap.min.css?v=3.3.6" rel="stylesheet">
<!--<link href="__CSS__/font-awesome.min.css?v=4.4.0" rel="stylesheet">-->
    <link href="__CSS__/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="__CSS__/animate.min.css" rel="stylesheet">
<link href="__CSS__/style.min.css?v=4.1.2" rel="stylesheet">
   
    <style>
.navbar-fixed-top, .navbar-static-top{background:#337ab7}
.nav-header{background:#337ab7}
.nav>li>a{color:#fff}

</style>
</head>
<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
<div id="wrapper">
    <!--左侧导航开始-->
    <!--<nav class="navbar-default navbar-static-side" role="navigation" >-->
        <!--<div class="nav-close"><i class="fa fa-times-circle"></i>-->
        <!--</div>-->
        <!--<div class="sidebar-collapse">-->
            <!--<ul class="nav" id="side-menu">-->
                <!--<li class="nav-header" style="border-bottom: 1px solid #19aa8d;background-color: #2f4050; ">-->
                    <!--<div class="dropdown profile-element" style="margin-top:-22px;text-align:center" >-->
                        <!--&lt;!&ndash;<span><img alt="image"  src="__IMG__/logo1.png"/></span>&ndash;&gt;-->
                        <!--<a data-toggle="dropdown" class="dropdown-toggle" href="#">-->
                            <!--<span class="clear">-->
                                <!--<span class="block m-t-xs"><strong class="font-bold" style="font-size: 20px;color:#fff;line-height:35px"><?php echo $username; ?></strong></span>-->
                               <!--&lt;!&ndash; <span class="text-muted text-xs block" style="font-size: 20px;color:#1ab394"><?php echo $rolename; ?><b class="caret"></b></span>&ndash;&gt;-->
                            <!--</span>-->
                        <!--</a>-->
                      <!--&lt;!&ndash;-->
                        <!--<ul class="dropdown-menu animated fadeInRight m-t-xs" style="font-size: 18px;">-->
                            <!--<li>-->
                                <!--<a href="<?php echo url('admin/login/loginOut'); ?>">系统安全退出</a>-->
                            <!--</li>-->
                            <!--<li>-->
                                <!--<a onclick="myBalance()">个人账户余额</a>-->
                            <!--</li>-->
                            <!--<li>-->
                                <!--<a onclick="personWeb()">查看个人信息</a>-->
                            <!--</li>-->
                            <!--<li>-->
                                <!--<a onclick="forgetPass()">修改登录密码</a>-->
                            <!--</li>-->
                            <!--<li>-->
                                <!--<a onclick="forgetPay()">修改二级密码</a>-->
                            <!--</li>-->
                            <!--&lt;!&ndash;<li>&ndash;&gt;-->
                                <!--&lt;!&ndash;<a onclick="moneyWeb()">个人账户充值</a>&ndash;&gt;-->
                            <!--&lt;!&ndash;</li>&ndash;&gt;-->
                      <!--&lt;!&ndash;-->
                            <!--<li>-->
                                <!--<a onclick="forwardWeb()">个人账户提现</a>-->
                            <!--</li>-->
                            <!--<li>-->
                                <!--<a onclick="assetDetail()">个人资产明细</a>-->
                            <!--</li>-->
                            <!--<li>-->
                                <!--<a onclick="disclaWeb()">平台免责声明</a>-->
                            <!--</li>-->
                        <!--</ul>-->
                  <!--&ndash;&gt;-->
                    <!--</div>-->
                    <!--<div class="logo-element">KC-->
                    <!--</div>-->
                <!--</li>-->
                <!--&lt;!&ndash;<div style="margin-top: 70px"></div>&ndash;&gt;-->
                <!--<?php if(!empty($menu)): ?>-->
                <!--<?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): if( count($menu)==0 ) : echo "" ;else: foreach($menu as $key=>$vo): ?>-->
                <!--<?php if(vo.typeid == 0): ?>-->
                <!--<li class="active" id="menu">-->
                <!--&lt;!&ndash;<a href="<?php echo $vo['href']; ?>" style="font-size: 16px;pointer-events: none;">&ndash;&gt;-->
                    <!--&lt;!&ndash;<i class="<?php echo $vo['style']; ?>"></i>&ndash;&gt;-->
                    <!--&lt;!&ndash;<span class="nav-label"><?php echo $vo['node_name1']; ?> </span>&ndash;&gt;-->
                    <!--&lt;!&ndash;<span class="fa arrow"></span>&ndash;&gt;-->
                <!--&lt;!&ndash;</a>&ndash;&gt;-->
                    <!--<a href="#" style="font-size: 16px;pointer-events: none;">-->
                        <!--<i class="<?php echo $vo['style']; ?>"></i>-->
                        <!--<span class="nav-label"><?php echo $vo['node_name']; ?></span>-->
                        <!--<span class="fa arrow"></span>-->
                    <!--</a>-->
                    <!--<ul class="nav nav-second-level">-->
                        <!--<?php if(!empty($vo['child'])): ?>-->
                        <!--<?php if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): if( count($vo['child'])==0 ) : echo "" ;else: foreach($vo['child'] as $key=>$v): ?>-->
                        <!--<?php if($v['typeid'] == $vo['id']): ?>-->
                       <!---->
                        <!--<li>-->
                            <!--<a class="J_menuItem" href="<?php echo $v['href']; ?>"><?php echo $v['node_name']; ?></a>-->
                        <!--</li>-->
                        <!--<?php endif; ?>-->
                        <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                       <!--<?php endif; ?>-->
                    <!--</ul>-->
                <!--&lt;!&ndash;<ul class="nav nav-second-level">&ndash;&gt;-->
                    <!--&lt;!&ndash;<?php if(!empty($vo['child'])): ?>&ndash;&gt;-->
                    <!--&lt;!&ndash;<?php if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): if( count($vo['child'])==0 ) : echo "" ;else: foreach($vo['child'] as $key=>$v): ?>&ndash;&gt;-->
                    <!--&lt;!&ndash;<li>&ndash;&gt;-->
                        <!--&lt;!&ndash;<a class="J_menuItem" href="<?php echo $v['href']; ?>"><?php echo $v['node_name']; ?></a>&ndash;&gt;-->
                    <!--&lt;!&ndash;</li>&ndash;&gt;-->
                    <!--&lt;!&ndash;<?php endforeach; endif; else: echo "" ;endif; ?>&ndash;&gt;-->
                    <!--&lt;!&ndash;<?php endif; ?>&ndash;&gt;-->
                <!--&lt;!&ndash;</ul>&ndash;&gt;-->
            <!--</li>-->
                <!--<?php endif; ?>-->
                <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                <!--<?php endif; ?>-->
            <!--</ul>-->
        <!--</div>-->
    <!--</nav>-->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="nav-close"><i class="fa fa-times-circle"></i>
        </div>
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header" style="border-bottom: 1px solid #19aa8d;background-color: #2f4050; ">
                    <div class="dropdown profile-element">
                        <!--<span><img alt="image" class="img-circle" src="img/profile_small.jpg" /></span>-->
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs" style="font-size: 20px;><strong class="font-bold">库存管理系统</strong></span>
                              <!--<span class="text-muted text-xs block" style="font-size: 20px;color:#1ab394"><?php echo $rolename; ?><b class="caret"></b></span>-->
                                </span>
                        </a>
                       
                    </div>
                    <div class="logo-element">KC
                    </div>
                </li>
                <?php if(!empty($menu)): if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): if( count($menu)==0 ) : echo "" ;else: foreach($menu as $key=>$vo): if(vo.typeid == 0): ?>
                <li>
                    <a href="#">
                        <i class="<?php echo $vo['style']; ?>"></i>
                        <span class="nav-label"><?php echo $vo['node_name']; ?></span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <?php if(!empty($vo['child'])): if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): if( count($vo['child'])==0 ) : echo "" ;else: foreach($vo['child'] as $key=>$v): if($v['typeid'] == $vo['id']): ?>
                        <li>
                            <a class="J_menuItem" href="<?php echo $v['href']; ?>" data-index="0"><?php echo $v['node_name']; ?></a>
                        </li>
                       <?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
                    </ul>
                
                </li>
                <?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
               
            
            </ul>
        </div>
    </nav>
    <!--左侧导航结束-->
    <!--右侧部分开始-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <!-- <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
              
                <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    <marquee direction="left" width="170%" >
                        <b style="font-size: 17px">欢迎使用：<span style="color: red">luokeke1990512</span></b>
                    </marquee>
                </div>
   
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown hidden-xs">
                        <a aria-expanded="false">
                            <i></i>
                        </a>
                    </li>
                </ul>
             -->

        </div>
        <div class="row content-tabs">
            <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
            </button>
            <nav class="page-tabs J_menuTabs">
                <div class="page-tabs-content">
                    <a href="javascript:;" class="active J_menuTab" data-id="index_v1.html">首页</a>
                </div>
            </nav>
            <!--<button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>-->
                <!--<a href="" class="roll-nav roll-right J_tabExit" style="width: 150px;color: red"><i class="fa fa fc-agenda-days">欢迎<?php echo $username; ?></i>-->
                    <!--</a>-->
            <!--</button>-->
            <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
                <a href="" class="roll-nav roll-right J_tabExit" style="width: 150px;color: red"><i class="fa fa fc-agenda-days">账号剩余<span><?php echo $endtime; ?></span>天</i>
                </a>
            </button>
            <div class="btn-group roll-nav roll-right">
                <button class="J_tabClose" >欢迎<?php echo $username; ?>

                </button>
                <!--<ul role="menu" class="dropdown-menu dropdown-menu-right">-->
                    <!--<li class="J_tabGo"><a>前进</a>-->
                    <!--</li>-->
                    <!--<li class="J_tabBack"><a>后退</a>-->
                    <!--</li>-->
                    <!--<li class="J_tabFresh"><a>刷新</a>-->
                    <!--</li>-->
                    <!--<li class="divider"></li>-->
                    <!--<li class="J_tabShowActive"><a>定位当前选项卡</a>-->
                    <!--</li>-->
                    <!--<li class="divider"></li>-->
                    <!--<li class="J_tabCloseAll"><a>关闭全部选项卡</a>-->
                    <!--</li>-->
                    <!--<li class="J_tabCloseOther"><a>关闭其他选项卡</a>-->
                    <!--</li>-->
                <!--</ul>-->
            </div>
            
            <a href="<?php echo url('admin/login/loginOut'); ?>" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out"></i>
                退出</a>
            
        </div>
        <div class="row J_mainContent" id="content-main">
            <iframe class="J_iframe" name="iframe0" width="100%" height="100%"
                    src="<?php echo url('Index/indexPage'); ?>" frameborder="0"
                    data-id="index_v1.html" seamless></iframe>
        </div>
        <!--<div class="footer">
            <div class="pull-right"><a href="" target="_blank">&copy; 库存管理平台 2012 - <?php echo date('Y', time()); ?></a>
            </div>
        </div>-->
    </div>
    <!--右侧部分结束-->
    <!--右侧边栏开始-->
    <div id="right-sidebar">
        <div class="sidebar-container">
            <ul class="nav nav-tabs navs-3">
                <li class="active">
                    <a data-toggle="tab" href="#tab-1">
                        <i class="fa fa-gear"></i> 主题
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane active">
                    <div class="sidebar-title">
                        <h3> <i class="fa fa-comments-o"></i> 主题设置</h3>
                        <small><i class="fa fa-tim"></i> 你可以从这里选择和预览主题的布局和样式，这些设置会被保存在本地，下次打开的时候会直接应用这些设置。</small>
                    </div>
                    <div class="skin-setttings">
                        <div class="title">主题设置</div>
                        <div class="setings-item">
                            <span>收起左侧菜单</span>
                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="collapsemenu">
                                    <label class="onoffswitch-label" for="collapsemenu">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                            <span>固定顶部</span>

                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="fixednavbar" class="onoffswitch-checkbox" id="fixednavbar">
                                    <label class="onoffswitch-label" for="fixednavbar">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="setings-item">
                                <span>
                        固定宽度
                    </span>

                            <div class="switch">
                                <div class="onoffswitch">
                                    <input type="checkbox" name="boxedlayout" class="onoffswitch-checkbox" id="boxedlayout">
                                    <label class="onoffswitch-label" for="boxedlayout">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="title">皮肤选择</div>
                        <div class="setings-item default-skin nb">
                                <span class="skin-name ">
                         <a href="#" class="s-skin-0">
                             默认皮肤
                         </a>
                    </span>
                        </div>
                        <div class="setings-item blue-skin nb">
                                <span class="skin-name ">
                        <a href="#" class="s-skin-1">
                            蓝色主题
                        </a>
                    </span>
                        </div>
                        <div class="setings-item yellow-skin nb">
                                <span class="skin-name ">
                        <a href="#" class="s-skin-3">
                            黄色/紫色主题
                        </a>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--右侧边栏结束-->
    <!--mini聊天窗口开始-->
</div>
<script src="__JS__/jquery.min.js?v=2.1.4"></script>
<script src="__JS__/bootstrap.min.js?v=3.3.6"></script>
<script src="__JS__/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="__JS__/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="__JS__/plugins/layer/layer.js"></script>
<script src="__JS__/hplus.min.js?v=4.1.0"></script>
<script type="text/javascript" src="__JS__/contabs.min.js"></script>
<!--<script type="text/javascript" src="__JS__/contabs.js"></script>-->
<script src="__JS__/plugins/pace/pace.min.js"></script>

<!--<script>-->
    <!--$(document).on('click','#menu',function(){-->
    	<!--console.log(this);-->
    	<!--// this.addclass('active');-->
    <!--})-->
<!--</script>-->

<script>
	$(function () {
		$('#menu').metisMenu({
			toggle: false
		});
	});
</script>

</body>

</html>
<script>
    /**
     * 免责声明
     * @param id
     */
    function disclaWeb(id){
        layer.open({
            type: 2,
            title: false,
            shadeClose: false,
            shade: false,
            area: ['50%', '85%'],
            btn: ['关闭'],

            content: ["<?php echo url('index/disclaWeb'); ?>"], //iframe的url，no代表不显示滚动条
        });
    }

    /**
     * 个人信息
     * @param unkwon
     */
    function personWeb(){
        layer.open({
            type: 2,
            title: false,
            shadeClose: true,
            shade: false,
            area: ['50%', '85%'],
            btn: ['关闭'],
            content: ["<?php echo url('index/personWeb'); ?>"], //iframe的url，no代表不显示滚动条
        });
    }

    /**
     * 修改密码
     * @param unkwon
     */
    function forgetPass(){
        layer.open({
            type: 2,
            title: false,
            shadeClose: true,
            shade: false,
            area: ['50%', '85%'],
            btn: ['关闭'],
            content: ["<?php echo url('index/forgetPass'); ?>"], //iframe的url，no代表不显示滚动条
        });
    }

    /**
     * 账户充值
     * @param unkwon
     */
    function moneyWeb(){
        layer.open({
            type: 2,
            title: false,
            shadeClose: true,
            shade: false,
            area: ['50%', '85%'],
            btn: ['关闭'],
            content: ["<?php echo url('index/moneyWeb'); ?>"], //iframe的url，no代表不显示滚动条
        });
    }

    /**
     * 账户提现
     * @param unkwon
     */
    function forwardWeb(){
        layer.open({
            type: 2,
            title: false,
            shadeClose: true,
            shade: false,
            area: ['50%', '85%'],
            btn: ['关闭'],
            content: ["<?php echo url('index/forwardWeb'); ?>"], //iframe的url，no代表不显示滚动条
        });
    }

    /**
     * 我的余额
     * @param unkwon
     */
    function myBalance(){
        layer.open({
            type: 2,
            title: false,
            shadeClose: true,
            shade: false,
            area: ['50%', '85%'],
            btn: ['关闭'],
            content: ["<?php echo url('index/myBalance'); ?>"], //iframe的url，no代表不显示滚动条
        });
    }

    /**
     * 资产明细
     * @param unkwon
     */
    function assetDetail(){
        layer.open({
            type: 2,
            title: false,
            shadeClose: true,
            shade: false,
            area: ['50%', '85%'],
            btn: ['关闭'],
            content: ["<?php echo url('index/assetDetail'); ?>"], //iframe的url，no代表不显示滚动条
        });
    }

    /**
     * 支付密码
     * @param unkwon
     */
    function forgetPay(){
        layer.open({
            type: 2,
            title: false,
            shadeClose: true,
            shade: false,
            area: ['50%', '85%'],
            btn: ['关闭'],
            content: ["<?php echo url('index/forgetPay'); ?>"], //iframe的url，no代表不显示滚动条
        });
    }
</script>



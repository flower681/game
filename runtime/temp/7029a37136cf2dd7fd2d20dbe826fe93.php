<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"/www/wwwroot/47.244.98.211/public/../application/admin/view/index/index.html";i:1553423689;s:61:"/www/wwwroot/47.244.98.211/application/admin/view/header.html";i:1532410270;s:61:"/www/wwwroot/47.244.98.211/application/admin/view/footer.html";i:1532410270;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[title]</title>
    <link href="__STATIC__/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="__STATIC__/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="__STATIC__/admin/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="__STATIC__/admin/css/animate.min.css" rel="stylesheet">
    <link href="__STATIC__/admin/css/style.min.css?v=4.1.0" rel="stylesheet">
    <link href="__STATIC__/admin/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <script type="text/javascript" charset="utf-8" src="__STATIC__/kindeditor/kindeditor.js"></script>
	<script type="text/javascript" charset="utf-8" src="__STATIC__/kindeditor/lang/zh_CN.js"></script>
	<script src="__STATIC__/admin/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<style>
	.form-group{
	margin-right:20px;
	margin-top: 5px;"
	}
</style>
<body class="gray-bg">
<style type="text/css">
    .sm-st {
        background:#fff;
        padding:20px;
        -webkit-border-radius:3px;
        -moz-border-radius:3px;
        border-radius:3px;
        margin-bottom:20px;
        -webkit-box-shadow: 0 1px 0px rgba(0,0,0,0.05);
        box-shadow: 0 1px 0px rgba(0,0,0,0.05);
    }
    .sm-st-icon {
        width:60px;
        height:60px;
        display:inline-block;
        line-height:60px;
        text-align:center;
        font-size:30px;
        background:#eee;
        -webkit-border-radius:5px;
        -moz-border-radius:5px;
        border-radius:5px;
        float:left;
        margin-right:10px;
        color:#fff;
    }
    .sm-st-info {
        font-size:20px;
        margin:5px;
    }

    .st-red {
        background-color: #F05050;
    }
    .st-green {
        background-color: #27C24C;
    }
    .st-violet {
        background-color: #7266ba;
    }
    .st-blue {
        background-color: #23b7e5;
    }

</style>
<div class="wrapper wrapper-content animated fadeInRight">
    <!-- Panel Other -->
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>网站信息</h5>
            <div class="ibox-tools">
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>

        <div class="ibox-content">
            <div class="panel panel-default panel-intro">
                <div class="panel-body">
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="one">
                            <input type="hidden" id="firstLogin" value="<?php echo $data['status']; ?>">
                            <!--<div class="row">-->
                                <!--<div class="col-sm-2 col-xs-5">-->
                                    <!--<div class="sm-st clearfix">-->
                                        <!--<span class="sm-st-icon st-red"><i class="fa fa-users"></i></span>-->
                                        <!--<div class="sm-st-info">-->
                                            <!--<span><b><?php echo $data['user']; ?></b></span><br>-->
                                            <!--<span style="font-size: 15px"><?php echo $data['total']; ?></span>-->
                                            <!--&lt;!&ndash;总人数&ndash;&gt;-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                                <!--<div class="col-sm-2 col-xs-5">-->
                                    <!--<div class="sm-st clearfix">-->
                                        <!--<span class="sm-st-icon st-green"><i class="fa fa-pie-chart"></i></span>-->
                                        <!--<div class="sm-st-info">-->
                                            <!--<span><b><?php echo $data['stock_nums']; ?></b></span><br>-->
                                            <!--<span style="font-size: 15px"><?php echo $data['stock_num']; ?></span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                                <!--<div class="col-sm-2 col-xs-5">-->
                                    <!--<div class="sm-st clearfix">-->
                                        <!--<span class="sm-st-icon st-violet"><i class="fa fa-book"></i></span>-->
                                        <!--<div class="sm-st-info">-->
                                            <!--<span><b><?php echo $data['stock']; ?></b></span><br>-->
                                            <!--<span style="font-size: 15px"><?php echo $data['stocks']; ?></span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                                <!--<div class="col-sm-2 col-xs-5">-->
                                    <!--<div class="sm-st clearfix">-->
                                        <!--<span class="sm-st-icon st-blue"><i class="fa fa-shopping-bag"></i></span>-->
                                        <!--<div class="sm-st-info">-->
                                            <!--<span><b><?php echo $data['order']; ?></b></span><br>-->
                                            <!--<span style="font-size: 15px"><?php echo $data['trans']; ?></span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                                <!--<div class="col-sm-2 col-xs-5">-->
                                    <!--<div class="sm-st clearfix">-->
                                        <!--<span class="sm-st-icon st-red"><i class="fa fa-yelp"></i></span>-->
                                        <!--<div class="sm-st-info">-->
                                            <!--<span><b><?php echo $data['order_nums']; ?></b></span><br>-->
                                            <!--<span style="font-size: 15px"><?php echo $data['orders']; ?></span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                                <!--<div class="col-sm-2 col-xs-5">-->
                                    <!--<div class="sm-st clearfix">-->
                                        <!--<span class="sm-st-icon st-green"><i class="fa fa-cny"></i></span>-->
                                        <!--<div class="sm-st-info">-->
                                            <!--<span><b><?php echo $data['money']; ?></b></span><br>-->
                                            <!--<span style="font-size: 15px"><?php echo $data['assets']; ?></span>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="box box-danger">
                                        <div class="box-header">
                                            <h3 class="box-title" style="color: red">库存信息</h3>
                                        </div>
                                        <div class="example-wrap">
                                            <div class="example">
                                                <div class="bootstrap-table">
                                                    <div class="fixed-table-container"
                                                         style=" padding-bottom: 36px;">
                                                        <div class="fixed-table-body">
                                                            <table id="cusTable" data-height="700"
                                                                   class="table table-hover table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th tabindex="0" style="text-align: center">
                                                                        <div class="th-inner " style="color: red">库存数量</div>
                                                                    </th>
                                                                    <th tabindex="0" style="text-align: center">
                                                                        <div class="th-inner " style="color: red">库存价值</div>
                                                                    </th>
                                                                    <th tabindex="0" style="text-align: center">
                                                                        <div class="th-inner " style="color: red">订单数量</div>
                                                                    </th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                </tr>
                                                                    <tr data-index="0">
                                                                        <td style="text-align: center;color: red"><?php echo $data['stock_nums']; ?></td>
                                                                        <td style="text-align: center;color: red"><?php echo $data['stock']; ?></td>
                                                                        <td style="text-align: center;color: red"><?php echo $data['order_nums']; ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                      <!--
                                <div class="col-lg-6">
                                    <div class="box box-danger">
                                        <div class="box-header">
                                            <h3 class="box-title" style="color: red">资产信息</h3>
                                        </div>
                                        <div class="example-wrap">
                                            <div class="example">
                                                <div class="bootstrap-table">
                                                    <div class="fixed-table-container"
                                                         style=" padding-bottom: 36px;">
                                                        <div class="fixed-table-body">
                                                            <table id="cusTable" data-height="700"
                                                                   class="table table-hover table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th tabindex="0" style="text-align: center">
                                                                        <div class="th-inner " style="color: red"><?php echo $data['total']; ?></div>
                                                                    </th>
                                                                    <th tabindex="0" style="text-align: center">
                                                                        <div class="th-inner " style="color: red">出售总额</div>
                                                                    </th>
                                                                    <th tabindex="0" style="text-align: center">
                                                                        <div class="th-inner " style="color: red">冻结金额</div>
                                                                    </th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                </tr>
                                                                    <tr data-index="0">
                                                                        <td style="text-align: center;color: red"><?php echo $data['user']; ?></td>
                                                                        <td style="text-align: center;color: red"><?php echo $data['order']; ?></td>
                                                                        <td style="text-align: center;color: red"><?php echo $data['money']; ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
-->
                                <div class="col-lg-6">
                                    <div class="box box-danger">
                                        <div class="box-header">
                                            <h3 class="box-title">入库统计</h3>
                                        </div>
                                        <div class="example-wrap">
                                            <div class="example">
                                                <div class="bootstrap-table">
                                                    <div class="fixed-table-container"
                                                         style="height: 450px; padding-bottom: 36px;">
                                                        <div class="fixed-table-body">
                                                            <table id="cusTable" data-height="700"
                                                                   class="table table-hover table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th tabindex="0" style="text-align: center">
                                                                        <div class="th-inner ">入库时间</div>
                                                                    </th>
                                                                    <th tabindex="0" style="text-align: center">
                                                                        <div class="th-inner ">入库金额</div>
                                                                    </th>
                                                                    <th tabindex="0" style="text-align: center">
                                                                        <div class="th-inner ">入库次数</div>
                                                                    </th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php if(empty($data['notice']) || (($data['notice'] instanceof \think\Collection || $data['notice'] instanceof \think\Paginator ) && $data['notice']->isEmpty())): ?>
                                                                <tr align="center">
                                                                    <td colspan=8>暂时没有数据，请重新操作……</td>
                                                                </tr>
                                                                <?php endif; if(is_array($data['stock_info']) || $data['stock_info'] instanceof \think\Collection || $data['stock_info'] instanceof \think\Paginator): if( count($data['stock_info'])==0 ) : echo "" ;else: foreach($data['stock_info'] as $key=>$vo): ?>
                                                                    <tr data-index="0">
                                                                        <td style="text-align: center"><?php echo $vo['days']; ?></td>
                                                                        <td style="text-align: center"><?php echo $vo['day_sum']; ?></td>
                                                                        <td style="text-align: center"><?php echo $vo['day_count']; ?></td>
                                                                    </tr>
                                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                      <!--
                                <div class="col-lg-6">
                                    <div class="box box-danger">
                                        <div class="box-header">
                                            <h3 class="box-title">交易动态</h3>
                                        </div>
                                        <div class="example-wrap">
                                            <div class="example">
                                                <div class="bootstrap-table">
                                                    <div class="fixed-table-container"
                                                         style="height: 450px; padding-bottom: 36px;">
                                                        <div class="fixed-table-body">
                                                            <table id="cusTable" data-height="700"
                                                                   class="table table-hover table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th tabindex="0" style="text-align: center">
                                                                        <div class="th-inner ">交易用户</div>
                                                                    </th>
                                                                    <th tabindex="0" style="text-align: center">
                                                                        <div class="th-inner ">交易金额</div>
                                                                    </th>
                                                                    <th tabindex="0" style="text-align: center">
                                                                        <div class="th-inner ">交易时间</div>
                                                                    </th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php if(empty($data['notice']) || (($data['notice'] instanceof \think\Collection || $data['notice'] instanceof \think\Paginator ) && $data['notice']->isEmpty())): ?>
                                                                <tr align="center">
                                                                    <td colspan=8>暂时没有数据，请重新操作……</td>
                                                                </tr>
                                                                <?php endif; if(is_array($data['order_info']) || $data['order_info'] instanceof \think\Collection || $data['order_info'] instanceof \think\Paginator): if( count($data['order_info'])==0 ) : echo "" ;else: foreach($data['order_info'] as $key=>$vo): ?>
                                                                    <tr data-index="0">
                                                                        <td style="text-align: center"><?php echo $vo['sell_uid']; ?></td>
                                                                        <td style="text-align: center"><?php echo $vo['trans_total']; ?></td>
                                                                        <td style="text-align: center"><?php echo $vo['created_at']; ?></td>
                                                                    </tr>
                                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
-->
                                <div class="col-lg-6">
                                    <div class="box box-danger">
                                        <div class="box-header">
                                            <h3 class="box-title">最新公告</h3>
                                        </div>
                                        <div class="example-wrap">
                                            <div class="example">
                                                <div class="bootstrap-table">
                                                    <div class="fixed-table-container"
                                                         style="height: 450px; padding-bottom: 36px;">
                                                        <div class="fixed-table-body">
                                                            <table id="cusTable" data-height="700"
                                                                   class="table table-hover table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th tabindex="0" style="text-align: center">
                                                                        <div class="th-inner ">公告标题</div>
                                                                    </th>
                                                                    <th tabindex="0" style="text-align: center">
                                                                        <div class="th-inner ">发布时间</div>
                                                                    </th>
                                                                    <th tabindex="0" style="text-align: center">
                                                                        <div class="th-inner ">操作</div>
                                                                    </th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php if(empty($data['notice']) || (($data['notice'] instanceof \think\Collection || $data['notice'] instanceof \think\Paginator ) && $data['notice']->isEmpty())): ?>
                                                                <tr align="center">
                                                                    <td colspan=8>暂时没有数据，请重新操作……</td>
                                                                </tr>
                                                                <?php endif; if(is_array($data['notice']) || $data['notice'] instanceof \think\Collection || $data['notice'] instanceof \think\Paginator): if( count($data['notice'])==0 ) : echo "" ;else: foreach($data['notice'] as $key=>$vo): ?>
                                                                    <tr data-index="0">
                                                                        <td style="text-align: center"><?php echo $vo['ne_name']; ?></td>
                                                                        <td style="text-align: center"><?php echo $vo['created_at']; ?></td>
                                                                        <td style="text-align: center">
                                                                            <button class="btn btn-primary btn-sm ">
                                                                                <span style="color: white" onclick="noticeWeb(<?php echo $vo['ne_id']; ?>)">查看详情</span>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="box box-danger">
                                        <div class="box-header">
                                            <h3 class="box-title">使用帮助</h3>
                                        </div>
                                        <div class="example-wrap">
                                            <div class="example">
                                                <div class="bootstrap-table">
                                                    <div class="fixed-table-container"
                                                         style="height: 450px; padding-bottom: 36px;">
                                                        <div class="fixed-table-body">
                                                            <table data-height="700"
                                                                   class="table table-hover table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th tabindex="0" style="text-align: center">
                                                                        <div class="th-inner ">帮助标题</div>
                                                                    </th>
                                                                    <th tabindex="0" style="text-align: center">
                                                                        <div class="th-inner ">发布时间</div>
                                                                    </th>
                                                                    <th tabindex="0" style="text-align: center">
                                                                        <div class="th-inner ">操作</div>
                                                                    </th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php if(empty($data['help']) || (($data['help'] instanceof \think\Collection || $data['help'] instanceof \think\Paginator ) && $data['help']->isEmpty())): ?>
                                                                <tr align="center">
                                                                    <td colspan=8>暂时没有数据，请重新操作……</td>
                                                                </tr>
                                                                <?php endif; if(is_array($data['help']) || $data['help'] instanceof \think\Collection || $data['help'] instanceof \think\Paginator): if( count($data['help'])==0 ) : echo "" ;else: foreach($data['help'] as $key=>$vo): ?>
                                                                <tr data-index="0">
                                                                    <td style="text-align: center"><?php echo $vo['hp_name']; ?></td>
                                                                    <td style="text-align: center"><?php echo $vo['created_at']; ?></td>
                                                                    <td style="text-align: center">
                                                                        <button class="btn btn-primary btn-sm ">
                                                                            <span style="color: white" onclick="helpWeb(<?php echo $vo['hp_id']; ?>)">查看详情</span>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="__STATIC__/admin/js/jquery.min.js?v=2.1.4"></script>
<script src="__STATIC__/admin/js/bootstrap.min.js?v=3.3.6"></script>
<script src="__STATIC__/admin/js/content.min.js?v=1.0.0"></script>
<script src="__STATIC__/admin/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="__STATIC__/admin/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
<script src="__STATIC__/admin/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="__STATIC__/admin/js/plugins/suggest/bootstrap-suggest.min.js"></script>
<!--<script src="__STATIC__/admin/js/plugins/layer/laydate/laydate.js"></script>-->
<script src="__STATIC__/admin/js/plugins/sweetalert/sweetalert.min.js"></script>
<script src="__STATIC__/admin/js/plugins/layer/layer.js" ></script>
<link rel="stylesheet" href="__STATIC__/admin/js/plugins/zTree/zTreeStyle.css" type="text/css">
<script type="text/javascript" src="__STATIC__/admin/js/plugins/zTree/jquery.ztree.core-3.5.js"></script>
<script type="text/javascript" src="__STATIC__/admin/js/plugins/zTree/jquery.ztree.excheck-3.5.js"></script>
<script type="text/javascript" src="__STATIC__/admin/js/plugins/zTree/jquery.ztree.exedit-3.5.js"></script>
<!-- 查看图片 -->
<div id="lookPic" onclick="closePic()"  style="display:none">
	<div class="lookPic">
		<img id="picccc"  src="">
	</div>
</div>

<style>
#lookPic{
	position:absolute;
	left:0;
	top:0;
	z-index:100;
	height:100%;
	width:100%;
}
.lookPic{
     background:#fff;  
	 position:absolute;    
	 left:50%;    
	 top:50%;   
	 margin-left:-0px;   
	 margin-top:-0px;
}
</style>
<script>
	//查看图片
	function lookPic(pic){
		$('#lookPic').show();
		$('#picccc').attr('src',pic);
	}
	//关闭图片
	 function closePic(){
		 $('#lookPic').hide();
			$('#picccc').attr('src','');
	}
</script>
<!-- 查看图片结束 -->
<script>
    /**
     * 公告web页
     * @param id
     */
    function noticeWeb(id){
        layer.open({
            type: 2,
            title: false,
            shadeClose: true,
            shade: false,
            area: ['50%', '85%'],
            btn: ['关闭'],
            content: ['./noticeWeb?ne_id='+id], //iframe的url，no代表不显示滚动条
        });
    }

    /**
     * 帮助web页
     * @param id
     */
    function helpWeb(id){
        layer.open({
            type: 2,
            title: false,
            shadeClose: true,
            shade: false,
            area: ['50%', '85%'],
            btn: ['关闭'],
            content: ['./helpWeb?hp_id='+id], //iframe的url，no代表不显示滚动条
        });
    }

    //是否首次登陆
    // var status = $('#firstLogin').val();
    // if (status == 1){
    //     layer.open({
    //         type: 2,
    //         title: false,
    //         shadeClose: true,
    //         shade: false,
    //         area: ['50%', '85%'],
    //         btn: ['关闭'],
    //         content: ['./firstWeb'], //iframe的url，no代表不显示滚动条
    //         cancel: function(){
    //             //右上角关闭回调
    //             $.post("firstLogin",{},function(result){
    //                if (result.code == 1){
    //                    layer.msg(result.msg);
    //                }
    //             });
    //         }
    //     });
    // }
    layer.msg('欢迎登陆库存管理平台');
</script>
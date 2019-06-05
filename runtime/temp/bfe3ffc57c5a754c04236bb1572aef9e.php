<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"/www/wwwroot/www.daodao.cn.com/public/../application/admin/view/config/index.html";i:1532410270;s:65:"/www/wwwroot/www.daodao.cn.com/application/admin/view/header.html";i:1532410270;s:65:"/www/wwwroot/www.daodao.cn.com/application/admin/view/footer.html";i:1532410270;}*/ ?>
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
	<div class="wrapper wrapper-content animated fadeInRight">
		<div class="row">
			<div>
				<div class="ibox float-e-margins">
					<div class="ibox-title">
						<h5>系统设置</h5>
						<div class="ibox-tools">
							<a class="collapse-link">
								<i class="fa fa-chevron-up"></i>
							</a>
							<a class="dropdown-toggle" data-toggle="dropdown"
								href="form_basic.html#">
								<i class="fa fa-wrench"></i>
							</a>
							<a class="close-link">
								<i class="fa fa-times"></i>
							</a>
						</div>
					</div>
					<div class="ibox-content">
						<form class="form-horizontal m-t" action="<?php echo Url('Config/edit'); ?>"
							id="commentForm" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-3 control-label">平台手续费：</label>
								<div class="input-group col-sm-4">
									<input type="text" class="form-control" value="<?php echo $config['money']; ?>"
										   name="" placeholder="" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">提现手续费：</label>
								<div class="input-group col-sm-4">
									<input type="text" class="form-control" value="<?php echo $config['putfee']; ?>"
										   name="putfee" placeholder="" >
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">交易手续费：</label>
								<div class="input-group col-sm-4">
									<input type="text" class="form-control" value="<?php echo $config['transfee']; ?>"
										   name="transfee" placeholder="" >
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">联系 QQ：</label>
								<div class="input-group col-sm-4">
									<input type="text" class="form-control" value="<?php echo $config['qq']; ?>"
										   name="qq" placeholder="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">客服电话：</label>
								<div class="input-group col-sm-4">
									<input type="text" class="form-control" value="<?php echo $config['phone']; ?>"
										   name="phone" placeholder="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">银行卡号：</label>
								<div class="input-group col-sm-4">
									<input type="text" class="form-control" value="<?php echo $config['bankcard']; ?>"
										   name="bankcard" placeholder="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">上传支付：</label>
								<div class="input-group col-sm-4">
									<input type="file" class="form-control" value="<?php echo $config['picture']; ?>"
										   name="picture" placeholder="">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">支付图片：</label>
								<div class="input-group col-sm-4">
                                    <img src="<?php echo $config['picture']; ?>" alt="" width="400px">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">提现说明：</label>
								<div class="input-group col-sm-4">
									<textarea id="" name="desc"
											  class="form-control common-text"
											  style="width: 100%; height: 100px;"><?php echo $config['desc']; ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">免责声明：</label>
								<div class="input-group col-sm-4">
									<textarea id="content15" name="discla"
											  class="form-control common-text"
											  style="width: 100%; height: 100px;"><?php echo $config['discla']; ?></textarea>
								</div>
								<script>
                                    KindEditor
                                        .ready(function(K) {
                                            window.editor17 = K
                                                .create('#content15');
                                        });
                                    function checkForm() {
                                        editor17.sync();
                                    }
								</script>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">用户协议：</label>
								<div class="input-group col-sm-4">
									<textarea id="content16" name="protocol"
											  class="form-control common-text"
											  style="width: 100%; height: 100px;"><?php echo $config['protocol']; ?></textarea>
								</div>
								<script>
                                    KindEditor
                                        .ready(function(K) {
                                            window.editor18 = K
                                                .create('#content16');
                                        });
                                    function checkForm() {
                                        editor18.sync();
                                    }
								</script>
							</div>
							<div class="form-group">
								<div class="col-sm-4 col-sm-offset-4">
									<button class="btn btn-primary" type="submit">提交</button>
								</div>
							</div>
						</form>
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
</body>
</html>
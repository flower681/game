<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"/www/wwwroot/193.38.139.70/public/../application/admin/view/trans/buyTrans.html";i:1532424450;s:61:"/www/wwwroot/193.38.139.70/application/admin/view/header.html";i:1532410270;s:61:"/www/wwwroot/193.38.139.70/application/admin/view/footer.html";i:1532410270;}*/ ?>
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
                    <h5>购买订单</h5>
                </div>
                <div class="ibox-content">
                    <form  class="form-horizontal m-t" id="commentForm" method="post" onsubmit="return toVaild()">
                        <input type="hidden" name="trans_id" value="<?php echo $trans['trans_id']; ?>">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">游戏名称：</label>
                            <div class="input-group col-sm-6">
                                <input type="text" class="form-control" value="<?php echo $trans['game_id']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">面值名称：</label>
                            <div class="input-group col-sm-6">
                                <input type="text" class="form-control" value="<?php echo $trans['price_id']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">订单单价：</label>
                            <div class="input-group col-sm-6">
                                <input type="number" class="form-control" id="transPrice" value="<?php echo $trans['trans_price']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">订单数量：</label>
                            <div class="input-group col-sm-6">
                                <input type="number" class="form-control"  value="<?php echo $trans['trans_num']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">订单备注：</label>
                            <div class="input-group col-sm-6">
                                <textarea cols="45" rows="5" readonly><?php echo $trans['content']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">购买数量：</label>
                            <div class="input-group col-sm-6">
                                <input type="number" class="form-control" name="trans_num" min="1" id="transNum">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">二级密码：</label>
                            <div class="input-group col-sm-6">
                                <input type="password" class="form-control" name="pay_pass"   aria-required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">订单总价：</label>
                            <div class="input-group col-sm-6">
                                <input type="text" class="form-control" min="1" value="" id="transTotal" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-3">
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
<script>

    //计算总价
    $("#transNum").bind("input propertychange change",function(event){
        $("#transTotal").val($("#transNum").val() * $('#transPrice').val());
    });

    //表单提交
    function toVaild(){
        var jz;
        var url = "./buyTrans";
        $.ajax({
            type:"POST",
            url :url,
            data:{'data' : $('#commentForm').serialize()},// 你的formid
            async: false,
            beforeSend:function(){
                jz = layer.load(0, {shade: false}); //0代表加载的风格，支持0-2
            },
            error: function(request) {
                layer.close(jz);
                swal("网络错误!", "", "error");
            },
            success: function(data) {
                //关闭加载层
                layer.close(jz);
                if(data.code == 1){

                    swal({
                        title: data.msg,
                        // text: data.msg,
                        type: "success",
                        showCancelButton: false,
                        // confirmButtonColor: "rgb(174, 222, 244)",
                        // cancelButtonText: "取消",
                        confirmButtonText: "确定！",
                        closeOnConfirm: false
                    }, function () {
                        location.reload();
                    });
                }else{
                    swal({
                        title: data.msg,
                        // text: data.msg,
                        type: "error",
                        showCancelButton: false,
                        // confirmButtonColor: "rgb(174, 222, 244)",
                        // cancelButtonText: "取消",
                        confirmButtonText: "确定！",
                        closeOnConfirm: false
                    });
                }

            }
        });

        return false;
    }
</script>
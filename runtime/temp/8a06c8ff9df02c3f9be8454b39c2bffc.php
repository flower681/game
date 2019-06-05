<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:87:"E:\wamp\phpStudy\PHPTutorial\WWW\game\public/../application/admin\view\stock\daoru.html";i:1555752204;s:72:"E:\wamp\phpStudy\PHPTutorial\WWW\game\application\admin\view\header.html";i:1532410270;s:72:"E:\wamp\phpStudy\PHPTutorial\WWW\game\application\admin\view\footer.html";i:1532410270;}*/ ?>
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
                    <h5>导入库存</h5>
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal m-t"
                          id="commentForm" method="post" enctype="multipart/form-data" onsubmit="return toVaild()">
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">库存文件：</label>
                            <div class="input-group col-sm-4">
                                <input type="file" class="form-control" value=""
                                       name="stock" placeholder="" id="stock">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-4">
                                <button class="btn btn-primary" type="submit">提交</button> &nbsp;<button class="btn btn-primary" onclick="location.href='./index'" type="button">返回列表</button>
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
<script type="text/javascript">
    user_id = '';
    /**
     * 获取用户数据
     */
    function userSelect() {
        var input_select = $("#user").val();
        var option_length = $("option").length;
        var option_id = '';
        for (var i = 0; i < option_length; i++) {
            var option_value = $("option").eq(i).val();
            if (input_select == option_value) {
                option_id = $("option").eq(i).attr('data-id');
                break;
            }
        }

        user_id  = option_id;
    }

    //表单提交
    function toVaild(){
        var jz;
        var url = "./daoru";
        var uploadFile = new FormData($("#commentForm")[0]);
        uploadFile.append('user_id',user_id);
        $.ajax({
            url   : url,
            type  : 'POST',
            data  : uploadFile,
            async : false,
            cache : false,
            contentType : false, //不设置内容类型
            processData : false, //不处理数据
            beforeSend  : function(){
                jz = layer.load(0, {shade : false}); //0代表加载的风格，支持0-2
            },
            error: function(request) {
                layer.close(jz);
                swal("网络错误!", "", "error");
            },
            success: function(res) {
                //关闭加载层
                layer.close(jz);
                if(res.code == 1){
                    swal({
                        title: res.msg,
                        type: "success",
                        showCancelButton: false,
                        confirmButtonText: "确定！",
                        closeOnConfirm: false
                    }, function () {
                        location.reload();
                    });
                }else{
                    swal({
                        title: res.msg,
                        type: "error",
                        showCancelButton: false,
                        confirmButtonText: "确定！",
                        closeOnConfirm: false
                    });
                }

            }
        });
        return false;
    }
</script>
</html>
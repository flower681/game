<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:84:"/www/wwwroot/www.daodao.cn.com/public/../application/admin/view/index/personWeb.html";i:1532424450;s:65:"/www/wwwroot/www.daodao.cn.com/application/admin/view/header.html";i:1532410270;s:65:"/www/wwwroot/www.daodao.cn.com/application/admin/view/footer.html";i:1532410270;}*/ ?>
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
                    <h5>个人信息</h5>
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal m-t" id="commentForm" method="post" onsubmit="return savePerson()">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">个人昵称：</label>
                            <div class="input-group col-sm-4">
                                <input id="username" type="text" class="form-control" name="username" required="" aria-required="true" value="<?php echo $user['username']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">真实姓名：</label>
                            <div class="input-group col-sm-4">
                                <input id="really_name" type="text" class="form-control" name="really_name" required="" aria-required="true" value="<?php echo $user['really_name']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">身份证号：</label>
                            <div class="input-group col-sm-4">
                                <input id="idcard" type="text" class="form-control" name="idcard" required="" aria-required="true" value="<?php echo $user['idcard']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">出生日期：</label>
                            <div class="input-group col-sm-4">
                                <input  type="date" class="form-control" name="birth_time"  aria-required="true" value="<?php echo $user['birth_time']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">手机号码：</label>
                            <div class="input-group col-sm-4">
                                <input  type="tel" class="form-control" name="phone"  aria-required="true"  value="<?php echo $user['phone']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">用户 QQ：</label>
                            <div class="input-group col-sm-4">
                                <input type="text" class="form-control" name="qq"  aria-required="true"  value="<?php echo $user['qq']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">用户邮箱：</label>
                            <div class="input-group col-sm-4">
                                <input  type="email" class="form-control" name="email"  aria-required="true"  value="<?php echo $user['email']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">是否启动安全手机白名单：</label>
                            <div class="input-group col-sm-4">
                                <select class="form-control" name="save_device" required="" aria-required="true" id="saveDevice">
                                    <option value="0" <?php if($user['save_device']==0) {echo "selected";}?>>关闭</option>
                                    <option value="1" <?php if($user['save_device']==1) {echo "selected";}?>>开启</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">出库跳过使用过的凭证：</label>
                            <div class="input-group col-sm-4">
                                <select class="form-control" name="pass_store" required="" aria-required="true">
                                    <option value="0" <?php if($user['pass_store']==0) {echo "selected";}?>>关闭</option>
                                    <option value="1" <?php if($user['pass_store']==1) {echo "selected";}?>>开启</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-3">
                                <input type="button" value="提交" class="btn btn-primary" id="postform"/>
                                <!--<button class="btn btn-primary" type="submit">提交</button>-->
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
<script type="text/javascript">

    //表单提交
    $("#postform").click(function(event){
        savePerson();
    });

    //保存信息
    function savePerson(){
        layer.prompt({
            title   : '请输入二级密码',
            formType: 1,
            closeBtn: 0,
            btn     : ['确定'],
            yes     :function (index,layero) {
                layer.close(index);
                var jz;
                var url = "./personSave";
                $.ajax({
                    type:"POST",
                    url:url,
                    data:{'data' : $('#commentForm').serialize(),'pass': layero.find(".layui-layer-input").val(),'type': 1 },// 你的formid
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
        });
    }
</script>
</body>
</html>
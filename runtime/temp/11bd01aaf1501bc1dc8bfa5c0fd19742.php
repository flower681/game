<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"/www/wwwroot/5.181.6.102/public/../application/admin/view/itemize/itemizeAdd.html";i:1553854216;s:59:"/www/wwwroot/5.181.6.102/application/admin/view/header.html";i:1532410270;s:59:"/www/wwwroot/5.181.6.102/application/admin/view/footer.html";i:1532410270;}*/ ?>
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
                    <h5>添加面值(保存提示：以下第一条数据是以所属游戏下-面值名称，面值价格，面值标识为一条数据)</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal m-t" id="commentForm" method="post" onsubmit="return toVaild()">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">所属游戏：</label>
                         
                            <div class="input-group col-sm-4">
                              <input type="text" id="input" list="gamesId" name="gs_id" class="  form-control "  style="width: 150px;" onchange="inputSelect()" />
                              <datalist id="gamesId">
								<?php if(is_array($games) || $games instanceof \think\Collection || $games instanceof \think\Paginator): if( count($games)==0 ) : echo "" ;else: foreach($games as $key=>$vo): ?>
								<option value="<?php echo $vo['gs_name']; ?>" data-id="<?php echo $vo['gs_id']; ?>"></option>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</datalist>
                                <!--<select class="form-control" name="gs_id" required="" aria-required="true">
                                    <option value="0">请选择</option>
                                    <?php if(!empty($games)): if(is_array($games) || $games instanceof \think\Collection || $games instanceof \think\Paginator): if( count($games)==0 ) : echo "" ;else: foreach($games as $key=>$vo): ?>
                                    <option value="<?php echo $vo['gs_id']; ?>"><?php echo $vo['gs_name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                </select>-->
                            </div>
                          
                      
                          
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">面值名称：</label>
                            <div class="input-group col-sm-4">
                                <input type="text" class="form-control" name="gold" required="" aria-required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">面值价格：</label>
                            <div class="input-group col-sm-4">
                                <input type="number" class="form-control" name="money" required="" aria-required="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">面值标识：</label>
                            <div class="input-group col-sm-4">
                                <input type="text" class="form-control" name="title" required="" aria-required="true">
                            </div>
                        </div>
                     
                        <div class="form-group">
                            <label class="col-sm-3 control-label">是否启用：</label>
                            <div class="input-group col-sm-4">
                                <?php if(is_array($status) || $status instanceof \think\Collection || $status instanceof \think\Paginator): if( count($status)==0 ) : echo "" ;else: foreach($status as $key=>$vo): ?>
                                <div class="radio i-checks col-sm-4">
                                    <label>
                                        <input type="radio" value="<?php echo $key; ?>" <?php if($key == 1): ?>checked<?php endif; ?> name="status"> <i></i> <?php echo $vo; ?></label>
                                </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
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
<script type="text/javascript">

    function inputSelect() {
        var input_select = $("#input").val();
        var option_length = $("option").length;
        var option_id = '';
        for (var i = 0; i < option_length; i++) {
            var option_value = $("option").eq(i).val();
            if (input_select == option_value) {
                option_id = $("option").eq(i).attr('data-id');
                break;
            }
        }

        games_id  = option_id;
    }
    //表单提交
    function toVaild(){
        var jz;
        var url = "./itemizeAdd";
        $.ajax({
            type:"POST",
            url:url,
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
</body>
</html>
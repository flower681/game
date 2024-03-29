<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"/www/wwwroot/www.daodao.cn.com/public/../application/admin/view/data/index.html";i:1532410270;s:65:"/www/wwwroot/www.daodao.cn.com/application/admin/view/header.html";i:1532410270;s:65:"/www/wwwroot/www.daodao.cn.com/application/admin/view/footer.html";i:1532410270;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>数据库备份</title>
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
    <!-- Panel Other -->
    <div class="ibox float-e-margins">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>数据表列表</h5>
            </div>
            <div class="ibox-content">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>表名</th>
                        <th>记录数</th>
                        <th>上次备份时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty($tables)): if(is_array($tables) || $tables instanceof \think\Collection || $tables instanceof \think\Paginator): if( count($tables)==0 ) : echo "" ;else: foreach($tables as $key=>$vo): ?>
                        <tr>
                            <td><?php echo $vo['Tables_in_czpt']; ?></td>
                            <td><?php echo $vo['alls']; ?></td>
                            <td><?php echo $vo['ctime']; ?></td>
                            <td><?php echo $vo['operate']; ?></td>
                        </tr>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<!-- End Panel Other -->
</div>
<!-- 角色分配 -->
<div class="col-sm-12" style="display: none" id="wait">
    <div class="ibox ">
        <div class="ibox-content">
            <div class="spiner-example">
                <div class="sk-spinner sk-spinner-three-bounce">
                    <div class="sk-bounce1"></div>
                    <div class="sk-bounce2"></div>
                    <div class="sk-bounce3"></div>
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

    function importData(table, all){
        index = layer.open({
            type: 1,
            area:'400px',
            title:'正在操作',
            skin: 'layui-layer-demo', //加上边框
            content: $('#wait')
        });
        $.getJSON('./importData', {'table' : table}, function(res){
            if (res.code == 1){
                layer.close(index);
                layer.alert(res.msg, {icon: 1}, function(){
                    location.reload();
                });
            } else{
                layer.close(index);
                layer.alert(res.msg, {icon: 2}, function(){
                    location.reload();
                });
            }

        })
    }

    function backData(table){
        index = layer.open({
            type: 1,
            area:'400px',
            title:'正在操作',
            skin: 'layui-layer-demo', //加上边框
            content: $('#wait')
        });
        $.getJSON('./backData', {'table' : table}, function(res){
            layer.close(index);
            if(res.code == 1){
                layer.alert('还原成功！', {icon: 1}, function(){
                    location.reload();
                });
            }else{
                layer.alert(res.msg, {icon: 2});
            }
        })
    }
</script>
</body>
</html>
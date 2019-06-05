<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"/www/wwwroot/5.181.6.102/public/../application/admin/view/phone/index.html";i:1532424450;s:59:"/www/wwwroot/5.181.6.102/application/admin/view/header.html";i:1532410270;s:59:"/www/wwwroot/5.181.6.102/application/admin/view/footer.html";i:1532410270;}*/ ?>
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
	<!-- Panel Other -->
	<div class="ibox float-e-margins">
		<div class="ibox-title">
			<h5>设备列表</h5>
		</div>
		<div class="ibox-content">

			<!--搜索框开始-->
			<form id='commentForm' role="form"  class="form-inline">
				<div class="content clearfix m-b">
					<!--搜索框开始-->
					<div class="form-group ">
						<label>登录令牌：</label>
						<input size="10" type="text" class="  form-control " id="phoneName" style="width: 150px;" />
					</div>
					<div class="form-group ">
						<label>用户昵称：</label>
						<input size="10" type="text" class="  form-control " id="userName" style="width: 150px;" />
					</div>
					<div class="form-group ">
						<label>开始日期：</label>
						<input size="10" type="date"  class=" form-control " id="startTime" style="width: 150px;" />
					</div>
					<div class="form-group ">
						<label>结束日期：</label>
						<input size="10" type="date"  class=" form-control " id="endTime" style="width: 150px;" />
					</div>
					<div class="form-group">
						<input type="button" value="搜索" class="btn btn-primary" id="search">
					</div>
				</div>
			</form>
			<!--搜索框结束-->
			<div class="hr-line-dashed"></div>
			<div class="example-wrap">
				<div class="example">
					<table id="cusTable" data-height="700">
						<thead>
						<th data-field="id">设备ID</th>
						<th data-field="user_name">所属用户</th>
						<th data-field="token">登录令牌</th>
						<th data-field="ip">登录IP</th>
						<th data-field="client">登录设备</th>
						<th data-field="status">设备（启用/禁用）</th>
						<th data-field="create_time">登陆时间</th>
						<th data-field="operate">操作</th>
						</thead>
					</table>
				</div>
			</div>
			<!-- End Example Pagination -->
		</div>
	</div>
</div>
<!-- End Panel Other -->
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
    function initTable() {
        //先销毁表格
        $('#cusTable').bootstrapTable('destroy');
        //初始化表格,动态从服务器加载数据
        $("#cusTable").bootstrapTable({
            method: "get",  //使用get请求到服务器获取数据
            url: "./index", //获取数据的地址
            striped: true,  //表格显示条纹
            pagination: true, //启动分页
            pageSize: 10,  //每页显示的记录数
            pageNumber:1, //当前第几页
            // pageList: [5, 10, 15, 20, 25],  //记录数可选列表
            sidePagination: "server", //表示服务端请求
            //设置为undefined可以获取pageNumber，pageSize，searchText，sortName，sortOrder
            //设置为limit可以获取limit, offset, search, sort, order
            queryParamsType : "undefined",
            queryParams: function queryParams(params) {   //设置查询参数
                var param = {
                    pageNumber  : params.pageNumber,
                    pageSize    : params.pageSize,
                    phoneName   : $('#phoneName').val(),
                    userName    : $("#userName").val(),
                    phoneType   : $("#phoneType").val(),
                    startTime   : $('#startTime').val(),
                    endTime     : $('#endTime').val(),

                };
                return param;
            },
            onLoadSuccess: function(data){  //加载成功时执行
                layer.msg("加载成功", {time : 1000});
            },
            onLoadError: function(data){  //加载失败时执行
                layer.msg("加载数据失败");
            }
        });
    }

    $(document).ready(function () {
        //调用函数，初始化表格
        initTable();

        //当点击查询按钮的时候执行
        $("#search").bind("click", initTable);
    });

    /**
	 * 设备（启用/禁用）
     * @param id
     * @param status
     */
    function saveToken(id){
        layer.confirm('确认禁用此Token?', {icon: 3, title:'提示'}, function(index){
            //do something
            twoPass(id);
            layer.close(index);
        })
    }

    //二级密码
    function twoPass(id){
        layer.prompt({
            title   : '请输入二级密码',
            formType: 1,
            closeBtn: 0,
            btn     : ['确定'],
            yes     :function (index,layero) {
                layer.close(index);
                var jz;
                var url = "./saveToken";
                $.ajax({
                    type:"POST",
                    url:url,
                    data:{'id' : id ,'pass': layero.find(".layui-layer-input").val()},// 你的formid
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
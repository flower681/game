<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"/www/wwwroot/193.38.139.70/public/../application/admin/view/notice/index.html";i:1532424450;s:61:"/www/wwwroot/193.38.139.70/application/admin/view/header.html";i:1532410270;s:61:"/www/wwwroot/193.38.139.70/application/admin/view/footer.html";i:1532410270;}*/ ?>
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
			<h5>公告列表</h5>
		</div>
		<div class="ibox-content">
			<div class="form-group clearfix col-sm-1">
				<a href="./noticeAdd"><button class="btn btn-outline btn-primary" type="button">添加公告</button></a>
			</div>
			<!--搜索框开始-->
			<form id='commentForm' role="form"  class="form-inline">
				<div class="content clearfix m-b">
					<!--搜索框开始-->
					<div class="form-group ">
						<label>公告标题：</label>
						<input size="10" type="text" class="  form-control " id="noticeName">
					</div>
					<div class="form-group ">
						<label>开始日期：</label>
						<input size="10" type="date"  class=" form-control " id="startTime"/>
					</div>
					<div class="form-group ">
						<label>结束日期：</label>
						<input size="10" type="date"  class=" form-control " id="endTime"/>
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
						<th data-field="ne_id">公告ID</th>
						<th data-field="ne_name">公告标题</th>
						<th data-field="ne_status">公告状态</th>
						<th data-field="created_at">发布时间</th>
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
                    noticeName  : $('#noticeName').val(),
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
	 * 公告删除
     * @param id
     */
    function noticeDel(id){
        layer.confirm('确认删除此公告?', {icon: 3, title:'提示'}, function(index){
            //do something
            $.getJSON('./noticeDel', {'ne_id' : id}, function(res){
                if(res.code == 1){
                    layer.alert(res.msg, {icon: 1}, function(){
                        initTable();
                    });
                }else{
                    layer.alert(res.msg);
                }
            });
            layer.close(index);
        })
    }

</script>
</body>
</html>
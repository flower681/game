<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:91:"E:\wamp\phpStudy\PHPTutorial\WWW\game\public/../application/admin\view\stock\stockLog2.html";i:1556681092;s:72:"E:\wamp\phpStudy\PHPTutorial\WWW\game\application\admin\view\header.html";i:1532410270;s:72:"E:\wamp\phpStudy\PHPTutorial\WWW\game\application\admin\view\footer.html";i:1532410270;}*/ ?>
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
			<h5>库存日志</h5>
		</div>
		<div class="ibox-content">
			<!--搜索框开始-->
			<form id='commentForm' role="form"  class="form-inline">
				<div class="content clearfix m-b" style="line-height: 50px;">
					<!--搜索框开始-->
					<div class="form-group ">
						<label>所属用户：</label>
						<input size="10" type="text" class="  form-control " id="userName" style="width: 150px;">
					</div>
					<div class="form-group ">
						<label>开始日期：</label>
						<input size="10" type="date"  class=" form-control " id="startTime" style="width: 150px;"/>
					</div>
					<div class="form-group ">
						<label>结束日期：</label>
						<input size="10" type="date"  class=" form-control " id="endTime" style="width: 150px;"/>
					</div>
					<div class="form-group">
						<input type="button" value="搜索" class="btn btn-primary" id="search">
					</div>
					<div class="form-group">
						<input type="button" value="刷新" class="btn btn-primary" onclick="load()">
					</div>
                  	<div class="form-group">
						<input type="button" value="导出" class="btn btn-primary" onclick="exportstocklog2()">
					</div>
				</div>
			</form>
			<!--搜索框结束-->
			<div class="hr-line-dashed"></div>
			<div class="example-wrap">
				<div class="example">
					<table id="cusTable" data-height="700">
						<thead>
						<th data-field="id">#</th>
						<th data-field="user_id">用户</th>
                        <th data-field="gs_name">游戏名字</th>
                        <th data-field="gold">面额</th> 
                        <th data-field="money">价格</th>
                        <th data-field="create_time">入库时间</th>
						<!--<th data-field="store_id">库存名称</th>-->
						<th data-field="desc">操作备注</th>
						<th data-field="create_time">操作时间</th>
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
            url: "./stockLog2", //获取数据的地址
            striped: true,  //表格显示条纹
            pagination: true, //启动分页
            pageSize: 16,  //每页显示的记录数
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
                    userName    : $('#userName').val(),
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
	 * 刷新库存
     * @param id
     */
    function load(){
        location.reload();
    }
  	var urlEncode = function(param, key, encode) {
        if (param==null) return '';
        var paramStr = '';
        var t = typeof (param);
        if (t == 'string' || t == 'number' || t == 'boolean') {
            paramStr += '&' + key + '='  + ((encode==null||encode) ? encodeURIComponent(param) : param); 
        } else {
            for (var i in param) {
                var k = key == null ? i : key + (param instanceof Array ? '[' + i + ']' : '.' + i)
                paramStr += urlEncode(param[i], k, encode)
            }
        }
        return paramStr;
    }
  	//导出个人库存
    function exportstocklog2() {
        var param = {
            userName    : $('#userName').val(),
            startTime   : $('#startTime').val(),
            endTime     : $('#endTime').val(),
        };

        layer.confirm('确定要导出嘛?', {icon: 3, title:'提示'}, function(index){
            //do something
            /*$.post('./exportStock', {'data' : param}, function(res){
                alert('正在导出');
            });*/
          	location.href=("./exportstocklog2?"+urlEncode(param));
            layer.close(index);
        })


    }
</script>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"/www/wwwroot/193.38.139.70/public/../application/admin/view/trans/orderList.html";i:1532424450;s:61:"/www/wwwroot/193.38.139.70/application/admin/view/header.html";i:1532410270;s:61:"/www/wwwroot/193.38.139.70/application/admin/view/footer.html";i:1532410270;}*/ ?>
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
			<h5>订单列表</h5>
		</div>
		<div class="ibox-content">
			<!--搜索框开始-->
			<form id='commentForm' role="form"  class="form-inline">
				<div class="content clearfix m-b" style="line-height: 50px;">
					<!--搜索框开始-->
					<div class="form-group ">
						<label>订单单号：</label>
						<input size="10" type="text" class="  form-control " id="orderId">
					</div>
					<div class="form-group ">
						<label>买家用户：</label>
						<input size="10" type="text" class="  form-control " id="buyName">
					</div>
					<div class="form-group ">
						<label>卖家用户：</label>
						<input size="10" type="text" class="  form-control " id="sellName">
					</div>
					<div class="form-group ">
						<label>选择游戏：</label>
						<div class="input-group col-sm-5">
							<input type="text" id="input" list="gamesId"  class="  form-control "  style="width: 150px;" onchange="inputSelect()" />
							<datalist id="gamesId">
								<?php if(is_array($games) || $games instanceof \think\Collection || $games instanceof \think\Paginator): if( count($games)==0 ) : echo "" ;else: foreach($games as $key=>$vo): ?>
								<option value="<?php echo $vo['gs_name']; ?>" data-id="<?php echo $vo['gs_id']; ?>"></option>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</datalist>
						</div>
					</div>
					<div class="form-group ">
						<label>选择面值：</label>
						<div class="input-group col-sm-5">
							<select class="form-control" id="itemizeId" style="width: 120px">
								<option class='itemize' value="0">请选择</option>
							</select>
						</div>
					</div>
					<div class="form-group ">
						<label>游戏名称：</label>
						<input size="10" type="text" class="  form-control " id="gamesName">
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
					<div class="form-group">
						<input type="button" value="刷新" class="btn btn-primary" onclick="load()">
					</div>
				</div>
			</form>
			<!--搜索框结束-->
			<div class="hr-line-dashed"></div>
			<div class="example-wrap">
				<div class="example">
					<table id="cusTable" data-height="700">
						<thead>
						<th data-field="trans_id">订单ID</th>
						<th data-field="order_id">订单单号</th>
						<th data-field="buy_uid">买家用户</th>
						<th data-field="sell_uid">卖家用户</th>
						<th data-field="game_id">游戏名称</th>
						<th data-field="price_id">面值名称</th>
						<th data-field="trans_num">交易数量</th>
						<th data-field="trans_price">订单单价</th>
						<th data-field="trans_total">订单总价</th>
						<th data-field="created_at">购买时间</th>
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
    games_id = '';
    function initTable() {
        //先销毁表格
        $('#cusTable').bootstrapTable('destroy');
        //初始化表格,动态从服务器加载数据
        $("#cusTable").bootstrapTable({
            method: "get",  //使用get请求到服务器获取数据
            url: "./orderList", //获取数据的地址
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
                    buyName     : $('#buyName').val(),
                    sellName    : $('#sellName').val(),
                    orderId     : $("#orderId").val(),
                    gamesName   : $("#gamesName").val(),
                    itemizeId   : $("#itemizeName").val(),
                    gamesId 	: games_id,
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
     * 获取数据
     */
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

        //先清空
        $("#itemizeId").find('.itemize').remove();
        var url = "<?php echo url('stock/itemizeList'); ?>";
        //发送请求处理 处理数据
        $.post(url,{"id" : option_id},function(msg){
            if(msg.code == 1){
                var itemize = '<option class="itemize" value="0">请选择</option>';
                $.each(msg.data, function (key, value){
                    itemize += '<option class="itemize" value="'+value.id+'">'+value.gold+'</option>';
                });
                $("#itemizeId").append(itemize);
            }
        })
    }

    //刷新订单
    function load(){
        location.reload();
    }
</script>
</body>
</html>
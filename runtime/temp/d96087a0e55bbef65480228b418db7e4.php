<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"/www/wwwroot/5.181.6.102/public/../application/admin/view/user/index.html";i:1555171643;s:59:"/www/wwwroot/5.181.6.102/application/admin/view/header.html";i:1532410270;s:59:"/www/wwwroot/5.181.6.102/application/admin/view/footer.html";i:1532410270;}*/ ?>
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
<style>
    .ban {
        background-color: #D8D8DB;
    }
    .ban_class{
        margin-right:20px; align:center; display: inline-block; width: 130px;  padding: 5px 10px; border-radius: 5px;
    }
    .free {
        background-color: #F3F3F4;
    }
    .form-group{
        margin-right: 10px;
    }
</style>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <!-- Panel Other -->
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>用户列表</h5>
        </div>
        <div class="ibox-content">
            <div class="form-group clearfix col-sm-1">
                <a href="./userAdd"><button class="btn btn-outline btn-primary" type="button">添加用户</button></a>
            </div>
            <div class="form-group clearfix col-sm-1" style="display:none;">
                <a href="./userExcel"><button class="btn btn-outline btn-primary" type="button">导出Excel</button></a>
            </div>
          <div style="clear:both; width:0; height:0; overflow:hidden;"></div>
            <!--搜索框开始-->
            <form id='commentForm' role="form"  class="form-inline" style="display:none;">
                <div class="content clearfix m-b">
                    <!--搜索框开始-->
                    <div class="form-group">
                        <label>状态：</label>
                        <select class="form-control" id="status" name="status" required="" aria-required="true" style="width: 109px;">
                            <option value="enabled">启用</option>
                            <option value="disabled">禁用</option>
                            <option value="all">全部</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>用户昵称：</label>
                        <input size="8" type="text" class="form-control " name="username" id="username">
                    </div>
                    <div class="form-group ">
                        <label>手机号码：</label>
                        <input size="10" type="text" class="  form-control " name="phone" id="phone">
                    </div>
                    <div class="form-group ">
                        <label>开始日期：</label>
                        <input size="10" type="date"  class=" form-control "  name="start_time" id="startTime"/>
                    </div>
                    <div class="form-group ">
                        <label>结束日期：</label>
                        <input size="10" type="date"  class=" form-control "  name="end_time" id="endTime"/>
                    </div>
                    <div class="form-group">
                        <input type="button" value="搜索" class="btn btn-primary" id="search">
                    </div>
                </div>
            </form>
            <!--搜索框结束-->
            <div class="hr-line-dashed"></div>
            <div class="example-wrap" style="margin-bottom: 30px;">
                <div class="fixed-table-header" style="margin-right: 0px; margin-bottom: 30px; height: 50px;">
                    <caption>
                        <span class="free ban_class">会员总数：<span id="total"></span></span>
                        <span class="ban ban_class">可用会员：<span id="useable"></span></span>
                        <span class="free ban_class">冻结会员：<span id="frozen"></span></span>
                    </caption>
                </div>
                <div class="example">
						<table id="cusTable" data-height="700">
							<thead>
								<th data-field="id">用户ID</th>
								<th data-field="username">用户昵称</th>
								<!--th data-field="phone">手机号码</th>
								<th data-field="really_name">真实姓名</th>
								<th data-field="idcard">身份证号</th-->
								<th data-field="rolename">所属团队</th>
								<th data-field="loginnum">登录次数</th>
								<!--th data-field="money">用户资产</th>
								<th data-field="fro_money">冻结资产</th-->
								<th data-field="last_login_ip">上次登录ip</th>
								<th data-field="last_login_time">上次登录时间</th>
								<th data-field="end_time">到期时间</th>
								<th data-field="status">状态</th>
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
                    userName    :$('#username').val(),
                    phone       :$('#phone').val(),
                    startTime   :$('#startTime').val(),
                    endTime     :$('#endTime').val(),
                    status      :$('#status').val(),
                };
                return param;
            },
            onLoadSuccess: function(data){  //加载成功时执行
                $('#total').html(data.mem_num);
                $('#useable').html(data.for_num);
                $('#frozen').html(data.thr_num);
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

  	function del(id){
        layer.confirm('确认删除此条记录?', {icon: 3, title:'提示'}, function(index){
            //do something
            $.post('./delopt', {'id' : id}, function(res){
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
  
    function userDel(id)
    {
        layer.confirm('确认禁用此管理员?', {icon: 3, title:'提示'}, function(index){
            //do something
            $.getJSON('./userDel', {'id' : id}, function(res){
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

    function userAct(id)
    {
        layer.confirm('确认启用此管理员?', {icon: 3, title:'提示'}, function(index){
            //do something
            $.getJSON('./userAct', {'id' : id}, function(res){
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
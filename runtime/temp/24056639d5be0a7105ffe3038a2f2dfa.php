<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:92:"E:\wamp\phpStudy\PHPTutorial\WWW\game\public/../application/admin\view\index\privateMsg.html";i:1560348288;}*/ ?>
<html><head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>聊天</title>
	<link href="/static/Web/css/bootstrap.min.css" rel="stylesheet">
	<link href="/static/Web/css/jquery-sinaEmotion-2.1.0.min.css" rel="stylesheet">
	<link href="/static/Web/css/style.css" rel="stylesheet">
	
	<script type="text/javascript" src="/static/Web/js/swfobject.js"></script>
	<script type="text/javascript" src="/static/Web/js/web_socket.js"></script>
	<script type="text/javascript" src="/static/Web/js/jquery.min.js"></script>
	<script type="text/javascript" src="/static/Web/js/jquery-sinaEmotion-2.1.0.min.js"></script>
	<script charset="utf-8" src="/static/kindeditor/kindeditor.js"></script>
	<script charset="utf-8" src="/static/kindeditor/lang/zh_CN.js"></script>
	<!--<script charset="utf-8" src="/static/kindeditor/plugins/emoticons/emoticons.js"></script>-->
	<!-- 引入kindeditor编辑器的css -->
	<link rel="stylesheet" type="text/css" href="/static/kindeditor/themes/default/default.css">
	<link rel="stylesheet" type="text/css" href="/static/kindeditor/themes/simple/simple.css">
	
	
	
	<script type="text/javascript">
		

		 $(function(){

		 	//展示数据
		 	// $("#client_list").change(function(){
		 	// 	select_client_id = $("#client_list option:selected").attr("value");
		 	// 	from_client_id = $("#client_id").val();
		 	// 	username = $('#hidden').val();
		 	// 	time = $('#time').val();
		 	// 	$("#dialog").html('');
		 	//
		 	// });

			 //获取用户列表用户

			 flush_client_list();

		 });

		 function flush_client_list(){
			 var userlist_window = $("#userlist");
			 var client_list_slelect = $("#client_list");
			 userlist_window.empty();
			 client_list_slelect.empty();
			 // userlist_window.append('<h4>在线用户</h4><ul>');
			 client_list_slelect.append('<option value="0" id="cli_all">请选择聊天对象</option>');
			 //获取用户列表用户

			 $.ajax({
				 type:'get',
				 url:'<?php echo url("admin/index/getUser"); ?>',
				 success:function(res){
					 console.log(res);
					 for(var p in res){
						 // userlist_window.append('<li id="'+p+'">'+res[p]['name']+'</li>');
						 client_list_slelect.append('<option value="'+res[p]['user_id']+'">'+res[p]['name']+'</option>');
					 }
					 // $("#client_list").val(select_client_id);
					 userlist_window.append('</ul>');
				 }

			 })

		 }
		 
		//截取字符串
		function getCaption(obj){
			var index=obj.lastIndexOf(">");
			obj=obj.substring(index+1,obj.length);
			return obj;
		}

		
	</script>
</head>
<body >
<div class="container" >
	<div class="row clearfix">
		<div class="col-md-1 column">
		</div>
		<div class="col-md-6 column">
		
			<form onsubmit="onSubmit(); return false;">
				<select style="margin-bottom:8px" id="client_list">
					<option value="0">请选择聊天对象</option>
				</select>
				<!--<textarea class="textarea thumbnail" id="textarea"></textarea>-->
				<textarea id="editor_id" name="content" style="width:700px;height:300px;">
				</textarea>
				<div class="say-btn">
					<input type="hidden" id="hidden" value="<?php echo $data['username']?>">
					<input type="hidden" id="time" value="<?php echo $data['time']?>">
					<!--<input type="hidden" id="userid" value="<?php echo $data['id']?>">-->
					<!--<input type="button" class="btn btn-default face pull-left" value="表情" />-->
					<input type="submit" class="btn btn-default" value="发送" />
				</div>
			</form>
			
			
			
		</div>
		
	</div>
</div>


<script>
	KindEditor.ready(function (K) {
		var editor1 = K.create('#editor_id', {
			uploadJson: '/static/kindeditor/php/upload_json.php',
			fileManagerJson: '/static/kindeditor/php/file_manager_json.php',
			themeType: 'simple',
			allowFileManager: true,
			filterMode: false,
			items: ['source', '|', 'undo', 'redo', '|', 'preview', 'template', 'cut', 'copy', 'paste', 'plainpaste', '|', 'justifyleft', 'justifycenter', 'justifyright', 'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript', 'superscript', 'clearhtml', 'quickformat', 'selectall', '|', 'fullscreen', '/', 'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|', 'image', 'multiimage', 'flash', 'media', 'insertfile', 'table', 'hr', 'emoticons', 'baidumap', 'pagebreak', 'anchor', 'link', 'unlink', '|', 'about'],
			afterCreate: function () {
				var self = this;
				document.getElementById('editor_id').onclick = function () {
					self.sync();
					//将textarea的内容放到主页面上，而不是编辑器上
					var content = document.getElementById('editor_id').value;
					$.ajax({
						data: $('#myform').serialize(),
					});
				}
			}
		})
	})
</script>
</body>
</html>

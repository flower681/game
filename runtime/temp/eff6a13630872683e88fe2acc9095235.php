<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:90:"E:\wamp\phpStudy\PHPTutorial\WWW\game\public/../application/admin\view\index\chatRoom.html";i:1559733630;}*/ ?>

<!doctype html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Hello Amaze UI</title>
	
	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">
	
	<meta http-equiv="Cache-Control" content="no-siteapp"/>
	
	<!--<link rel="icon" type="image/png" href="../assets/i/favicon.png">-->
	
	<meta name="mobile-web-app-capable" content="yes">
	<!--<link rel="icon" sizes="192x192" href="../assets/i/app-icon72x72@2x.png">-->
	
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="Amaze UI"/>
	<!--<link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">-->
	
	<!--<meta name="msapplication-TileImage" content="assets/i/app-icon72x72@2x.png">-->
	<meta name="msapplication-TileColor" content="#0e90d2">
	
	<link rel="stylesheet" href="/static/chat/css/amazeui.min.css">
	<link rel="stylesheet" href="/static/chat/css/app.css">
	<link rel="stylesheet" href="/static/chat/css/bace.css">
	<link rel="stylesheet" href="/static/chat/css/demo.css">
	<link rel="stylesheet" href="/static/chat/css/iconfont.css">
	<link rel="stylesheet" href="/static/chat/css/animate.min.css">
	<style>
		body{ font-family: '微软雅黑';  }
		/*主体*/
		.chat_dialogue_menager {
			max-width:75%;
			background: rgb(70, 180, 242);
			display:inline-block;
			padding: 5px 5px;
		}
		.chat_dialogue {
			max-width:75%;
			background: white;
			display:inline-block;
			padding: 5px 5px;
			
		}
		.chat_dialogue1 {
			max-width: 75%;
			background: white;
			display: -inline-block;
			padding: 2px 2px;
		}
		.am-modal-no-btn .am-modal-dialog{border-radius:10px }
		.chat_metip1 {
			float: right;
			max-width: 75%;
			background: #ea8fa8;
			display: inline-block;
			padding: 2px 2px;
		}
		.chat_metip {
			float: right;
			max-width: 75%;
			background: white;
			display: inline-block;
			padding: 5px 5px;
		}
		/*页脚*/
		.am-form-group.am-form-file {
			position: absolute;
			z-index: 11;
			right: 70px;
			color: #909090;
			top: 7%;
		}
		input#content {
			width: 94%;
			margin-left: 3%;
			border-radius: 5px;
			padding: 0 15%;
		}
		.myface{
			position: absolute;
			z-index: 11;
			color: #909090;
			left: 5%;
			top:7%;
		}
		.am-slider.am-slider-a1.am-no-layout {
			z-index: 11;
		}
		button#send {
			width: 90%;
			border-radius: 5px;
		}
		.am-u-sm-2 {
			width: 14.2%;
			text-align: center;
		}
		.am-slider .am-slides img {
			width: 24px;
			height: 100%;
		}
		.nodisplay{ display: none; }
		/*语音*/
		@-webkit-keyframes scale {
			0% {
				-webkit-transform: scale(1);
				
				opacity: 1; }
			
			45% {
				-webkit-transform: scale(0.1);
				
				opacity: 0.7; }
			
			80% {
				-webkit-transform: scale(1);
				
				opacity: 1; } }
		@keyframes scale {
			0% {
				-webkit-transform: scale(1);
				
				opacity: 1; }
			
			45% {
				-webkit-transform: scale(0.1);
				
				opacity: 0.7; }
			
			80% {
				-webkit-transform: scale(1);
				
				opacity: 1; } }
		
		.ball-pulse > div:nth-child(0) {
			-webkit-animation: scale 0.75s 0s infinite cubic-bezier(.2, .68, .18, 1.08);
		}
		.ball-pulse > div:nth-child(1) {
			-webkit-animation: scale 0.75s 0.2s infinite cubic-bezier(.2, .68, .18, 1.08);
		}
		.ball-pulse > div:nth-child(2) {
			-webkit-animation: scale 0.75s 0.4s infinite cubic-bezier(.2, .68, .18, 1.08);
		}
		.ball-pulse > div:nth-child(3) {
			-webkit-animation: scale 0.75s 0.6s infinite cubic-bezier(.2, .68, .18, 1.08);
		}
		.ball-pulse > div {
			background-color: #3bb4f2;
			width: 8px;
			height: 8px;
			border-radius: 100%;
			-webkit-animation-fill-mode: both;
			
			display: inline-block;
		}
		.am-modal-btn{height: 24px;line-height: 24px;}
	</style>
</head>
<body style="position:static;">
<!--页头-->
<div class="header xx_zindex">
	<div class="am-g am-padding-top-sm am-padding-bottom-sm xx_border_bottom xx_bg_bg">
		<div class="am-u-sm-3"><img src="/static/chat/img/2.jpg" width="70" height="70" ></div>
		<div class="am-u-sm-9 nopadding_left">
			<div class="am-text-truncate am-text-default">为你唱这首歌，没有什么风格，它仅仅代表着，我想给你快乐</div>
			<div class="am-g am-padding-top-xs">
				<div class="am-u-sm-4 am-text-xs">管理员
					<button class="noborder nobg"  data-am-modal="{target: '#doc-modal-1'}"><i class="iconfont xx_zhuse am-text-sm am-padding-right-xs">&#xe69c;</i></button>
					<div><i class="iconfont am-text-danger am-text-default">&#xe7ef;</i>12345</div>
					<!--和管理员私聊弹框内容-->
					<div class="am-modal am-modal-no-btn xx_zindex5" tabindex="-1" id="doc-modal-1">
						<div class="am-modal-dialog xx_position_relative">
							<div align="right"><a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a></div>
							<div class=""> <img class="am-circle xx_margin_top7 xx_bg_bg am-padding-xs" src="img/2.jpg" width="90" height="90" alt=""> </div>
							<div>
								<div align="center" class="release_input am-margin-top-lg">
									<textarea class="am-text-default am-padding-left-sm am-padding-top-xs xx_width94 xx_border_xs1 xx_border_radius1"  id="content" name="content" rows="3" minlength="10" maxlength="100" placeholder="请输入你要发表的内容..."></textarea>
								</div>
							</div>
							<div class="am-g am-margin-top-lg am-padding-bottom-sm">
								<div align="center" class="am-u-sm-5 am-margin-left-sm">
									<div class="xx_zhuse am-text-default xx_border_radius xx_border_xs am-padding-top-xs am-padding-bottom-xs">确定</div>
								</div>
								<div align="center" class="am-u-sm-5 am-margin-right-sm">
									<div class="xx_gray3 am-text-default xx_border_radius xx_border_xs  am-padding-top-xs am-padding-bottom-xs">取消</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="am-u-sm-5 am-padding-top-sm am-text-secondary am-text-sm">1232人在线</div>
				<div  style="text-align: center" class="am-u-sm-3 am-text-xs nopadding_left"><i class="iconfont am-text-danger am-text-default">&#xe7ef;</i>
					<p>点击送花</p>
				</div>
			</div>
		</div>
	</div>
	<!--弹幕-->
	<div class="am-margin-top-sm xx_width100 xx_top1 xx_zindex">
		<div id="danmu" class="animated bounceInRight xx_text_align">
			<div align="center" class="am-margin-top-default">
				<div class="noneborder xx_border_radius1 xx_bg_black_rgba xx_display xx_padding_tblr"><img class="am-circle" src="/static/chat/img/2.jpg" width="20" height="20">
					<span class="xx_white am-padding-left-xs am-text-sm">你走在我的前边的前边，风吹起裙摆</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!--主体-->
<div id="chat_room" style="position: absolute; overflow-y:scroll;top:16%; left:0; bottom:0; right:0;" class="scroll xx_zindex1 xx_padding_bottom_xs">
	<!--公告-->
	<div class="am-text-xs xx_bg_white xx_width94 xx_padding_tblr xx_border_radius1 xx_padding_tblr1 xx_center am-margin-bottom-lg">
		<span class="xx_zhuse am-text-sm"><i class="iconfont am-padding-right-sm">&#xe80e;</i>群公告</span>
		<p>1.本群不允许怎么样怎样怎样怎样怎样怎样</p>
		<p>2.本群欢迎你来自五湖四海的朋友。哈哈</p>
	</div>
	<!--有人进入聊天室消息提醒-->
	<div align="center" class="am-margin-top-sm am-margin-bottom-sm">
		<div class="noneborder xx_border_radius xx_bg_gray1 xx_display xx_padding_tblr">"<span class="am-text-secondary">他说</span>"加入了聊天室</div>
	</div>
	<!--管理员撤消消息提醒-->
	<div align="center" class="am-margin-top-sm am-margin-bottom-sm">
		<div class="noneborder xx_border_radius xx_bg_gray1 xx_display xx_padding_tblr">你的消息不符合群规定，已被"<span class="am-text-secondary">撤消</span>"</div>
	</div>
	<!--管理员聊天框-->
	<div class="chat_main am-margin-top-lg am-padding-left-sm">
		<div class="am-fl"><img class="am-radius" src="/static/chat/img/chat_head2.jpg" width="40" height="40"></div>
		<div class="am-text-xs"> &nbsp;&nbsp;&nbsp;他说<span class="am-padding-left-sm xx_gray1">12:00</sapn></div>
		<div class="chat_dialogue_menager xx_border_radius am-margin-left-sm am-margin-right-sm am-margin-top-xs xx_white">
			如果我说，爱我没有如果
		</div>
	</div>
	<!--他人说话-->
	<div class="chat_main am-margin-top-lg am-padding-left-sm">
		<div class="am-fl"><img class="am-radius" src="/static/chat/img/2.jpg" width="40" height="40"></div>
		<div class="am-text-xs"> &nbsp;&nbsp;&nbsp;他说<span class="am-padding-left-sm xx_gray1">12:00</span></div>
		<div class="chat_dialogue xx_border_radius am-margin-left-sm am-margin-right-sm am-margin-top-xs">错过就过，你是不是会难过</div>
	</div>
	<!--图片模版私聊信息-->
	<div id="{{mess_id}}" class="chat_main am-margin-top-lg  am-padding-left-sm">
		<div class="am-g">
			<div class="am-fl"><a href="chat_single?id={{uid}}"><img class="am-radius" src="/static/chat/img/2.jpg" width="40" height="40"></a></div>
			<div class="am-text-xs"> &nbsp;&nbsp;&nbsp;他说<span class="am-padding-left-sm xx_gray1">12:00</span></div>
			<div class="chat_dialogue1 am-u-sm-3 xx_border_radius am-margin-left-sm am-margin-right-sm am-margin-top-xs nopadding_left">
				<img class="content_img"  src="/static/chat/img/chat_head1.jpg"  width="100%" alt="">
			</div>
		</div>
		<div class="xx_gray3 xx_padding_left_sm am-padding-top-xs">此消息来自私聊信息<span class="chat_color"> <button class="noborder nobg xx_padding_bottom_xs1" data-am-modal="{target: '#private_chat'}">回复</button></span></div>
	</div>
	
	<!--来自私聊-->
	<div class="chat_main am-margin-top-lg am-padding-left-sm">
		<div class="am-fl"><img class="am-radius" src="/static/chat/img/2.jpg" width="40" height="40"></div>
		<div class="am-text-xs"> &nbsp;&nbsp;&nbsp;他说<span class="am-padding-left-sm xx_gray1">12:00</span></div>
		<div class="chat_dialogue xx_border_radius am-margin-left-sm am-margin-right-sm am-margin-top-xs">错过就过，你是不是会难过</div>
		<div class="xx_gray3 xx_padding_left_sm am-padding-top-xs">此消息来自私聊信息<span class="chat_color"> <button class="noborder nobg xx_padding_bottom_xs1" data-am-modal="{target: '#private_chat', closeViaDimmer:0}">回复</button></span></div>
	</div>
	<!--时间-->
	<div align="center" class="xx_gray1 am-text-xs am-padding-top-sm">下午 16:50:10</div>
	<!--时间-->
	
	<!--他人表情-->
	<div class="chat_main am-margin-top-lg am-padding-left-sm am-g">
		<div class="am-fl"><img class="am-radius" src="/static/chat/img/2.jpg" width="40" height="40"></div>
		<div class="am-text-xs"> &nbsp;&nbsp;&nbsp;他说<span class="am-padding-left-sm xx_gray1">12:00</sapn></div>
		<div class="chat_dialogue am-u-sm-1 xx_border_radius am-margin-left-sm am-margin-right-sm am-margin-top-xs">
			<img src="/static/chat/img/face/10.gif" width="100%" alt="">
		</div>
	</div>
	<!--我+++发送消息-->
	<div  id="{{mess_id}}" class="chat_main am-margin-top-lg am-padding-right-sm am-g">
		<div class="am-fr"><img class="am-radius" src="/static/chat/img/2.jpg" width="40" height="40"></div>
		<div class="chat_metip1 xx_border_radius am-margin-left-sm am-margin-right-sm xx_margin_top_xs xx_white">我记得我爱过，也哭了</div>
	</div>
	<!--自己图片+++发送图片-->
	<div class="chat_main am-margin-top-lg am-padding-right-sm am-g">
		<div class="am-fr"><img class="am-radius" src="/static/chat/img/1.jpg" width="40" height="40"></div>
		<div  class="chat_metip1 am-u-sm-3 xx_border_radius am-margin-left-sm am-margin-right-sm xx_margin_top_xs">
			<img class="am-radius content_img" src="/static/chat/img/18.jpg" width="100%" alt="">
		</div>
	</div>
	<!--语音+++发送语音-->
	<div id="{{mess_id}}" class="chat_main am-margin-top-lg am-padding-right-sm am-g">
		<div class="am-fr"><img class="am-radius" src="/static/chat/img/1.jpg" width="40" height="40"></div>
		<div localid="{{content}}" id="{{ids}}" class="chat_metip1 xx_border_radius am-margin-left-sm am-margin-right-sm xx_margin_top_xs xx_white  voice">
			{{voice_sec}}"<i class="iconfont am-padding-left-xs">&#xe825;</i>
			<img class="nodisplay" src="/static/chat/img/mevoice.gif" width="13px" height="13px;">
		</div>
	</div>
	<!--我+++发送消息-->
	<div  id="{{mess_id}}" class="chat_main am-margin-top-lg am-padding-right-sm am-g">
		<div class="am-fr"><img class="am-radius" src="/static/chat/img/2.jpg" width="40" height="40"></div>
		<div class="chat_metip1 xx_border_radius am-margin-left-sm am-margin-right-sm xx_margin_top_xs xx_white">我记得我爱过，也哭了</div>
	</div>
	<!--自己图片+++发送图片-->
	<div style="overflow: hidden;" class="chat_main am-margin-top-lg am-padding-right-sm am-g">
		<div class="am-fr"><img class="am-radius" src="/static/chat/img/1.jpg" width="40" height="40"></div>
		<div  class="chat_metip1 am-u-sm-3 xx_border_radius am-margin-left-sm am-margin-right-sm xx_margin_top_xs">
			<img class="am-radius content_img" src="/static/chat/img/18.jpg" width="100%" alt="">
		</div>
	</div>

</div>
<!--私聊回复消息页面-->
<div class="am-modal am-modal-no-btn xx_zindex5" tabindex="-1" id="private_chat">
	<div class="am-modal-dialog xx_position_relative">
		<div align="right"><a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a></div>
		<div>
			<div align="center" class="release_input am-padding-top-sm">
				<textarea class="am-text-default am-padding-left-sm am-padding-top-xs xx_width94 xx_border_xs1 xx_border_radius1"  id="content" name="content" rows="3" minlength="10" maxlength="100" placeholder="请输入你要发表的内容..."></textarea>
			</div>
		</div>
		<div class="am-g am-margin-top-lg am-padding-bottom-sm">
			<div align="center" class="am-u-sm-5 am-margin-left-sm">
				<div class="xx_zhuse am-text-default xx_border_radius xx_border_xs am-padding-top-xs am-padding-bottom-xs">发送</div>
			</div>
			<div align="center" class="am-u-sm-5 am-margin-right-sm">
				<div class="am-text-default xx_border_radius xx_border_xs am-padding-top-xs am-padding-bottom-xs"><span class=" am-modal-btn xx_gray3">取消</span></div>
			</div>
		</div>
	</div>
</div>
<!--页脚-->
<div style="position:fixed; bottom: 0" class="footer xx_bg_bg am-padding-bottom-xs">
	<div id="text" class="am-g am-padding-top-xs">
		<div class="am-u-sm-1">
  <span class="am-input-group-btn">
  <img class="swith am-margin-top-xs" src="/static/chat/img/chat_face4.png" width="30" height="30" alt="">
</span>
		</div>
		<div class="am-u-sm-11 nopadding_right">
			<div class="am-input-group">
				<div class="am-form-group am-form-file">
					<img class="pic" src="/static/chat/img/chat_face3.png" width="30" height="30" alt="">
					<input type="file" class="xx_height">
				</div>
				<!--发送-->
				<input id="content"  type="text" class="am-form-field">
				<img class="myface" src="/static/chat/img/chat_face.png" data-am-collapse="{target: '#collapse-nav'}" ><span class="am-input-group-btn">
    <button id="send" class="am-btn xx_bg_zhuse xx_white xx_padding_tblr3" type="button"><span class="xx_padding_right1" id="chat_last">发送</span></button>
    </span>
			</div>
		
		</div>
	</div>
	<div  id="voice" class="am-g nodisplay">
		<div class="am-u-sm-1 xx_padding_left_xs1">
  <span class="am-input-group-btn">
  <img class="swith am-margin-top-sm" src="/static/chat/img/chat_face5.png" width="30" height="30" alt="">
</span>
		</div>
		<div class="am-u-sm-11">
			<button id="send_voice" class="am-btn-block xx_border_xs am-padding-top-xs xx_border_radius am-padding-bottom-xs xx_bg_white am-margin-left-xs am-margin-top-xs xx_gray3 am-text-sm xx_height">按住发送</button>
		</div>
	
	</div>
	<!--语音弹幕-->
	<div id ="show_voice" align="center" style="position: fixed; width: 60%; z-index: 1; left: 20%; top: 40%; " class="am-fc chat_barrage xx_bg_white xx_border_radius1 nodisplay">
		<div class="chat_voice am-margin-top-lg">
			<img class="swith am-margin-top-sm" src="/static/chat/img/chat_face5.png" width="30" height="30" alt="">
		</div>
		<p class="am-margin-top-sm am-margin-bottom-sm am-text-default">正在录音</p>
		<div class="loader-inner ball-pulse am-margin-bottom-sm">
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>
	
	<div data-am-widget="slider" class="am-slider am-slider-a1" data-am-slider='{"directionNav":false}' data-am-flexslider="{slideshow: false,controlNav:false}">
		<nav>
			<ul id="collapse-nav" class="am-slides am-nav am-collapse">
				<li>
					<div class="chat_face">
						<ul>
							<li>
								<div align="center" class="am-g am-padding-bottom-sm">
									<div class="am-u-sm-2"><img src="/static/chat/img/face/20.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/1.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/2.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/3.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/4.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/5.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/72.gif"></div>
								</div>
								<div align="center" class="am-g am-padding-bottom-sm">
									<div class="am-u-sm-2"><img src="/static/chat/img/face/6.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/7.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/8.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/9.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/10.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/11.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/73.gif"></div>
								</div>
								<div align="center" class="am-g am-padding-bottom-sm">
									<div class="am-u-sm-2"><img src="/static/chat/img/face/12.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/13.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/14.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/15.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/16.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/17.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/74.gif"></div>
								</div>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<div class="chat_face">
						<ul>
							<li>
								<div align="center" class="am-g am-padding-bottom-sm">
									<div class="am-u-sm-2"><img src="/static/chat/img/face/18.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/19.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/20.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/21.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/22.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/23.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/75.gif"></div>
								</div>
								<div align="center" class="am-g am-padding-bottom-sm">
									<div class="am-u-sm-2"><img src="/static/chat/img/face/24.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/25.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/26.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/27.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/28.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/29.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/76.gif"></div>
								</div>
								<div align="center" class="am-g am-padding-bottom-sm">
									<div class="am-u-sm-2"><img src="/static/chat/img/face/30.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/31.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/32.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/33.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/34.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/35.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/77.gif"></div>
								</div>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<div class="chat_face">
						<ul>
							<li>
								<div align="center" class="am-g am-padding-bottom-sm">
									<div class="am-u-sm-2"><img src="/static/chat/img/face/36.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/37.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/38.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/39.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/40.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/41.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/78.gif"></div>
								</div>
								<div align="center" class="am-g am-padding-bottom-sm">
									<div class="am-u-sm-2"><img src="/static/chat/img/face/42.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/43.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/44.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/45.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/46.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/47.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/79.gif"></div>
								</div>
								<div align="center" class="am-g am-padding-bottom-sm">
									<div class="am-u-sm-2"><img src="/static/chat/img/face/48.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/49.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/50.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/51.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/52.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/53.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/80.gif"></div>
								</div>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<div class="chat_face">
						<ul>
							<li>
								<div align="center" class="am-g am-padding-bottom-sm">
									<div class="am-u-sm-2"><img src="/static/chat/img/face/54.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/55.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/56.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/57.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/58.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/59.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/81.gif"></div>
								</div>
								<div align="center" class="am-g am-padding-bottom-sm">
									<div class="am-u-sm-2"><img src="/static/chat/img/face/60.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/61.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/62.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/63.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/64.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/65.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/82.gif"></div>
								</div>
								<div align="center" class="am-g am-padding-bottom-sm">
									<div class="am-u-sm-2"><img src="/static/chat/img/face/66.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/67.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/68.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/69.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/70.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/71.gif"></div>
									<div class="am-u-sm-2"><img src="/static/chat/img/face/83.gif"></div>
								</div>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</nav>
	</div>
</div>
<!--在这里编写你的代码-->
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/static/chat/js/jquery.min.js"></script>
<script src="/static/chat/js/amazeui.min.js"></script>
<script>
	/*$(document).ready(function(){
	  $('#chat_room').scrollTop($('#chat_room')[0].scrollHeight-50);
	});*/
	function myFun(sId) {
		var oImg = document.getElementsByTagName('img');
		for (var i = 0; i < oImg.length; i++) {
			if (oImg[i].id == sId) {
				oImg[i].previousSibling.previousSibling.checked = true;
				oImg[i].style.border = '1px solid #FF6600';
			} else {
				oImg[i].style.border = '1px solid #f1f1f1';
			}
		}
	}
</script>
<script>
	var overscroll = function(el) {
		el.addEventListener('touchstart', function() {
			var top = el.scrollTop
				, totalScroll = el.scrollHeight
				, currentScroll = top + el.offsetHeight
			//If we're at the top or the bottom of the containers
			//scroll, push up or down one pixel.
			//
			//this prevents the scroll from "passing through" to
			//the body.
			if(top === 0) {
				el.scrollTop = 1
			} else if(currentScroll === totalScroll) {
				el.scrollTop = top - 1
			}
		})
		el.addEventListener('touchmove', function(evt) {
			//if the content is actually scrollable, i.e. the content is long enough
			//that scrolling can occur
			if(el.offsetHeight < el.scrollHeight)
				evt._isScroller = true
		})
	}
	overscroll(document.querySelector('.scroll'));
	document.body.addEventListener('touchmove', function(evt) {
		//In this case, the default behavior is scrolling the body, which
		//would result in an overflow.  Since we don't want that, we preventDefault.
		if(!evt._isScroller) {
			evt.preventDefault()
		}
	})
</script>
<script>
	$('.swith').click(function(){
		$('#text').toggleClass('nodisplay');
		$('#voice').toggleClass('nodisplay');
	});
</script>


</body>

<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:53:"/data/wwwroot/default/public/../application/jump.html";i:1532410271;}*/ ?>
<!DOCTYPE html>
    <html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>提示信息</title>
    <style type="text/css">
    *{ padding: 0; margin: 0; }
    body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 6px; }
    .message{width: 800px;height: 200px;margin:auto;border:1px solid #2BA2E7;margin-top: 30px;}
    .head{width: 100%;height: 50px;    background-image: linear-gradient(#54b4eb, #2fa4e7 60%, #1d9ce5);
    background-repeat: no-repeat;text-align: center;padding-top: 5px;}
    .content{height: 120px;width: 100%;}
    .success ,.error{text-align: center;margin-top: 30px; font-size:18px;}
    .jump{text-align: center;margin-top: 5px;font-size:18px;}
    </style>
    </head>
    <body>
    <div class="message">
    <div class="head">
        <div style="float: left;">
            <img alt="Charisma Logo" src="/static/admin/images/logo1.png" class="hidden-xs" style="height:50px; width:100px; margin-left: 35px; margin-top: -6px; line-height: 50px;">
        </div>
        <div style="padding-bottom: 25px; float: left;">
            <span style="margin-top: -8px; margin-left: 200px; font-size:20px; line-height:50px; color: #FFF;">提示信息:</span>
        </div>
    </div>
    <div class="content">
    <?php if(!empty($code)) {?>
    <p class="success">
        <div style="float: left; margin-left:300px; ">
            <img src="/static/admin/images/success.png"  style="height:50px; width:50px;">
        </div>
        <div style="float: left; font-size:18px; margin-left: 15px; padding-bottom: 10px; line-height:50px;">
            <?php echo($msg); ?>
        </div>
    </p>
    <?php }else{?>
    <p class="error">
        <div style="float: left; margin-left:300px; ">
            <img src="/static/admin/images/fail.png"  style="height:50px; width:50px;">
        </div>
        <div style="float: left; font-size:18px; margin-left: 15px; padding-bottom: 10px; line-height:50px;">
            <?php echo($msg); ?>
        </div>
    </p>
    <?php }?>
    <div style="clear: both;"></div>
    <p class="detail"></p>
    <p class="jump">
    <br />
    等待时间：<b id="wait"><?php echo($wait); ?></b>
    </p>
    <a href="<?php echo $url; ?>" id="href" style="display:none;" rel="external nofollow" rel="external nofollow" >请点击此处</a>
    </div>
    </div>
    <script type="text/javascript">
    (function(){
	    var wait = document.getElementById('wait'),
	    href = document.getElementById('href').href;
		    var interval = setInterval(function(){
			    var time = --wait.innerHTML;
			    if(time <= 0) {
				    location.href = href;
				    clearInterval(interval);
			    };
		    },1000);
	    })();
    </script>
    </body>
    </html>

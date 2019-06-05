<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"/www/wwwroot/193.38.139.70/public/../application/admin/view/login.html";i:1532410270;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>库存管理系统</title>
    <link href="__CSS__/bootstrap.min.css" rel="stylesheet">
    <link href="__CSS__/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="__CSS__/animate.min.css" rel="stylesheet">
    <link href="__CSS__/style.min.css" rel="stylesheet">
    <link href="__CSS__/login.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>
        if(window.top!==window.self){window.top.location=window.location};
    </script>

</head>
<body class="signin">
<div class="signinpanel">
    <div class="row">
        <div class="col-sm-7">
            <div class="signin-info">
                <div class="logopanel m-b">
                </div>
                <div class="m-b"></div>
                <h4>欢迎使用库存管理系统</h4>
                <ul class="m-b">

                </ul>
            </div>
        </div>
        <div class="col-sm-5">
            <form method="post" action="index.html">
                <p class="m-t-md" id="err_msg" style="color:white;">登录到库存管理系统</p>
                <input type="text" class="form-control uname" placeholder="用户名" id="username" />
                <input type="password" class="form-control pword m-b" placeholder="密码" id="password" />
                <div style="margin-bottom:70px">
                    <input type="text" class="form-control" placeholder="验证码" style="color:black;width:110px;float:left;margin:0px 0px;" name="code" id="code"/>
                    <img src="<?php echo captcha_src(); ?>"  onclick="javascript:this.src='<?php echo captcha_src(); ?>?tm='+Math.random();"style="width:120px;float:right; height: 32px; margin:1px 0px;" class="captcha"/>
                </div>
                <div class="form-group text-left">
                    <div class="checkbox i-checks">
                        <label class="no-padding">
                            <div class="icheckbox_square-green" style="position: relative;">
                                <input type="checkbox" style="margin-top: 3px;margin-left: 3px" checked disabled>
                                <a  id="protocol" style="margin-left: 20px">库存平台服务协议（用户协议）</a>
                            </div>
                        </label>
                    </div>
                </div>
                <input class="btn btn-success btn-block" id="login_btn" value="登录"/>
            </form>
        </div>
    </div>
    <div class="signup-footer" style="margin-top:150px;">
        <div class="pull-left">
            <a href="" target="_blank" style="color:#ffffff;">&copy; 2012 - <?php echo date('Y', time()); ?> &copy; 库存管理平台提供技术支持</a>
        </div>
    </div>
</div>
<script src="__JS__/jquery.min.js?v=2.1.4"></script>
<script src="__JS__/bootstrap.min.js?v=3.3.6"></script>
<script src="__JS__/plugins/layer/layer.js" ></script>
<script type="text/javascript">
    document.onkeydown=function(event){
        var e = event || window.event || arguments.callee.caller.arguments[0];
        if(e && e.keyCode==13){ // enter 键
            $('#login_btn').click();
        }
    };
    var lock = false;
    $(function () {
        $('#login_btn').click(function(){
            if(lock){
                return;
            }
            lock = true;
            $('#err_msg').hide();
            $('#login_btn').removeClass('btn-success').addClass('btn-danger').val('登陆中...');
            var username = $('#username').val();
            var password = $('#password').val();
            var code = $('#code').val();
            $.post("<?php echo url('login/doLogin'); ?>",{'username':username, 'password':password, 'code':code},function(data){
                lock = false;
                $('#login_btn').val('登录').removeClass('btn-danger').addClass('btn-success');
                if(data.code!=1){
                    $('#err_msg').show().html("<span style='color:red'>"+data.msg+"</span>");
                    $('.captcha').click();
                }else{
                    console.log(data.data);
                    window.location.href=data.data;
                }
            });
        });

        $('#protocol').click(function(){
            layer.open({
                type: 2,
                title: false,
                shadeClose: true,
                shade: false,
                area: ['50%', '85%'],
                btn: ['关闭'],
                content: ['./protocol'], //iframe的url，no代表不显示滚动条
            });
        });


        layer.msg('欢迎来到库存管理平台');
    });
</script>
</body>
</html>
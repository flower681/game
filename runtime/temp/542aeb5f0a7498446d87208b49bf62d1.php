<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"/data/wwwroot/default/public/../application/admin/view/index/helpWeb.html";i:1532412664;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>使用帮助</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        color: #333;
    }
    .tou{
        width: 100%;
        height: 50px;
        border-bottom: 1px solid #eee;
        position: relative;
    }
    .tou img{
        width: 25px;
        position: absolute;
        top: 13px;
        left: 10px;
    }
    .tou p{
        line-height: 50px;
        width: 100%;
        text-align: center;
        font-size: 16px;
    }
    .nr{
        width: 95%;
        margin: 0 auto;
    }
    .nr .head{
        width: 100%;
        height: 50px;
        border-bottom: 1px solid #eee;
    }
    .nr .head p{
        width: 100%;
        line-height: 50px;
    }
    .nr .head p b{
        text-align: left;
    }
    .nr .head p span{
        float: right;
    }
    .tw{
        margin-top: 10px;
    }
    .tw img{
        width: 100%!important;
        margin: 5px auto;
    }
</style>
<body>
<div class="nr">
    <div class="head">
        <p><b><?php echo $data['hp_name']; ?></b><span><?php echo $data['created_at']; ?></span></p>
    </div>
    <div class="tw">
        <?php echo $data['hp_content']; ?>
    </div>
</div>
</body>
</html>
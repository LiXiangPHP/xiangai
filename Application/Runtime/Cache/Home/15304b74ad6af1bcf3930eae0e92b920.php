<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title></title>
    <link href="/Public/Home/css/style.css" type="text/css" rel="stylesheet" />
    <script src="/Public/Home/js/TouchSlide.1.1.js" type="text/javascript"></script>
    <script src="/Public/Home/js/jquery-1.11.2.min.js" type="text/javascript"></script>
</head>

<body>
<div id="header">
	<div class="top">
    	<div class="title">
            <div class="return"><a href="#"><img src="/Public/Home/images/top.png" width="12" /> 返回</a></div>
        </div>
    </div>
</div>
<div id="content">
	<div class="logIn">
    
        <div class="Name">
            <div class="icon"><span><img src="/Public/Home/images/log1.jpg" width="70%" /></span></div>
            <input type="password" name="password1" class="userN" placeholder="密   码" />
        </div>
        <div class="Name">
            <div class="icon"><span><img src="/Public/Home/images/log1.jpg" width="70%" /></span></div>
            <input type="password" name="password2" class="userN" placeholder="确认密码" />
        </div>
        <div class="protocol"></div>
        <input type="button" value="修 改" class="button" style="margin-top:0;" />
    </div>
</div>
</body>
</html>
<script>
	$(function() {
        $(':button.button').bind('click', function() {
            var data=$(':input').serialize();
            $.post('<?php echo U("forget2Doit");?>', data, function(data) {
                if(data.status) {
                    location.href=data.url;
                } else {
                    alert(data.info);
                }
            });
        });
    })
</script>
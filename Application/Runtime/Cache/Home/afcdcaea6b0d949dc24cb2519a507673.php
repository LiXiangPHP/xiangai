<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
<title></title>
<link href="/0714/Public/Home/css/style.css" type="text/css" rel="stylesheet" />
<script src="/0714/Public/Home/js/TouchSlide.1.1.js" type="text/javascript"></script>

<script src="/0714/Public/Home/js/jquery-1.11.2.min.js" type="text/javascript"></script>

</head>

<body>
<div id="header">
	<div class="top">
    	<div class="title">
        	登录
            <div class="return"><a href="#"><img src="/0714/Public/Home/images/top.png" width="12" /> 返回</a></div>
        </div>
    </div>
</div>
<div id="content">
	<div class="logIn">
    	<div class="Name">
        	<div class="icon"><span><img src="/0714/Public/Home/images/log.jpg" width="70%" /></span></div>
            <input type="text" name="username" class="userN" placeholder="用户名/手机号" />
        </div>
        <div class="Name">
        	<div class="icon"><span><img src="/0714/Public/Home/images/log1.jpg" width="70%" /></span></div>
            <input type="password" name="password" class="userN" placeholder="密   码" />
        </div>
        <div class="logPrompt">
        	<a href="<?php echo U('forget1');?>">忘记密码？</a>
            <a href="#">注册</a>
        </div>
        <input type="button" value="登 录" class="button" />
    </div>
    <div class="other">
    	<a href="#"><img src="/0714/Public/Home/images/icon1.jpg" width="100%" /></a>
        <a href="#"><img src="/0714/Public/Home/images/icon2.jpg" width="100%" /></a>
        <a href="#"><img src="/0714/Public/Home/images/icon3.jpg" width="100%" /></a>
    </div>
    <div class="ProTit">其它方式登录</div>
</div>
</body>
<script type="text/javascript">
	$(function() {
	 	$(':button.button').bind('click', function() {
        	var data=$(':input').serialize();
        	$.post('<?php echo U("loginDoit");?>', data, function(data) {
            	if(data.status) {
                	location.href=data.url;
            	} else {
                	alert(data.info);
            	}
        	});
    	});
	})
</script>
</html>
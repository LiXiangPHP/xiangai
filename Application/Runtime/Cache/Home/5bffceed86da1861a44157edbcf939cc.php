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
        	注册
            <div class="return"><a href="#"><img src="/0714/Public/Home/images/top.png" width="12" /> 返回</a></div>
        </div>
    </div>
</div>
<div id="content">
	<div class="logIn">
    	<div class="Name">
        	<div class="icon"><span><img src="/0714/Public/Home/images/log.jpg" width="70%" /></span></div>
            <input type="text" class="userN" name="mobile" id="phone" placeholder="请输入手机号" />
        </div>
        <div class="Name padding">
        	<div class="icon"><span><img src="/0714/Public/Home/images/log2.jpg" width="70%" /></span></div>
            <input type="text" name="code" class="userN" placeholder="请输入验证码" />
            <input class="verification" type="button" value="获取验证码"/>
        </div>
        <div class="Name">
        	<div class="icon"><span><img src="/0714/Public/Home/images/log1.jpg" width="70%" /></span></div>
            <input type="password" name="password" class="userN" placeholder="密   码" />
        </div>
        <div class="protocol">
        	点击“注册”即表示同意<span>《用户使用协议》</span>
        </div>
        <input type="button" value="注 册" class="button" style="margin-top:0;" />
    </div>
</div>
</body>
</html>
<script>
	$(function() {
        $(':input.verification').bind('click', function() {
            var $this=$(this);
            var second=6;
            // 1. 显示文字变为重新发送(60)
            // 2. 按钮变为不可用状态
            $this.prop({'value':'重新发送('+second+')', 'disabled':true});
            var timer=setInterval(function() {
                second--;
                if(second==0) {
                    $this.prop({'value':'获取验证码', 'disabled':false});
                    // 清除定时器
                    clearInterval(timer);
                    return;
                }
                $this.prop({'value':'重新发送('+second+')'});
            }, 1000);
            // 发送验证码
            var mobile=$('#phone').val();
            $.post('<?php echo U("sendCode");?>', {mobile:mobile}, function(data) {
                if(data.status) {
                } else {
                    alert(data.info);
                }
            }, 'json');
        });

        $(':button.button').bind('click', function() {
            var data=$(':input').serialize();
            $.post('<?php echo U("registerDoit");?>', data, function(data) {
                if(data.status) {
                    location.href=data.url;
                } else {
                    alert(data.info);
                }
            });
        });
    })
</script>
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
    <script src="/0714/Public/Home/js/jquery.min.js" type="text/javascript"></script>
    <script src="/0714/Public/Home/js/dropload.min.js"></script>
</head>
<body>
<div id="header">
    <div class="top">
        <div class="title">
            首页
            <div class="search"><a href="javascript:;" onclick="$('#Form').fadeIn()"><img src="/0714/Public/Home/images/index.png" width="24" /></a></div>
        </div>
    </div>
</div>
<div id="lbt"  class="banner" style="margin-top:50px;">
    <div id="focus" class="focus">
        <div class="hd">
            <ul></ul>
        </div>
        <div class="bd">
            <ul>
                <li><a href="#"><img src="/0714/Public/Home/images/banner.jpg" /></a></li>
                <li><a href="#"><img src="/0714/Public/Home/images/video1.png" /></a></li>
            </ul>
        </div>
    </div> 
    <script type="text/javascript">
                TouchSlide({ 
                    slideCell:"#focus",
                    titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
                    mainCell:".bd ul", 
                    effect:"left", 
                    autoPlay:true,//自动播放
                    autoPage:true, //自动分页
                    switchLoad:"_src" //切换加载，真实图片路径为"_src" 
                });
    </script>
    <div style="clear:both;"></div>
</div>
<div id="content" style="margin-top:0;">
    <div style="background:red;float:left;width:100%;height:50px;">
    <div class="classif" id="fixed_nav" style="z-index:999;">
        <ul class="nav">
            <li>综合</li>
            <li class="clic">类型 <img src="/0714/Public/Home/images/class.jpg" width="10" /></li>
            <div class="down2" style="display:none">
               <form action="#" method="post">
                    <label>男歌手
                        <input type="radio" name="cla" value="0" checked="checked" />
                    </label>
                    <label>女歌手
                        <input type="radio" name="cla" value="1" />
                    </label>
                    <label>组合
                        <input type="radio" name="cla" value="2" />
                    </label>
               </form>
            </div>
            <li class="clic">风格 <img src="/0714/Public/Home/images/class.jpg" width="10" /></li>
            <div class="down2" style="display:none;">
               <form action="#" method="post">
                    <label>流行
                        <input type="radio" name="cla" value="3" checked="checked" />
                    </label>
                    <label>摇滚
                        <input type="radio" name="cla" value="4" />
                    </label>
                    <label>R&B
                        <input type="radio" name="cla" value="5" />
                    </label>
                    <label>民谣
                        <input type="radio" name="cla" value="6" />
                    </label>
                    <label>中国风
                        <input type="radio" name="cla" value="7" />
                    </label>
                    <label>舞曲
                        <input type="radio" name="cla" value="8" />
                    </label>
               </form>
            </div>
        </ul>
    </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
      $(".clic").click(function(){
      $(this).next().slideToggle();
      });
    });
    </script>
    <div class="content" style="float:left; width:100%;">
    <div class="lists" style="float:left; width:100%;">
    <div class="list5">
        <ul id="show">
        	
        </ul>
    </div>
    </div>
    </div>
</div>
<div id="footer"></div>
<div id="nav">
    <ul>
        <li><a href="#" class="home"><span>首页</span></a></li>
        <li class="on"><a href="#" class="order1"><span>订单</span></a></li>
        <li><a href="#" class="my"><span>我的</span></a></li>
    </ul>
</div>
<a href="#" class="gotop">返回顶部</a>
<script type="text/javascript">
// 页面完全加在完成后执行
window.onload=function() {
    var top=$("#fixed_nav").offset().top;
    $(window).scroll(function () {
        if ($(window).scrollTop() >= top -50) {
            $("#fixed_nav").attr("style", "position:fixed;top:49px;z-index:999");
        } else {
            $("#fixed_nav").attr("style", "position:static;");
        }
        // 触发ajax追加数据
        // 滚动条距离顶部的高度
        var scrollTop=$(window).scrollTop();
       	// 文档的高度
       	var height=$(document).height();
       	// 当前窗口的高度
       	var winHeight=$(window).height();
    	if(height-scrollTop-winHeight<200) {
    		ajax(2);
    	}   	
    })
}
function ajax(p) {
	$.get('<?php echo U("page");?>','p='+p, function(data) {
		$('#show').append(data);
	});
}
ajax(1);
</script>
</body>
</html>
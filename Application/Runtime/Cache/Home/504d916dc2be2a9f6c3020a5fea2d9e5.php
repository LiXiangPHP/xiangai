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
<div class="banner">
	<div id="focus" class="focus">
		<div class="hd">
			<ul></ul>
		</div>
		<div class="bd">
			<ul>
				<li><a href="#"><img _src="/0714/Public/Home/images/singer1.jpg" /></a></li>
                <li><a href="#"><img _src="/0714/Public/Home/images/singer1.jpg" /></a></li>
			</ul>
		</div>
        <div class="topFloat">
        	<a href="javascript :;" onClick="javascript :history.back(-1);"><img src="/0714/Public/Home/images/top.png" width="12" /> 返回</a>
            <span><img src="/0714/Public/Home/images/singer2.png" width="25" /></span>
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
</div>
<div id="content" style="margin-top:0">
	<div class="info">
    	<div class="BasicInfo">
        	<div class="hearImg" style="height:200px">
				<img src="/0714/Uploads/<?php echo ($goodsList['goods_thumb']); ?>" width="50%" height="50%"/>
				<div class="posion" style="top:60px"><img src="/0714/Public/Home/images/singer6.png"/></div>
			</div>
            <div class="right">
            	<div class="singerNmae">
                	<span class="daimio">商品详情</span>
                    <span class="intro">知名无伴奏组合</span>
                    <div class="label">
                    	<em>颜色</em><em>尺寸</em><em>评价</em>
                    </div>
                    <div class="Collection">
                    	<a href="#"><img src="/0714/Public/Home/images/singer4.png" width="100%" />
                        <img src="/0714/Public/Home/images/singer4_1.png" width="100%" class="onImg" />
                        </a>
                        <a href="#"><img src="/0714/Public/Home/images/singer5.png" width="100%" /></a>
                    </div>
                </div>
                <div class="Price">
                	<div class="money">￥<?php echo ($goodsList['goods_price']); ?><span>/件</span></div>
                    <div class="company">世纪飞歌文化</div>
                </div>
            </div>
        </div>
    </div>
    <div class="gray"></div>
    <div class="singerInfo">
    	<div class="href"><a href="#"><span>商品名称</span>
        	<div class="works">
  
            	<?php echo ($goodsList['goods_name']); ?>
            </div>
        </a></div>
		<div class="href"><a href="#"><span>商品分类</span>
        	<div class="works">
            	
            	<?php echo ($cate['cate_name']); ?>
            </div>
        </a></div>
		<div class="href"><a href="#"><span>商品库存</span>
        	<div class="works">
            	
            	<?php echo ($goodsList['goods_store']); ?>
            </div>
        </a></div>
		<div class="href"><a href="#"><span>点击量</span>
        	<div class="works">
            	
            	<?php echo ($goodsList['goods_clicknum']); ?>
            </div>
        </a></div>
		<div class="href"><a href="#"><span>商品描述</span>
        	<div class="works">
            	
            	<?php echo ($goodsList['goods_desc']); ?>
            </div>
        </a></div>
		<div class="schTitle" id="star">
        	<span>综合评价</span>
            <ul>
                <li><a href="javascript:;">1</a></li>
                <li><a href="javascript:;">2</a></li>
                <li><a href="javascript:;">3</a></li>
                <li><a href="javascript:;">4</a></li>
                <li><a href="javascript:;">5</a></li>
            </ul>
            <a href="#">查看全部（125）</a>
        </div>
		<div class="list1">
        	<ul>
            	<li>
                	<div class="topName">
                    	<span>2016-06-04</span>
                        <div class="userName">飞翔的马铃薯</div>
                        <div id="star1">
                        	<ul>
                                <li><a href="javascript:;">1</a></li>
                                <li><a href="javascript:;">2</a></li>
                                <li><a href="javascript:;">3</a></li>
                                <li><a href="javascript:;">4</a></li>
                                <li><a href="javascript:;">5</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text">
                    	<a href="#">谢谢你们今晚的精彩演出，可惜没能获得你们的T恤，不过能听到你
们的声音值了。</a>
                    </div>
                </li>
                <li>
                	<div class="topName">
                    	<span>2016-06-04</span>
                        <div class="userName">马铃薯</div>
                        <div id="star1">
                        	<ul>
                                <li><a href="javascript:;">1</a></li>
                                <li><a href="javascript:;">2</a></li>
                                <li><a href="javascript:;">3</a></li>
                                <li><a href="javascript:;">4</a></li>
                                <li><a href="javascript:;">5</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text">
                    	<a href="#">谢谢你们今晚的精彩演出，可惜没能获得你们的T恤。。。。</a>
                    </div>
                </li>
                <li>
                	<div class="topName">
                    	<span>2016-06-04</span>
                        <div class="userName">马铃薯</div>
                        <div id="star1">
                        	<ul>
                                <li><a href="javascript:;">1</a></li>
                                <li><a href="javascript:;">2</a></li>
                                <li><a href="javascript:;">3</a></li>
                                <li><a href="javascript:;">4</a></li>
                                <li><a href="javascript:;">5</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="text">
                    	<a href="#">谢谢你们今晚的精彩演出，可惜没能获得你们的T恤。。。。</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
<script type="text/javascript"> 
window.onload = function ()
{
	var oStar = document.getElementById("star");
	var aLi = oStar.getElementsByTagName("li");
	var oUl = oStar.getElementsByTagName("ul")[0];
	var oSpan = oStar.getElementsByTagName("span")[1];
	var oP = oStar.getElementsByTagName("p")[0];
	var i = iScore = iStar = 0;
	var aMsg = []
	
	for (i = 1; i <= aLi.length; i++)
	{
		aLi[i - 1].index = i;
		//鼠标移过显示分数
		aLi[i - 1].onmouseover = function ()
		{
			fnPoint(this.index);
			//浮动层显示
			oP.style.display = "block";
			//计算浮动层位置
			oP.style.left = oUl.offsetLeft + this.index * this.offsetWidth - 104 + "px";
			//匹配浮动层文字内容
			oP.innerHTML = "<em><b>" + this.index + "</b> 分 " + aMsg[this.index - 1].match(/(.+)\|/)[1] + "</em>" + aMsg[this.index - 1].match(/\|(.+)/)[1]
		};
		//鼠标离开后恢复上次评分
		aLi[i - 1].onmouseout = function ()
		{
			fnPoint();
			//关闭浮动层
			oP.style.display = "none"
		};
		//点击后进行评分处理
		aLi[i - 1].onclick = function ()
		{
			iStar = this.index;
			oP.style.display = "none";
			oSpan.innerHTML = "<strong>" + (this.index) + " 分</strong> (" + aMsg[this.index - 1].match(/\|(.+)/)[1] + ")"
		}
	}
	//评分处理
	function fnPoint(iArg)
	{
		//分数赋值
		iScore = iArg || iStar;
		for (i = 0; i < aLi.length; i++) aLi[i].className = i < iScore ? "on" : "";	
	}
};
</script>
    </div>
    <div class="gray"></div>
    <div class="appointment">
    	<a href="<?php echo U('submit');?>?id=<?php echo ($goodsList['id']); ?>">购买</a>
    </div>
</div>
</body>
</html>
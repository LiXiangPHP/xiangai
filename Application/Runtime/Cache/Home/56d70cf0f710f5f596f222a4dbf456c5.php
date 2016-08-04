<?php if (!defined('THINK_PATH')) exit(); var_dump() ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>相爱网</title>
<meta name="baidu-site-verification" content="LiUoetZPM0" />
<!-- 百度站长统计 -->
<meta name="keywords" content="相爱网"/>
<meta name="description" content="相爱网专为单身男女提供相亲服务，实时发布高质量的同城相亲信息，9000万优质会员等你来相爱网同城相亲！【专业红娘团队|高效同城相亲】"/>
<<<<<<< HEAD
<link rel="stylesheet" href="/111/xiangai/Public/Home/css/public_efb6e35.css">
<link rel="stylesheet" href="/111/xiangai/Public/Home/css/brandindex_76b0223.css">
<!--[if lt IE 9]> <script type="text/javascript"> (function (){ var tag = ['section','header','footer','nav','hgroup','article','aside'],i=0; for(i in tag){ document.createElement(tag[i]); } })();</script><![endif]-->
<script src="/111/xiangai/Public/Home/js/jquery_2a410e3.js"></script>
<script src="/111/xiangai/Public/Home/js/fixcore.js"></script>
<script src="/111/xiangai/Public/Home/js/lab.min_e842152.js"></script>
<script src="/111/xiangai/Public/Home/js/sea_7e06016.js"></script>
=======
<link rel="stylesheet" href="/xiangai-master/xiangai-master/Public/Home/css/public_efb6e35.css">
<link rel="stylesheet" href="/xiangai-master/xiangai-master/Public/Home/css/brandindex_76b0223.css">
<!--[if lt IE 9]> <script type="text/javascript"> (function (){ var tag = ['section','header','footer','nav','hgroup','article','aside'],i=0; for(i in tag){ document.createElement(tag[i]); } })();</script><![endif]-->
<script src="/xiangai-master/xiangai-master/Public/Home/js/jquery_2a410e3.js"></script>
<script src="/xiangai-master/xiangai-master/Public/Home/js/fixcore.js"></script>
<script src="/xiangai-master/xiangai-master/Public/Home/js/lab.min_e842152.js"></script>
<script src="/xiangai-master/xiangai-master/Public/Home/js/sea_7e06016.js"></script>
>>>>>>> 30f7b1c8de53752034d41ba1379d0fef51387d82
<script type="text/javascript">

/* Baidu Statistics Begin*/
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?2c8ad67df9e787ad29dbd54ee608f5d2";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
/* Baidu Statistics End*/

var ref=document.referrer;
if(ref!=null && ref!='' && ref.match("//www.hao123.com/") && !window.location.href.match("zhenai.com/30183.html")){
    window.location.href="http://www.zhenai.com/30183.html";
}
//移动端跳转
var ua = navigator.userAgent.replace(/\s/g,'');
if(/AppleWebKit.*Mobile/i.test(ua) || /Android.*Mobile/i.test(ua) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/.test(ua))||(/Mozilla\/.*(X\d+;U;Linuxi\d+;zh-CN;rv:.*)Gecko/i.test(ua))){
    window.location.href="http://m.zhenai.com";
} 
(function(){
    //自动登录跳转
    var isLogined = getCookieMemberid();
    if(isLogined!=null && isLogined!='' && parseInt(isLogined)>0){
        window.location.href="http://profile.zhenai.com/personal/mymainPage.jsps";
    }
    var p = /baidu.com|google.com|sogou.com|soso.com|youdao.com|jike.com|bing.com|yahoo.cn/;
    if(p.test(ref)){
        var url='http://cdnlog.zhenai.com/sw/?referer='+encodeURIComponent(ref);
        document.write(unescape('%3cscript type%3d%22text/javascript%22 src%3d%22'+escape(url)+'%22%3e%3c/script%3e'));
    }
    
    //统计注册量
    var channelId='903404',subid='2',ref=document.referrer;
    var url='http://cdnlog.zhenai.com/track/?channelId='+channelId+'&subid='+subid+'&referer='+encodeURIComponent(ref?ref:'');
    document.write(unescape('%3cscript type%3d%22text/javascript%22 src%3d%22'+escape(url)+'%22%3e%3c/script%3e'));
})();
</script>
</head>
<body class="">
<script>
/** 宽窄屏切换* */
var smallscreen = false;
var domWidth = document.documentElement.clientWidth;
if ( domWidth<1200 ) {
    smallscreen = true;
    var bodyTag = document.getElementsByTagName("body")[0],
    bodyClassName = bodyTag.getAttribute("className") || bodyTag.getAttribute("class");
    bodyClassName = bodyClassName ? bodyClassName+" " : "";
    bodyTag.className = bodyClassName+"root1000";
}
</script>
<header id="jcZAHeader" class="header za-brand-header">
<<<<<<< HEAD
    <section class="frameW top-bar clearfix"> <a class="logo" href="#" title="相爱网"><img src="/111/xiangai/Public/Home/images/picture/logo.png" width="100%"/></a>
=======
    <section class="frameW top-bar clearfix"> <a class="logo" href="#" title="相爱网"><img src="/xiangai-master/xiangai-master/Public/Home/images/picture/logo.png" width="100%"/></a>
        <?php
 if (empty($_SESSION['user']['username'])) { ?>
>>>>>>> 30f7b1c8de53752034d41ba1379d0fef51387d82
        <div id="jcLoginPanel" class="login-panel clearfix">
            <form id="loginForm" name="form1" action="<?php echo U('login');?>" method="post">
                <input type="hidden" name="fromurl" id="fromurl" value=""/>
                <input type="hidden" name="whichTV" id="whichTV" value=""/>
                <input type="hidden" name="fid" id="fid" value=""/>
                <input type="hidden" name="mid" id="mid" value=""/>
                <input type="hidden" name="redirectUrl" id="redirectUrl" value=""/>
                <input type="hidden" name="loginmode" id="loginmode" value=""/>
                <input type="hidden" name="whereLogin" id="whereLogin" value="index"/>
                <div class="login-form">
                    <div class="login-items">
                        <input id="jcLoginName" class="login-in" type="text" placeholder="QQ/手机" name="username">
                        <br>
                        <span class="error-tips">用户名不能为空</span> </div>
                    <div class="login-items">
                        <input id="jcLoginPass" class="login-in" type="password" name="password" placeholder="密码">
                        <br>
                        <div class="lgin-next">
                            <input type="checkbox" name="autoLogin" id="nextLogin">
                            <label for="nextLogin">下次自动登录</label>
                        </div>
                        <a href="http://register.zhenai.com/login/findPasswordNav.jsps" class="forget" rel="nofollow">忘记密码？</a> <span class="pass-txt"></span> </div>
                        <a><input type='submit'  class="btnP2 login-btn" value='登陆'/></a>
                   <a class="login-by-qq" href="http://connect.zhenai.com/qq/login.x?fromurl=" title="QQ号登录"  target="_blank" rel="nofollow"></a>
                     <a class="login-by-weibo" href="http://static.zhenai.com/weibo/login.jsps?fromurl=" title="微博号登录"  target="_blank" rel="nofollow"></a> </div>
            </form>
        </div>
    <?php
 }else{ ?>
         <div id="jcLoginPanel" class="login-panel clearfix">
            <div align='right'>欢迎,  <?=$_SESSION['user']['username'];?> <a href="<?php echo U('logout');?>">退出</a></div>

        </div>
   <?php
 } ?>
    </section>
</header>
<article class="za-brand-wraper">
    <section class="banner">
        <div id="jcBrandBanner" class="banner-container">
            <ul class="slide-content">
<<<<<<< HEAD
                <li class="ban cur"> <img src="/111/xiangai/Public/Home/images/picture/service4_d928444.jpg" width="100%" height="100%" />
                    <div id="jcBanner" class="frameW"></div>
                </li>
                <li class="ban cur"> <img src="/111/xiangai/Public/Home/images/picture/service2_3de8555.jpg" width="100%" height="100%" />
                    <div id="jcBanner" class="frameW"></div>
                </li>
                <li class="ban cur"> <img src="/111/xiangai/Public/Home/images/picture/service2_3de8666.jpg" width="100%" height="100%" />
=======
                <li class="ban cur"> <img src="/xiangai-master/xiangai-master/Public/Home/images/picture/service4_d928444.jpg" width="100%" height="100%" />
                    <div id="jcBanner" class="frameW"></div>
                </li>
                <li class="ban cur"> <img src="/xiangai-master/xiangai-master/Public/Home/images/picture/service2_3de8555.jpg" width="100%" height="100%" />
                    <div id="jcBanner" class="frameW"></div>
                </li>
                <li class="ban cur"> <img src="/xiangai-master/xiangai-master/Public/Home/images/picture/service2_3de8666.jpg" width="100%" height="100%" />
>>>>>>> 30f7b1c8de53752034d41ba1379d0fef51387d82
                    <div id="jcBanner" class="frameW"></div>
                </li>
            </ul>
            <div class="frameW">
                <ol class="slide-nav">
                    <li class="cur"></li>
                    <li></li>
                    <li></li>
                </ol>
                <!--注册框Begin-->
                <form id="registerForm" action="<?php echo U('registerDoit');?>" method="post">
                    <!--  隐藏域 -->
                    <input type="hidden" name="isReliveCardMember" value="-1">
                    <input id="doublemail" type="hidden" value="">
                    <input id="invalidateMobile" type="hidden" value="">
                    <input type="hidden" name="snsType" value="">
                    <input name="copyTag" type="hidden" value="">
                    <input id="whichTV" name="whichTV" type="hidden" value="null">
                    <input id="regType" name="regType" type="hidden" value="phone">
                    <input id="hideMobile" name="hideMobile" type="hidden" value="">
                    <input id="viewMemberId" name="viewMemberId" value="" type="hidden">
                    <!-- 新旧注册页分流 -->
                    <input type="hidden" name="regFlag" value="">
                    <!--  隐藏域 -->
                    
                    <section id="jcRegBox" class="reg-box">
<<<<<<< HEAD
                        <div class="mask"></div>
                        <div class="reg-container">
=======
                        <div class="mask" style='display:<?php
 if ($_SESSION['user']) { echo "none"; }else{ echo "true"; } ?>'></div>
                        <div class="reg-container" style='display:<?php
 if ($_SESSION['user']) { echo "none"; }else{ echo "true"; } ?>'>
>>>>>>> 30f7b1c8de53752034d41ba1379d0fef51387d82
                            <h3>赶快完成注册，幸福一辈子！</h3>
                            <div class="reg-items reg-sex clearfix" id="ZuiSex" style="margin-top:2em;"> <span class="items-name">账号：</span> <span class="iRadio male cur">
                                <input id="jcLoginName" class="login-in" type="text" placeholder="QQ/手机" name="loginInfo" style=" line-height: 2em; padding: 2px 10px; font-size: 16px;">
                                </span>
                                <input value="0" type="hidden" name="baseInfo.sex" id="regSex">
                            </div>
                            <div class="reg-items clearfix"> <span class="items-name">密码：</span>
                                <div class="items-value" id="ZuiDate">
                                    <input id="jcLoginPass" class="login-in" type="password" name="password" style=" line-height: 2em; padding: 2px 10px; font-size: 16px;">
                                </div>
                            </div>
                            
                            <div class="reg-items"> <a class="btnR1 jaBtnReg" href="javascript;">免费注册</a> </div>
                        </div>
                    </section>
                </form>
            </div>
            <!--注册框End--> 
        </div>
    </section>
    <section class="brand-point">
        <div class="frameW">
            <ul class="clearfix">
                <li>
                    <div><strong>NO.1</strong><br>
                        南平市第一家专业正规征婚公司</div>
                </li>
                <li>
                    <div><strong>实体店</strong><br>
                        信息资源更真实，安全，放心</div>
                </li>
                <li>
                    <div><strong>一对一</strong><br>
                        男生女生面对面，交流无距离</div>
                </li>
                <li>
                    <div><strong>专业</strong><br>
                        资深红娘、情感咨询老师，为您牵线传情</div>
                </li>
                <li>
                    <div><strong>跟踪</strong><br>
                        恋爱成功后跟踪服务到结婚</div>
                </li>
            </ul>
        </div>
    </section>
    <div class="n_nav">
        <div class="n_ul">
            <div class="n_navleft">
                <ul>
                    <li class='current first'><a href="index.html">交友首页</a></li>
                    <li><a href="tcyx.html">同城异性</a> </li>
                    <li><a href="xqrj.html">心情日记</a> </li>
                    <li><a href="sxf.html">晒幸福</a> </li>
                    <li><a href="hd.html">活动</a> </li>
                    <li><a href="hnydy.html">红娘一对一</a> </li>
                    <li><a href="gyxa.html">关于相爱</a> </li>
                    <li><a href="grzx.html" onclick="artbox_loginbox();">我的相爱</a> </li>
                </ul>
            </div>
        </div>
    </div>
    <section id="jcBrandCouple" class="brand-couple">
    </section>
    <section class="brand-service">
        <div class="frameW">
            <div class="brand-title">
                <h2>相爱服务</h2>
                <p>在相爱，你可以得到什么？</p>
            </div>
            <ul id="jcBrandService" class="clearfix">
                <li>
<<<<<<< HEAD
                    <div class="pic"><img src="/111/xiangai/Public/Home/images/picture/service1_43a6b5c.jpg" alt=""></div>
                </li>
                <li>
                    <div class="pic"><img src="/111/xiangai/Public/Home/images/picture/service2_3de8eb4.jpg" alt=""></div>
                </li>
                <li>
                    <div class="pic"><img src="/111/xiangai/Public/Home/images/picture/service3_d6314d8.jpg" alt=""></div>
                </li>
                <li>
                    <div class="pic"><img src="/111/xiangai/Public/Home/images/picture/service4_d928265.jpg" alt=""></div>
=======
                    <div class="pic"><img src="/xiangai-master/xiangai-master/Public/Home/images/picture/service1_43a6b5c.jpg" alt=""></div>
                </li>
                <li>
                    <div class="pic"><img src="/xiangai-master/xiangai-master/Public/Home/images/picture/service2_3de8eb4.jpg" alt=""></div>
                </li>
                <li>
                    <div class="pic"><img src="/xiangai-master/xiangai-master/Public/Home/images/picture/service3_d6314d8.jpg" alt=""></div>
                </li>
                <li>
                    <div class="pic"><img src="/xiangai-master/xiangai-master/Public/Home/images/picture/service4_d928265.jpg" alt=""></div>
>>>>>>> 30f7b1c8de53752034d41ba1379d0fef51387d82
                </li>
            </ul>
        </div>
    </section>
    <section id="jcBrandUser" class="brand-user">
        <div class="frameW">
            <div class="brand-title">
                <h2>9000万单身用户的选择</h2>
                <p>TA们也在寻爱，你还等什么呢？</p>
            </div>
            <nav> <a class="cur" href="javascript:;">全部</a> <a href="javascript:;">柔美</a> <a href="javascript:;">清纯</a> <a href="javascript:;">可爱</a> <a href="javascript:;">妩媚</a> <a href="javascript:;">优雅</a> <a href="javascript:;">型男</a> <a href="javascript:;">成熟</a> <a href="javascript:;">事业有成</a> </nav>
            <div id="jcBrandUserContainer" class="user-container"> </div>
        </div>
    </section>
    <section id="jcBrandCouple" class="brand-couple">
        <div class="frameW"> </div>
    </section>
    <section id="jcBrandCoop" class="brand-cooperation">
        <div class="frameW">
            <div class="brand-title">
                <h2>多渠道帮您寻爱</h2>
                <p>用尽一切途径帮您寻爱</p>
            </div>
            <div class="cooperation-ad clearfix">
                <div id="jcCoopBanner" class="adImg sroll-container">
                    <ul>
<<<<<<< HEAD
                        <li class="cur"> <a id="jcCoopBannera" href="http://profile.zhenai.com/payment/index.jsps" onclick="stat(1633,1,0,0)" target="_blank"> <img id="jcCoopBannerImg" src="/111/xiangai/Public/Home/images/picture/a1_e19aa08.jpg" alt=""> </a> </li>
=======
                        <li class="cur"> <a id="jcCoopBannera" href="http://profile.zhenai.com/payment/index.jsps" onclick="stat(1633,1,0,0)" target="_blank"> <img id="jcCoopBannerImg" src="/xiangai-master/xiangai-master/Public/Home/images/picture/a1_e19aa08.jpg" alt=""> </a> </li>
>>>>>>> 30f7b1c8de53752034d41ba1379d0fef51387d82
                    </ul>
                    <div class="bottom"> <a id="jcCoopBannera2" href="http://profile.zhenai.com/payment/index.jsps" onclick="stat(1633,1,0,0)" target="_blank">
                        <p id="jcCoopBannerText">相爱通  一对一人工红娘相亲服务</p>
                        </a> <span class="layer"></span></div>
                    <div class="mask"></div>
                </div>
                <div class="adImg"><a href="" class="mask" target="_blank" onclick="stat(1633,2,0,0)" rel="nofollow"></a> </div>
<<<<<<< HEAD
                <div class="adImg"><img src="/111/xiangai/Public/Home/images/picture/1469069397480.jpg" /> <a href="" class="mask" target="_blank" onclick="stat(1633,5,0,0)" rel="nofollow"></a> </div>
                <div class="adImg"><img src="/111/xiangai/Public/Home/images/picture/b3.jpg"/><a href="" class="mask" target="_blank" onclick="stat(1633,3,0,0)" rel="nofollow"></a> </div>
=======
                <div class="adImg"><img src="/xiangai-master/xiangai-master/Public/Home/images/picture/1469069397480.jpg" /> <a href="" class="mask" target="_blank" onclick="stat(1633,5,0,0)" rel="nofollow"></a> </div>
                <div class="adImg"><img src="/xiangai-master/xiangai-master/Public/Home/images/picture/b3.jpg"/><a href="" class="mask" target="_blank" onclick="stat(1633,3,0,0)" rel="nofollow"></a> </div>
>>>>>>> 30f7b1c8de53752034d41ba1379d0fef51387d82
                <div class="adImg"> <a href="" class="mask" target="_blank" onclick="stat(1633,4,0,0)" rel="nofollow"></a> </div>
            </div>
        </div>
    </section>
    <section id="jcBrandMobile" class="brand-mobile"> </section>
    <section id="jcBrandLead" class="brand-lead">
        <div class="frameW">
            <div class="brand-title">
                <h2>相亲快 找相爱</h2>
            </div>
            <div class="action" style='display:<?php
 if ($_SESSION['user']) { echo "none"; }else{ echo "true"; } ?>'> 
                        <a class="btn-reg" href="javascript:;">注册</a> <a class="btn-login" href="javascript:;">登录</a> </div>
        </div>
    </section>
</article>
<script type="text/javascript">
var url = window.location.href;
if(url=='http://www.zhenai.com/'){
    $("#foot_link").prepend('<a target="_blank" title="深圳网监备案" href="http://szcert.ebs.org.cn/6398bd09-b195-4fd9-a010-e1fea403a766" class="link5" rel="nofollow"></a>');
}
</script> 
<script>
seajs.config({
    charset:"GBK",
    base: "http://images.zastatic.com/zhenai3",
    alias: {
        dialog : "zhenai2015/js/lib/artDialog.v6/src/dialog.js",
        zhenaiPay : "http://images.zastatic.com/zhenai3/zhenai2012/js/paycenter/zhenaiPay.js?v=20150112",
        msgService : "zhenai2015/js/message/msgService.js",
        pubDialog : "zhenai2015/js/public/pubDialog.js",
        header : "zhenai2015/js/public/header.js",
        toolBar : "zhenai2015/js/public/toolBar.js",
        right : "zhenai2015/js/message/right.js",
        changeDocWidth : "zhenai2015/js/public/changeDocWidth.js",
        loginService : "zhenai2015/js/public/login.js"
    }
});
</script> 
<script type="text/javascript">

//打桩脚本
function stat(resourceId,accessPoint,sParam,isPV) {
    var ref=document.referrer;
    var url='http://cdnlog.zhenai.com/visit/?resourceId='+resourceId+'&accessPoint='+accessPoint+'&sParam='+sParam+'&isPV='+isPV+'&referer='+encodeURIComponent(ref?ref:'');
    $.ajax({
        url:url,
        dataType:"jsonp",
        success: function(data){
        }
    });
} 


//$LAB.script("http://images.zastatic.com/zhenai3/zhenai2012/js/lib/jquery-1.8.3.min.js")
<<<<<<< HEAD
$LAB.script("/111/xiangai/Public/Home/js/jquery_2a410e3.js").wait()
=======
$LAB.script("/xiangai-master/xiangai-master/Public/Home/js/jquery_2a410e3.js").wait()
>>>>>>> 30f7b1c8de53752034d41ba1379d0fef51387d82
    .wait(function(){
        //统计新版首页PV
        stat(1633,9,0,0);
        
        var iRadio=$('.iRadio');
        var regSex=$('#regSex');
        var iCheck=$('.iCheck');
        var regMarriage=$('#regMarriage');
    
        //选择性别
        iRadio.click(function(){
            regSex.val($(this).attr('data-val'));
        });
        //选择婚姻状况
        iCheck.click(function(){
            regMarriage.val($(this).attr('data-val'));
        });
        seajs.use('zhenai2015/js/brandIndex/index.js',function(reg){
             reg.init({
                //deaultdate:'1990-2-12',//初始生日
                deaultcity:'10114000'//当前城市
             });
        });
    });
</script> 
<<<<<<< HEAD
<script type="text/javascript" id="zp_script_65" src="/111/xiangai/Public/Home/js/p.js" zp_type="1"></script>
=======
<script type="text/javascript" id="zp_script_65" src="/xiangai-master/xiangai-master/Public/Home/js/p.js" zp_type="1"></script>
>>>>>>> 30f7b1c8de53752034d41ba1379d0fef51387d82
</body>
</html>
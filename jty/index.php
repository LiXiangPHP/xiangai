<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title></title>
    <link href="<?php echo $css?>css/style.css" type="text/css" rel="stylesheet" />
    <script src="<?php echo $css?>js/TouchSlide.1.1.js" type="text/javascript"></script>
    <script src="<?php echo $css?>js/jquery.min.js" type="text/javascript"></script>
    <!--	<script src="--><?php //echo $css?><!--js/zepto.min.js"></script>-->
    <script src="<?php echo $css?>js/dropload.min.js"></script>

</head>

<body>
<meta property="qc:admins" content="3640161277651057456367752" />
<div id="header">
    <div class="top">
        <div class="title">
            首页
            <div class="search"><a href="search"><img src="<?php echo $css?>images/index.png" width="24" /></a></div>
        </div>
    </div>
</div>
<div class="banner" id="lbt"  style="margin-top: 50px;" >
    <div id="focus" class="focus">
        <div class="hd">
            <ul></ul>
        </div>
        <div class="bd">
            <ul>
                <li><a href="#"><img src="<?php echo $css?>images/banner.jpg" /></a></li>
                <li><a href="#"><img src="<?php echo $css?>images/banner.jpg" /></a></li>
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
	<div style="background:#fff;float:left;width:100%;height:50px;">
    <div class="classif" id="fixed_nav" style="z-index:999;">
        <ul>
            <li>综合</li>
            <li>
                <select class="selectid" name="gender" id="gender">
                    <option value="">类型</option>
                    <option value="1">男歌手</option>
                    <option value="0">女歌手</option>
                    <option value="2">组合</option>
                </select>
            </li>
            <li>
                <select class="selectid" name="style" id="style">
                    <option value="">风格</option>
                    <option value="1">流行</option>
                    <option value="3">摇滚</option>
                    <option value="2">R&B</option>
                    <option value="6">民谣</option>
                    <option value="7">中国风</option>
                    <option value="5">舞曲</option>
                    <option value="4">古典</option>
                </select>
            </li>

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
                <ul>
                    <?php foreach ($infos as $val){?>
                        <li class="item">
                        <div class="BasicInfo" style="padding:15px 0 15px 85px;  height:105px;">
                        <div class="hearImg" style="width:75px;">
                            <a href="SingerHome?worker_uid=<?php echo $val['uid']?>"><img src="<?php if ($val['img']){echo $val['img'];}else{echo $css.'images/head_default_min.png';}?>" width="100%" /></a>
                            <div class="posion"><img src="<?php echo @$css?>images/singer6.png" /></div>
                        </div>
                        <div class="right" style="margin-top:3px;">
                        <div class="singerNmae" style="padding-right:60px;">
                        <a class="styName" href="SingerHome?worker_uid=<?php echo $val['uid']?>">
                            <span style="font-size:14px;"><?php echo @$val['name']?></span>
                            <span style="font-size:12px;"><?php echo @$val['nick']?></span>
                        </a>
                        <div class="label">
                        <?php if (isset($val['style']) && !empty($val['style'])){foreach ($val['style'] as $v){?><em><?php echo $v['name']?></em><?php }?>
                            </div>
                            <div class="order2">
                                <a href="submit?worker_uid=<?php echo @$val['uid']?>">预约</a>
                            </div>
                            </div>
                            <div class="Price">
                                <div class="money" style="font-size:14px;">￥<?php echo $val['price']?>万<span>/场</span> <s style="font-size:12px; color:#999;"><?php if ($val['history_price']) echo "￥{$val['history_price']}万/场";?></s></div>
                            </div>
                            </div>
                            </div>
                            </li>
                        <?php }}?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include "foot.ctp";?>
</body>
</html>
<script type="text/javascript">console.log(1);
    Mywhere=null;
    $('.selectid').change(function(e){
        Mywhere='?';
        Mywhere += 'style='+ $("#style").children('option:selected').val();
        Mywhere += '&';
        Mywhere += 'gender='+ $("#gender").children('option:selected').val();


        $.ajax({

            type: 'GET',
            url: '../Index/index'+Mywhere,
            dataType: 'json',
            success: function(data){
                var result = '';
                for(var i = 0; i < data.results.infos.length; i++){
                    var style=data.results.infos[i].style.length;
                    var style_name= '';
                    var img =data.results.infos[i].img;
                    if(data.results.infos[i].img ==''){
                        img ="/static/images/head_default_min.png";
                    };
                    var history_price= '';//万/场

                    if (data.results.infos[i].history_price != ''){
                        history_price=data.results.infos[i].history_price+'万/场';
                    }
                    if (style >0){
                        for (var j=0;j< data.results.infos[i].style.length;j++){
                            style_name += '<em>'+data.results.infos[i].style[j].name+'</em>';
                        }
                    };
                    result += '<li class="item">'
                        +'<div class="BasicInfo" style="padding:15px 0 15px 85px;  height:105px;">'
                        +'<div class="hearImg" style="width:75px;">'
                        +'<a href="SingerHome?worker_uid='+data.results.infos[i].uid+'  "><img src=" '+img+' " width="100%" /></a>'
                        +'<div class="posion"><img src="/static/images/singer6.png " /></div>'
                        +'</div>'
                        +'<div class="right" style="margin-top:3px;">'
                        +'<div class="singerNmae" style="padding-right:60px;">'
                        +'<a class="styName" href="SingerHome?worker_uid= ">'
                        +'<span style="font-size:14px;"> '+data.results.infos[i].name+'</span>'
                        +'<span style="font-size:12px;">'+data.results.infos[i].nick+' </span>'
                        +'</a>'
                        +'<div class="label">'
                        + style_name
                        +'</div>'
                        +'<div class="order2">'
                        +'<a href="submit?worker_uid= '+data.results.infos[i].uid+'">预约</a>'
                        +'</div>'
                        +'</div>'
                        +'<div class="Price">'
                        +'<div class="money" style="font-size:14px;">￥'+data.results.infos[i].price+' 万<span>/场</span> <s style="font-size:12px; color:#999;">'+history_price+' </s></div>'
                        +'</div>'
                        +'</div>'
                        +'</div>'
                        +'</li>';
                }
                // 为了测试，延迟1秒加载
                setTimeout(function(){
                    $('.lists').html(result);
                    // 每次数据加载完，必须重置
//                        me.resetload();
                    // 重置索引值，重新拼接more.json数据
                    counter = 0;
                    // 解锁
//                        me.unlock();
//                        me.noData(false);
                },1000);
            },
            error: function(xhr, type){
                //alert('Ajax error!');
                // 即使加载出错，也得重置
//                    me.resetload();
            }
        });
    });
    if (!Mywhere) Mywhere='';
</script>

<script>
    $(function(){


        var counter = 0;
        // 每页展示4个
        var num = 4;
        var pageStart = 0,pageEnd = 0;
        if(typeof(page) != "undefined"){
            page++;
        }else{
            var page=2;
        }
        // dropload
        $('.content').dropload({
            scrollArea : window,
            domUp : {
                domClass   : 'dropload-up',
                domRefresh : '<div class="dropload-refresh">↓刷新</div>',
                domUpdate  : '<div class="dropload-update">↑更新</div>',
                domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中...</div>'
            },
            domDown : {
                domClass   : 'dropload-down',
                domRefresh : '<div class="dropload-refresh"></div>',
                domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中...</div>',
                domNoData  : '<div class="dropload-noData">暂无数据</div>'
            },
            loadUpFn : function(me){
                $.ajax({

                    type: 'GET',
                    url: '../Index/index'+Mywhere,
                    dataType: 'json',
                    success: function(data){
                        var result = '';
                        for(var i = 0; i < data.results.infos.length; i++){
                            var style=data.results.infos[i].style.length;
                            var style_name= '';
                            var img =data.results.infos[i].img;
                            if(data.results.infos[i].img ==''){
                                img ="/static/images/head_default_min.png";
                            };
                            var history_price= '';//万/场

                            if (data.results.infos[i].history_price != ''){
                                history_price=data.results.infos[i].history_price+'万/场';
                            }
                            if (style >0){
                                for (var j=0;j< data.results.infos[i].style.length;j++){
                                    style_name += '<em>'+data.results.infos[i].style[j].name+'</em>';
                                }
                            };
                            result += '<li class="item">'
                                +'<div class="BasicInfo" style="padding:15px 0 15px 85px;  height:105px;">'
                                +'<div class="hearImg" style="width:75px;">'
                                +'<a href="SingerHome?worker_uid='+data.results.infos[i].uid+'  "><img src=" '+img+' " width="100%" /></a>'
                                +'<div class="posion"><img src="/static/images/singer6.png " /></div>'
                                +'</div>'
                                +'<div class="right" style="margin-top:3px;">'
                                +'<div class="singerNmae" style="padding-right:60px;">'
                                +'<a class="styName" href="SingerHome?worker_uid= ">'
                                +'<span style="font-size:14px;"> '+data.results.infos[i].name+'</span>'
                                +'<span style="font-size:12px;">'+data.results.infos[i].nick+' </span>'
                                +'</a>'
                                +'<div class="label">'
                                + style_name
                                +'</div>'
                                +'<div class="order2">'
                                +'<a href="submit?worker_uid= '+data.results.infos[i].uid+'">预约</a>'
                                +'</div>'
                                +'</div>'
                                +'<div class="Price">'
                                +'<div class="money" style="font-size:14px;">￥'+data.results.infos[i].price+' 万<span>/场</span> <s style="font-size:12px; color:#999;">'+history_price+' </s></div>'
                                +'</div>'
                                +'</div>'
                                +'</div>'
                                +'</li>';
                        }
                        // 为了测试，延迟1秒加载
                        setTimeout(function(){
                            $('.lists').html(result);
                            // 每次数据加载完，必须重置
                            me.resetload();
                            // 重置索引值，重新拼接more.json数据
                            counter = 0;
                            // 解锁
                            me.unlock();
                            me.noData(false);
                        },1000);
                    },
                    error: function(xhr, type){
                        alert('Ajax error!');
                        // 即使加载出错，也得重置
                        me.resetload();
                    }
                });
                page=2;
            },
            loadDownFn : function(me){
                console.log('456');
                var indexs_where='';
                if (Mywhere) {
                    indexs_where =Mywhere+'&';
                }else {
                    indexs_where ='?';
                }
                $.ajax({
                    type: 'GET',
                    url: '../Index/indexs'+indexs_where+'page='+page,
                    dataType: 'json',
                    success: function(data){
                        page++;
                        var result = '';
                        counter++;
                        pageEnd = num * counter;
                        pageStart = pageEnd - num;

                        for(var i = 0; i < data.results.length; i++){
                            var style=data.results[i].style.length;
                            var style_name= '';
                            var img =data.results[i].img;
                            if(data.results[i].img ==''){
                                img ="/static/images/head_default_min.png";
                            };
                            var history_price= '';//万/场

                            if (data.results[i].history_price != ''){
                                history_price=data.results[i].history_price+'万/场';
                            }

                            if (style >0){
                                for (var j=0;j< data.results[i].style.length;j++){
                                    style_name += '<em>'+data.results[i].style[j].name+'</em>';
                                }
                            };
                            result += '<li class="item">'
                                +'<div class="BasicInfo" style="padding:15px 0 15px 85px;  height:105px;">'
                                +'<div class="hearImg" style="width:75px;">'
                                +'<a href="SingerHome?worker_uid='+data.results[i].uid+'  "><img src=" '+img+' " width="100%" /></a>'
                                +'<div class="posion"><img src="/static/images/singer6.png " /></div>'
                                +'</div>'
                                +'<div class="right" style="margin-top:3px;">'
                                +'<div class="singerNmae" style="padding-right:60px;">'
                                +'<a class="styName" href="SingerHome?worker_uid= ">'
                                +'<span style="font-size:14px;"> '+data.results[i].name+'</span>'
                                +'<span style="font-size:12px;">'+data.results[i].nick+' </span>'
                                +'</a>'
                                +'<div class="label">'
                                + style_name
                                +'</div>'
                                +'<div class="order2">'
                                +'<a href="submit?worker_uid= '+data.results[i].uid+'">预约</a>'
                                +'</div>'
                                +'</div>'
                                +'<div class="Price">'
                                +'<div class="money" style="font-size:14px;">￥'+data.results[i].price+' 万<span>/场</span> <s style="font-size:12px; color:#999;">'+history_price+' </s></div>'
                                +'</div>'
                                +'</div>'
                                +'</div>'
                                +'</li>';
                            /*if((i + 1) >= data.results.length){
                             // 锁定
                             me.lock();
                             // 无数据
                             me.noData();
                             break;
                             }*/
                        }
                        // 为了测试，延迟1秒加载
                        setTimeout(function(){
                            $('.lists').append(result);
                            // 每次数据加载完，必须重置
                            me.resetload();
                        },1000);
                    },
                    error: function(xhr, type){
                        //alert('Ajax error!');
                        // 即使加载出错，也得重置
                        me.resetload();
                    }
                });
            },
            threshold : 50
        });
    });
</script>
<script type="text/javascript">
jQuery(function(){
var top=$("#fixed_nav").offset().top;
var lbt = $('#lbt').height();
if(top<=65){
}
alert(top);
//var obj11 = document.getElementById("fixed_nav");
$(window).scroll(function () {
  if ($(window).scrollTop() >= top -50) {
    $("#fixed_nav").attr("style", "position:fixed;top:49px;background:#fff;z-index:999;");
  } else {
     $("#fixed_nav").attr("style", "position:static;");
  }
}).trigger("scroll");
});
</script>

<script>



</script>

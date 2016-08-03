<?php if (!defined('THINK_PATH')) exit(); if(is_array($goodsList)): $i = 0; $__LIST__ = $goodsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?><li class="item">
                <div class="BasicInfo">
                    <div class="hearImg" style="height:200px">
                        <img src="/0714/Uploads/<?php echo ($goods['goods_thumb']); ?>" width="50%" height="50%"/>
                        <div class="posion" style="top:60px"><img src="/0714/Public/Home/images/singer6.png"/></div>
                    </div>
                    <div class="right">
                        <div class="singerNmae">
                            <span class="daimio"><?php echo ($goods['goods_name']); ?></span>
                            <span class="intro"></span>
                            <div class="label">
                                <em>流行</em><em>R&B </em><em>中国风</em>
                            </div>
                            <div class="order2">
                               <a href="#">预约</a>
                            </div>
                        </div>
                        <div class="Price">
                            <div class="money">￥5万<span>/场</span> <s style="font-size:12px; color:#999;">￥5万/场</s></div>
                        </div>
                    </div>
                </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
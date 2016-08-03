<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller {
	
    function addOrder() {
		
    	$model=M('orderInfo');
    	$model->startTrans(); // 开始事务
    	$dataInfo=array(
			  'order_sn'       => $this->getsn(),
			  'order_amount'   => I('post.order_amount'),
			  'consignee'      => I('post.consignee'),
			  'country'        => I('post.country'),
			  'province'       => I('post.p'),
			  'city'           => I('post.c'),
			  'district'       => I('post.d'),
			  'mobile'         => I('post.mobile'),
			  'shipping_id'    => I('post.shipping'),
			  'pay_name'       => I('post.pay_name'),
			  'order_status'   => 0,
			  'pay_status'     => 0,
			  'shipping_status'=> 0,
			);
    	$orderId=$model->add($dataInfo);
	
    	if(empty($orderId)) {
    		// 事务回滚
    		$model->rollback();
    	}
    	$dataGoods=array(
				'goods_id'     => I('post.goods_id'),
				'goods_number' => I('post.number'),
				'order_id'     => $orderId
    		);
    	$id=M('orderGoods')->add($dataGoods);
	
    	if(empty($id)) {
    		$model->rollback();
    	}
    	// 修改商品表的库存信息
        $bool=M('goods1')->fetchsql(false)->where('id='.$dataGoods['goods_id'])->setDec('goods_store', $dataGoods['goods_number']);
    	if(empty($bool)) {
			$model->rollback();
    	}
    	$model->commit();
    }

    function getsn() {
  		$model=M('orderInfo');
    	do {
			$code=get_code(4, 2).date('YmdHis');
    	} while($model->where(['order_sn'=>$code])->find());
    	return $code;
    }

    
}

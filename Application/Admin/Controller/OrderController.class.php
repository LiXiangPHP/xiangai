<?php
namespace Admin\Controller;
class OrderController extends AdminController {
	function lists(){
	
		$this->display();
	}
	
	function page(){
		$model=D('order_info');
        $total=$model->count();
        $pagesize=5;
        $opage=new Page($total, $pagesize);
		$opage->ajax='ajax';
        $this->show=$opage->show();
		$this->orderList=$model->fetchsql(false)->limit($opage->firstRow, $opage->listRows)->select();
		$this->display();
	}
	function orderInfo(){
		$id=I('get.id',0,'intval');
		$model=D('order_info');
		$this->order=$model->find($id);
		$info=$model->fetchsql(false)->where('order_id <'.$id)->order('order_id desc limit 1')->select();
		// var_dump($info);
		$info1=$model->fetchsql(false)->where('order_id >'.$id)->order('order_id limit 1')->select();
		// var_dump($info1);
		$this->previd=$info[0]['order_id'];
		$this->nextid=$info1[0]['order_id'];
		
		
		$goodsModel=D('order_goods');
		$this->goods=$goodsModel->select();
		
		$this->display();	
	}
	function ordersearch(){
		$model=D('order_info');
		$post=$_POST;
		// var_dump($post);
		$this->info = $model->fetchsql(false)->where('order_sn like "%'.$post['order_sn'].'%"'.' and consignee like "%'.$post['consignee'].'%"')->select();
		// var_dump($this->info);
		$this->display();
		
		
	}
}
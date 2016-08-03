<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
    function detail() {
        // 查询商品详情
		$id=I('get.id',0,'intval');
        $goodsModel = M('goods1');
		$this->goodsList=$goodsModel->find($id);
		$goodsList=$goodsModel->find($id);
		$cateModel=M('cate');
		$this->cate=$cateModel->find($goodsList['cate_id']);
        $this->display();
    }
   function submit(){
	   $id=I('get.id',0,'intval');
	   $goodsModel = M('goods1');
	   $this->goodsList=$goodsModel->find($id);
	   $regionModel=M('region');
	   $this->country=$regionModel->where('parent_id=0')->select();
	   $this->display();
   }
   function region(){
	   
	    list($name, $id)=each($_POST);
	    $model=M('region');
	    $result=$model->field('region_id,region_name')->where('parent_id='.$id)->select();
	    echo '<option value="0">-'.($name=='country'?'请选择省份':($name=='p'?'请选择城市':'请选择地区')).'-</option>';
	    foreach ($result as  $value) {
	    	echo '<option value="'.$value['region_id'].'">-'.$value['region_name'].'-</option>';
	    }
	}
}

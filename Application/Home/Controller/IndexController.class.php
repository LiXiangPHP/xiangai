<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    function index() {
        $this->display();
    }
    public function page(){
        $goodsModel=D('goods1');
        $page=I('get.p', 1, 'intval');
        $cid=I('get.cid', 0, 'intval');
        $pagesize=5;
        $where=array();
        if($cid>0) {
            // 当前分类是一级分类, 需要将所有的后代分类查询出来
            $Acate=A('Admin/category');
            $array=$Acate->toTree($cid);
            $where=['cate_id'=>['in', $array]];
        }
        $this->goodsList=$goodsModel->where($where)->page($page, $pagesize)->select();
        // echo $goodsModel->getlastsql();
        if(empty($this->goodsList)) {
            exit('');
        }
        $this->display();
    }
}

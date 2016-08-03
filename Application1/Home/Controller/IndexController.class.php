<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    function index() {
        $this->display();
    }
    public function page(){
        $goodsModel=D('goods1');
        $total=$goodsModel->count();
        $pagesize=5;
        $opage= new \Think\Page($total, $pagesize);
        $opage->ajax='ajax';
        $this->show=$opage->show();
        $this->goodsList=$goodsModel->limit($opage->firstRow, $opage->listRows)->select();
        $this->display();
    }
}

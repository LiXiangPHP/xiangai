<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends Controller {
	function lists(){
		$this->cateList=$this->toList();
		$this->display();
	}
	function update(){
		$id = I('get.id',0,'intval');
		$cateModel=D('cate');
		$this->cates=$cateModel->find($id);
		// var_dump($this->cate);
		$this->cateList=$this->toList();
		
		$this->display();
	}
	function updateDoit(){
		
		$cateModel=D('cate');
		$pid = I('post.parent_id',0,'intval');
		$parent=$cateModel->find($pid);
		if(!empty($pid)){
			$_POST['path']=$parent['path']+1;
		}else{
			$_POST['path']=1;
		}
		
		$data = $cateModel->create();
		
		if(empty($data)){
			$this->error($cateModel->getError());
		}
		if($cateModel->save()){
			F('cateList', null);
			F('toList', null);
			$this->success('编辑成功', U('lists'));
		}else{
			$this->error('编辑失败');
		}
		
	}
	function insert(){
		$this->cateList=$this->toList();
		$this->display();
		
		
	}
	function insertdoit(){
		$cateModel=D('cate');
		$pid = I('post.parent_id',0,'intval');
		if($pid){
			$parent=$cateModel->find($pid);
			$_POST['path']=$parent['path']+1;
		}
		$data = $cateModel->create();
		if(empty($data)){
			$this->error($cateModel->getError());
		}
		if($cateModel->add()){
			F('cateList', null);
			F('toList', null);
			$this->success('添加成功', U('lists'));
		}else{
			$this->error('添加失败');
		}
		
		
	}
	function delete(){
		$id=I('get.id',0,'intval');
		$model=D('cate');
		F('cateList', null);
		F('toList', null);
		if($model->relation(true)->delete($id)){
			$this->success('删除成功');
		}else{
			$this->error('删除失败');
		}
	}
	
    function get_category() {
        $cateList=F('cateList');
        if(empty($cateList)) {
            $cateModel=M('cate');
            $cateList=$cateModel->select();
            // 将查询到的数据以文件形式保存
            F('cateList', $cateList);
        }
        return $cateList;
    }

    function toList() {
        $toList=F('toList');
        if(empty($toList)) {
            $cateList=$this->get_category();
            $toList=$this->forToList($cateList);
            F('toList', $toList);
        }
        return $toList;
    }

    function forToList($cateList, $pid=0) {
        $array=array();
        foreach($cateList as $cate) {
            if($cate['parent_id']==$pid) {
                $array[]=$cate;
                // 获取当前分类子分类
                $arr=$this->forToList($cateList, $cate['cate_id']);
                // 合并数组
                $array=array_merge($array, $arr);
            }
        }
        return $array;
    }
}

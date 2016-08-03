<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends Controller {
    function lists() {
        $this->cateList=$this->toList();
        $this->display();
    }

    function insert() {
        $this->toList=$this->toList();

        $this->display();
    }

    function insertDoit() {
        $pid=I('post.parent_id', 0, 'intval'); // 当前分类的父分类
        // 实例化模型
        $cateModel=D('cate');
        if($pid){
            $parent=$cateModel->find($pid);
            $_POST['path']=$parent['path']+1;
        } else {
            $_POST['path']=1;
        }
        // 创建数据对象
        $data=$cateModel->create();

        if(empty($data)){
            $this->error($cateModel->getError());
        }
        //success()和error() 会自动判断当前请求的方式, 如果是ajax方式, 则以JSON格式数据的返回
        if($cateModel->add()) {
            // 清空缓存
            F('toList', null);
            F('cateList', null);
            $this->success('添加成功', U('lists'));
        } else {
            $this->error('添加失败');
        }

    }
    function delete() {
        $id=I('get.id', 0, 'intval'); // 接收ID参数
        $model=D('cate');
        if($model->relation(true)->delete($id)) {
            $this->success('删除成功');
        } else {
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
    function toTree($pid=0) {
        $toList=F('toTree');
        if(empty($toList)) {
            $cateList=$this->get_category();
            $toList=$this->forToTree($cateList, $pid);
            F('toTree', $toList);
        }
        return $toList;
    }

    function forToTree($cateList, $pid=0) {
        $array=array();
        foreach($cateList as $cate) {
            if($cate['parent_id']==$pid) {
                $array[]=$cate['cate_id'];
                // 获取当前分类子分类
                $arr=$this->forToTree($cateList, $cate['cate_id']);
                // 合并数组
                $array=array_merge($array, $arr);
            }
        }
        return $array;
    }
}

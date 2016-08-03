<?php 
namespace Admin\Controller;
class GroupController extends AdminController {
	function lists() {
		$this->display();
	}
	function page() {
		$model=D('authGroup');
        $total=$model->count();
        $pagesize=1;
        $opage= new Page($total, $pagesize);
        $opage->ajax='ajax';
        $this->show=$opage->show();
        $this->groupList=$model->limit($opage->firstRow, $opage->listRows)->select();
        $this->display();
	}
	function member() {
		$id=I('get.id', 0, 'intval');
		// 查询组中管理员
		$model=M('admin');
		$this->adminList=$model->alias('a')->join('__AUTH_GROUP_ACCESS__ c on a.admin_id=c.uid and c.group_id='.$id)->select();
		
		$this->assign('id', $id);
		$this->display();
	}
	function insertMember() {
		$gid=I('post.group_id', 0, 'intval');
		$content=I('post.content', '', 'trim');
		$content=explode(',', $content); // 一定是数组
		// 1. 超级管理员不操作
		$model=M('auth_group_access');
		// 组中所有的管理员
		$uid=$model->where('group_id='.$gid)->getfield('uid', true);
		// 2. 已经存在不添加
		// 查询超级管理员
		$super=M('admin')->where('is_super=1')->getField('admin_id', true);
		$admin=M('admin')->getField('admin_id', true);
		// 判断$content 是否含有逗号
		$array=array();
		foreach($content as $val) {
			if(in_array($val, $uid) || in_array($val, $super) || !in_array($val, $admin)) {
				continue;
			}
			$array[]=['uid'=>$val, 'group_id'=>$gid];
		}
		if($array && $model->addAll($array)) {
			$this->success('授权成功');
		} else {
			$this->error('授权失败');
		}
	}
	function access() {
		$id=I('get.id', 0, 'intval');
		// 查询所有节点
		$ruleList=M('authRule')->select();
		$this->ruleList=$this->toList($ruleList);
		
		// 查询当前组拥有的节点
		$this->group=M('authGroup')->find($id);
		$this->display();
	}
	function toList($ruleList, $pid=0) {
		$array=array();
		foreach($ruleList as $rule) {
			if($rule['parent_id']==$pid) {
				$rule['children']=$this->toList($ruleList, $rule['id']);
				$array[]=$rule;
			}
		}
		return $array;
	}

	function accessDoit() {
		$id=I('post.id', 0, 'intval');
		$rules=I('post.rule');
		$model=M('authGroup');
		$data['id']=$id;
		$data['rules']=implode(',', $rules);
		if($model->save($data)) {
			$this->success('授权成功', U('group/lists'));
		} else {
			$this->error('授权失败');
		}
	}
}
?>
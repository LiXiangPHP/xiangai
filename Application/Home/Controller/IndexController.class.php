<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    function index() {
        $this->display();
    }
   public function registerDoit() {
    	$loginfo=I('post.loginInfo', '', 'trim');
    	$password=I('post.password', '', 'trim');
    	$model=M('users');
		$user=$model->where('username='.$loginfo)->fetchsql(false)->select();
		// var_dump($user) ;die;
		
		if(!empty($user)){
			$this->error('帐号已存在，请重新输入');
		}
		$_POST['regtime']=date('Y-m-d H:i:s');
		$_POST['username']=$loginfo;
    	$_POST['password']=md5($_POST['password']);
    	if($model->add($_POST)) {
    		$this->success('注册成功');
    	} else {
    		$this->error('注册失败');
    	}
    }
}

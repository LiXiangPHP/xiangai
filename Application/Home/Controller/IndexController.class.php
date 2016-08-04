<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    function index() {
        $this->display();
    }
    function login(){
    	$_COOKIE['user']=NULL;
    	$_SESSION['user']=null;
    	$password=empty($_POST['password'])?'':trim($_POST['password']);
    	$username=empty($_POST['username'])?'':trim($_POST['username']);
    	$password=md5($password);
    	$model=M('users');
    	$where=array('username'=>$username,'password'=>$password);
    	$res=$model->where($where)->find();
    	if (!empty($res)) {
    		$_SESSION['user']=array('username'=>$username);   	
            // if($_POST['autoLoSgin']){
            //     $_COOKIE['user']=array('username'=>$username); 
            // }	
    	}  	
		header("location:".U('index'));

    }
    function logout(){
    	$_SESSION['user']=null;
    	header("location:".U('index'));
    }
	 public function registerDoit() {
    	$loginfo=I('post.loginInfo', '', 'trim');
    	$password=I('post.password', '', 'trim');
    	$model=M('users');
		$user=$model->where('username='.$loginfo)->fetchsql(false)->select();
		$loginfolen=strlen($loginfo);
		$passwordlen=strlen($password);
		if($loginfolen!=11){
			$this->error('手机号输入有误，须11位');
		}
		if($passwordlen<6){
			$this->error('密码不能少于6位');
		}
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

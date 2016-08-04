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

    
}

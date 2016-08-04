<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    function index() {
        $this->display();
    }
    function login(){
    	$_COOKIE['user']=NULL;	
        
    	$password=empty($_POST['password'])?'':trim($_POST['password']);
    	$username=empty($_POST['username'])?'':trim($_POST['username']);
    	$password=md5($password);
    	$model=M('users');
    	$where=array('username'=>$username,'password'=>$password);
    	$res=$model->where($where)->find();
    	if (!empty($res)) {
    		$_SESSION['user']=array('username'=>$username);  
            if (isset($_POST['autoLogin'])) {
                setcookie('user', $username, time()+360000000,'/');  
             }      	
    	}  	
		header("location:".U('index'));

    }
    function logout(){
    	$_SESSION['user']=null;  
        setcookie('user','',time()-10,'/');  
    	header("location:".U('index'));
    }

    
}

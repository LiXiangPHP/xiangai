<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){

        $this->display();
    }

    function loginDoit() {
    	$model=M('members');
    	$username=I('post.username', '', 'trim');
    	$password=I('post.password', '', 'trim');
    	$where[]=['username'=>$username, 'mobile'=>$username, '_logic'=>'or'];
    	$where[]=['password'=>md5($password)];
    	$member=$model->field('id, username, mobile')->where($where)->find();
    	if($member) {
    		session('member', $member);
    		$this->success('登陆成功', U('index/index'));
    	} else {
    		$this->error('登陆失败');
    	}
    }

    public function register() {

    	$this->display();
    }

    public function registerDoit() {
    	$mobile=I('post.mobile', '', 'trim');
    	$code=I('post.code', '', 'trim');

    	if(time()-session('mobileCode')['time']>60) {
    		$this->error('验证码已过期');
    	}
    	if(strtolower(session('mobileCode')['code'])!=strtolower($code)) {
    		$this->error('验证码错误');
    	}
    	$model=M('members');
    	$_POST['username']=get_code(8, 1);
    	$_POST['timeline']=time();
    	$_POST['password']=md5($_POST['password']);
    	if($model->add($_POST)) {
    		$this->success('注册成功', U('login'));
    	} else {
    		$this->error('注册失败');
    	}
    }

    function sendCode() {
    	$mobile=I('post.mobile', '', 'trim');
    	if(!$mobile) {
    		$this->error('手机号码不可以为空');
    	}
    	// 验证码
    	$code=get_code(4);
    	session('mobileCode', ['mobile'=>$mobile, 'code'=>$code,'time'=>time()]);
    	$target = "http://106.ihuyi.cn/webservice/sms.php?method=Submit";
    	$post_data = "account=cf_binglina&password=blna1994&mobile=".$mobile."&content=".rawurlencode("您的验证码是：".$code."。请不要把验证码泄露给其他人。");
    	
    	$xml=post($post_data, $target);
    	$array=xml_to_array($xml);
    	if($array && $array['code']==2) {
    		$this->success($array['msg']);
    	} else {
    		$this->error($array['msg']);
    	}
    }

    function forget1() {
    	$this->display();
    }
	
    function forget1Doit() {
    	
		$mobile=I('post.mobile', '', 'trim');
    	$code=I('post.code', '', 'trim');
		$model=M('members');
		$member=$model->field('id, username, mobile')->where(['mobile'=>$mobile])->find();
		if(empty($member)) {
			$this->error('尚未注册', U('register'));
		}
    	if(time()-session('mobileCode')['time']>60) {
    		$this->error('验证码已过期');
    	}
    	if(strtolower(session('mobileCode')['code'])!=strtolower($code)) {
    		$this->error('验证码错误');
    	}
    	session('forget', $member);
    	$this->ajaxReturn(['info'=>'', 'status'=>1, 'url'=>U('forget2')]);
    }
	
    function forget2() {
    	$this->display();
    }
	
    function forget2Doit() {
    	$member=session('forget');
    	if(empty($member)) {
    		$this->success('',U('login'));
    	}
    	$pwd1=I('post.password1', '', 'trim');
    	$pwd2=I('post.password2', '', 'trim');
    	if($pwd1!=$pwd2) {
    		$this->error('两次输入密码不一致');
    	}
    	$model=M('members');
    	if($model->fetchsql(false)->save(['id'=>$member['id'], 'password'=>MD5($pwd1)])) {
    		session('forget', null);
    		$this->success('',U('login'));
		} else {
			$this->error('修改失败');
		}
    }
}

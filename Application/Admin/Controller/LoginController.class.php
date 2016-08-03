<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    function login() {

        $this->display();
    }
    function logindoit() {
        // 接收ajax 发送过来的数据
        $username = I('post.username', '', 'trim');
        $password = I('post.password', '', 'trim');
        $adminModel=M('admin');
        $admin=$adminModel->where(array('admin_name'=>$username, 'admin_pass'=>MD5($password)))->find();
        if($admin) {
            // 登陆成功
            // 将登陆后的管理员信息存储到SESSION中
            session('admin', $admin);
            // session('?admin'); => isset($_SESSION['admin'])
            // session('[start]'); => session_start()
            // session('[destroy]'); => session_destroy()
            // session('admin', null); => unset($_SESSION['admin']);
            // get_client_ip() TP 提供获取客户端IP地址
            $ip = get_client_ip();
            $data=array(
                'admin_id'=>$admin['admin_id'],
                'last_ip'=>ip2long($ip),
                'login_times'=>array('exp','login_times+1')
            );
            $adminModel->save($data);
            $this->success('登陆成功', U('index/index'));
        } else {
            // 登陆失败
            $this->error('登陆失败');
        }
    }

    function logout() {
        // 销毁session中admin键位
        session('admin', null);
        session('[destroy]');
        // 重新跳转到login/login方法
        $this->redirect('login/login');
    }
}




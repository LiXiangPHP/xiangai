<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
    // 初始化方法, 在访问的操作方法之前执行
    public function _initialize() {
        // 管理员在未登陆的情况下不允许访问
        if(!session('?admin')) {
            $this->error('尚未登陆, 请登陆', U('login/login'));
        }
    }
}


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

        // 检查权限
        $rule=MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME; // 规则名称
        
        $auth=new \Think\Auth();
        // 第一个参数, 表示规则名称
        // 第二个参数, 管理员ID
        $b=$auth->check($rule, 1);
        if(empty($b)) {
        	// $this->error('无此操作权限!');
        }
    }
}


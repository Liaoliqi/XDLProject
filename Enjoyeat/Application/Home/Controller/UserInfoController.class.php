<?php
namespace Home\Controller;

// 用户中心控制器
class UserInfoController extends HomeController {
    public function index(){
    	$this->assign('title','用户中心');
        $this->display('User/index');
    }

    public function userInfo(){
        $this->assign('title','用户信息');
        $this->display();
    }




}
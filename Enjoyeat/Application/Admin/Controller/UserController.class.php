<?php
namespace Admin\Controller;
//用户信息
class UserController extends AdminController {

    public function index(){
    	$this->assign('title','用户列表');
		$this->display();
    }

    public function admin(){
    	$this->assign('title','管理员列表');
		$this->display();
    }

    

}
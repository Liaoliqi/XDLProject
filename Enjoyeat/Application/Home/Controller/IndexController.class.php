<?php
namespace Home\Controller;

// 前台首页控制器
class IndexController extends HomeController {
    public function index(){
    	$this->assign('title','前台首页');
        $this->display();
    }
	
}
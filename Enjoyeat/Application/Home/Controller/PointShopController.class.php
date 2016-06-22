<?php
namespace Home\Controller;

// 积分商城模块
class PointShopController extends HomeController {
    public function index(){
    	$this->assign('title','用户积分商城显示'); 
        $this->display();
    }
}

